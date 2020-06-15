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

    <!-- Styles -->
    <style>
        @font-face {
            font-family: "Dhivehi";
            src: url("/fonts/mvtypebold.ttf");
            src: url("/fonts/mvtyper.ttf");
        }

        html,
        body {
            background-color: #e6ecff;
            /* background-image: url("/img/B15_75op.png"); */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            color: #636b6f;
            font-family: 'Dhivehi', 'Nunito', sans-serif;
            font-weight: 200;
            /* font-size: 16px; */
            height: 100vh;
            margin: 0;
        }


        .basmala {
            font-family: "A_Bismillah";
            font-size: 1rem;
            text-align: center;

        }

        .ar {
            font-family: "Calibri";
            font-size: 1rem;

        }

        .mv {
            text-align: justify;
            text-indent: 1rem;
            padding-left: 1em;
            padding-right: 0.3em;
            line-height: 2.5;
        }

        .salaam {
            text-align: center;
        }

        .mvdate {
            text-align: center;


        }

        * {
            box-sizing: border-box;
        }

        .col {
            width: 100%;
            padding: 0.3em;
            /* background-color: beige; for dev */
            /* float: left; */
            /* height: 300px; */
            /* Should be removed. Only for demonstration */

        }

        .col-1 {
            width: 10%;
        }

        .col-2 {
            width: 20%;
        }

        .col-3 {
            width: 30%;
        }

        .col-4 {
            width: 40%;
        }

        .col-5 {
            width: 50%;
        }

        .col-6 {
            width: 60%;
        }

        .col-7 {
            width: 70%;
        }

        .col-8 {
            width: 80%;
        }

        .col-9 {
            width: 90%;
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9 {
            padding: 0.3em;
        }

        .row {
            display: flex;
            /* align-items: baseline; */
            /* padding-bottom: 3px; */
        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0.3em;
        }

        .barnav {
            /* background-color: #CDE9DC; */
            align-items: center;
        }



        .pplHead {
            background-color: #DFD4F9;
            color: navy;
        }


        .reptype {
            background-color: #C4F3DF;
        }

        .goHead {
            background-color: #F9EBD4;
        }

        .owner {
            background-color: #DDFCEF;
        }

        .repnametext {
            font-size: 2rem;
            font-weight: bold;
        }

        .ownername {
            font-weight: bold;

        }



        input[type=text] {
            padding: 0.3em;
            margin: 0.3em 0;
            border-radius: 5px;
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;
            font-family: "Dhivehi";

        }

        input[type=password] {
            padding: 0.3em;
            margin: 0.3em 0;
            border-radius: 5px;
            /* border: 1,1,1,0; */
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;
            font-family: "Dhivehi";
        }

        input[type=email] {
            padding: 0.3em;
            margin: 0.3em 0;
            border-radius: 5px;
            /* border: 1,1,1,0; */
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;
            font-family: "Dhivehi";
        }

        fieldset {
            border-radius: 10px;
            border: 1px solid lightblue;
        }

        label {
            display: block;
            align-self: center;
        }

        button {
            /* remove default behavior */
            appearance: none;
            -webkit-appearance: none;
            /* usual styles */
            padding: 0.3em;
            border: none;
            background-color: lightblue;
            color: #636b6f;
            font-weight: 300;
            border-radius: 5px;
            /* width: 100%; */
            margin: 10px 0;
            font-family: "Dhivehi";
        }

        button:hover {
            background-color: gray;
            color: white;
        }


        .links>a {
            color: #636b6f;
            /* padding: 0 25px; */
            /* font-size: 13px; */
            /* font-weight: 600; */
            /* letter-spacing: .1rem; */
            text-decoration: none;
            /* text-transform: uppercase; */
        }

        .pagename {
            color: #BC7701;
        }


        .container {
            padding: 0.3em;
        }

        .logout svg {
            float: left;

        }


        .navibar {
            align-items: top;
            background-color: rgba(0, 255, 0, 0.2);
        }

        .userinfo {
            text-align: center;
            /* background-color: blue; */

        }

        .userlogo {
            padding: 0.1em;
            display: block;

        }

        .username {
            font-size: 0.8rem;
            padding-right: 1em;
            /* background-color: red; */

        }

        .logo img {
            /* background-color: grey; */
            display: block;
            /* padding: 1vh; */
            height: 3em;
            margin-left: auto;
            margin-right: auto;

        }

        .copyright {
            font-family: 'Consolas';
            font-size: 0.5em;
            text-align: center;
        }

        /* @media (max-widht: 670px) {
            body {
                font-size: 4px;
                background-color: red;
            }
        } */
    </style>
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