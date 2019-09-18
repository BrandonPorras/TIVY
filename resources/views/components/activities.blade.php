<div class="row px-4 py-1">
    <h4 class="my-3">
        <Strong>@lang($activityTitle)</Strong>
    </h4>
    <div class="row d-flex flex-nowrap flex-lg-wrap pl-2 scrolling-wrapper justify-content-start  ">
        @forelse($tivies as $tivy)
        @if($tivy->user_id== Auth::user()->id)
            @component('components.card.activity',['tivy'=>$tivy]))
            @endcomponent  
            @component('components.dashboard.tivy.show',['tivy'=>$tivy])
            @endcomponent
            @component('components.dashboard.tivy.edit',['tivy'=>$tivy, 'user'=>Auth::user()]))
            @endcomponent  
        @endif
        @empty<p></p>  
        @endforelse        

        @if($buttonCreate)
            <div class="card mb-4 border-0 mx-2" style=" flex: 0 0 40%;">
                <button type="button" data-toggle="modal" data-target="#create-dashboard" class="btn btn-transparent border border-info" style="flex:0 0 40%; ">
                    <p style="padding-top:45%;padding-bottom:45%">
                        @lang('Create a new Tivy')
                    </p>
                </button>
            </div>
        @endif
    </div>
</div>

