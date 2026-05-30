@extends('layout')

@section('body-class', 'computers-page')
@section('title', 'Computers')

@section('content')

<div class="computers-container">

    @forelse($com_docs as $com_data)

        <div class="computer-card">

            <h2>{{ $com_data->name }}</h2>

            <p>
                بلد المنشأ: {{ $com_data->origin }}
            </p>

            <p>
                السعر: {{ $com_data->price }}
            </p>
            <a href="{{ route('com-docs.show', $com_data->id) }}">
                عرض التفاصيل
            </a>

        </div>

    @empty

        <h2>لا توجد أجهزة في قاعدة البيانات</h2>

    @endforelse

</div>

@endsection