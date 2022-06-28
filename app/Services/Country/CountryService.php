<?php


namespace App\Services\Country;


use App\Enums\VisibilityStatus;
use App\Models\Country;
use App\Services\BaseService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountryService extends BaseService
{
    public function all ( array $filters = [] )
    {
        $query = Country::query();

        if ( ! empty( $filters[ 'with_location' ] ) ) {
            $query->with( 'locations', function ( $q ) {
                $q->where( 'status', VisibilityStatus::ACTIVE );
            } )->whereHas( 'locations', function ( $q ) {
                $q->where( 'status', VisibilityStatus::ACTIVE );
                if ( optional(auth()->user())->role == \App\Enums\Roles::ADMIN ) {
                    $q->whereIn('id', auth()->user()->locations );
                }
            } );
        }

        if ( isset( $filters[ 'status' ] ) ) {
            $query->where( 'status', $filters[ 'status' ] );
        }

        if ( ! empty( $filters[ 'name' ] ) ) {
            $query->where( DB::raw( 'LOWER(name)' ), 'LIKE', '%' . strtolower( $filters[ 'name' ] ) . '%' );
        }

        if ( ! empty( $filters[ 'short_code' ] ) ) {
            $query->where( DB::raw( 'LOWER(short_code)' ), 'LIKE', '%' . strtolower( $filters[ 'short_code' ] ) . '%' );
        }

        if ( ! empty( $filters[ 'country_global_search' ] ) ) {
            $query->where( function ( $q ) use ( $filters ) {
                $q->orWhere( DB::raw( 'LOWER(name)' ), 'LIKE', '%' . strtolower( $filters[ 'country_global_search' ] ) . '%' )
                    ->orWhere( DB::raw( 'LOWER(slug)' ), 'LIKE', '%' . strtolower( $filters[ 'country_global_search' ] ) . '%' )
                    ->orWhere( DB::raw( 'LOWER(short_code)' ), 'LIKE', '%' . strtolower( $filters[ 'country_global_search' ] ) . '%' );
            } );
        }

        $limit = Arr::get( $filters, 'limit', 50 );

        return $limit != '-1' ? $query->paginate( $limit ) : $query->paginate( 1000 );
    }

    public function getById ( $id )
    {
        return Country::find( $id );
    }

    public function store ( array $data )
    {
        return $this->saveCountry( $data );
    }

    public function update ( $id, array $data )
    {
        return $this->saveCountry( $data, $id );
    }

    public function destroy ( $id )
    {
        return Country::find( $id )->delete();
    }

    private function saveCountry ( $data, $id = null )
    {
        $country = Country::findOrNew( $id );
        $country->fill( $data );
        $country->slug = strtolower( Str::slug( $country->name ) );
        $country->status = $data[ 'status' ] ?? VisibilityStatus::INACTIVE;
        $country->save();

        return $country;
    }
}
