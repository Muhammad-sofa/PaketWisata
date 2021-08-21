@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <div class="row page-login d-flex align-items-center">
        <div class="section-left col-12 col-md-6">
            <h1 class="mb-4">Selamat Datang</h1>
            <p>It is not just holiday, Liburan Anda terasa lebih bermakna bersama kami.</p>
            <p>Enjoy your authentic moment - Spend time beloved ones - Grateful for the grace of god</p>
            <img src="/frontend/images/login.png" alt="" class="w-75 d-none d-sm-flex">
        </div>
        <div class="section-right col-12 col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="text-center">
                        <img src="/frontend/images/logoCompany.png" alt="" class="w-50 mb-4">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-login btn-block"> {{ __('Login') }}</button>

                                @if (Route::has('password.request'))
                                <p class="text-center mt-4">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </p>
                                @endif
                            </div>
                        </div>
                    </form>

                    @guest
                <!--Mobile Button-->
                <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-register my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{url('register')}}';">
                        Register
                    </button>
                </form>

                <!--desktop Buttom-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-register btn-navbar-center my-2 my-sm-0 px-4 col-md-8 offset-md-2" type="button" onclick="event.preventDefault(); location.href='{{url('register')}}';">
                        Register
                    </button>
                </form>
                @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
