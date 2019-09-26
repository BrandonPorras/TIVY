<div id="create-dashboard" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header py-0 px-0">
            <div class="row col-12 mx-0 px-0">
                <label for="btn_file" class="col-12 py-0 px-0 my-0 mx-0">
                    <img src="/storage/naruto-run.jpg" alt=" No hays" class="card-img-top">
                </label>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close" style="top:1rem; right:1rem">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="modal-content border-top-0 px-2 py-2">
            @component('components.form.tivy') 
                @slot('method')
                    @method('POST')
                @endslot
                @slot('button_text')
                    @lang('Create Tivy')
                @endslot
                @slot('route')
                    {{route('tivy.store')}} 
                @endslot
            @endcomponent
        </div>
    </div>
  </div>
</div>