<p><b>{{ __('User name') }}:</b> {{ $name }}</p>
<p><b>E-mail:</b> {{ $email }}</p>
<p><b>{{ __('Phone') }}:</b> {{ $phone }}</p>
@if ($text)
    <h4>{{ __('Message') }}:</h4>
    <p>{{ $text }}</p>
@endif