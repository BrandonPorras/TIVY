<div  class="row col-12 position-absolute  mx-0 px-0 gradient" style="height:50%;">
</div>

<div id="card-profile"class="row d-flex mx-0 py-0 col-lg-12 col-md-8 col-sm-9 col-10  bg-white mb-4 my-lg-0  pt-4 px-0 pb-0 " >
  <div class="row col-12 d-flex justify-content-center ">
    <img src='/storage/profile/{{$img}}' alt="" class="card-img-top rounded-circle profile-img" style="width:8rem;">
  </div>
  
  <div id="body-profile"class="card-body  px-0 mx-0 px-0">
    <h4 class="card-title px-2 pb-2 text-center">
      <strong >
        {{$name}}
      </strong>
      <label for="modal-profile">
        <i class="fas fa-user-edit d-none d-lg-inline-block"></i>
      </label>
    </h4>
    <p class="card-text px-3 pb-2 text-break text-muted">
      {{$description}}
    </p>

    <div class="row col-12 px-0 mx-0 bg-profile py-3 mb-0 px-3">
      <div class="row col-12 flex-lg-column flex-row d-flex justify-content-between px-0 mx-0">
        <h6 class="card-title border-bottom pl-2 pb-2">
          <strong class="text-break text-profile">
            @lang('Contact information')
          </strong>
        </h6>
        <h6 class="card-title pl-2 pb-2 d-block d-lg-none">
          <label for="modal-profile"><i class="fas fa-user-edit text-profile"></i></label>
          <label for="modal-profile" class="text-profile">
            @lang("Edit profile")
          </label>
        </h6>
      </div>  
        
      <div class="row col-12 flex-lg-column flex-row d-flex justify-content-between px-0 mx-0">
        <h6 class="card-title border-bottom pl-2 pb-2">
          <i class="fas fa-envelope text-profile"></i>
          <a href="" class="text-break text-profile">
            {{$email}}
          </a>    
        </h6>
                
        <h6 class="card-title border-bottom pl-2 pb-2">
          <i class="fab fa-facebook text-profile"></i>
            <a href="" class="text-break text-profile">
              {{$facebook}}
            </a>
        </h6>
      </div>
    </div> 
  </div>
</div>

    
