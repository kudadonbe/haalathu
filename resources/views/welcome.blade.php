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

        #basmala {
            font-family: "A_Bismillah";
            font-size: 50px;
            text-align: center;

        }

        #ar {
            font-family: "Calibri";
            font-size: 20px;

        }

        #mv {
            font-family: "MV Typewriter";
            /* text-align: "justify"; */
            text-align: justify;
            text-indent: 50px;
            padding-left: 50px;
            padding-right: 50px;
            line-height: 2.5;
            font-size: 15px;
        }

        .salaam {
            font-size: 20px;
            text-align: center;
        }

        .mvdate {
            font-family: "MV Typewriter";
            font-size: 15px;
            text-align: center;


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
            width: 20%;
        }

        .middle {
            width: 60%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <!-- <div id="app"> -->

    <!-- Navbar here -->
    <!-- <nav class="navbar navbar-light" style="background-color: #E3E5F7;"> -->
    <!-- Navbar content -->
    <!-- <a class="navbar-brand" href="{{ url('/') }}">
                <div><img src="img/png/round_logo.png" style="height: 35px;" alt=""></div>
            </a>

            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </nav> -->

    <main>
        <div class="row">
            <div class="column left"></div>
            <div class="column middle">
                <div id="basmala">
                    <span>a</span>
                </div>
                <div class="salaam">
                    <span id="ar">السلام عليكم ورحمة الله وبركاته</span>
                </div>
                <div id="mv">

                    <p>

                        <span id="ar">
                            إن الحمد لله نحمده ونستعينه ، ونعوذ بالله من شرور
                            أنفسنا ومن سيئات أعمالنا من يهده الله فلا مضل
                            ومن يضلل فلا هادي له ، وأشهد أن لا إله إلا الله وحده لا شريك له
                            وأشهد أن محمدا عبده ورسوله صلى الله عليه
                            وعلى آله وأصحابه وسلم تسليما كثيرا، وبعد!
                        </span>
                    </p>

                    <p>
                        އާދެ،
                        މިދުނިޔޭގެ ޙަޔާތަކީ ވަރަށް ކުރު އެއްޗެކެވެ.
                        މިޙަޔާތުގެ ބޭނުން އެންމެ ފުރިހަމަގޮތުގައި
                        ހިފޭނީ ވަރަށް މަދުބަޔަކަށެވެ.
                        އެހެންކަމުން މިޙަޔާތުގެ
                        ބޭނުން ފުރިހަމަގޮތުގައި ހިފުމަށް އަވަސްވެގަންނަމާ ހިނގާށެވެ.
                        މިކަން ޙާސިލްވާނީ، ތިޔަ އެންމެ
                        ބޭފުޅުންގެ އެއްބާރުލުމާއި އެހީތެރިކަން ލިބިގެންނެވެ.
                        އަޅުގަނޑުގެ ޙަޔާތުގެ ދުވަސްތައް
                        ވޭތިކުރަން ޖެހިފައި މިއޮތީ ތިޔަބޭފުންނާ އެކުގައިއެވެ.
                        ތިޔަބޭފުޅުންގެ މުދަލާއި މިލުކުގައިވާ ތަކެތީގެ
                        ތެރޭގައި އަޅުގަނޑުގެ ދިރިއުޅުން މިވޭތިކުރާ ކުރުމުގައި،
                        ތިޔައިގެ އެންމެ ބޭފުޅުންގެ ޙައްޤުތަކަށް، ފަރުވާކުޑަކުރެވުމުގެ
                        ސަބަބުންނާއި އީމާންތެރިކަން ބަލިކަށިކަމުގެ ސަބަބުން،
                        އަރައިގަނެވިފައި ވުމީ ވަރަށް ގާތްކަމެކެވެ.
                        އެކަން ތިޔަބޭފުޅުންނަށް އިޙުސާސްނުވެ،
                        ފާހަގަނުކުރެވި އޮތުމަކީ އެކަން އަޅުގަނޑުގެ
                        ފަރާތުން ނުވެއޮތްކަމުގެ ދަލީލެއްނޫނެވެ.
                        ފާއިތުވެ ދިޔަތަން ވޭތުވެފައިވަނީ
                        އެފަދައިންނެވެ. ވިސްނާއިލެވުމާކާ ނުލައެވެ.


                    </p>
                    <p>
                        ވިމާ، އެއްވެސް ބޭފުޅެއްގެ ޙައްޤަކަށް އަޅުގަނޑަށް
                        އަރައިގަނެވިފައި ވާނަމަ، އެކަމުގެ ބަދަލު
                        ދިނުމަކީ އަޅުގަނޑުގެ މައްޗަށް އޮތް ވާޖިބެކެވެ.
                        އެވާޖިބު އަދާކުރުމަށް އަޅުގަނޑު މިހުރީ ތައްޔާރަށަވެ.

                        އެހެންނަމަވެސް، އަޅުގަނޑުގެ ފުށުން ލިބިފައިވާ ގެއްލުންތައް
                        މާޢާފުކޮށްދެއްވުން އެއީ ތިޔަބޭފުޅުންގެ ދީލަތިކަމެވެ.
                        ތިބާގެ ޙައްޤަށް އަރައިގަނެވިފައި
                        ވުމުގެ ސަބަބުން ލިބުނުގެއްލުމުގެ ދެގުނަ އިތުރަށް
                        ތިބާއަށް ދެއްވާށިއެވެ! ތިބާގެ މުދަލުގައި
                        <span id="ar">
                            ﷲ
                        </span>
                        ބަރަކާތް ލައްވައި،
                        ތިބާގެ ޢުމުރު ދިގުކުރައްވައި، ހެޔޮޢަމަލު ގިނަ ކުރުމުގެ
                        ތަޢުފީޤު ތިބާއަށް މިންވަރުކޮށްދެއްވާށިއެވެ.
                        <span id="ar">

                            آمين!
                        </span>
                    </p>
                    <div class="mvdate">

                        25 ނޮވެމްބަރު 2012
                    </div>
                </div>


                <!-- Haalthu App  -->

                <!-- <div class="row justify-content-center">

                    
                </div> -->
            </div>
            <div class="column right">
                <div id="mv">
                    <h3>
                        ތަރައްޤީކުރެވެމުންދާ އެޕުތައް...
                        </h3>
                        <div class="filaa">
                            <a href="\haalathu">
                                <img src="\img\logo\logo.png" width="30" height="30" alt="">
                            </a>
                        </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>