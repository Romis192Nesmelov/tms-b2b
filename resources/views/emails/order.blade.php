@extends('layouts.mail')

@section('content')
    <h3>{{ __('New order').' '.env('APP_NAME') }}</h3>
    <table style="margin-top: 30px; margin-bottom: 30px; width: 100%; border: 1px solid grey;">
        <tr style="background-color: #1e1e1e;">
            <th style="width:20%; text-align: center; color: white; padding: 5px;"><b>{{ __('Article') }}</b></th>
            <th style="text-align: left; color: white; padding: 5px;"><b>{{ __('Name') }}</b></th>
            <th style="text-align: center; color: white; padding: 5px;"><b>{{ __('Count') }}</b></th>
        </tr>
        @php $rowCount = 1; @endphp
        @foreach(session('basket') as $id => $article)
            <tr style="{{ $rowCount % 2 ? 'background-color:#6d737b;' : '' }}">
                <td style="max-width: 15%; text-align: center; padding: 5px; {{ $rowCount % 2 ? 'color:white;' : '' }}"><b>{{ $article['article'] }}</b></td>
                <td style="text-align: left; padding: 5px; {{ $rowCount % 2 ? 'color:white;' : '' }}">{{ $article['name'] }}</td>
                <td style="max-width: 5%; text-align: center; padding: 5px; {{ $rowCount % 2 ? 'color:white;' : '' }}"><b>{{ $article['value'] }}</b></td>
            </tr>
            @php $rowCount++; @endphp
        @endforeach
    </table>
    @include('partials.request-fields')
@endsection
