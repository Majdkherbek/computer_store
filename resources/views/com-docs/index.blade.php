@extends('layout')

@section('content')

<h1>Computers List</h1>

@foreach($com_docs as $com_data)

    <li>

        <a href="{{ route('com-docs.show', $com_data['id']) }}">

            {{ $com_data['name'] }}

        </a>

    </li>

@endforeach

@endsection