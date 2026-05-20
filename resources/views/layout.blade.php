<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>

    
    <link rel="stylesheet" href="style.css">
</head>

<body class="@yield('body-class')">
   
    <header class="toolbar">

        <a href="{{ route('welcome') }}">//->name of page

            <button>
                welcome 
            </button>

        </a>

        <a href="{{ route('computers') }}">//->name of page

            <button>
                 computers
            </button>

        </a>


        <a href="{{ route('create') }}">//->name of page

            <button>
                create computer
            </button>

        </a>

        <a href="{{ route('contact') }}">//->name of page

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