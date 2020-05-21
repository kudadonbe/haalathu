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
    <script>


    </script>

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
            /* background-image: url("/img/svg/haWell.svg"); */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            /* color: #636b6f; */
            font-family: "MV Typewriter", 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        input[type=text] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            background: none;
            border: 1px solid lightblue;

        }

        input[type=password] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            /* border: 1,1,1,0; */
            text-align: center;
            background: none;
            border: 1px solid lightblue;
        }

        button {
            /* remove default behavior */
            appearance: none;
            -webkit-appearance: none;
            /* usual styles */
            padding: 10px;
            border: none;
            background-color: lightblue;
            color: #636b6f;
            /* font-weight: 600; */
            border-radius: 5px;
            width: 100%;
            margin: 10px 0;

        }

        * {
            box-sizing: border-box;
        }

        /* Create three unequal cols that floats next to each other */
        .col {
            width: 100%;
            padding: 5px;
            text-align: center;

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

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col">

            <a href="/haalathu">
                <div style="padding: 10px;">
                    <img src="\img\png\haLogo.png" style="height: 100px; padding: 5px;">
                </div>
            </a>
        </div>
    </div>

    </div>

    <main class="">
        <div class="">
            <div class="row">
                <!-- <style>
                    .rah {
                        background-color: blue;
                    }

                    .geybisee {
                        background-color: orange;

                    }

                    .viyaa {
                        background-color: red;

                    }
                </style> -->
                <div class="col-3"></div>
                <div class="col geybisee">
                    <div class="pagename dhi">
                        ގޭބިސީތައް
                    </div>
                    <a href="/haalathu/hreport">
                        <div class="pageimage">
                            <img src="\img\png\haalathu\home.png" style="height:70px;" alt="">
                        </div>
                    </a>
                </div>
                <div class="col viyaa">
                    <div class="pagename dhi">
                        ވިޔަފާރިގެތައް
                    </div>
                    <a href="/haalathu/sreport">
                        <div class="pageimage">
                            <img src="\img\png\haalathu\shop.png" style="height:70px;" alt="">
                        </div>
                    </a>
                </div>
                <!-- <div class="col rah">
                    <div class="pagename dhi">
                        މުޅި ރަށް
                    </div>
                    <a href="">
                        <div class="pageimage">
                            <img id="rah" onmousemove="invColor()" onmouseout="oriColor()" src="\img\png\haalathu\island.png" style="height:70px; padding:5px" alt="">
                        </div>
                    </a>
                </div> -->
                <div class="col-3"></div>
            </div>
        </div>
    </main>
</body>

</html>