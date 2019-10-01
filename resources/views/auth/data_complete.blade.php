@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row flex-lg-row flex-md-row flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0  rounded-top-login  col-12 col-md-4 d-flex no-wrap scrolling-wrapper bg-white" style='height:100vh'>
            <div class="card col-12 border-0 pt-4 mt-md-4 mt-0">
                <div class="card-body mt-md-4 mt-0 pt-4">
                    <form method="POST" action="{{ url('/complete/' .$id) }}">
                        @csrf    
                        <div class="form-group row col-12 justify-content-center">
                            <div class="row d-flex justify-content-center align-items-center rounded-circle " style="background:#f3f3f3;width: 8rem;height: 8rem;">
                                <i class="fas fa-user-alt fa-4x text-white"></i>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
            
                        <div class="form-group row col-12 justify-content-center">
                         
                            <button type="submit" class="btn btn-initTivyDarkOrange rounded-pill">
                                {{ __('Register password') }}
                            </button>
                          
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
