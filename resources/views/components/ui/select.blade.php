@props(['name' => '', 'options' => [], 'placeholder' => ''])

<select name="{{ $name }}" id="{{ $name }}">
    @if ($placeholder)
        <option value="">{{ $placeholder }}</option>
    @endif
    @foreach ($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>
