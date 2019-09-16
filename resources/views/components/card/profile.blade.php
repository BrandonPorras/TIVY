<div class=" row d-flex justify-content-center py-4 px-2">
  <img src={{$img}} alt="" class="rounded-circle" style="width:8rem">
  <div class="card-body">
    <h4 class="card-title pl-2 pb-2 text-center">
      <strong>
        {{$name}}
      </strong>
    </h4>   
    <p class="row card-text px-3 pb-2 text-break">
      {{$description}}
    </p>
    <h6 class="card-title border-bottom border-light pl-2 pb-2">
      <strong>
        @lang('Contact information')
      </strong>
    </h6>
    <h6 class="card-title border-bottom border-light pl-2 pb-2">
      {{$email}}
    </h6>
    <h6 class="card-title border-bottom border-light pl-2 pb-2">
      {{$facebook}}
    </h6>
    <h6 class="card-title border-bottom border-light pl-2 pb-2">
      <strong>
        @lang('Interests')
      </strong>
    </h6>
    <div class="row d-flex justify-content-start flex-wrap pl-2">                 
      @component('components.link.activity',[ 'img'=> "/storage/leer.png",'link'=>'no'])
      @endcomponent
      <button type="button" class="rounded-circle py-1"  style="width:60px; height:60px">+</button>     
     
    </div>  
  </div>
</div>
    
