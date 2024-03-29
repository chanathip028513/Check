<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sonto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url("https://bit.ly/2ZpBsbW");
                color: #636b6f;
                font-family: 'Mali', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>  
                        <a href="{{url('/about')}}">About</a>

                        @else
                    
                        <a href="{{url('/about')}}">About</a>
                        <a href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sonto Bubble Cha <br>
                    
                </div>

                <div class="links">
                    <a href="https://www.facebook.com/SontoBubbleCha/">Facebook</a>
                    <a href="https://www.instagram.com/sontobubblecha/">Instagram</a>
                    <a href="https://www.foodpanda.co.th/th/restaurant/m3nx/sonto-bubble-cha-wat-suan-kaew">Foodpanda</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
