
@extends('layout')
@section('body-class', 'create-page')
@section('title', 'create')

@section('content')
        
        <form class="computer-form" action="{{route('com-docs.store')}}" method="post">
             @csrf
            <h1 class="form-title">
                إدخال حاسوب جديد
            </h1>

            <!-- نوع الجهاز -->
            <div class="input-group">

                <label>
                    نوع الجهاز
                </label>

                <input type="text" placeholder="أدخل نوع الجهاز" name="computer-name" value="{{old('computer-name')}}">
                @error('computer-name')
                {{$message}}
                @enderror
            </div>

            <!-- بلد المنشأ -->
            <div class="input-group">

                <label>
                    بلد المنشأ
                </label>

                <input type="text" placeholder="أدخل بلد المنشأ" name="computer-origin" value="{{old('computer-origin')}}">
                @error('computer-origin')
                {{$message}}
                @enderror
            </div>

            <!-- السعر -->
            <div class="input-group">

                <label>
                    السعر
                </label>

                <input type="number" placeholder="أدخل السعر" name="computer-price" value="{{old('computer-price')}}">
                @error('computer-price')
                {{$message}}
                @enderror
            </div>

            <!-- الأزرار -->
            <div class="form-buttons">

                <button type="submit" class="send-btn">
                    إرسال البيانات
                </button>

                <button type="reset" class="reset-btn">
                    Reset
                </button>

            </div>

        </form>
@endsection