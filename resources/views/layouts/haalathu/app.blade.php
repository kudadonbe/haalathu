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
            /* background-color: #fff; */
            background-image: url("/img/B15_75op.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            color: black;
            font-family: "MV Typewriter", 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            /* height: 300px; */
            /* Should be removed. Only for demonstration */
        }

        .left,
        .right {
            width: 30%;
        }


        .middle {
            width: 40%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .left {
            /* css for content left */
            color: black;
        }

        .right {
            /* css for content right */
            color: black;

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
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="row barnav">

            <div class="column left">
                <a href="">
                    <img src="\img\png\logout.png" style="height: 30px;" alt="">
                </a>
            </div>

            <div class="column middle">
                <a href="/haalathu">
                    <img src="\img\png\haLogo.png" style="height: 50px; 
                padding:5px; 
                display: block;
                margin-left: auto;
                margin-right: auto;" alt="">
                </a>
            </div>
            <div class="column right">
                <div class="userinfo">
                    <div class="userlogo">
                        <img src="\img\png\round_logo.png" style="height: 30px;">
                    </div>
                    <div class="username">
                        ޙުސައިން ޝަރީފު
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