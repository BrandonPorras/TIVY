<div id="create-dashboard" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header py-0 px-0">
            <div class="row col-12 mx-0 px-0">
                <label  for="btn_createTivy" class="row d-flex justify-content-center col-12 px-0 my-0 py-0 mx-0 bg-gray" style="height:20rem;">
                    <img id="imgCreate-Tivy" src="" alt=" No hays" class="card-img-top d-none" style="width: 100%;height: 20rem;object-fit: cover;">
                    <p class="h1 text-light text-white align-self-center position-absolute"><small>@lang("add an image")</small></p>                
                </label>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="modal-content border-0 px-2 py-2">
            @component('components.form.tivy',['tivy'=>null,'button_text'=>'Create Tivy','disable'=>"disable",'changeImg'=>'changeImageCreate(this)']) 
                @slot('method')
                    @method('POST')
                @endslot
                @slot('route')
                    {{route('tivy.store')}} 
                @endslot
                @slot('btn_id')
                    {{'btn_createTivy'}}
                @endslot
            @endcomponent
        </div>
    </div>
  </div>
</div>