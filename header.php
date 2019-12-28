<html>

<head>
    <!-- <base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden=""> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    
   
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <style bs-system-element="" bs-hidden="">
        html::-webkit-scrollbar {
            height: 7px;
            width: 7px;
            background: #2f363a;
        }

        html::-webkit-scrollbar-thumb {
            background: rgb(137, 143, 146);
        }

        html::-webkit-scrollbar-thumb:hover {
            background: #767F82;
        }

        html::-webkit-scrollbar-corner {
            display: none;
        }

        html {
            /* -webkit-user-select: none;
            user-select: none; */
            overflow: auto !important;
        }

        body {
            min-height: 650px;
            font-size: 16px;
        }

        * {
            cursor: default !important;
            pointer-events: all !important;
        }

        a {
            cursor: text;
        }

        img:not([src]):not([srcset]) {
            background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIg0KCXhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIg0KCXdpZHRoPSIxNjVweCIgaGVpZ2h0PSIxNjVweCIgdmlld0JveD0iMCAwIDE2NSAxNjUiPg0KPHBhdGggZmlsbFJ1bGU9ImV2ZW5vZGQiIGQ9Ik0gMC43OSAyLjIxQyAwLjc5IDIuMjEgMi4yMSAwLjc5IDIuMjEgMC43OSAyLjIxIDAuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMC43OSAyLjIxIDAuNzkgMi4yMVoiIGZpbGw9InJnYigxOTMsMTk1LDE5NSkiLz48cGF0aCBmaWxsUnVsZT0iZXZlbm9kZCIgZD0iTSAxNjIuNzkgMC43OUMgMTYyLjc5IDAuNzkgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMTYyLjc5IDAuNzkgMTYyLjc5IDAuNzlaIiBmaWxsPSJyZ2IoMTkyLDE5NCwxOTUpIi8+PC9zdmc+');
            width: 80px;
            height: 80px;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        /* Stopping css animations on the stage */
        /* *:not([bs-anim-preview]) {
            transition: none !important;
            transition-duration: 0s !important;
        } */

        [bs-dragged] {
            opacity: 0.3 !important;
        }

        /* Inline editing */

        [contenteditable=true] {
            box-shadow: -1px -1px 1px rgba(17, 142, 232, 0.85), 1px 1px 1px rgba(17, 142, 232, 0.85), 0 0 11px rgba(17, 142, 232, 0.85) !important;
            outline: none !important;
            min-height: 1em;
            cursor: initial !important;
        }

        [contenteditable=true] *:not([contenteditable=false]) {
            cursor: initial !important;
        }

        [contenteditable=true]:empty:before {
            content: "\00a0\00a0" !important;
        }

        [contenteditable=true] [contenteditable=false] {
            box-shadow: 0 0 0 1px rgba(17, 142, 232, 0.85);
        }

        /* Preventing mouse events for embeds */

        iframe,
        embed,
        object,
        audio {
            pointer-events: none !important;
        }

        html.hit-testing iframe,
        html.hit-testing embed,
        html.hit-testing object,
        html.hit-testing audio {
            pointer-events: all !important;
        }

        /* Giving sizes to some elements. */

        div[class*="col-"]:empty:before,
        form:empty:before,
        .row:empty:before,
        .form-row:empty:before,
        .form-group:empty:before,
        .container:empty:before,
        .container-fluid:empty:before {
            background-color: #eee;
            content: 'Empty Row';
            line-height: 40px;
            text-align: center;
            display: block;
            line-height: 80px;
            font-size: 24px;
            color: #aaa;
            font-weight: bold;
        }

        div[class*="col-"]:empty:before {
            content: 'Empty Column';
        }

        form:empty:before {
            content: 'Empty Form';
        }

        .form-group:empty:before {
            content: 'Empty Form Group';
        }

        form.navbar-form:empty:before {
            display: inline-block;
            padding: 0 40px;
            font-size: 16px;
            line-height: 36px;
        }

        .container:empty:before,
        .container-fluid:empty:before {
            content: 'Empty Container';
        }

        .thumbnail img:not([src]) {
            background-repeat: no-repeat;
            background-size: 100% 85%;
            background-position-y: 50%;
            width: 100%;
            height: 180px;
        }

        /* Making the dropdown menus have a white background when they're edited */

        .dropdown-item:active,
        .dropdown-menu>li>a:focus {
            background: unset;
            color: unset;
        }

        .navbar-collapse {
            flex-grow: unset;
        }

        /* This is needed because the li items are 0x0px by default,


        .pagination>li {
            float: left;
        }

        /* Iframes without src are colored in gray */

        .embed-responsive iframe:not([src]) {
            background-color: #ddd;
        }

        /* This is needed, otherwise split buttons in input groups break into two lines. */

        .input-group-btn .btn-group>.btn {
            float: none;
        }

        div[class*="col-"]:empty,
        div.col:empty {
            display: flex;
        }

        div[class*="col-"]:empty:before,
        form:empty:before,
        .row:empty:before,
        .form-row:empty:before,
        .container:empty:before,
        .container-fluid:empty:before {
            width: 100%;
        }

        div.col:empty:before {
            background-color: #eee;
            content: 'Empty Column';
            line-height: 40px;
            text-align: center;
            display: block;
            line-height: 80px;
            font-size: 24px;
            color: #aaa;
            font-weight: bold;
            width: 100%;
        }

        .toast-header img:not([src]):not([srcset]) {
            width: 30px;
            height: 30px;
        }

        /* Stopping css spinner animations */

        .spinner-grow:not([bs-spinner-animation]),
        .spinner-border:not([bs-spinner-animation]) {
            animation: none;
        }

        .spinner-grow:not([bs-spinner-animation]) {
            opacity: 1;
            transform: scale(.8);
        }

        .custom-range::-webkit-slider-runnable-track {
            cursor: inherit;
        }
    </style>
    <link rel="stylesheet" href="animate.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" href="aos.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="fontawesome-all.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="font-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="ionicons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="line-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="material-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="simple-line-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="typicons.min.css">
    <link rel="stylesheet" href="fontawesome5-overrides.min.css" bs-system-element="" bs-hidden="">
     <!-- <style>
        @media (max-width:576px) {
            .navbar-toggler-icon {
                display: inline-block;
                width: 1.5em;
                height: 1.5em;
                vertical-align: middle;
                content: "";
                background: no-repeat center center;
                background-size: 100% 100%
            }

            .navbar-group {
                display: flex;
                flex-direction: column;
                width: 210px;
                float: right;
            }
        }

        @media (max-width:699) {
            .navbar-toggler-icon {
                display: inline-block;
                width: 1.5em;
                height: 1.5em;
                vertical-align: middle;
                content: "";
                background: no-repeat center center;
                background-size: 100% 100%
            }

            .navbar-group {
                display: flex;
                flex-direction: column;
                width: 210px;
                float: right;
            }
        }

        .header-blue {
            /* background: linear-gradient(135deg, #172a74, #21a9af); */
            /* background-color: #184e8e; */
            padding-bottom: 80px;
            font-family: 'Graphik,Graphik LC Web', 'Helvetica Neue', Arial, sans-serif;
            ;
        }

        @media (min-width:768px) {
            .header-blue {
                padding-bottom: 120px;
            }
        }

        .header-blue .navbar {
            background: transparent;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #fff;
            border-radius: 0;
            box-shadow: none;
            border: none;
            border-bottom: 1px solid #E0E0E0;
        }

        @media (min-width:768px) {
            .header-blue .navbar .navcol-1 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .header-blue .navbar .navbar-brand {
            font-weight: bold;
            color: inherit;
        }

        .header-blue .navbar .navbar-brand:hover {
            color: #f0f0f0;
        }

        .header-blue .navbar .navbar-collapse {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin-top: .5rem;
        }

        @media (min-width:768px) {
            .header-blue .navbar .navbar-collapse {
                border-color: transparent;
                margin: 0;
            }
        }

        .header-blue .navbar .navbar-collapse div .login {
            color: #000;
            text-decoration: none;
        }

        .header-blue .navbar .navbar-collapse div .login:hover {
            color: #4c9fbf;
        }

        .header-blue .navbar .navbar-collapse div .signup {
            color: #000;
            text-decoration: none;
        }

        .header-blue .navbar .navbar-collapse div .signup:hover {
            color: #4c9fbf;
        }

        .header-blue .navbar .navbar-collapse div .travel {
            color: #000;
            text-decoration: none;
        }

        .header-blue .navbar .navbar-collapse div .travel:hover {
            color: #4c9fbf;
        }

        .header-blue .navbar .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .header-blue .navbar .navbar-toggler:hover,
        .header-blue .navbar-toggler:focus {
            background: none;
        }

        @media (min-width: 768px) {
            .header-blue .navbar-nav .nav-link {
                padding-left: .7rem;
                padding-right: .7rem;
            }
        }

        @media (min-width: 992px) {
            .header-blue .navbar-nav .nav-link {
                padding-left: 1.2rem;
                padding-right: 1.2rem;
            }
        }

        .header-blue .navbar.navbar-light .navbar-nav .nav-link {
            color: #d9d9d9;
        }

        .header-blue .navbar.navbar-light .navbar-nav .nav-link:focus,
        .header-blue .navbar.navbar-light .navbar-nav .nav-link:hover {
            color: #fcfeff !important;
            background-color: transparent;
        }

        .header-blue .navbar .navbar-nav>li>.dropdown-menu {
            margin-top: -5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
            background-color: #fff;
            border-radius: 2px;
        }

        .header-blue .navbar .dropdown-menu .dropdown-item:focus,
        .header-blue .navbar .dropdown-menu .dropdown-item {
            line-height: 2;
            color: #37434d;
        }

        .header-blue .navbar .dropdown-menu .dropdown-item:focus,
        .header-blue .navbar .dropdown-menu .dropdown-item:hover {
            background: #ebeff1;
        }

        .btn-light {
            /* border: 1px solid rgba(0, 255, 255, 0.7); */
            border-radius: 5px;
            color: #000;
            box-shadow: none;
            text-shadow: none;
            padding: .3rem 25px;
            background: #4c9fbf;
            outline: none;
            transition: 1s;  
        }

        .btn-light:hover {
            background-color: #3f89a8;
            color: #fff;
            cursor: -webkit-zoom-out;
        }

        .header-blue .navbar .form-inline label {
            color: #d9d9d9;
        }

        .header-blue .navbar .form-inline .search-field {
            display: inline-block;
            width: 80%;
            background: none;
            border: none;
            border-bottom: 1px solid transparent;
            border-radius: 0;
            color: #ccc;
            box-shadow: none;
            color: inherit;
            transition: border-bottom-color 0.3s;
        }

        .header-blue .navbar .form-inline .search-field:focus {
            border-bottom: 1px solid #ccc;
        }

        .header-blue .hero {
            margin-top: 20px;
            text-align: center;
        }

        .navbar-expand-md .plane-icon {
            display: block;
            padding-left: 200px;
            padding-right: 2px;
            ;
        }

        .navbar-expand-md .order-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-image: src("img/icon/ic.png");
            padding-left: 0px;
            background-color: #4c9fbf;
            border: 1px solid transparent;
            border-radius: 4px;
            /* background-size: contain; */
            vertical-align: right;
            object-fit: cover;
            background-repeat: no-repeat center center;
            background-position: 50% 50%;
        }

        @media (min-width:768px) {
            .header-blue .hero {
                margin-top: 60px;
                text-align: left;
            }

            .navbar-expand-md .plane-icon {
                display: none
            }

            .navbar-expand-md .order-icon {
                display: none;
            }
        }

        .header-blue .hero h1 {
            color: #fff;
            font-size: 40px;
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 300;
            line-height: 1.4;
        }

        @media (min-width:992px) {
            .header-blue .hero h1 {
                margin-top: 190px;
                margin-bottom: 24px;
                line-height: 1.2;
            }

            .navbar-expand .navbar-toggler {
                display: none
            }
        }

        .header-blue .hero p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 20px;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .header-blue .phone-holder {
            text-align: right;
        }

        .header-blue div.iphone-mockup {
            position: relative;
            max-width: 300px;
            margin: 20px;
            display: inline-block;
        }

        .header-blue .iphone-mockup img.device {
            width: 100%;
            height: auto;
        }

        .header-blue .iphone-mockup .screen {
            position: absolute;
            width: 88%;
            height: 77%;
            top: 12%;
            border-radius: 2px;
            left: 6%;
            border: 1px solid #444;
            background-color: #aaa;
            overflow: hidden;
            background: url(img/images/im_agree.jpg);
            background-size: cover;
            background-position: center;
        }

        .header-blue .iphone-mockup .screen:before {
            content: '';
            background-color: #fff;
            position: absolute;
            width: 70%;
            height: 140%;
            top: -12%;
            right: -60%;
            transform: rotate(-19deg);
            opacity: 0.2;
        }

        .header-logo {
            height: 50px;
            width: auto;
        }

        .navbar-collapse {
            font-size: 16px;
        }

        .header-blue .navbar-light {
            padding: 0px 16px 0px 16px;
        }

        .container-fluid {
            height: 60px
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
            display: flex;
            justify-content: center;
            text-align: left !important;
        }

        .crossRotate {
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
            transition-duration: 0.5s;
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            -o-transition-property: -o-transform;
            transition-property: transform;
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active {
            color: #000;
            background-color: #4c9fbf;
            border-color: #d3d9df
        }
    </style> -->
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="css/header.css">




</head>

<body>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid">
                    <div>

                        <a class="navbar-brand" href="?page=home">


                            <img class="header-logo" src="Free_Sample_By_Wix.png" alt=""></a>
                    </div>

                 <div>

                        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                            <span class="sr-only">Toggle
                                navigation</span>
                            <span class="navbar-toggler-icon crossRotate"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navcol-1">
                        <!-- <ul class="nav navbar-nav">
                            <li class="mr-4">
                                <div>

                                    <a class="travel" href="#"><i class="fas fa-plane fa-lg"></i>
                                        Make money traveling
                                    </a>
                                </div>
                            </li>
                            <li class="mr-4">
                            <div >
                                <a class="signup" href="#">
                                    Sign up
                                </a>
                            </div>
                            </li>
                            <li class="mr-4">
                                <div>

                                    <a class="login" href="#">
                                        Log in
                                    </a>
                                </div>
                            </li>
                            <li class="mr-4">
                                <div>

                                    <a class="btn btn-light action-button" href="#">
                                        Create order
                                    </a>
                                </div>
                            </li>

                        </ul> -->
                        <div class="navbar-group">
                            <div class="navbar-text mr-4">
                                <a class="travel" href="#"><i class="fas fa-plane fa-lg"></i>
                                    Make money traveling
                                </a>
                            </div>

                            <div class="navbar-text mr-4">
                                <a class="signup" href="#">
                                    Sign up
                                </a>
                            </div>
                            <div class="navbar-text mr-4">
                                <a class="login" href="">
                                    Log in
                                </a>
                            </div>
                            <a class="btn btn-light action-button order" href="?page=createOrder_Step0">
                                Create order
                            </a>
                        </div>

                    </div>
                </div>

            </nav>
            <!-- <div class="container hero">
                <div class="row">
                    <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
    <div style="height:61px"></div>
    <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
</body>
<script>
    $(".crossRotate").click(function() {
        //alert($( this ).css( "transform" ));
        if ($(this).css("transform") == 'none') {
            $(this).css("transform", "rotate(90deg)");
        } else {
            $(this).css("transform", "");
        }
    });
</script>

</html>