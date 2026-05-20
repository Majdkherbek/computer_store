This file is a merged representation of the entire codebase, combined into a single document by Repomix.

# File Summary

## Purpose
This file contains a packed representation of the entire repository's contents.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)

# Directory Structure
```
css/app.css
js/app.js
views/computers.blade.php
views/contact.blade.php
views/create.blade.php
views/index.blade.php
views/layout.blade.php
```

# Files

## File: css/app.css
```css
@import 'tailwindcss';

@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
@source '../../storage/framework/views/*.php';
@source '../**/*.blade.php';
@source '../**/*.js';

@theme {
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol', 'Noto Color Emoji';
}
```

## File: js/app.js
```javascript
//
```

## File: views/computers.blade.php
```php
@extends('layout')

@section('title', 'contact')
        <h1 class="computers-title">
            قائمة الحواسيب
        </h1>

        <div class="computers-container">

            <!-- كرت 1 -->
            <div class="computer-card">

                <h2>HP Laptop</h2>

                <p>بلد المنشأ: USA</p>

                <p>السعر: 800$</p>

            </div>

            <!-- كرت 2 -->
            <div class="computer-card">

                <h2>Dell Inspiron</h2>

                <p>بلد المنشأ: Canada</p>

                <p>السعر: 950$</p>

            </div>

            <!-- كرت 3 -->
            <div class="computer-card">

                <h2>Lenovo ThinkPad</h2>

                <p>بلد المنشأ: China</p>

                <p>السعر: 1100$</p>

            </div>

            <!-- كرت 4 -->
            <div class="computer-card">

                <h2>Asus ROG</h2>

                <p>بلد المنشأ: Taiwan</p>

                <p>السعر: 1500$</p>

            </div>

        </div>

@section('content')

@endsection
```

## File: views/contact.blade.php
```php
@extends('layout')

@section('title', 'contact')

@section('content')
        <h1 class="main-title">
            أهلاً بك في صفحة الدعم
        </h1>

        <p class="sub-title">
            تواصل معنا عبر الروابط التالية
        </p>

        <div class="social-links">

            <a href="https://facebook.com" target="_blank">
                Facebook
            </a>

            <a href="https://instagram.com" target="_blank">
                Instagram
            </a>

        </div>
@endsection
```

## File: views/create.blade.php
```php
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
```

## File: views/index.blade.php
```php
@extends('layout')

@section('title', 'welcome')

@section('content')
        <h1 class="main-title">
            welcome here
        </h1>

        <p class="sub-title">
            نتمنى لك تجربة رائعة داخل الموقع
        </p>
@endsection
```

## File: views/layout.blade.php
```php
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>

    <!-- ربط ملف CSS الخارجي -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- شريط الأدوات -->
    <header class="toolbar">

        <a href="{{ route('welcome') }}">

            <button>
                welcome 
            </button>

        </a>

        <a href="{{ route('computers') }}">

            <button>
                 computers
            </button>

        </a>


        <a href="{{ route('create') }}">

            <button>
                create computer
            </button>

        </a>

        <a href="{{ route('contact') }}">

            <button>
                contact us
            </button>

        </a>

    </header>



    <!-- القسم الأوسط -->
    <main class="hero-section">
        @yield('content')

    </main>

</body>

</html>
```
