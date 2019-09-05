@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row flex-lg-row flex-md-row flex-column">
        @component('components.hero')
            
        @endcomponent
        <div class="p-0 col-12 col-xl-4 col-lg-4 col-md-4 d-flex align-items-center bg-white" >
            <div class="card col-12 border-0">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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

                        <div class="form-group ">
                                <div class="form-check p-0 m-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                       <small>{{ __('Remember Me') }}</small> 
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <small>{{ __('Forgot Your Password?') }}</small>
                                </a>
                            @endif
                        </div>

                        <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                                
                            <small><a class="" href="{{ route('register') }}">
                                {{ __('Dont have an account? Register') }}</a> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
