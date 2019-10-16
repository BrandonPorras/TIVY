<tr>
    @foreach ($data as $datum)
        @if (strpos($datum, '.jpg') !== false )
            <td> 
                <img src={{'/storage/tivy/'.$datum}} alt="" class="" style="height:3em;">
            </td>
        @else
            <td>@lang($datum)</td>
        @endif
 
    @endforeach
    <td>
        <form method="POST" action="{{ route('tivy.allow',$tivyId) }}" >
            @csrf
            @method('PUT')

            <button id="btn-authorize" type="submit" class="bg-transparent border-0"><i class="fas fa-check-circle fa-3x"></i></button>            
        </form>
        c:\xampp\htdocs\TIVY\resources\views\pages\manageUser.blade.php
    </td>
    @if ($manageUser)
        <td>
            <label for="">
                <i class="fas fa-user-slash fa-3x"></i>
            </label>
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



