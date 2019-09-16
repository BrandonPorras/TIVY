@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

@section('content')

<?php 
use TIVY\tivy;    
$tivies= Tivy::all();     
?>

        <div class="row d-flex ">

           
            <div class="col-sm-2 col-12 bg-warning">
                @component('components.card.profile',
                ['img'=>'/storage/milos.png',
                'name'=>$user->name,
                'description'=>'Bailar, sonreir, ser Ricardo Milos',
                'email'=>'ricardomilos@dance.com',
                'facebook'=>'Ricardo Milos',
                'activities'=>'activity'
                ])
                @endcomponent
            </div>

            <div class="col-sm-5 col-12 bg-primary">
                @component('components.activities',['activityTitle'=>'My Tivys'])
                @endcomponent


                <button type="button" class="rounded-circle py-1" style="width:60px; height:60px" data-toggle="modal" data-target=".bd-create-modal-xl">agregar</button>

                {{-------------------- modal create tivy --------------------}}
                <div class="modal fade bd-create-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl">
                   <div class="modal-content">
                    
                        <div class="container-fluid d-flex justify-content-center">
                           
                            <form method="POST" action="{{ route('tivy.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <!--se utiliza el metodo put para enviar datos
                                    mediante esta directiva-->
                            
                                @method('POST')
                                <div class="form-group">
                                     <label for="">@lang('tittle')</label>   
                                     <input class="form-control "  type="text" name="tittle" id="tittle" placeholder="@lang('Title')" required>
                                    
                                    </div>
                            
                                 <div class="form-group">
                                    <label for="">@lang('description')</label>   
                                    <input class="form-control"  type="text" name="description" id="description" placeholder="@lang('description')" required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('date')</label>   
                                    <input class="form-control"  type="date" name="date" id="date" required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('startTime')</label>   
                                    <input class="form-control"  type="time" name="startTime" id="startTime" required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('duration')</label>   
                                    <input class="form-control"  type="time" name="duration" id="duration" required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('place')</label>   
                                    <input class="form-control"  type="text" name="place" id="place" required placeholder="Parque, Esparza, Puntarenas">
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('capacity')</label>   
                                    <input class="form-control"  type="number" name="capacity" id="capacity" required>
                                </div>
                            
                                <div class="row">
                                    <div class="input-group mb-3 ml-5 col-10">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input class=" custom-file-input" onchange="changeImage(this)" id="imagen_publication" name="imagen_publication" type="file">>
                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="user" id="user" value="{{ $user->id}}">                            
                            
                                <button class="btn btn-success" type="submit">@lang('content.update')</button>
                            
                            </form>
                            </div>
                     
                   </div>
                 </div>
               </div>
                 {{-------------------- modal --------------------}}
                @component('components.activities',['activityTitle'=>'Pending Tivys'])
                @endcomponent
            </div>

            <div class="col-sm-5 col-12  bg-danger">
                @component('components.activities',['activityTitle'=>'Upcoming Tivys'])
                @endcomponent
                @component('components.activities',['activityTitle'=>"Tivys I've gone to"])
                @endcomponent
            </div>
        </div>
    </div>

    
@endsection


@forelse($tivies as $tivy){{--forelse tivy--}}
       
@if($tivy->user_id==$user->id)
<div class="card mb-4" style="width: 45%;">
  <img src="/storage/1.jpg" class="card-img-top" alt="...">
  <div class="card-body px-1 py-1">
    <h5 class="card-title mb-1">{{ $tivy->tittle}}</h5>
    <p class="card-text">{{ $tivy->date}}</p>
  </div>  
</div>
{{-- ----------------------------------- --}}
<div class="d-flex justify-content-end">
   
    <button type="button" class="rounded-circle py-1" style="width:60px; height:60px" data-toggle="modal" data-target=".bd-edit-modal-xl">editar</button>
    {{-- modal editar tivy --}}
 <div class="modal fade bd-edit-modal-xl" id="editModal" tabindex="-2" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl">
                   <div class="modal-content">
                    
                        <div class="container-fluid d-flex justify-content-center">
                           
                            <form method="post" action="{{route('tivy.update', $tivy->id)}}" >
                                @csrf
                                @method('PUT')    
                                <label for="">@lang('editar')</label> 
                                <div class="form-group">
                                     <label for="">@lang('tittle')</label>   
                                     <input class="form-control"  type="text" name="tittle" id="tittle" value={{$tivy->tittle}} required>
                                 </div>
                            
                                 <div class="form-group">
                                    <label for="">@lang('description')</label>   
                                    <input class="form-control"  type="text" name="description" id="description" value={{$tivy->description}} required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('date')</label>   
                                    <input class="form-control"  type="date" name="date" id="date" value={{$tivy->date}} required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('startTime')</label>   
                                    <input class="form-control"  type="time" name="startTime" id="startTime" value={{$tivy->startTime}} required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('duration')</label>   
                                    <input class="form-control"  type="time" name="duration" id="duration" value={{$tivy->duration}} required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('place')</label>   
                                    <input class="form-control"  type="text" name="place" id="place" value={{$tivy->place}} required>
                                </div>

                                <div class="form-group">
                                    <label for="">@lang('capacity')</label>   
                                    <input class="form-control"  type="number" name="capacity" id="capacity" value={{$tivy->capacity}} required>
                                </div>
                            
                                <div class="row">
                                    <div class="input-group mb-3 ml-5 col-10">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
                                        </div>
                                        <div class="custom-file">
                                            <input class=" custom-file-input" onchange="changeImage(this)" id="imagen_publication" name="imagen_publication" type="file">>
                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <input type="hidden" name="user" id="user" value="{{ $user->id}}">                            
                            
                                <button class="btn btn-success" type="submit">@lang('update')</button>
                            
                            </form>
                            </div>
                     
                   </div>
                 </div>
               </div>
      {{-- modal editar tivy --}}

    <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
    </form> 
  </div>
{{-- ----------------------------------- --}}
@endif
@empty
              <p>No hay nada</p>
@endforelse

@section('scripts')    
    <script>        
        let imageDOM = document.querySelector('.image-publication');
        
        imageDOM.addEventListener('click', function(){
            document.querySelector('#imagen_publication').click();
        });

        function changeImage(input){            
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imageDOM.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        };
    </script>
@endsection

@section('footer')

    @component('components.footer')        
    @endcomponent
@endsection





