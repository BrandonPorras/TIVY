<form method="POST" action="{{ $route }}"  enctype="multipart/form-data" class="col-12 mx-0 pb-2">
    @csrf
    <!--se utiliza el metodo put para enviar datos
    mediante esta directiva-->
    {{$method}}
    @if ($button_text != 'Show Tivy')
        <div class="form-group mt-2 mb-3">
            <input class="form-control text-primary"  type="text" name="tittle" id="tittle" placeholder="@lang('Title')" required value="{{$tivy['tittle']}}" style="font-size:2rem" >
        </div>
    @endif

    <div class="form-group mt-1">
        <textarea class="form-control" name="description" id="description" required style="height=30%" placeholder='@lang('Description')' {{$disable}}>{{$tivy['description']}}</textarea>
    </div>

    <div class="row col-12 d-flex justify-content-lg-between justifify-content-start flex-column flex-lg-row px-0 mx-0">
        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">
                @lang('date')
            </label>   
            <div class="row">
                <label for="inputPassword" class="col-1 col-form-label">
                    <i class="text-primary fas fa-calendar-minus fa-2x"></i>
                </label>
                <div class="col-lg-10 col-11">
                    <input class="form-control"  type="date" name="date" id="date" required {{$disable}} value="{{$tivy['date']}}">
                </div>
            </div>
        </div>

        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">@lang('place')</label>  
            <div class="row">
                <label for="inputPassword" class="col-1 col-form-label">
                    <i class="text-primary fas fa-map-marker-alt fa-2x"></i>
                </label>
                <div class="col-lg-10 col-11">
                    <input class="form-control" type="text" name="place" id="place" required placeholder="Parque, Esparza, Puntarenas" {{$disable}} value="{{$tivy['place']}}">
                </div>
            </div>                
        </div>
        
        <div class="form-group col-12 col-lg-3 px-0 mx-0">
            <label for="">@lang('startTime')</label>
            <div class="row ">
                <label for="inputPassword" class="col-1 col-form-label">
                    <i class="text-primary far fa-clock fa-2x"></i>
                </label>
                <div class="col-lg-10 col-11 ml-lg-1 ml-0">
                    <input class="form-control"  type="time" name="startTime" id="startTime" required {{$disable}} value="{{$tivy['startTime']}}">
                </div>
            </div>               
        </div>
    </div>

    <div class="row col-12 d-flex justify-content-start flex-column flex-lg-row px-0 mx-0">
        <div class="form-group col-12 col-lg-4 px-0 ml-0 mr-lg-4 mr-0">
            <label for="">@lang('duration')</label>  
            <div class="row ">
                <label for="inputPassword" class="col-1 col-form-label">
                    <i class="text-primary fas fa-hourglass-half fa-2x"></i>
                </label>
                <div class="col-lg-10 col-11">
                    <input class="form-control"  type="time" name="duration" id="duration" required {{$disable}} value="{{$tivy['duration']}}">
                </div>
            </div>
        </div>
        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">@lang('capacity')</label>   
            <div class="row ">
                <label for="inputPassword" class="col-1 col-form-label px-0 pl-2">
                    <i class="text-primary fas fa-user-friends fa-2x"></i>
                </label>
                <div class="col-lg-10 col-11 ml-lg-3 ml-0">
                    <input class="form-control"  type="number" name="capacity" id="capacity"  required {{$disable}} value="{{$tivy['capacity']}}">
                </div>
            </div>
        </div>

        <div class="form-group col-12 px-0 mx-0">
            <label for="">@lang('tag')</label>   
            <div class="d-flex row col-12 py-0 px-0 mx-0 scrolling-wrapper">         
                <button type="button" data-toggle="modal" data-target="#edit-dashboard" class=" py-0 px-0 border border-primary bg-transparent rounded-circle" style="width:4rem;height:4rem; ">
                    +
                </button>  
            </div>
        </div>
    </div>

    <div class="d-none">
        <input class="" style="" onchange="{{$changeImg}}" id="{{$btn_id}}" name="btn_file" type="file" >
    </div>
    
    <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">                            
    @if ($button_text != 'Show Tivy')
        <div class="row col-12 d-flex justify-content-center">
            <button type="submit" class="btn col-5 btn-TivyDarkOrange px-4 rounded-pill">@lang($button_text)</button>
        </div>
    @endif
</form>



