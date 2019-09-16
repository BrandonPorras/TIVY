<div id="{{"tivy-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
       
           <div class="container-fluid d-flex justify-content-center">
              
               <form>
                   


                   <div class="form-group">
                        <label for="">@lang('tittle')</label>   
                        <input   class="form-control "  type="text" name="tittle" id="tittle" placeholder="@lang('Title')" required value="{{$tivy->tittle}}" disabled>
                       
                       </div>
               
                    <div class="form-group">
                       <label for="">@lang('description')</label>   
                       <input class="form-control"  type="text" name="description" id="description" placeholder="@lang('description')" required value="{{$tivy->description}}" disabled>
                   </div>
  
                   <div class="form-group">
                       <label for="">@lang('date')</label>   
                       <input class="form-control"  type="date" name="date" id="date" required value="{{$tivy->date}}" disabled>
                   </div>
  
                   <div class="form-group">
                       <label for="">@lang('startTime')</label>   
                       <input class="form-control"  type="time" name="startTime" id="startTime" required value="{{$tivy->startTime}}" disabled>
                   </div>
  
                   <div class="form-group">
                       <label for="">@lang('duration')</label>   
                       <input class="form-control"  type="time" name="duration" id="duration" required value="{{$tivy->duration}}" disabled>
                   </div>
  
                   <div class="form-group">
                       <label for="">@lang('place')</label>   
                       <input class="form-control"  type="text" name="place" id="place" required placeholder="Parque, Esparza, Puntarenas" value="{{$tivy->place}}" disabled>
                   </div>
  
                   <div class="form-group">
                       <label for="">@lang('capacity')</label>   
                       <input class="form-control"  type="number" name="capacity" id="capacity" required value="{{$tivy->capacity}}" disabled>
                   </div>    
               </form>
               </div>  

               

               
               <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>            
          </form> 

          <button class="btn btn-danger col-3" type="submit" data-toggle="modal"  data-target="{{"#tivyEdit-".($tivy->id)}}">
            <p >
                @lang('edit tivy')
            </p>
        </button>
      </div>
    </div>
    
  </div>