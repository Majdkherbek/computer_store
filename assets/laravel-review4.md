This file is a merged representation of a subset of the codebase, containing specifically included files, combined into a single document by Repomix.

<file_summary>
This section contains a summary of this file.

<purpose>
This file contains a packed representation of a subset of the repository's contents that is considered the most important context.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.
</purpose>

<file_format>
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  - File path as an attribute
  - Full contents of the file
</file_format>

<usage_guidelines>
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.
</usage_guidelines>

<notes>
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Only files matching these patterns are included: routes/web.php, app/Http/Controllers/**, app/Models/**, database/migrations/**, resources/views/**
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Files are sorted by Git change count (files with more changes are at the bottom)
</notes>

</file_summary>

<directory_structure>
app/Http/Controllers/ComputerController.php
app/Http/Controllers/Controller.php
app/Http/Controllers/StaticController.php
app/Models/Computer.php
app/Models/User.php
database/migrations/0001_01_01_000000_create_users_table.php
database/migrations/0001_01_01_000001_create_cache_table.php
database/migrations/0001_01_01_000002_create_jobs_table.php
database/migrations/2026_05_25_213117_create_computers_table.php
resources/views/com-docs/create.blade.php
resources/views/com-docs/index.blade.php
resources/views/com-docs/show.blade.php
resources/views/computers.blade.php
resources/views/contact.blade.php
resources/views/create.blade.php
resources/views/index.blade.php
resources/views/layout.blade.php
routes/web.php
</directory_structure>

<files>
This section contains the contents of the repository's files.

<file path="app/Http/Controllers/Controller.php">
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
</file>

<file path="app/Models/User.php">
<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
</file>

<file path="database/migrations/0001_01_01_000000_create_users_table.php">
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
</file>

<file path="database/migrations/0001_01_01_000001_create_cache_table.php">
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->bigInteger('expiration')->index();
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->bigInteger('expiration')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
</file>

<file path="database/migrations/0001_01_01_000002_create_jobs_table.php">
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedSmallInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('connection');
            $table->string('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();

            $table->index(['connection', 'queue', 'failed_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
</file>

<file path="database/migrations/2026_05_25_213117_create_computers_table.php">
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
</file>

<file path="resources/views/com-docs/create.blade.php">
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

                <input type="text" placeholder="أدخل نوع الجهاز" name="computer-name">

            </div>

            <!-- بلد المنشأ -->
            <div class="input-group">

                <label>
                    بلد المنشأ
                </label>

                <input type="text" placeholder="أدخل بلد المنشأ" name="computer-origin">

            </div>

            <!-- السعر -->
            <div class="input-group">

                <label>
                    السعر
                </label>

                <input type="number" placeholder="أدخل السعر" name="computer-price">

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
</file>

<file path="resources/views/com-docs/index.blade.php">
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
</file>

<file path="resources/views/com-docs/show.blade.php">
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
</file>

<file path="app/Http/Controllers/StaticController.php">
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Computer;



class StaticController extends Controller
{
   public function contact () {
    return view('contact');
}

 public function create () {
    return view('create');
}


public function computer()
{
    return view('computers', [
        'com_docs' => Computer::all()
    ]);
}

public function welcome ($category=null) {
    if(isset($category)){
        //return '<h1>'.$category.'</h1>';
        return "<h1>{$category}</h1>";
    }
    return view('index');
}
}
</file>

<file path="app/Models/Computer.php">
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'name',
        'origin',
        'price'
    ];
}
</file>

<file path="resources/views/contact.blade.php">
@extends('layout')
@section('body-class', 'contact-page')
@section('title', 'contact')

@section('content')
        <div class="welcome-text">
            <h1 class="main-title">
                أهلاً بك في صفحة الدعم
            </h1>

        </div>


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
</file>

<file path="resources/views/index.blade.php">
@extends('layout')
@section('body-class', 'welcome-page')

@section('title', 'welcome')

@section('content')
        <h1 class="main-title">
            welcome here
        </h1>

        <p class="sub-title">
            نتمنى لك تجربة رائعة داخل الموقع
        </p>
@endsection
</file>

<file path="resources/views/create.blade.php">
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

                <input type="text" placeholder="أدخل نوع الجهاز" name="computer-name">

            </div>

            <!-- بلد المنشأ -->
            <div class="input-group">

                <label>
                    بلد المنشأ
                </label>

                <input type="text" placeholder="أدخل بلد المنشأ" name="computer-origin">

            </div>

            <!-- السعر -->
            <div class="input-group">

                <label>
                    السعر
                </label>

                <input type="number" placeholder="أدخل السعر" name="computer-price">

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
</file>

<file path="app/Http/Controllers/ComputerController.php">
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('com-docs.index' , [
            'com_docs'=>computer::all()
        ]);
    }
   /* private static function getData(){
        return [
            ['id'=>'1' , 'origin'=>'usa' , 'name'=>'hp' , 'price'=>'800$'] ,
            ['id'=>'2' , 'origin'=>'canda' , 'name'=>'dell' , 'price'=>'950$'] ,
            ['id'=>'3' , 'origin'=>'china' , 'name'=>'lenovo' , 'price'=>'1100$'] ,
            ['id'=>'4' , 'origin'=>'taiwan' , 'name'=>'asus' , 'price'=>'1500$']
        ];
    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('com-docs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer=new computer();
        $computer->name = $request->input('computer-name') ;
        $computer->origin = $request->input('computer-origin') ;
        $computer->price = $request->input('computer-price') ;

        $computer->save();
        return redirect()->route('com-docs.index');   
    }

    /**
     * Display the specified resource.
     */
   /* public function show(string $id)
    {
        $com_docs = self::getData();

        $index = array_search($id, array_column($com_docs, 'id'));

        if ($index === false) {
            abort(404);
        }

        return view('com-docs.show', [
            'com_data' => $com_docs[$index]
        ]);
    }8*/

     public function show(string $id)
    {
        $com_data = Computer::findOrFail($id);

        return view('com-docs.show', [
            'com_data' => $com_data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
</file>

<file path="resources/views/computers.blade.php">
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

        </div>

    @empty

        <h2>لا توجد أجهزة في قاعدة البيانات</h2>

    @endforelse

</div>

@endsection
</file>

<file path="routes/web.php">
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
Route::get('/welcome/{category?}',[StaticController::class, 'welcome'] )->name('welcome');

Route::get('/contact',[StaticController::class, 'contact'] )->name('contact');

Route::get('/create',[StaticController::class, 'create'])->name('create');

Route::get('/computers',[StaticController::class, 'computer'])->name('computers');

Route::resource('com-docs',ComputerController::class);
</file>

<file path="resources/views/layout.blade.php">
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="@yield('body-class')">
   
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


        <a href="{{ route('com-docs.create') }}">

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
</file>

</files>
