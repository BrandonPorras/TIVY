@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

<!--Hice push-->

@section('content')
    <div class="container-fluid ">
        <div class="row d-flex ">
            <div class="col-lg-2 col-12 bg-white px-0 border-right">
                <div class="row col-12 d-flex justify-content-lg-start px-0 mx-0 justify-content-around">
                     @component('components.card.profile',
                        ['img'=>'/storage/milos.png',
                        'name'=>'Ricardo Milos',
                        'description'=>'Bailar,sonreir,serRicardoMilos',
                        'email'=>'ricardomilos@dance.com',
                        'facebook'=>'Ricardo Milos',
                        'activities'=>'activity'
                        ])
                    @endcomponent
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
            <div class="col-lg-5 col-12 bg-white">
                @component('components.activities',
                ['activityTitle'=>'My Tivys','buttonCreate'=>true,'tivies'=>$myTivies,'styleImg'=>'img-tivy-Small'])
              
                @endcomponent
                @component('components.activities',
                ['activityTitle'=>'Pending Tivys','buttonCreate'=>false,'tivies'=>$pendingTivies,'styleImg'=>'img-tivy-Small'])
                @endcomponent
            </div>
            <div class="col-lg-5 col-12  bg-white">
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
    @component('components.dashboard.tivy.create')
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


<<<<<<< HEAD
    function changeImageEdit(input,id){      
        let imageEdit=document.querySelector('#imgEdit-Tivy'+id)    
=======
    function changeImageEdit(input){      
        let imageEdit=document.querySelector('#imgEdit-Tivy')    
>>>>>>> c78b49060b22bcc6ecface4a2a7e88ba68463eff
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






