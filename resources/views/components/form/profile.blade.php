<form class='col-12 mx-0 px-0'>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$name}}">   
  </div>
  <div class="form-group">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$lastname}}">   
    </div>
  <div class="form-group">
      <textarea name="" id="" cols="66" rows="10">{{$description}}</textarea>
  </div>
  <div class="row col-12 bg-profile mx-0 px-0">
    <h6 class="card-title row col-12 border-bottom pl-2 pb-2 mx-0 px-0">
      <strong class="text-break text-profile">
        @lang('Contact information')
      </strong>
    </h6>
    <div class="row col-12 flex-lg-column flex-row d-flex justify-content-between px-0 mx-0">
      <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$email}}">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$facebook}}">   
      </div>
    </div>
    <div class="row col-12 d-flex justify-content-center px-0 mx-0">
      <button type="submit" class="btn col-12 col-md-5 btn-TivyDarkOrange px-4 rounded-pill">@lang('Edit profile')</button>
    </div>
  </div>
  <div class="d-none">
    <input class="" style="" onchange="changeImageProfile(this)" id="image-Profile" name="btn_file" type="file" >
  </div>
</form>
  