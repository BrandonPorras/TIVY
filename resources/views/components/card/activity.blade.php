<div class="card mb-4 border-0 mx-2"  style=" flex: 0 0 40%;">
  <label for="btnTivy-{{$tivy->id}}"><img src="/storage/1.jpg" class="card-img-top" alt="..."></label>
  <div class="card-body px-1 py-1">
    <label for="btnTivy-{{$tivy->id}}"><h5 class="card-title mb-1">{{$tivy->tittle}}</h5></label>
  <p class="card-text text-muted">{{$tivy->date}}</p>
  </div>
</div>

<button id="btnTivy-{{$tivy->id}}" class="d-none bg-transparent border-0 p-0 {{$tivy->id}}" 
  style="flex:0 0 40%" data-toggle="modal" data-target="{{"#tivy-".($tivy->id)}}" >
</button>