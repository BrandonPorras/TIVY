@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

<!--Hice push-->

@section('content')
    <div class="container-fluid ">
        <div class="row d-flex ">
            <div class="col-lg-2 col-12 bg-white px-0 border-right pb-5">
                <div class="row col-12 d-flex justify-content-lg-start px-0 mx-0 justify-content-around">
                     @component('components.card.profile',
                        ['img'=>Auth::user()->imagen,
                        'name'=>(Auth::user()->name).' '.Auth::user()->lastname,
                        'description'=>Auth::user()->description,
                        'email'=>Auth::user()->email,
                        'facebook'=>(Auth::user()->name).' '.Auth::user()->lastname,
                        'activities'=>'activity'
                        ])
                    @endcomponent
                </div>
                <div class="d-none">
                    <button id="modal-profile" type="button" data-toggle="modal" data-target="#profile-dashboard" class="btn btn-transparent border border-info" >
                    </button>
                </div>
                <div class="row col-12 px-4">
                    <h6 class="card-title border-bottom pl-2 pb-2">
                        <strong class="text-break">
                            @lang('Interests')
                        </strong>
                    </h6>
                    <div class="d-flex flex-nowrap flex-lg-wrap pl-2 scrolling-wrapper">    
                        @component('components.link.activity',['img'=>'/storage/leer.png','link'=>'no'])
                        @endcomponent
                        @component('components.link.activity',['img'=>'/storage/leer.png','link'=>'no'])
                        @endcomponent
                        @component('components.link.activity',['img'=>'/storage/leer.png','link'=>'no'])
                        @endcomponent
                        <button type="button" data-toggle="modal" data-target="#edit-dashboard" class=" py-0 px-0 border border-primary bg-transparent rounded-circle" style="flex:0 0 30%; ">
                            <p class="my-0 mx-0"style="padding-top:30%;padding-bottom:30%">+</p>
                        </button>  
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 bg-light pb-5">
                @component('components.activities',
                ['activityTitle'=>'My Tivys','buttonCreate'=>true,'tivies'=>$myTivies,'styleImg'=>'img-tivy-Small'])
              
                @endcomponent
                @component('components.activities',
                ['activityTitle'=>'Pending Tivys','buttonCreate'=>false,'tivies'=>$pendingTivies,'styleImg'=>'img-tivy-Small'])
                @endcomponent
            </div>
            <div class="col-lg-5 col-12  bg-light pb-5">
                @component('components.activities',
                ['activityTitle'=>'Upcoming Tivys','buttonCreate'=>false,'tivies'=>$upComingTivies,'styleImg'=>'img-tivy-Small'])
                @endcomponent
                @component('components.activities',
                ['activityTitle'=>"Tivys I've gone to",'buttonCreate'=>false,'tivies'=>$tiviesIGone,'styleImg'=>'img-tivy-large'])
                @endcomponent
            </div>
        </div>
    </div>
    @component('components.menu.menu')
    @endcomponent 

    @component('components.dashboard.profile', ['idDashboard'=>'profile-dashboard'])
        @slot('header')
            @component('components.dashboard.header.profile',['img'=>Auth::user()->imagen])
                
            @endcomponent
        @endslot
        @slot('content')
            @component('components.form.profile',    
            [
            'name'=>(Auth::user()->name).' '.Auth::user()->lastname,
            'description'=>Auth::user()->description,
            'email'=>Auth::user()->email,
            'facebook'=>(Auth::user()->name).' '.Auth::user()->lastname,
            'activities'=>'activity'
            ])
                
            @endcomponent
        @endslot
    @endcomponent


    @component('components.dashboard.tivy',['idDashboard'=>'create-dashboard'])
        @slot('header')
            @component('components.dashboard.header.tivy',['btn_header'=>'btn_createTivy','image_id'=>'imgCreate-Tivy','tivy'=>null])      
            @endcomponent    
        @endslot
        @slot('content')
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
        @endslot
    @endcomponent

@endsection

@section('footer')
    @component('components.footer')        
    @endcomponent
@endsection

<script>     
    function changeImageCreate(input){
        let imageCreate=document.querySelector('#imgCreate-Tivy')
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imageCreate.className='card-img-top';
                imageCreate.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }

    }
    function closeShow(id){
   
        document.querySelector('#closeModalTivy-'+id).click()   
    }


    function changeImageEdit(input,id){      
        let imageEdit=document.querySelector('#imgEdit-Tivy-'+id)    
        console.log(imageEdit)  
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imageEdit.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    };

  
</script>






