@extends('app.layouts.app')

@section('content')
    @include('app.partials.breadcrumb')
    @include('app.partials.flash')

    <div class="row">
        <div class="col-xxl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-5 text-uppercase font-weight-semibold">Location List</h5>
                        </div>
                        <div class="col">
                            <a id="createBtn" data-url="{{ route('locations.create') }}" data-title="Add Location" class="btn btn-app btn-indigo mb-3 float-right">
                                <i class="fa fa-plus"></i> Create
                            </a>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="col-sm-12 col-xxl-12">
                            <form action="{{ route('locations.index') }}">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <div class="row {{ $errors->has('status')?'has-error':'' }}">
                                            <div class="col">
                                                {!! Form::select('status', ['' => 'Select Status', '1' => 'Active', '2' => 'Inactive'], request()->get('status'), ['class'=>'form-control select2 input-sm required', 'data-placeholder' => 'Select Status']) !!}
                                                {!! $errors->first('status','<small class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="location_global_search" placeholder="Search"
                                               class="form-control"
                                               value="{{ request()->get('location_global_search') }}">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-app btn-indigo"><i
                                                class="fa fa-search"></i></button>

                                        <button type="button" class="btn btn-app btn-warning" id="reset"><i
                                                class="fa fa-refresh"></i></button>
                                    </div>
                                    <input type="hidden" name="limit" value="{{ request()->get('limit', 50) }}">
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('app.partials.page_length')
                    <div class="table-responsive">
                        @include('app.location.table', ['locations' => $data])
                    </div>
                    @include('app.partials.paginate')
                </div>
            </div>
        </div>
    </div>

    @include('app.partials.create_update_modal')

    @include('app.partials.delete_form')

@endsection('content')

@section('scripts')
    @include('app.partials.script')

    <script>
        $(document).on("click", "#reset", function () {
            $('[name = status]').val('').trigger('change');
            $('[name = location_global_search]').val('');
        });
    </script>

@endsection

