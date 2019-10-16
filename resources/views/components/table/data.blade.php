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
        <form method="POST" action="{{ route('tivy.allow',$tivyId) }}" >
            @csrf
            @method('PUT')
            <button id="btn-authorize" type="submit" class="bg-transparent border-0"><i class="fas fa-check-circle fa-3x"></i></button>            
        </form>  
    </td>
    @if ($manageUser)
        <td>
            @if ($state===1)
                <label for="">
                    <i class="fas fa-user-slash fa-3x"></i>
                </label>
            @else
                @if ($state===0)
                    <label for="">
                        <i class="fas fa-user fa-3x"></i>
                    </label>
                @else
                    <label for="">
                        <i class="fas fa-user fa-3x"></i>
                    </label>
                @endif
            @endif
        </td> 
    @endif

    <td>
        <form method="POST" action="{{ route('tivy.destroy', $tivyId) }}" >
            @csrf
            @method('DELETE')

            <button id="btn-deny"  type="submit" class="bg-transparent border-0"><i class="fas fa-times-circle fa-3x"></i></button>        
        </form>

    </td>
</tr>



