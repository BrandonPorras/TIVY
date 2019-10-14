@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @auth
                    {{-- si esta autenticado ejecuta lo que este aqui adentro --}}
                        {{-- logeado
                        <br>
                        {{Auth::user()->name}}
                        
                    {{-- para extraer el role del usuario --}}
                         @foreach (Auth::user()->roles as $role)
                         
                        @if($role->name=='admin')
                        <div class="container my-2 justify-content-between">
                        <a href="{{ route('tivy.showAuthorize') }}" class="btn btn-primary">Authorize or deny publications</a>
                        {{-- <a href="{{ route('user.manageUser') }}" class="btn btn-success">Manage users</a> --}}
                       </div>

                       <a href="{{ route('user.manageUser') }}" class="btn btn-success">Manage users</a>
                        @endif
                     
                        @endforeach 
                    
                    @endauth
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
