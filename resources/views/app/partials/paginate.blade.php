<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info">
            Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries
        </div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="d-flex align-items-end flex-column">
            {!! $data->links() !!}
        </div>
    </div>
</div>