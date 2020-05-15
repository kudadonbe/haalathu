<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'hsaryfm.tech') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-light bg-light">
            <a href="/" class="navbar-brand"><img src="img/png/logo.png" style="height: 60px;" alt=""></a>
<!--             
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="މިތަނުގައި ލިޔުއްވާ..." aria-label="Search" style="margin: 5px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ހޯދާ</button>
            </form>
             -->
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>