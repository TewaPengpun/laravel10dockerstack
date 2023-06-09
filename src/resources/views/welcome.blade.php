<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <div class="container text-end">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
                    <div class="container mt-5">
                        <h1>Home Page</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quam itaque eum ratione veritatis asperiores aut at, necessitatibus corrupti commodi modi inventore cum possimus ipsa vel culpa corporis debitis mollitia.</p>
                        ,<h2 class="mb-5">ตัวอย่างหน้าเว็บไซต์</h2>
                        <p>แก้ไขโดยทีม dev</p>
                    </div>
            @endif

            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
