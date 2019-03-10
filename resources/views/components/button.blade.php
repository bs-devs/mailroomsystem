{{-- Button Component --}}
<button type="button" id="{{ isset($id) ? $id : '' }}" class="btn{{ isset($class) ? ' ' . $class : '' }}" {!! isset($attr) ? $attr : '' !!}>{!! $slot !!}</button>