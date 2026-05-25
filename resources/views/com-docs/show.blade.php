@extends('layout')

@section('content')

<h1>{{ $com_data['name'] }}</h1>

<p>
    Origin:
    {{ $com_data['origin'] }}
</p>

<p>
    Price:
    {{ $com_data['price'] }}
</p>

@endsection