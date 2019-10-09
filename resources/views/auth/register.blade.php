@extends('layouts.app')

@section('content')
<div class="container-fluid m-0 p-0">
    <div class=" d-flex flex-xl-row  flex-column">
        @component('components.hero')
        @endcomponent
        <div class="p-0 rounded-top-login col-12 col-xl-4  d-flex no-wrap scrolling-wrapper-login bg-white" style='height:100vh'>       
            <div class="card-body">
                <form class="mt-2 mb-4 py-4 px-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row d-flex col-12 justify-content-center flex-row ">
                        <label id="addProfile" for="image_profile" class="row d-flex justify-content-center align-items-center flex-row  flex-sm-column border border-light shadow-sm p-4">
                            <i class="fas fa-user-plus  fa-4x" style="color:#4D4D4D;"></i>
                            <small class="mt-3 d-none d-sm-block">@lang('Add profile picture')</small>
                            <p class="ml-3 mt-3 d-sm-none d-block">@lang('Add profile picture')</p>
                               
                        </label>
                    </div>
                    <div class="form-group">
                            @error('img')
                            <span class="invalid-feedback" role="alert">                                               
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                            <label class="form-check-label pt-1" for="termsConditions">                                                
                                <small>{{ __('I accept terms and conditions') }}</small>                                              
                                @error('termsConditions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>                                           
                        </div>
                    </div>
                    <div class="form-group  mb-0 row col-12 justify-content-center px-0 mx-0">                   
                        <button type="submit" class="btn col-12 col-xl-8 btn-initTivyDarkOrange rounded-pill py-2">
                            
                            <h2 class="">{{ __('Sign up') }}</h2>
                        </button> 
                    </div>
                    <div class="form-group row col-12 justify-content-center mt-2 mb-0">
                        <label class=" col-form-label text-md-right">     
                            <p class="h4">{{ __('Sign up with') }}</p>
                        </label>
                    </div>

                    <div class="row d-flex justify-content-center col-12 px-0 mx-0 flex-column  flex-sm-row ">
                        <img src="/storage/facebook.svg" alt="" class="mr-4 d-none d-xl-block "style="width:4rem">
                        <img src="/storage/google.svg" alt=""class="d-none d-xl-block"style="width:4rem">
                        <button type="submit" class="btn d-block d-xl-none col-12 col-xl-8 rounded-pill py-1" STYLE="background: #3B5996;">        
                            <div class='row col-12 px-4 '>
                                <i class="fab fa-facebook-f text-white fa-3x mr-3 my-0 ml-2"></i> 
                                <h4 class="text-white mt-2 ml-1">@lang('Sign up with facebook')</h4>
                            </div>
                        </button> 
                        <button type="submit" class="btn d-block d-xl-none col-12 col-xl-8 rounded-pill py-1 my-3" STYLE="background: #DD4C42;">        
                            <div class='row col-12 px-4'>
                                <i class="fab fa-google text-white fa-3x mr-3 my-0"></i> 
                                <h4 class="text-white mt-2 ">@lang('Sign up with google')</h4>
                            </div>
                        </button> 
                    </div>
                    <div class="form-group row col-12 justify-content-center mt-2 mb-0">
                        <label class=" col-form-label text-md-right"> 
                            <small class='mr-2'> 
                                @lang('Already have an account?')
                            </small>
                            <small>
                                <a href="/login">@lang('Sign in')</a>
                            </small>
                        </label>
                    </div>
                    <div class="d-none">
                        <input id="image_profile" type="file" name='img' onchange="changeImageProfile(this,'@lang('Add profile picture')')" >
                    </div>
                </form>
             </div>
        </div>
    </div>
</div>

@endsection
<script>
    let file=''
    function changeImageProfile(input,message){
        console.log(file)
        console.log(input.files)       
         
        if(document.querySelector('#img_profile')!=null  ){
            if(input.files[0]!=undefined ){
                changeImage(input,message)

            }else{
                input.files=file
                changeImage(input,message)
            }
        }else{
            if(input.files[0]!=undefined ){
                changeImage(input,message)
            }    
        }
    };

    function changeImage(input,message){
        file=input.files
        document.querySelector('#addProfile').innerHTML='<img id="img_profile" src="" alt="" class="rounded-pill" style="width:8rem;height:8rem;"> <p class="mb-0 mt-sm-3 ml-3 ml-sm-0 mt-0">'+message+'</p>'   
        let imageProfile=document.querySelector('#img_profile') 
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imageProfile.src=e.target.result  
                }
            reader.readAsDataURL(input.files[0]);
        }
    }
   
  
</script>
