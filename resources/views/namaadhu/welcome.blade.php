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
        @font-face {
            font-family: "Dhivehi";
            src: url("/fonts/mvtypebold.ttf");
            src: url("/fonts/mvtyper.ttf");
        }

        html,
        body {
            background-color: #fff;
            background-image: url("/img/png/logor.png");
            color: #636b6f;
            font-family: 'Dhivehi', 'Nunito', sans-serif;
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
            font-size: 1vh;
        }

        .title img {
            height: 25vh;
        }

        .links>a {
            color: #636b6f;
            padding: 0 2vh;
            font-size: 3vh;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 4vh;
        }

        .app-links {
            height: 5vh;
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
            <p class="mv" dir="rtl">


                މިއީ ނަމާދު ކުރަން ދަސްކުރުމަށް ފަސޭހަ ކޮށްދެނިނުމުގެ ގޮތުން ތައްޔާރުކުރެވިފައިވާ އެޕެއްކެވެ.
            </p>
            <div class="links">
                <a href="{{ asset('storage/files/Namdadh.swf') }}" class="app-links"><img src="\img\png\namaadhu.png" class="app-links" alt=""></a>

            </div>
        </div>
    </div>

</body>

</html>