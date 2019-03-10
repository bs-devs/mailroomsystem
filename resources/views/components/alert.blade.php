{{-- Alert Component --}}
{{-- Alert Type : Primary | Info | Success | Warning | Danger | Gray | Black --}}
<div class="alert alert-{{ isset($type) ? $type : 'primary' }} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    {{-- Alert Header --}}
    @if(isset($title))
        <h5><i class="icon {{ isset($icon) ? $icon : 'fa fa-info' }}"></i> {!! isset($title) ? $title : 'Alert Title' !!}</h5>
    @endif
    {{-- Alert Content Here --}}
    {!! $slot !!}
</div>