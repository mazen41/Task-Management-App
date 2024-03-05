<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel</title>
        {{-- <link href="{{ asset('css/welcome.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@500,400,300,200&f[]=excon@900,700,500&display=swap" rel="stylesheet">
        <link href="https://api.fontshare.com/v2/css?f[]=general-sans@301,300,400&display=swap" rel="stylesheet">
        {{-- @vite(['resources/scss/welcome.scss', 'resources/css/app.css','resources/js/app.js']) --}}
        <link rel="stylesheet" href="css/welcome.css">
    </head>
    <body class="antialiased">
        <div class="nav"> 
            <div class="logo">
                <div class="title">
                    <i class="fa-solid fa-check"></i>
                    <h2>tasks.</h2>
                </div>
                {{-- <div class="span">
                    <p>Features</p>
                </div> --}}
            </div>           
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register"><span>Register</span></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="main">
            <div class="title">
                <h2>Tasks, just tasks.</h2>
                <p>Keep track of the daily tasks in life and get that satisfaction upon completion</p>
            </div>
            <div class="buttons">
                <button class="first">Get Started</button>
                <button class="second">Learn More</button>
            </div>
        </div>
    </body>
</html>
