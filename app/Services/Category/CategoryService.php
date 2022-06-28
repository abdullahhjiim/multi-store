<?php


namespace App\Services\Category;


use App\Models\Category;
use App\Services\BaseService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategoryService extends BaseService
{
    public function all(array $filters = [])
    {
        $query = Category::query();

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (!empty($filters['q'])) {
            $query->where(DB::raw('LOWER(name)'), 'LIKE', '%'. strtolower($filters['q']) .'%');
        }

        if (!empty($filters['category_global_search'])) {
            $query->where(function ($q) use ($filters) {
                $q->orWhere(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($filters['location_global_search']) . '%')
                    ->orWhereHas('country', function ($q) use ($filters) {
                        $q->where(DB::raw('LOWER(name)'), 'LIKE', '%' . strtolower($filters['location_global_search']) . '%');
                    });
            });
        }


        $limit = Arr::get($filters, 'limit', 20);

        return $limit != '-1' ? $query->paginate($limit) : $query->get();
    }

    public function getById($id)
    {
        return Category::find($id);
    }

    public function store(array $data)
    {
        return $this->saveLocation($data);
    }

    public function update($id, array $data)
    {
        return $this->saveLocation($data, $id);
    }

    public function destroy($id)
    {
        return Category::find($id)->delete();
    }

    private function saveLocation($data, $id = null)
    {
        $location = Category::findOrNew($id);
        $location->fill($data);
//        $location->status = $data['status'] ?? VisibilityStatus::INACTIVE;
        $location->save();

        return $location;
    }
}
