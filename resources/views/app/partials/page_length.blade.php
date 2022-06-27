@php $limit = request()->get('limit', 50) @endphp
<div class="col-sm-3">
    <label style="display: inline-block;">Show
        <select id="page_length" aria-controls="example" style="width: 60px; height: 30px;">
            @foreach([25, 50, 100, 200, 300] as $length)
                <option value="{{ $length }}" @if($length == $limit) selected @endif>{{ $length }}</option>
            @endforeach
        </select>
        entries
    </label>
</div>