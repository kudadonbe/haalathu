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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Styles -->
    <style>
        html,
        body {

            /* background-color:darkgray;
            background-image: url("/img/B15_75op.png"); */
            /* background-repeat: no-repeat; */
            /* background-attachment:fixed;
            background-position: center;
            background-size: cover; */

            color: black;
            font-family: "MV Typewriter", 'Nunito', sans-serif;
            font-weight: 200;
            /* height: 100vh;
            margin: 0; */
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three unequal cols that floats next to each other */
        .col {
            width: 100%;
            padding: 5px;
            /* background-color: beige; for dev */
            /* float: left; */
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
           
        }

        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.6667%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33%;
        }

        .col-5 {
            width: 41.667%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.6667%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83%;
        }

        .col-11 {
            width: 91.667%;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11 {
            padding: 5px;
        }

        .row {
            display: flex;
            /* padding-bottom: 3px; */
        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 5px;
        }

        .barnav {
            background-color: #A0D2F3;
        }

        .dhi {

            font-family: "MV Typewriter";
        }

        .heading {
            background-color: inherit;
            color: navy;
        }

        .reptype {
            background-color: burlywood;
        }

        .owner {
            background-color: aquamarine;
        }

        .ppl {
            background-color: darkslateblue;
        }

        .goods {
            background-color: lightpink;

        }

        .repnametext {
            font-size: 25px;
            font-weight: bold;
        }

        .ownername {
            font-weight: bold;

        }

        .husername {
            font-size: 10px
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="row barnav">

            <div class="col">
                <div class="row userinfo">
                    <div class="col-2 userlogo">
                        <img src="{{Auth::user()->user_img}}" style="height: 30px;">
                    </div>
                    <div class="col husername">
                        {{Auth::user()->name}}
                    </div>
                </div>
            </div>
            <div class="col">
                <a href="/haalathu">
                    <img src="\img\png\haLogo.png" style="height: 50px;
                        padding:5px; 
                        display: block;
                        margin-left: auto;
                        margin-right: auto;" alt="">
                </a>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-2">
                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <img src="\img\png\logout.png" style="height: 30px;" alt="">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>
    </div>
</body>

</html>