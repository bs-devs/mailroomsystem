{{-- Callout Component --}}
{{-- Callout Type : Primary | Info | Success | Warning | Danger | Gray | Black --}}
<div class="callout callout-{{ isset($type) ? $type : 'info' }}">
    {{-- Callout Title --}}
    @if(isset($title))
        <h5>{!! $title !!}</h5>
    @endif
    {{-- Callout Content --}}
    {!! $slot !!}
</div>