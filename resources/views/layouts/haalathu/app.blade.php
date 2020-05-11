<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ޙާލަތު</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            background-image: url("/img/B15_75op.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            color: #636b6f;
            font-family: "dhiFont", 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

    </style>
</head>

<body>
    <div id="">

        <nav class="navbar navbar-light bg-light">
            <a href="/haalathu" class="navbar-brand"><img src="\img\png\haLogo.png" width="30" height="30" alt=""></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="މިތަނުގައި ލިޔުއްވާ..." aria-label="Search" style="margin: 5px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ހޯދާ</button>
            </form>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>