<div id="{{"tivyEdit-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
    
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header py-0 px-0">
                <div class="row col-12 mx-0 px-0">
                    <label for="imagen_publication" class="col-12 py-0 px-0 my-0 mx-0"><img src="/storage/naruto-run.jpg" alt=" No hays" class="card-img-top"></label>
                    <h1 class="modal-title position-absolute" style="bottom:0rem; left:0rem; right:0rem; top:0rem; margin:auto;">@lang('Edit tivy')</h5>        
                    <div class="row position-absolute" style="top:1rem;left:2rem;">
                        <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn rounded-pill bg-danger" type="button">
                                <i class="text-white fas fa-trash-alt"></i>
                            </button>          
                        </form> 
                    </div>
                    <button type="button" class="text-white close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-content border-top-0 px-2 py-2">
                    <form method="POST" action="{{route('tivy.update', $tivy->id)}}" enctype="multipart/form-data"  enctype="multipart/form-data" class="col-12 mx-0 pb-2">
                        @csrf
                        <!--se utiliza el metodo put para enviar datos
                        mediante esta directiva-->
                        @method('POST')
                        <div class="form-group mt-4 ">
                            <input class="form-control "  type="text" name="tittle" id="tittle" placeholder="@lang('Title')" value="{{$tivy->tittle}}" required>
                        </div>
                    
                        <div class="form-group mt-4">
                            <textarea class="form-control" name="description" id="description"
                              required style="height=30%">{{$tivy->description}}</textarea>
                        </div>
                    
                        <div class="row col-12 d-flex justify-content-lg-between justifify-content-start flex-column flex-lg-row px-0 mx-0">
                            <div class="form-group col-12 col-lg-4 px-0 mx-0">
                                <label for="">@lang('date')</label>   
                                <div class="row">
                                    <label for="inputPassword" class="col-sm-1 col-form-label">
                                        <i class="text-primary fas fa-calendar-minus fa-2x"></i>
                                    </label>
                                    <div class="col-sm-11">
                                        <input class="form-control"  type="date" name="date" id="date" value="{{$tivy->date}}" required >
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group col-12 col-lg-4 px-0 mx-0">
                                <label for="">@lang('place')</label>  
                                <div class="row">
                                    <label for="inputPassword" class="col-sm-1 col-form-label">
                                        <i class="text-primary fas fa-map-marker-alt fa-2x"></i>
                                    </label>
                                    <div class="col-sm-11">
                                        <input class="form-control" type="text" name="place" id="place" value="{{$tivy->place}}" required placeholder="Parque, Esparza, Puntarenas">
                                    </div>
                                </div>                
                            </div>
                            
                            <div class="form-group col-12 col-lg-3 px-0 mx-0">
                                <label for="">@lang('startTime')</label>
                                <div class="row">
                                    <label for="inputPassword" class="col-sm-1 col-form-label">
                                        <i class="text-primary far fa-clock fa-2x"></i>
                                    </label>
                                    <div class="col-sm-10 ml-3 ">
                                        <input class="form-control"  type="time" name="startTime" id="startTime" value="{{$tivy->startTime}}" required>
                                    </div>
                                </div>
                                        
                            </div>
                        </div>
                    
                        <div class="row col-12 d-flex justify-content-start flex-column flex-lg-row px-0 mx-0">
                            <div class="form-group col-12 col-lg-4 px-0 ml-0 mr-lg-4 mr-0">
                                <label for="">@lang('duration')</label>  
                                <div class="row">
                                    <label for="inputPassword" class="col-sm-1 col-form-label">
                                        <i class="text-primary fas fa-hourglass-half fa-2x"></i>
                                    </label>
                                    <div class="col-sm-11 ">
                                        <input class="form-control"  type="time" name="duration" id="duration" value="{{$tivy->duration}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 col-lg-4 px-0 ml-4">
                                <label for="">@lang('capacity')</label>   
                                <div class="row">
                                    <label for="inputPassword" class="col-sm-1 col-form-label px-0">
                                        <i class="text-primary fas fa-user-friends fa-2x"></i>
                                    </label>
                                    <div class="col-sm-11 ">
                                        <input class="form-control"  type="number" name="capacity" id="capacity" value="{{$tivy->capacity}}" required>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group col-12">
                                    <label for="">@lang('tag')</label>   
                                    <div class="d-flex flex-nowrap flex-lg-wrap pl-2 scrolling-wrapper">         
                                            <button type="button" data-toggle="modal" data-target="#edit-dashboard" class=" py-0 px-0 border border-primary bg-transparent rounded-circle" style="flex:0 0 5%; ">
                                                <p class="my-0 mx-0"style="padding-top:30%;padding-bottom:30%">+</p>
                                            </button>  
                                    </div>
                                </div>
                        </div>
                        <input class="d-none custom-file-input" onchange="changeImage(this)" id="imagen_publication" name="imagen_publication" type="file">
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">                            
                        <button class="btn btn-success" type="submit">@lang('Edit tivy')</button>
                    </form>
            </div>
        </div>
    </div>
</div>