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
            background-color: #e3f2fd;
            background-image: url("/img/png/logor.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            color: #636b6f;
            font-family: 'Dhivehi', 'Nunito', sans-serif;
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
            font-size: 20px;

        }

        .mv {
            text-align: justify;
            text-indent: 50px;
            padding-left: 5px;
            padding-right: 5px;
            line-height: 2.5;
        }

        .salaam {
            text-align: center;
        }

        .mvdate {
            /* font-family: "MV Typewriter"; */
            text-align: center;


        }

        * {
            box-sizing: border-box;
        }

        /* Create three unequal columns that floats next to each other */


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
            /* align-items: baseline; */
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



        .heading {
            background-color: inherit;
            color: navy;
            border-radius: 25%;
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

        input[type=text] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;

        }

        input[type=password] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            /* border: 1,1,1,0; */
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;
        }

        input[type=email] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            /* border: 1,1,1,0; */
            text-align: center;
            background: none;
            border: 1px solid lightblue;
            width: 100%;
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
            padding: 10px;
            border: none;
            background-color: lightblue;
            color: #636b6f;
            font-weight: 600;
            border-radius: 5px;
            /* width: 100%; */
            margin: 10px 0;
            font-family: "Dhivehi";
        }

        button:hover {
            background-color: gray;
            color: white;
        }

        .rwbsline {
            align-items: baseline;

        }

        
    </style>
</head>

<body>
    <main>
        <div class="row">
            <div class="col"></div>
            <div class="col-3">
                <a href="/">
                    <img src="\img\png\logo.png" style="height: 100px; 
                padding:5px; 
                display: block;
                margin-left: auto;
                margin-right: auto;" alt="">
                </a>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col-2">
                <!-- this to be in right -->
                <ul class="dhi">
                    <li>ތަޢާރަފު</li>
                    <li>
                        <a href="/bayaan">
                            އިޤުރާރު
                        </a>
                    </li>
                    <li><span class="ar">الكتاب والسنة</span></li>
                    <li>ޢަދަބިއްޔާތު</li>
                    <li></li>
                </ul>
            </div>
            <div class="col" style="text-align: center;">
                <h1>މި ވެބްސައިޓު ތަރައްޤީ ކުރެވެމުން ދަނީ...</h1>
            </div>
            <div class="col-2">
                <!-- this to be in left -->
                <div class="dhi">
                    <h3>
                        ތަރައްޤީ ކުރެވެމުންދާ އެޕުތައް...
                    </h3>

                    <div class="filaa">
                        <a href="\haalathu">

                            <img src="\img\png\haalathu\logo.png" height="30" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>