<table id="vehicleListTable" class="table table-striped table-bordered table-condensed grid-table">
    <thead class="table-light">
    <tr>
        <th>SL</th>
        <th>Image</th>
        <th>Category Name</th>
        <th>Slug</th>
        <th>IS ACTIVE</th>
        <th class="action-column">Action</th>
    </tr>
    </thead>

    <tbody>

    @foreach($categories as $category)

        <tr data-key="10081">
            <td>{{ sprintf("%05d", $category->id) }}</td>
            <td>
                @if($category->photo_url)
                <img src="{{ url($category->photo_url) }}" alt="" height="60" width="60">
                @else

                @endif
            </td>
            <td>
                {{ data_get($category, 'name') }}
            </td>
            <td>
                {{ data_get($category, 'slug') }}
            </td>

            <td>{!!  (data_get($category, 'status') == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>' ) !!}</td>
            <td>
                <div class="d-flex">
                    <a href="javascript:void(0)" data-url="{{ route('categories.edit', $category->id) }}" class="btn btn-primary editBtn" data-title="Update Location" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-wrench"></i></a>
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('categories.destroy', $category->id) }}" data-id="{{ $category->id }}" class="btn deleteBtn btn-primary" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
