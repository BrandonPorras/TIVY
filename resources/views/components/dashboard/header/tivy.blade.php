<div class="row col-12 mx-0 px-0">
    @if ($btn_header=== 'btn_createTivy')
        <label  for="{{$btn_header}}" class="row d-flex justify-content-center col-12 px-0 my-0 py-0 mx-0 bg-gray" style="height:20rem;">
            <img id="{{$image_id}}" src="" alt=" No hays" class="card-img-top d-none" style="width: 100%;height: 20rem;object-fit: cover;">
            <p class="h1 text-light text-white align-self-center position-absolute">
                <small>@lang("add an image")</small>
            </p>                
        </label>
    @else
        <label for="{{$btn_header=== 'btn_showTivy' ? '' : $btn_header}}" class="col-12 py-0 px-0 my-0 mx-0">
            <img id="{{$image_id}}" src="{{asset('storage/tivy/'.$tivy->img)}}" alt=" No hays" class="card-img-top" style="width: 100%;height: 25rem;object-fit: cover;">
        </label>
        <div class="row position-absolute" style="top:1rem;left:2rem;">
            <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn bg-danger rounded-pill" type="submit" style="width:3rem;height:3rem;">                        
                    <i class="text-white fas fa-trash-alt"></i>
                </button>          
            </form> 
            @if ($btn_header=== 'btn_showTivy')
                <button class="btn bg-primary rounded-pill mx-2" type="submit" data-toggle="modal" onClick="closeShow({{$tivy->id}})" data-target="{{"#tivyEdit-".($tivy->id)}}" style="width:3rem;height:3rem;">
                    <i class="text-white fas fa-archive"></i>
                </button>
            @endif
        </div>
    @endif
    <button id="{{ $btn_header=== 'btn_showTivy' ? 'closeModalTivy-'.$tivy->id : ''  }}" type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


