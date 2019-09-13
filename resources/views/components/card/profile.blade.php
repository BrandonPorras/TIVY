<div class=" row d-flex justify-content-center py-4 px-2">
  <img src={{$img}} alt="" class="rounded-circle" style="width:8rem">
  <div class="card-body">
    <h4 class="card-title px-2 pb-2 text-center">
      <strong >
        {{$name}}
      </strong>
    </h4>
    <p class="card-text px-3 pb-2 text-break text-muted">
      {{$description}}
    </p>
    <h6 class="card-title border-bottom pl-2 pb-2">
      <strong class="text-break">
        @lang('Contact information')
      </strong>
    </h6>  
<div class="row col-12">
  <h6 class="card-title border-bottom pl-2 pb-2">
    <i class="fas fa-envelope"></i>
  <a href="" class="text-break">
    {{$email}}
  </a>    
</h6>
</div>
<div class="row col-12">
  <h6 class="card-title border-bottom pl-2 pb-2">
    <i class="fab fa-facebook"></i>
    <a href="" class="text-break">
      {{$facebook}}
    </a>
  </h6>
</div>
    <h6 class="card-title border-bottom pl-2 pb-2">
      <strong class="text-break">
        @lang('Interests')
      </strong>
    </h6>
    <div class="row d-flex justify-content-start flex-wrap pl-2">                 
      @component('components.link.activity',['img'=>'/storage/leer.png','link'=>'no'])
      @endcomponent
      <button type="button" class="rounded-circle py-1 bg-transparent" style="width:60px; height:60px">+</button>     
    </div>  
  </div>
</div>
    
