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
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <a href="/haalathu">
                    <div style="padding: 10px;"><img src="\img\png\haLogo.png" style="height: 100px;"></div>
                </a>
            </div>

        </div>

        <main class="py-4">

            <div class="row justify-content-center">

                <form action="/haalathu/home">

                    <input type="text" placeholder="އައިޑީ ކާޑު ނަންބަރު"><br>
                    <input type="password" placeholder="ޕާސްވޯޑު"><br>
                    <button>login</button>

                    <!-- <textarea name="" id="" cols="20" rows="1" placeholder="އިޑީ ކާޑު ނަންބަރު"></textarea><br> -->
                    <!-- <textarea name="" id="" cols="20" rows="1" placeholder="ޕާސްވޯޑު"></textarea><br> -->

                
        

            </div>
            <!-- <div class="row justify-content-center">
            <form action="/haalathu/register">
            <button>ރަޖިސްޓްރީ ވުމަށް</button>
        </form>
    </div> -->
    </div>
    </main>
</body>

</html>