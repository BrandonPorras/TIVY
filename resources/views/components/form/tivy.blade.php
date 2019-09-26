<form method="POST" action="{{ $route }}"  enctype="multipart/form-data" class="col-12 mx-0 pb-2">
    @csrf
    <!--se utiliza el metodo put para enviar datos
    mediante esta directiva-->
    {{$method}}
    <div class="form-group mt-4 ">
    
        <input class="form-control "  type="text" name="tittle" id="tittle" placeholder="@lang('Title')" required>
    </div>

    <div class="form-group mt-4">
        <textarea class="form-control" name="description" id="description"  required style="height=30%" placeholder='dsad'>
        </textarea>
    </div>

    <div class="row col-12 d-flex justify-content-lg-between justifify-content-start flex-column flex-lg-row px-0 mx-0">
        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">@lang('date')</label>   
            <div class="row">
                <label for="inputPassword" class="col-sm-1 col-form-label">
                    <i class="text-primary fas fa-calendar-minus fa-2x"></i>
                </label>
                <div class="col-sm-10">
                    <input class="form-control"  type="date" name="date" id="date" required>
                </div>
            </div>
        </div>

        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">@lang('place')</label>  
            <div class="row">
                <label for="inputPassword" class="col-sm-1 col-form-label">
                    <i class="text-primary fas fa-map-marker-alt fa-2x"></i>
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="place" id="place" required placeholder="Parque, Esparza, Puntarenas">
                </div>
            </div>                
        </div>
        
        <div class="form-group col-12 col-lg-3 px-0 mx-0">
            <label for="">@lang('startTime')</label>
            <div class="row ">
                <label for="inputPassword" class="col-sm-1 col-form-label">
                    <i class="text-primary far fa-clock fa-2x"></i>
                </label>
                <div class="col-lg-9 col-sm-10 ml-2">
                    <input class="form-control"  type="time" name="startTime" id="startTime" required>
                </div>
            </div>               
        </div>
    </div>

    <div class="row col-12 d-flex justify-content-start flex-column flex-lg-row px-0 mx-0">
        <div class="form-group col-12 col-lg-4 px-0 ml-0 mr-lg-4 mr-0">
            <label for="">@lang('duration')</label>  
            <div class="row ">
                <label for="inputPassword" class="col-sm-1 col-form-label">
                    <i class="text-primary fas fa-hourglass-half fa-2x"></i>
                </label>
                <div class="col-sm-10 ">
                    <input class="form-control"  type="time" name="duration" id="duration" required>
                </div>
            </div>
        </div>
        <div class="form-group col-12 col-lg-4 px-0 mx-0">
            <label for="">@lang('capacity')</label>   
            <div class="row ">
                <label for="inputPassword" class="col-sm-1 col-form-label ">
                    <i class="text-primary fas fa-user-friends fa-x"></i>
                </label>
                <div class="col-sm-10 ">
                    <input class="form-control"  type="number" name="capacity" id="capacity"  required>
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
    <input class="" style="opacity:0" onchange="changeImage(this)" id="btn_file" name="btn_file" type="file">
    <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">                            
    <button class="btn btn-success" type="submit">{{$button_text}}</button>
</form>



