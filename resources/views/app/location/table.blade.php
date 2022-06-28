<table id="vehicleListTable" class="table table-striped table-bordered table-condensed grid-table">
    <thead class="table-light">
    <tr>
        <th>SL</th>
        <th>Location Name</th>
        <th>IS ACTIVE</th>
        <th class="action-column">Action</th>
    </tr>
    </thead>

    <tbody>

    @foreach($locations as $location)

        <tr data-key="10081">
            <td>{{ sprintf("%05d", $location->id) }}</td>
            <td>
                {{ data_get($location, 'name') }}
            </td>

            <td>{!!  (data_get($location, 'status') == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>' ) !!}</td>
            <td>
                <div class="d-flex">
                    <a href="javascript:void(0)" data-url="{{ route('locations.edit', $location->id) }}" class="btn btn-primary editBtn" data-title="Update Location" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-wrench"></i></a>
                    <a href="{{ route('locations.show', $location->id) }}" class="btn btn-primary" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('locations.destroy', $location->id) }}" data-id="{{ $location->id }}" class="btn deleteBtn btn-primary" style="background-color: transparent!important;border: none;border-color: transparent;color: #6574cd;"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
