<input name="{{ $name }}" {{ isset($type) ? 'type='.$type : '' }} {{ isset($min) ? 'min='.$min : '' }} {{ isset($max) ? 'max='.$max : '' }} class="{{ $class ?? '' }} bg-gray-600 text-white px-3 py-1 rounded-md" {{ isset($placeholder) ? 'placeholder='.$placeholder : '' }} {{ isset($value) ? 'value='.$value : '' }}>
@if (isset($with_error) && $with_error)
    @include('partials.form.input-form-error')
@endif
