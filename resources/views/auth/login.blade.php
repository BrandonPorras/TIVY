@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row  flex-column">
        @component('components.hero')  
        @endcomponent
        <div class="p-0  rounded-top-login col-12 col-xl-4 d-flex no-wrap scrolling-wrapper-login bg-white" style='height:100vh'>
            <div class="card col-12 border-0 pt-4 mt-xl-4 mt-0">
                <div class="card-body mt-xl-4 mt-0 pt-4">
                    <form method="POST" action="{{ route('login') }}" class="mt-xl-4 mt-0 px-4">
                        @csrf
                        <div class="form-group row col-12 justify-content-center px-0 py-0 mx-0 my-0">
                            <div class="row d-flex justify-content-center align-items-center rounded-circle " style="background:#f3f3f3;width: 8rem;height: 8rem;">
                                <i class="fas fa-user-alt fa-4x text-white"></i>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row col-12 d-flex justify-content-between mx-0 px-0">
                            <div class="form-check p-0 m-0 px-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                   <small>{{ __('Remember Me') }}</small> 
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link py-0 px-0" href="{{ route('password.request') }}" style="color:black">
                                    <small>{{ __('Forgot Your Password?') }}</small>
                                </a>
                            @endif
                        </div>
                        <div class="form-group  mb-0 row col-12 justify-content-center px-0 mx-0">                   
                            <button type="submit" class="btn col-12 col-xl-8 btn-initTivyDarkOrange rounded-pill py-2">       
                                <h2 class="">{{ __('Sign in') }}</h2>
                            </button> 
                        </div>
                        <div class="form-group d-flex justify-content-center mt-3">
                         
                            <small class="pr-2">
                                {{ __('Dont have an account? ') }}
                            </small>
                            <small>
                                <a class="" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a> 
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
