<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            /* public\img\png\logor.png */
            background-color: #fff;
            background-image: url("/img/png/logor.png");
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
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

        .links>a {
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

        .app-links {
            height: 26px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <!-- {{ config('app.name') }} -->
                <!-- <img src="\img\png\logo.png" alt="" style="height:50vw; opacity: 100%;"> -->
                <img src="\img\svg\alarm-fill.svg" alt="" width="32" height="32" title="Bootstrap">
            </div>
            <div class="links">
                <a href="http://instagram.com/hsaryfm"><img src="img\links\insta_logo.png" class="app-links" alt=""></a>
                <a href="http://twitter.com/hsaryfm"><img src="\img\links\twt_logo.png" class="app-links" alt=""></a>
                <a href="/haalathu"><img src="\img\png\haalathu\logo.png" class="app-links" alt=""></a>
                <a href="https://facebook.com/hsaryfm"><img src="\img\links\fb_logo.png" class="app-links" alt=""></a>
                <a href="https://github.com/hsaryfm"><img src="\img\links\GitHub_logo.png" class="app-links" alt=""></a>

            </div>
        </div>
    </div>

</body>

</html>