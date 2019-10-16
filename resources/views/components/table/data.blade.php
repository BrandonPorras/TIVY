<tr>
    @foreach ($data as $datum)
        @if (strpos($datum, '.jpg') !== false || strpos($datum, '.png') !== false )
            <td> 
                <img src={{$datum}} alt="" class="" style="height:3em;">
            </td>
        @else
            <td>@lang($datum)</td>
        @endif
 
    @endforeach
    @if ($manageUser)
        <td>
            <form method="POST" action="{{route('user.updateRole',array($user_id, $role_id))}}">
                @csrf
                @method('PUT')       
                <button type="submit" class="btn btn-primary">@lang($role==='admin' ? 'user':'admin')</button>
            </form>  
        </td> 
    @endif
    <td>
        <form method="POST" action="{{ route($successRoute,is_null($tivyId) ? $user_id :$tivyId) }}" >
            @csrf
            @method('PUT')
            <button id="btn-authorize" type="submit" class="bg-transparent border-0"><i class="fas fa-check-circle fa-3x text-success"></i></button>            
        </form>  
    </td>
    @if ($manageUser)
        <td>
            <form method="POST" action="{{route('user.editState',$user_id)}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="user" id="user" value="{{ Auth::user()->id}}">        
                <button  name="state" value={{$state===0?1:0}} class="bg-transparent border-0" type="submit">
                <i class="fas {{$state===0 ? 'fa-user': 'fa-user-slash'}} fa-3x text-muted "></i></button>    
            </form>
        </td> 
    @endif

    <td>
        <form method="POST" action="{{ route($deleteRoute, is_null($tivyId) ? $user_id :$tivyId) }}" >
            @csrf
            @method('DELETE')
            <button id="btn-deny"  type="submit" class="bg-transparent border-0"><i class="fas fa-times-circle fa-3x text-danger"></i></button>        
        </form>
    </td>
</tr>



