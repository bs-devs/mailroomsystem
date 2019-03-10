{{-- Modal Component --}}
{{-- 
    Modal ID is required 
    Modal Style : ex. width:10px, height:10px
--}}
<div class="modal fade in" id="{{ isset($id) ? $id : '' }}" style="padding-right: 17px; {{ isset($style) ? $style : '' }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{-- Modal Title --}}
                <h4 class="modal-title">{!! isset($title) ? $title : '' !!}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Modal Content --}}
                {!! $slot !!}
            </div>
            <div class="modal-footer">
                {{-- Modal Footer --}}
                {!! $footer !!}
            </div>
        </div>
    </div>
</div>