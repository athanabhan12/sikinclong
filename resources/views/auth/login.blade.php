@extends('layouts.app')

@section('content')
<div class="card-body login">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <form method="POST" action="{{ route('login') }}">
                    <img src="{{ 'image/icon.jpg' }}" width="100"
                        style="display: block; margin-left: auto; margin-right: auto;">
                    <h3 class="text-center mt-3">TreeALaundrys</h3>
                    <div class="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="placeholder">{{ __('Email') }}</label>
                            <input id="email" type="email" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('LOGIN') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
