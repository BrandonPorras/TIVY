<div id="{{"tivy-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-0 px-0">
                    <div class="row col-12 mx-0 px-0">
                        <label for="" class="col-12 py-0 px-0 my-0 mx-0">
                        <img src="{{asset('storage/tivy/'.$tivy->img)}}" alt=" No hays" class="card-img-top">
                        </label>
                    <h1 class="text-white modal-title position-absolute" style="bottom:2rem; left:2rem;">{{$tivy->tittle}}</h5>        
                        <div class="row position-absolute" style="top:1rem;left:2rem;">
                            <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-primary rounded-pill" type="submit">
                                    <i class="text-white fas fa-trash-alt"></i>
                                </button>          
                            </form> 
                 
                            <button class="btn bg-danger rounded-pill mx-2" type="submit" data-toggle="modal"  data-target="{{"#tivyEdit-".($tivy->id)}}">
                                <i class="text-white fas fa-archive"></i>
                            </button>
                        </div>
                        <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-content border-top-0 px-2 py-2">
                        @component('components.form.tivy',['tivy'=>$tivy]) 
                        @slot('method')
                            @method('POST')
                        @endslot
                        @slot('button_text')
                            @lang('Show Tivy')
                        @endslot
                        @slot('route')
                            {{""}} 
                        @endslot
                        
                    @endcomponent
                </div>
            </div>
        </div>
    </div>