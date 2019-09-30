<div id="{{"tivy-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg rounded">
            <div class="modal-content">
                <div class="modal-header py-0 px-0">
                    <div class="row col-12 mx-0 px-0">
                        <label for="" class="col-12 py-0 px-0 my-0 mx-0">
                        <img src="{{asset('storage/tivy/'.$tivy->img)}}" alt=" No hays" class="card-img-top" style="width: 100%;height: 25rem;object-fit: cover;">
                        </label>
                    <h1 class="text-white modal-title position-absolute" style="bottom:2rem; left:2rem;">{{$tivy->tittle}}</h5>        
                        <div class="row position-absolute" style="top:1rem;left:2rem;">
                            <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn bg-danger rounded-pill" type="submit" style="width:3rem;height:3rem;">
                                    <i class="text-white fas fa-trash-alt"></i>
                                </button>          
                            </form> 
                            <button class="btn bg-primary rounded-pill mx-2" type="submit" data-toggle="modal" onClick="closeShow({{$tivy->id}})" data-target="{{"#tivyEdit-".($tivy->id)}}" style="width:3rem;height:3rem;">
                                <i class="text-white fas fa-archive"></i>
                            </button>
                        </div>
                    <button id="closeModalTivy-{{$tivy->id}}" type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-content border-0 px-0 py-0">
                    @component('components.form.calification')
                    @endcomponent
                    @component('components.form.tivy',['tivy'=>$tivy,'button_text'=>'Show Tivy','disable'=>"disabled",'changeImg'=>'']) 
                        @slot('method')
                            @method('POST')
                        @endslot
                        @slot('route')
                            {{""}} 
                        @endslot
                        @slot('btn_id')
                            @lang('btn_showTivy')
                        @endslot
                    @endcomponent
                    @component('components.form.comment')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>