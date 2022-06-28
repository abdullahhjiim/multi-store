@php
    $items = config('breadcrumbs', []);
    $items = \Illuminate\Support\Arr::get($items, request()->route()->getName(), []);
@endphp

@if($items)
    <div class="page-header">
        <ol class="breadcrumb"><!-- breadcrumb -->
            @foreach($items as $item)
                <li class="breadcrumb-item {{ empty($item['url'])? 'active' : '' }}"><a @if(!empty($item['url'])) href="{{ $item['url'] }}" @endif>{{ $item['name'] }}</a></li>
            @endforeach
        </ol><!-- End breadcrumb -->
    </div>
@endif
