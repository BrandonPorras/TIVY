<div id="create-dashboard" class="modal" tabindex="-1" role="dialog">
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
                 <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">                            
             
                 <button class="btn btn-success" type="submit">@lang('content.update')</button>
             
             </form>
             </div>
      
    </div>
  </div>
</div>