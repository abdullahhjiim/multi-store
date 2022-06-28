<form id="create_update_form" method="post" action="{{ $url }}">
@csrf
@if (!empty($location))
    @method('PUT')
@endif
<div class="container-fluid">
    <div class="row" style="margin-top: 4px;">
        <div class="form-group col-md-12">
            <div class="row">
                <div class="form-group col-md-6">
                    <div class="row {{ $errors->has('name')?'has-error':'' }}">
                        {!! Form::label('name', ' Location Name', ['class'=>'col-md-4  font-norm required-star']) !!}
                        <div class="col-md-8">
                            {!! Form::text('name',!empty($location->name) ? $location->name : null,['class'=>'form-control input-sm required','placeholder'=> 'Location Name']) !!}
                            <div class="invalid-feedback d-none"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <input type="checkbox" name="status" value="1" {{ !empty($location->status) && ($location->status == 1) ? 'checked' : '' }}>
                    &nbsp;Active
                    {!! $errors->first('status','<small class="text-danger">:message</small>') !!}
                </div>
            </div>

            </div>
        </div>
    </div>

<div class="row">
    <div class="col-md-12">
        <span class="pull-right">
            <button type="submit" id="submit_btn" class="btn btn-primary">
                @if(isset($location)) Update @else Save  @endif
            </button>
        </span>
    </div>
</div>
</form>


