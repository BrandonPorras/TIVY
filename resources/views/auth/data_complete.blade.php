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
                                <form method="POST" action="{{ url('/complete/' .$id) }}">
                                    @csrf    
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
    </div>

</div>
@endsection
