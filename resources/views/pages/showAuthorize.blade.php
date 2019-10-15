@extends('layouts.app')
@section('header')
    @component('components.header')
    @endcomponent 
@endsection
@section('content')
    <div class="container-fluid px-0 ">
        <div class="row">
            <div class="col-lg-2 col-12 bg-white px-0 border-right pb-5">
                <div class="row col-12 d-flex justify-content-lg-start px-0 mx-0 justify-content-around">
                    <div class="col-12 px-0">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-authorizeTivy-list" data-toggle="list" href="#list-authorizeTivy" role="tab" aria-controls="authorizeTivy">@lang("Authorize Tivy's")</a>
                            <a class="list-group-item list-group-item-action" id="list-manageUser-list" data-toggle="list" href="#list-manageUser" role="tab" aria-controls="manageUser">@lang("Manage Users")</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-12 bg-light pb-5">
                <div class="row">
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-authorizeTivy" role="tabpanel" aria-labelledby="list-authorizeTivy-list">
                                @component('components.table.authorize')
                                    @slot('header')
                                        @component('components.table.header',['data'=>['title','author','image','authorize','deny']])
                                        @endcomponent
                                    @endsloT
                                    @slot('information')
                                        @foreach ($unauthorizeTivies as $tivy)
                                            @component('components.table.data',['manageUser'=>false,'data'=>[$tivy->tittle,$tivy->name,$tivy->img],'tivyId'=>$tivy->id])
                                            @endcomponent
                                        @endforeach
                                    @endslot
                                @endcomponent
                            </div>
                            <div class="tab-pane fade" id="list-manageUser" role="tabpanel" aria-labelledby="list-manageUser-list">
                                @component('components.table.authorize')  
                                    @slot('header')
                                        @component('components.table.header',['data'=>['username','user description','email','profile photo','role actual','aprove','deactivate','delete']])
                                        @endcomponent
                                    @endslot
                                    @slot('information')
                                        @foreach ($users as $user)
                                            @component('components.table.data',['manageUser'=>true,'data'=>[$user->name,$user->description,$user->email,$user->imagen,$user->role_user],'tivyId'=>3])
                                            @endcomponent 
                                        @endforeach
                                    @endslot   
                                @endcomponent   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent 
@endsection


