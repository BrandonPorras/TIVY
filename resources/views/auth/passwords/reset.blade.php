@extends('layouts.app')

@section('content')

<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row  flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0 top-login rounded-top-login  col-12 col-xl-4 d-flex no-wrap scrolling-wrapper bg-white" style='height:100vh'>       
            <div class="card-body">
                <form class="px-4" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group ">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group  mb-0 row col-12 justify-content-center px-0 mx-0">                   
                        <button type="submit" class="btn col-10 col-xl-8 btn-initTivyDarkOrange rounded-pill py-0">
                            <h2 class="">{{ __('Reset Password') }}</h2>
                        </button> 
                    </div>
                </form>
            </div>                
        </div>
    </div>
</div>
@endsection


