@forelse ($data as $datum)
    <th scope="col">@lang($datum)</th>
    @empty
@endforelse