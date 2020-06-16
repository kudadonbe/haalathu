<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>hsaryfm.tech</title>

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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/haalathu.css') }}" rel="stylesheet">
    <!-- Styles -->
</head>

<body>
    <main>
        <div class="row navibar">
            <!-- Authentication Links -->
            @guest

            <div class="col logo">
                <a href="/haalathu"><img src="\img\png\haalathu\logo.png" alt=""></a>
            </div>

            @if (Route::has('register'))

            @endif

            @else
            <div class="col userinfo">
                <div class="row">
                    <div class="userlogo">
                        <img src="{{Auth::user()->user_img}}" style="height: 1em; border-radius: 25%;">
                    </div>
                    <div class="username"> {{ Auth::user()->name }} </div>
                </div>
            </div>
            <div class="col logo">
                <a href="/haalathu"><img src="\img\png\haalathu\logo.png" alt=""></a>
            </div>
            <div class="col logout">
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <svg class="bi bi-box-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="#007850" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                        <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z" />
                        <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z" />
                    </svg>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            @endguest
        </div>

        <div class="row">
            <div class="col">
                @yield('content')
            </div>

        </div>
    </main>
    <footer>
        <div class="row copyright" dir="ltr">
            <div class="col">
                <span>© hsaryfm.tech</span>
            </div>
        </div>
    </footer>

</body>

</html>