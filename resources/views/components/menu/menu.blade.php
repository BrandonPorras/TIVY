<div  class="container-fluid position-fixed bg-white d-lg-none d-block " style="z-index:100; bottom:0">
    <div class="container">
        <div class="row col-12 d-flex justify-content-around py-3">         
            <a href="{{ url('/') }}" class="btn py-0 px-0 border-0 bg-transparent">
                <i class="fas fa-home text-black fa-3x"></i>
            </a>
            <button type="button" data-toggle="modal" data-target="#create-dashboard" class="btn py-0 px-0 border-0 bg-transparent">
                <i class="fas fa-plus-square  fa-3x"></i>
            </button>
            <div class="row col-1 d-flex justify-content-center py-0 px-0">
                <img src='/storage/profile/{{$img}}' alt="" class="rounded-circle " style="height:3em;">
            </div>          
        </div>
    </div>
</div>