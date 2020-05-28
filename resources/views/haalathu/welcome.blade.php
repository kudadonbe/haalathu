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
            background-image: url("/img/B15_75op.png");
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

        .pagename {
            color: #BC7701;
        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col">

            <a href="/haalathu">
                <div style="padding: 10px;">
                    <img src="\img\png\haLogo.png" style="height: 100px;">
                </div>
            </a>
        </div>
    </div>

    </div>
    <main class="">
        <div class="">
            <div class="row">
                <div class="col-3"></div>
                <div class="col people">

                    <div class="pageimage">
                        <a href="/haalathu/people">
                            <svg class="bi bi-people" width="5em" height="5em" viewBox="0 0 16 16" fill="#007850" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                            </svg>
                        </a>
                    </div>
                    <div class="pagename dhi">
                        މީހުން
                    </div>

                </div>
                <div class="col geybisee">
                    <div class="pageimage">
                        <a href="/haalathu/houses">
                            <!-- <img src="\img\png\haalathu\home.png" style="height:70px;" alt=""> -->
                            <svg class="bi bi-house-door" width="5em" height="5em" viewBox="0 0 16 16" fill="#007850" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </a>
                    </div>
                    <div class="pagename dhi">
                        ގޭބިސީތައް
                    </div>
                </div>
                <div class="col viyaa">

                    <div class="pageimage">
                        <a href="/haalathu/shops">
                            <!-- <img src="\img\png\haalathu\shop.png" style="height:70px;" alt=""> -->
                            <svg class="bi bi-shop" width="5em" height="5em" viewBox="0 0 16 16" fill="#007850" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM3.12 1.175A.5.5 0 0 1 3.5 1h9a.5.5 0 0 1 .38.175l2.759 3.219A1.5 1.5 0 0 1 16 5.37v.13h-1v-.13a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.13H0v-.13a1.5 1.5 0 0 1 .361-.976l2.76-3.22z" />
                                <path d="M2.375 6.875c.76 0 1.375-.616 1.375-1.375h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 0 0 2.75 0h1a1.375 1.375 0 1 0 2.75 0h1a2.375 2.375 0 0 1-4.25 1.458 2.371 2.371 0 0 1-1.875.917A2.37 2.37 0 0 1 8 6.958a2.37 2.37 0 0 1-1.875.917 2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.5h1c0 .76.616 1.375 1.375 1.375z" />
                                <path d="M4.75 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3.75 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                <path fill-rule="evenodd" d="M2 7.846V7H1v.437c.291.207.632.35 1 .409zm-1 .737c.311.14.647.232 1 .271V15H1V8.583zm13 .271a3.354 3.354 0 0 0 1-.27V15h-1V8.854zm1-1.417c-.291.207-.632.35-1 .409V7h1v.437zM3 9.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5V15H7v-5H4v5H3V9.5zm6 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4zm1 .5v3h2v-3h-2z" />
                            </svg>
                        </a>
                    </div>
                    <div class="pagename dhi">
                        ވިޔަފާރިގެތައް
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </main>
</body>

</html>