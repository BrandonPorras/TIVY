@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-md-row  flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0 top-login rounded-top-login  col-12 col-md-4 d-flex no-wrap scrolling-wrapper bg-white" style='height:100vh'>       
            <div class="card col-12 border-0 pt-4 mt-md-4 mt-0">
                    <div class="card-body mt-md-4 mt-0 pt-4">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                             @endif
                            <form class="mt-md-4 mt-0 " method="POST" action="{{  route('password.email')}}">
                                @csrf
                                <div class="form-group row col-12 justify-content-center">
                                    <div class="row d-flex justify-content-center align-items-center rounded-circle " style="background:#f3f3f3;width: 8rem;height: 8rem;">
                                        <i class="fas fa-user-alt fa-4x text-white"></i>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row col-12 justify-content-center">
                               
                                        <button type="submit" class="btn btn-initTivyDarkOrange rounded-pill">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                               
                                </div>
                            </form>
                        </div>      </div>              
        </div>
    </div>
</div>

    </div>

@endsection



