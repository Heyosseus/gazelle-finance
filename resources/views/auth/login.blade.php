@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 form-floating col-8 mx-auto">

                            <input id="floatingInput" type="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="floatingInput" class="col-md-4 col-form-label ">{{ __('Email') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3 form-floating col-8 mx-auto">

                                <input id="floatingPassword" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="floatingPassword" class="col-md-4 col-form-label  ">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-8 mb-5 d-flex align-items-center justify-content-between mx-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                        </div>

                        <button type="submit" class="btn btn-dark my-5 rounded-5 mx-auto px-auto  py-2 d-flex justify-content-center align-items-center  col-6 ">
                           <span class="fs-5 text-nowrap text-center">{{ __('Login') }}</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
