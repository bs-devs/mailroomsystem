@extends('layouts.app-login')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="/">MRS</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Login') }}</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email / Username" autocomplete="off">
            <div class="input-group-append">
                <span class="fa fa-id-card input-group-text"></span>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            </div>
            <div class="input-group mb-3">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
            <div class="input-group-append">
                <span class="fa fa-lock input-group-text"></span>
            </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
            <div class="row">
            <div class="col-8">
                <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <p class="mb-0">
            <a href="/register" class="text-center">Register a new membership</a>
        </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection
