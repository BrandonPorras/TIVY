@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row flex-lg-row flex-md-row flex-column">
            <div class="p-0 d-flex flex-column col-12 col-xl-8 col-lg-8 col-md-8 justify-content-center">
                    <img src="/storage/tivyInit.png" class="img-fluid" alt="Responsive image">
                    <div class="row position-absolute col-12 d-flex justify-content-center flex-column"> 
                        <h1 class="text-light mt-1 " style="text-align:center">Welcome to</h1>
                        <img src="/storage/logo_tivy_vertical.svg" class="mt-1 text-light" alt="Responsive image" style="height:10em;"> 
                        <h2 class="text-light mt-1" style="text-align:center">Create, join Tivy's, make new friends</h2>
                        <h3 class="mt-1 text-light" style="text-align:center">and experiences</h3>
                    </div>
                </div>

            <div class="p-0 col-12 col-xl-4 col-lg-4 col-md-4 d-flex align-items-center bg-white">
                    <div class="card border-0">

            
                        
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-group ">
                                        <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
            
                                        <div class="">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
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
                                        <label for="Fecha" class="col-form-label text-md-right">{{ __('fecha') }}</label>
            
                                        <div class="">
                                            <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ old('fecha') }}" required autocomplete="fecha" autofocus>
            
                                            @error('fecha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
            
                                    <div class="form-group r">
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
            
                                    <div class="form-group row d-flex justify-content-around">
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
                                <div class="form-group  mb-0">
                                    <div class="offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Sign up') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group  mb-0">
                                        <label class=" col-form-label text-md-right">     {{ __('Sign up with') }}</label>

                                    </div>

                                    <div class=" d-flex justify-content-around">
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
