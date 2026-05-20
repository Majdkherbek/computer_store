
@extends('layout')

@section('title', 'create')

@section('content')
        <form class="computer-form">

            <h1 class="form-title">
                إدخال حاسوب جديد
            </h1>

            <!-- نوع الجهاز -->
            <div class="input-group">

                <label>
                    نوع الجهاز
                </label>

                <input type="text" placeholder="أدخل نوع الجهاز">

            </div>

            <!-- بلد المنشأ -->
            <div class="input-group">

                <label>
                    بلد المنشأ
                </label>

                <input type="text" placeholder="أدخل بلد المنشأ">

            </div>

            <!-- السعر -->
            <div class="input-group">

                <label>
                    السعر
                </label>

                <input type="number" placeholder="أدخل السعر">

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