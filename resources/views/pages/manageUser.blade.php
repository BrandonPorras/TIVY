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
            <th>Cambiar estado a</th>
            <th>Eliminar</th>
       
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

                                <td>
                                       
                                    @if($user->state ===1)
                                    <div class="row">
                                       
                                    <form method="POST" action="{{route('user.editState',$user->id)}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                                    
                                        <button  name="state" value=2 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Suspendido</button>
                                   </form> 

                                   <form  method="POST" action="{{route('user.editState',$user->id)}}">
                                    @csrf
                                    @method('PUT')                                                    
                                    <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                              
                                    <button  name="state" value=0 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Inactivo</button>
                                 </form>
                                </div>
                                    @elseif($user->state ===2)
                                    <div class="row">
                                    <form  method="POST" action="{{route('user.editState',$user->id)}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                                  
                                        <button  name="state" value=1 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Activo</button>
                                     </form> 

                                     <form  method="POST" action="{{route('user.editState',$user->id)}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                                  
                                        <button  name="state" value=0 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Inactivo</button>
                                     </form> 
                                    </div>
                                    @elseif($user->state ===0)
                                    
                                    <div class="row">
                                    <form method="POST" action="{{route('user.editState',$user->id)}}">
                                        @csrf
                                        @method('PUT')                                                    
                                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                                   
                                        <button  name="state" value=2 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Suspendido</button>
                                     </form> 
                                    <form method="POST" action="{{route('user.editState',$user->id)}}">
                                        @csrf
                                        @method('PUT')     
                                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">   
                                       <button   name="state" value=1 class="mx-2 btn  btn-outline-success mt-1 mb-1"type="submit">Activo</button>
                                     </form> 
                                </div>
                                     @endif 
                                </td>

                                <td>
                                    <form method="POST" action="{{ route('user.destroy', $user) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn  btn-primary"type="submit">@lang('Delete')</button>
                                    </form>
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