<div id="{{"tivyEdit-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
         
             <div class="container-fluid d-flex justify-content-center">
                
                 <form method="post" action="{{route('tivy.update', $tivy->id)}}" enctype="multipart/form-data" >
                     @csrf
                     @method('PUT')    
                     <label for="">@lang('editar')</label> 
                     <div class="form-group">
                          <label for="">@lang('tittle')</label>   
                          <input class="form-control"  type="text" name="tittle" id="tittle" value={{$tivy->tittle}} >
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