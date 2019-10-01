<div id="{{"tivyEdit-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header py-0 px-0">
                <div class="row col-12 mx-0 px-0">
                    <label for="btn_editTivy" class="col-12 py-0 px-0 my-0 mx-0">
<<<<<<< HEAD
                    <img id="imgEdit-Tivy-{{$tivy['id']}}" src="{{asset('storage/tivy/'.$tivy->img)}}" alt=" No hays" class="card-img-top" style="width: 100%;height: 25rem;object-fit: cover;">
=======
                    <img id="imgEdit-Tivy" src="{{asset('storage/tivy/'.$tivy->img)}}" alt=" No hays" class="card-img-top" style="width: 100%;height: 25rem;object-fit: cover;">
>>>>>>> c78b49060b22bcc6ecface4a2a7e88ba68463eff
                    </label>
                    <div class="row position-absolute" style="top:1rem;left:2rem;">
                        <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-danger rounded-pill" type="submit" style="width:3rem;height:3rem;">
                                <i class="text-white fas fa-trash-alt"></i>
                            </button>          
                        </form> 
                    </div>
                    <button type="button" class="text-white close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-content border-0 px-2 py-2">
<<<<<<< HEAD
                    @component('components.form.tivy',['tivy'=>$tivy,'button_text'=>'Edit Tivy','disable'=>"enable",'changeImg'=>'changeImageEdit(this,'.$tivy->id.')']) 
=======
                    @component('components.form.tivy',['tivy'=>$tivy,'button_text'=>'Edit Tivy','disable'=>"enable",'changeImg'=>'changeImageEdit(this)']) 
>>>>>>> c78b49060b22bcc6ecface4a2a7e88ba68463eff
                    @slot('method')
                        @method('PUT')
                    @endslot
                    @slot('route')
                        {{route('tivy.update',$tivy['id'])}} 
                    @endslot
                    @slot('btn_id')
                        {{'btn_editTivy'}}
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
</div>