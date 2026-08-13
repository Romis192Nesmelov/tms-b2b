@extends('layouts.mail')

@section('content')
    <h3>{{ __('Message from the site').' '.env('APP_NAME') }}</h3>
    <p><b>{{ __('User name') }}:</b> {{ $name }}</p>
    <p><b>E-mail:</b> {{ $email }}</p>
    <p><b>{{ __('Phone') }}:</b> {{ $phone }}</p>
    <h4>{{ __('Message') }}:</h4>
    <p>{{ $text }}</p>
@endsection
