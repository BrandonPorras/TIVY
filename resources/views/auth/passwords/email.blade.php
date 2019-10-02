@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row  flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0 rounded-top-login col-12 col-xl-4 d-flex no-wrap scrolling-wrapper-login bg-white" style='height:100vh'>       
            <div class="card col-12 border-0 pt-4 mt-xl-4 mt-0">
                <div class="card-body mt-xl-4 mt-0 pt-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="mt-xl-4 mt-0 px-4" method="POST" action="{{  route('password.email')}}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" class="col-4 col-form-label px-0 mx-0">{{ __('E-Mail Address') }}</label>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group  mb-0 row col-12 justify-content-center px-0 mx-0">                   
                            <button type="submit" class="btn col-12 col-xl-8 btn-initTivyDarkOrange rounded-pill py-2">                   
                                <h4 class="">{{ __('Send Password') }}</h4>
                            </button> 
                        </div>
                    </form>
                </div>      
            </div>              
        </div>
    </div>
</div>

  

@endsection



