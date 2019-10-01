@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-md-row  flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0 top-login rounded-top-login  col-12 col-md-4 d-flex no-wrap scrolling-wrapper bg-white" style='height:100vh'>       
            <div class="card-body">
                <form class="mt-2 mb-4 py-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row col-12 justify-content-center">
                        <div class="row d-flex justify-content-center align-items-center rounded-circle " style="background:#f3f3f3;width: 8rem;height: 8rem;">
                            <i class="fas fa-user-alt fa-4x text-white"></i>
                        </div>
                    </div>
            
                    <div class="form-group ">
                        <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>        
                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                   <span class="invalid-feedback" role="alert">                                               <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>      
                        <div class="form-group ">
                            <label for="lastname" class="col-form-label text-md-right">{{ __('lastname') }}</label>
            
                            <div class="">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
            
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="Fecha" class="col-form-label text-md-right">{{ __('Date') }}</label>
                                <div class="">
                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ old('fecha') }}" required autocomplete="fecha" autofocus>
                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
            
                        <div class="form-group row d-flex justify-content-start mx-4">
                            <div class="form-check p-0 m-0">
                                <input type="checkbox" class="form-check-input  @error('termsConditions') is-invalid @enderror "  name="termsConditions" id="termsConditions" value="1">
                                <label class="form-check-label" for="termsConditions">                                                
                                    <small>{{ __('I accept terms and conditions') }}</small>                                              
                                    @error('termsConditions')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>                                           
                            </div>
                        </div>
                        
                        <div class="form-group  mb-0 row col-12 justify-content-center">
                           
                                <button type="submit" class="btn btn-initTivyDarkOrange rounded-pill">
                                    {{ __('Sign up') }}
                                    </button>
                               
                            </div>

                         <div class="form-group  mb-0">
                            <label class=" col-form-label text-md-right">     {{ __('Sign up with') }}</label>
                        </div>

                        <div class=" d-flex justify-content-around ">
                            <img src="/storage/facebook.svg" alt="" style="width:2rem">
                            <img src="/storage/google.svg" alt=""style="width:2rem">
                        </div>
                    </form>
                </div>
                            
            </div>
        </div>
    </div>

    </div>
@endsection
