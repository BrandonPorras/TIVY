<form class='col-12 mx-0 px-0 my-0'>
  <div class="form-group row col-12 justify-content-between mx-0 px-3">
    <input type="email" class="form-control col-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$name}}" style="font-size:1.5rem"> 
    <input type="email" class="form-control col-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$lastname}}" style="font-size:1.5rem">     
  </div>

  <div class="form-group px-3">
      <textarea name="" id="" cols="66" rows="5" class="form-control">{{$description}}</textarea>
  </div>

  <h5 class="card-title row col-12 border-bottom  mx-0  pl-3 pb-2 pb-lg-1 pt-2 pt-lg-0 my-0 my-lg-2 bg-profile">
    <strong class="text-break text-profile">
      @lang('Contact information')
    </strong>
  </h5>
  <div class="row col-12 bg-profile mx-0 px-3 pb-4 pt-4 pt-lg-0">

    <div class="row col-12 flex-row flex-lg-row d-flex justify-content-between px-0 mx-0">
      
      <div class="form-group row col-6 col-xl-12 border-bottom pb-2 px-0 mx-0 justify-content-around">
          <i class="fas fa-envelope text-profile fa-2x pt-1"></i>
        <input type="email" class="form-control col-9 col-lg-11" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$email}}" disabled >
      </div>
      <div class="form-group border-bottom row col-6 col-xl-12 px-0 pb-2 mx-0 justify-content-between">
          <i class="fab fa-facebook text-profile fa-2x pt-1"></i>
        <input type="email" class="form-control col-10 col-lg-11" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$facebook}}">   
      </div>
      
    </div>
    <div class="row col-12 d-flex justify-content-center px-0 mx-0">
      <button type="submit" class="btn col-5 btn-TivyDarkOrange px-4 rounded-pill">@lang('Edit profile')</button>
    </div>
  </div>
  <div class="d-none">
    <input class="" style="" onchange="changeImageProfile(this)" id="image-Profile" name="btn_file" type="file" >
  </div>
</form>
  