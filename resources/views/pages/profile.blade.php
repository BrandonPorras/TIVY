@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

<!--Hice push-->
<<<<<<< HEAD
<?php 
use TIVY\tivy;    
$tivies= Tivy::all();
     
?>
=======
>>>>>>> 7dd5397d0157dd07ed8126d4d4b32dda481350b8

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
                @component('components.activities',['activityTitle'=>'My Tivys','buttonCreate'=>true,'tivies'=>$myTivies])
              
                @endcomponent
                @component('components.activities',['activityTitle'=>'Pending Tivys','buttonCreate'=>false,'tivies'=>$pendingTivies])
                @endcomponent
            </div>
            <div class="col-lg-5 col-12  bg-white">
                @component('components.activities',['activityTitle'=>'Upcoming Tivys','buttonCreate'=>false,'tivies'=>$upComingTivies])
                @endcomponent
                @component('components.activities',['activityTitle'=>"Tivys I've gone to",'buttonCreate'=>false,'tivies'=>$tiviesIGone])
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
        let imageDOM = document.querySelector('.image-profile');
        
        imageDOM.addEventListener('click', function(){
            document.querySelector('#imagen_perfil').click();
        });
    
        function changeImage(input){            
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    imageDOM.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        };
    </script>






