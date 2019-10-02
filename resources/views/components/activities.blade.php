<div class="row px-4 py-1" style="{{ $activityTitle === "Upcoming Tivys"&&$tivies==null ? "margin-bottom:25%;" : "" }} {{ $activityTitle === "Tivys I've gone to"&&$tivies==null ? "margin-bottom:25%;" : "" }}">
    <div class="row col-12">
        <h4 class="my-3">
            <Strong>@lang($activityTitle)</Strong>
        </h4>
    </div>
    <div class="row col-12 d-flex flex-nowrap flex-lg-wrap pl-2 scrolling-wrapper justify-content-start">
        @if($buttonCreate)
        <div class="card mb-4 border-0 mx-2" style=" flex: 0 0 40%;">
            <button type="button" data-toggle="modal" data-target="#create-dashboard" class="btn btn-transparent border border-info" style="flex:0 0 40%; ">
                <p class="my-0" style="padding-top:22.5%;padding-bottom:22.5%">
                    @lang('Create a new Tivy')
                </p> 
            </button>
        </div>
        @endif
        @forelse($tivies as $tivy)
            @if($tivy->user_id== Auth::user()->id)
                @component('components.card.activity',['tivy'=>$tivy,'styleImg'=>$styleImg]))
                @endcomponent  
                @component('components.dashboard.tivy.show',['tivy'=>$tivy])
                @endcomponent
                @component('components.dashboard.tivy.edit',['tivy'=>$tivy,'user'=>Auth::user()]))
                @endcomponent  
            @endif
            @empty
        @endforelse        
    </div>
</div>

