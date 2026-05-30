
@extends('layout')
@section('body-class', 'edit-page')
@section('title', 'edit')

@section('content')
        
        <form class="computer-form" action="{{route('com-docs.update',['com_doc' => $com_data->id])}}" method="post">
             @csrf
             @method('PUT')
            <h1 class="form-title">
                edit the details
            </h1>

            <!-- نوع الجهاز -->
            <div class="input-group">

                <label>
                    نوع الجهاز
                </label>

                <input type="text" placeholder="أدخل نوع الجهاز" name="computer-name" value="{{$com_data->name}}">
                @error('computer-name')
                {{$message}}
                @enderror
            </div>

            <!-- بلد المنشأ -->
            <div class="input-group">

                <label>
                    بلد المنشأ
                </label>

                <input type="text" placeholder="أدخل بلد المنشأ" name="computer-origin" value="{{$com_data->origin}}">
                @error('computer-origin')
                {{$message}}
                @enderror
            </div>

            <!-- السعر -->
            <div class="input-group">

                <label>
                    السعر
                </label>

                <input type="number" placeholder="أدخل السعر" name="computer-price" value="{{$com_data->price}}">
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