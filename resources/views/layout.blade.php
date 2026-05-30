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