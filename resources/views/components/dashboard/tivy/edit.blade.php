<div id="{{"tivyEdit-".($tivy->id)}}"  class="modal {{$tivy->id}}" tabindex="-1" role="dialog">
    
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header py-0 px-0">
                <div class="row col-12 mx-0 px-0">
                    <label for="imagen_publication" class="col-12 py-0 px-0 my-0 mx-0"><img src="/storage/naruto-run.jpg" alt=" No hays" class="card-img-top"></label>
                    <h1 class="modal-title position-absolute" style="bottom:0rem; left:0rem; right:0rem; top:0rem; margin:auto;">@lang('Edit tivy')</h5>        
                    <div class="row position-absolute" style="top:1rem;left:2rem;">
                        <form action="{{ route('tivy.destroy', $tivy) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn rounded-pill bg-danger" type="button">
                                <i class="text-white fas fa-trash-alt"></i>
                            </button>          
                        </form> 
                    </div>
                    <button type="button" class="text-white close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-content border-top-0 px-2 py-2">
                    @component('components.form.tivy') 
                    @slot('method')
                        @method('PUT')
                    @endslot
                    @slot('button_text')
                        @lang('Edit tivy')
                    @endslot
                    @slot('route')
                        {{route('tivy.update',$tivy->id)}} 
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
</div>