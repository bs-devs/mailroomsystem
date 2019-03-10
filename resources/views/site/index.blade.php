@extends('layouts.app')

{{-- Content --}}
@section('content')
    @component('components.card', [
        'header' => 'Welcome to Mail Room System',
        'type' => 'info'
    ])
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore optio repudiandae vero
                voluptatibus doloremque. Officiis beatae, sapiente non qui est accusantium blanditiis, similique 
                voluptatem dicta eveniet animi rem architecto provident.
        </p>
        <br>
        <div>
            @guest
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                </div>
            @endguest
        </div>
    @endcomponent
@endsection