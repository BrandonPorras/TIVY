@extends('layouts.app')

@section('header')   
    @component('components.header')
    @endcomponent 
@endsection

@section('content')
    <div class="container-fluid ">
        <div class="row d-flex ">
            <div class="col-sm-2 col-12 bg-white px-0 border-right">
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
            <div class="col-sm-5 col-12 bg-white">
                @component('components.activities',['activityTitle'=>'My Tivys'])
                @endcomponent
                @component('components.activities',['activityTitle'=>'Pending Tivys'])
                @endcomponent
            </div>
            <div class="col-sm-5 col-12  bg-white">
                @component('components.activities',['activityTitle'=>'Upcoming Tivys'])
                @endcomponent
                @component('components.activities',['activityTitle'=>"Tivys I've gone to"])
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')        
    @endcomponent
@endsection





