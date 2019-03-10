{{-- Card Component --}}
{{-- Card Type : Primary | Info | Success | Warning | Danger | Gray | Black --}}
<div class="card {{ isset($type) ? 'card-' . $type : '' }}">
    @if(isset($header))
        <div class="card-header">
            {{-- Card Header --}}
            <h5 class="m-0">{{ $header }}</h5>
        </div>
    @endif
    <div class="card-body">
        {{-- Card Title --}}
        <h6 class="card-title">{!! isset($title) ? $title : '' !!}</h6>

        {{-- Card Content --}}
        {!! $slot !!}
    </div>
</div>