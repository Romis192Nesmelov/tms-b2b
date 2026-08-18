@extends('layouts.mail')

@section('content')
    <h3>{{ __('Message from the site').' '.env('APP_NAME') }}</h3>
    @include('partials.request-fields')
@endsection
