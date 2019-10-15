<tr>
    @forelse ($data as $datum)
    @if (strpos($datum, '.jpg') !== false )
        <td> 
            <img src={{'/storage/tivy/'.$datum}} alt="" class="" style="height:3em;">
        </td>
    @else
        <td>@lang($datum)</td>
    @endif
    @empty
    <p>No hay tivies</p>
@endforelse
<td>
    <label for="#btn-authorize">
        <i class="fas fa-check-circle fa-3x"></i>
    </label>
</td>
@if ($manageUser)
    <td>
        <label for="">
            <i class="fas fa-user-slash fa-3x"></i>
        </label>
    </td> 
@endif

<td>
    <label for="#btn-deny">
        <i class="fas fa-times-circle fa-3x"></i>
    </label>
</td>
</tr>

<form method="POST" action="{{ route('tivy.allow',$tivyId) }}">
    @csrf
    @method('PUT')
    <div class="d-none">
        <button id="btn-authorize" type="submit">@lang('Authorize')</button>
    </div>
</form>

<form method="POST" action="{{ route('tivy.destroy', $tivyId) }}">
    @csrf
    @method('DELETE')
        <div class="d-none">
            <button id="btn-Deny" type="submit">@lang('Deny')</button>
        </div>
</form>