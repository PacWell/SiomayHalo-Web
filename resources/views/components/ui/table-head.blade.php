@props(['columns' => []])

<tr>
    @foreach ($columns as $col)
        <th>{{ $col }}</th>
    @endforeach
</tr>
