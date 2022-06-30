@extends('app.layouts.app')

@section('content')
    @include('app.partials.breadcrumb')
    @include('app.partials.flash')

    <div class="row">
        <div class="col-xxl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col"><h5 class="mt-2 text-uppercase font-weight-semibold">Location Detail</h5></div>
                        <div class="col">
                            <a data-url="{{ route('categories.edit', $category->id) }}" data-title="Update Location" class="btn btn-app editBtn btn-indigo mb-3 float-right">
                                <i class="fa fa-edit"></i> Update
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                    <tr>
                                        <td width="45%"> CATEOGORY ID</td>
                                        <td>{{ data_get($category, 'id') }}</td>
                                    </tr>
                                    <tr>
                                        <td width="45%"> CATEGORY NAME</td>
                                        <td>{{ data_get($category, 'name') }}</td>
                                    </tr>

                                    <tr>
                                        <td width="45%"> SLUG </td>
                                        <td>{{ data_get($category, 'slug') }}</td>
                                    </tr>

                                    <tr>
                                        <td width="45%"> IMAGE </td>
                                        <td>
                                            @if($category->photo_url)
                                            <img src="{{ url($category->photo_url) }}" alt="" width="100" height="100">
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="45%">STATUS</td>
                                        <td>{!!  (data_get($category, 'status') == \App\Enums\VisibilityStatus::ACTIVE ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>' ) !!}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.partials.create_update_modal')

@endsection

@section('scripts')
    @include('app.partials.script')
@endsection

