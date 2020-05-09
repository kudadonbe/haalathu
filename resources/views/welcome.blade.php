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

        /* 

            @font-face {
                font-family: "dhiFont";
                src: url("../fonts/GoudyStM-webfont.woff");
                }

                

        

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
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
        } */
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class=p-3>
                    <!-- <img src="" class="rounded-circle"> -->
                    <img src="/img/logo/logo.png" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <form action="">
            <style>
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
                    background-color: #3F51B5;
                    color: #fff;
                    font-weight: 600;
                    border-radius: 5px;
                    width: 100%;
                    margin: 10px 0;

                }
            </style>
            <input type="text" placeholder="އައިޑީ ކާޑު ނަންބަރު"><br>
            <input type="password" placeholder="ޕާސްވޯޑު"><br>
            <button>login</button>

            <!-- <textarea name="" id="" cols="20" rows="1" placeholder="އިޑީ ކާޑު ނަންބަރު"></textarea><br> -->
            <!-- <textarea name="" id="" cols="20" rows="1" placeholder="ޕާސްވޯޑު"></textarea><br> -->
            
        </form>

    </div>
          
</body>

</html>