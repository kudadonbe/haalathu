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
        html,
        body {
            background-color: #e3f2fd;
            background-image: url("/img/png/logor.png");
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

        .basmala {
            font-family: "A_Bismillah";
            font-size: 50px;
            text-align: center;

        }

        .ar {
            font-family: "Calibri";
            font-size: 15px;

        }

        .mv {
            font-family: "MV Typewriter";
            text-align: justify;
            text-indent: 50px;
            padding-left: 5px;
            padding-right: 5px;
            line-height: 2.5;
        }

        .dhi {

            font-family: "MV Typewriter";
            text-align: justify;
        }

        .salaam {
            text-align: center;
        }

        .mvdate {
            font-family: "MV Typewriter";
            text-align: center;


        }

        .mvdate,
        .dhi,
        .mv {
            font-size: 10px;
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
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        .left,
        .right {
            width: 15%;
        }

        .middle {
            width: 70%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 5px;
        }
    </style>
</head>

<body>

    <main>
        <div class="row">
            <a href="/">
                <img src="\img\png\round_logo.png" style="height: 50px; 
                padding:5px; 
                display: block;
                margin-left: auto;
                margin-right: auto;" alt="">
            </a>
        </div>

        <div class="row">
            <div class="column left">
                <div class="dhi">
                    <h4>
                        ތަރައްޤީ ކުރެވެމުންދާ އެޕުތައް...
                    </h4>
                    <div class="filaa">
                        <a href="\haalathu">
                            <img src="\img\logo\logo.png" width="30" height="30" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="column middle">


            </div>
            <div class="column right">
                <ul class="dhi">
                    <li>ތަޢާރަފު</li>
                    <li>
                        <a href="/bayaan">
                            އިޤުރާރު
                        </a>
                    </li>
                    <li>އޮޅުންފިލުވައިދޭ ލިޔުން</li>
                    <li>ޚިޔާލު</li>
                    <li></li>
                </ul>
            </div>
        </div>

    </main>
</body>

</html>