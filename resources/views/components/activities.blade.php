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
                <p class="my-0 text-primary" style="padding-top:22.5%;padding-bottom:22.5%">
                    @lang('Create a new Tivy')
                </p> 
            </button>
        </div>
        @endif
        @forelse($tivies as $tivy)
            @if($tivy->user_id== Auth::user()->id)
                @component('components.card.activity',['tivy'=>$tivy,'styleImg'=>$styleImg]))
                @endcomponent

                @component('components.dashboard.tivy',['idDashboard'=>'tivy-'.$tivy->id])
                    @slot('header')
                        @component('components.dashboard.header.tivy',['btn_header'=>'btn_showTivy','image_id'=>'','tivy'=>$tivy])      
                        @endcomponent    
                    @endslot
                    @slot('content')
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
                    @endslot
                @endcomponent

                @component('components.dashboard.tivy',['idDashboard'=>'tivyEdit-'.$tivy->id])
                    @slot('header')
                        @component('components.dashboard.header.tivy',['btn_header'=>'btn_editTivy-'.$tivy->id,'image_id'=>'imgEdit-Tivy-'.$tivy->id,'tivy'=>$tivy])      
                        @endcomponent    
                    @endslot
                    @slot('content')
                        @component('components.form.tivy',['tivy'=>$tivy,'button_text'=>'Edit Tivy','disable'=>"enable",'changeImg'=>'changeImageEdit(this,'.$tivy->id.')']) 
                            @slot('method')
                                @method('PUT')
                            @endslot
                            @slot('route')
                                {{route('tivy.update',$tivy['id'])}} 
                            @endslot
                            @slot('btn_id')
                                {{'btn_editTivy-'.$tivy->id}}
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent                
            @endif
            @empty
        @endforelse        
    </div>
</div>