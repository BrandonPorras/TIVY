@extends('layouts.app')

@section('content')
<div class="container ml-5">
 <table class="table table-responsive table-hover ">
    <thead>
        <tr>
            <th>Title</th>
            <th>Autor</th>
            <th>Image</th>
            
            <th>Authorize or Deny</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        use TIVY\Tivy;
        use TIVY\User;
        $tivies= Tivy::all();
        $users= User::all();
      ?>
    @forelse($tivies as $tivy){{--forelse publication--}}
        @if($tivy->state==1)
         @forelse($users as $user)
            @if($tivy->user_id==$user->id)
                   <tr>
                    <td>{{ $tivy->tittle }}</td>
                    <td>{{ $user->name }}</td>
                    <td><div class="card card-img">
                        <img  class=""  width='100%'src="{{ url('storage/tivy/'.$tivy->img) }}" alt="" ></td>
                {{--forelse publication--}}
                         </div>
                        <td class="">
                                <p>{{ $tivy->tittle }}</p> 
                            </td>      

                            <td>
                                <form method="POST" action="{{ route('tivy.allow',$tivy->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn  btn-success"type="submit">@lang('Athorize')</button>
                                </form>
                            </td>
                            
                            <td>
                                <form method="POST" action="{{ route('tivy.destroy', $tivy) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn  btn-primary"type="submit">@lang('Deny')</button>
                                </form>
                            </td>
                            
                      @endif
                    </tr>
                    @empty
                    <p>No hay tivies pendientes</p>
              @endforelse{{--endforelse user--}}
              @endif
             @empty
                <p>No hay tivies</p>
          
    @endforelse{{--endforelse publication--}}
    </tbody>
</table> 
</div>
@endsection