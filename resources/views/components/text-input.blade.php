@props(['disabled' => false, 'icon' => null])
@if ($icon)
    <img class="icon-input" src="{{ asset('storage/images/'.$icon) }}" />
@endif
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-white p-2 rounded-md '.($icon ? 'pl-7' : '')]) !!}>
