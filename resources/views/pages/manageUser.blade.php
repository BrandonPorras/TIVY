<?php        
use TIVY\User;      
$users= User::all();

use TIVY\Role;      
$roles= Role::all();
?>

@extends('layouts.app')

@section('content')
<div class="container d-flex ml-5 pl-5 ">
 <table class="table table-responsive table-hover ">
    <thead>
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>            
            <th>Clic para cambiar role</th>            
            <th>Rol actual</th>
            <th>estado</th>
            <th></th>
       
        </tr>
    </thead>
    <tbody>
@auth
      @forelse($users as $user){{--forelse publication--}}
                          <tr>
                                <td>{{ $user->name }}</td>
                                <td class="">
                                    <p>{{ $user->email }}</p> 
                                </td>   
                                <td class="row py-2">
                                       
                                            @foreach ($roles as $role)
                                            <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                                    @csrf
                                                    @method('PUT')                                                    
                                                    <button value='' class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">{{ $role->name }}</button>
                                                </form>   
                                             @endforeach                                       
                                

                                <td> @foreach ( $user->roles as$role)
                                    

                                    @if($role->pivot->role_id===1)
                                    admin
                                    @elseif($role->pivot->role_id===2)
                                    user
                                    @endif

                                    @endforeach</td>

                                </td>
                                <td>{{ $user->state }}  
                                    @if($user->state ===1)
                                    <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <button value='' class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Inactivo</button>
                                    </form> 
                                    @elseif($user->state ===2)
                                    <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <button value='' class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Inactivo</button>
                                    </form> 
                                   
                                    @elseif($user->state ===0)
                                    <form method="POST" action="{{route('user.updateRole',array($user->id, $role->id))}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <button value='' class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Inactivo</button>
                                    </form> 
                                    
                                     @endif 
                                </td>
                            </tr>
                {{-- @endif --}}
          @empty
                <p>No hay nada</p>
         @endforelse{{--endforelse publication--}}       
     @endauth
    </tbody>
</table> 
</div>
@endsection