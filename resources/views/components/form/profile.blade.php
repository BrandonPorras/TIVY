 <form method="post" action="{{ route('user.update', $id)}}"  enctype="multipart/form-data" class="col-12 mx-0 pb-2">
      @csrf
    <!--se utiliza el metodo put para enviar datos
        mediante esta directiva-->

        {{$method}}

  <div class="form-group row col-12 justify-content-between mx-0 px-3">
    <input type="text" class="form-control col-6" id="name" aria-describedby="emailHelp" placeholder="Enter email" value="{{$name}}" name="name" style="font-size:1.5rem"> 
    <input type="text" class="form-control col-5" id="lastname" aria-describedby="emailHelp" placeholder="Enter email" value="{{$lastname}}"name="lastname" style="font-size:1.5rem">     
  </div>

  <div class="form-group px-3">
      <textarea  id="description" cols="66" rows="5" name="description"class="form-control">{{$description}}</textarea>
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
        <input type="email" class="form-control col-9 col-lg-11" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$email}}" disabled >
      </div>
      <div class="form-group border-bottom row col-6 col-xl-12 px-0 pb-2 mx-0 justify-content-between">
          <i class="fab fa-facebook text-profile fa-2x pt-1"></i>
        <input type="text" class="form-control col-10 col-lg-11" id="facebook" aria-describedby="emailHelp" placeholder="Enter email" name="facebook"value="{{$facebook}}">   
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
  