@props(['disabled' => false, 'values', 'selected' => null, 'option' => 'name'])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-700 bg-gray-900 text-gray-300 focus:border-indigo-500 focus:border-indigo-600 focus:ring-indigo-500 focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    @if (is_array($values))
        @foreach ($values as $value)
            <option value="{{ $value }}" {{ $selected && $value == (int)$selected ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    @else
        @foreach ($values as $value)
            <option value="{{ $value->id }}" {{ $selected && $value->id == (int)$selected ? 'selected' : '' }}>{{ $value[$option] }}</option>
        @endforeach
    @endif
</select>
