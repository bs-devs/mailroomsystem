@extends('layouts.app-login')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="/">MRS</a>
        </div>
        
        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">{{ __('Register') }}</p>
        
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="full_name" type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="{{ old('full_name') }}" required autofocus placeholder="First Name" autocomplete="off">

                    @if ($errors->has('full_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-user input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required placeholder="Username" autocomplete="off">

                    @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-id-card input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="contact_no" type="text" class="form-control{{ $errors->has('contact_no') ? ' is-invalid' : '' }}" name="contact_no" value="{{ old('contact_no') }}" required placeholder="Contact No" autocomplete="off">

                    @if ($errors->has('contact_no'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('contact_no') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-phone input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="off">

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-offset-8 col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
        
            <a href="/login" class="text-center">I already have a membership</a>
            </div>
        </div>
    </div>
@endsection
