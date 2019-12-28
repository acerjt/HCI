<html>

<head>
    <!-- <base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden=""> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
        
        *:not([bs-anim-preview]) {
            transition: none !important;
            transition-duration: 0s !important;
        }
        
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
        /* This is needed because the li items are 0x0px by default,
		and bootstrap studio can't select them */
        
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
        
        .container .row .col-md-12 h2 {
            text-align: center;
        }
        
        .container .row .col-md-6 .check {
            padding-left: 15px;
            font-size: 14px;
        }
        
        .container .row .col-md-6 .right {
            text-align: right;
        }
        
        .container .row .col-md-6 .left {
            text-align: left;
        }
        
        .container .row .col-md-12 .parse_button {
            margin-top: 15px;
            display: block;
            margin: 0 auto;
            margin-top: 10px;
            text-align: center;
        }
        
        .container .row .col-md-12 .parse_button:hover {
            opacity: 1;
        }
        
        .container .row .col-md-12 .parse_button .parse {
            padding-left: 10px;
            border-radius: 5px;
            border: 1px solid #4c9fbf;
            height: 40px;
            width: 500px;
        }
        
        .btn_create {
            padding: 5px 32px;
            text-align: center;
            margin-left: 15px;
            height: 50px;
            margin: 10px;
            border: 1px solid #4c9fbf;
            border-radius: 5px;
            background: #4c9fbf;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            font-size: 20px;
            text-transform: uppercase;
            color: #fff;
            text-transform: none;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none;
            background-color: #4c9fbf;
        }
        
        .btn_create:hover {
            background-color: #3f89a8;
            border-bottom: none;
        }
        
        .btn_create {
            padding: 8px 32px;
            text-align: center;
            height: 40px;
            margin: 0px;
            border: 1px solid #4c9fbf;
            background: #4c9fbf;
            box-shadow: none;
            /* margin-top: 150px; */
            text-shadow: none;
            opacity: 0.9;
            font-size: inherit;
            text-transform: uppercase;
            color: #fff;
            text-transform: none;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none;
            border-radius: 3px;
            background-color: #4c9fbf;
        }
        
        .btn_create:hover {
            opacity: 1;
        }
        
        .btn_create:active {
            transform: translateY(1px);
        }
        
        .container .row .col-md-12 .how {
            font-size: 14px;
            color: #4c9fbf;
        }
        /* .highlight-phone .container .row .col-md-8 .intro {
            width: auto;
            height: 200px;
            background: #000;
            color: #fff;
        }
        
        
        
        
         */
        
        .container .row .col-md-4 .row .col-md-4 img {
            width: 80px;
            height: 80px;
        }
        
        .container .row .col-md-4 .row .col-md-4 {
            padding-right: 0px;
            padding-left: 0px;
        }
        
        .container .row .col-md-4 .row .col-md-8 {
            padding-right: 0px;
            padding-left: 0px;
        }
        
        .container .row .col-md-4 .row .col-md-8 .name {
            padding-top: 15px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .container .row .col-md-4 .row .col-md-8 .description {
            font-size: 15px;
        }
        
        .container .row .col-md-4 .row .col-md-8 .learn {
            font-size: 15px;
            color: #4c9fbf;
        }
        
        @media (min-width: 768px) {
            .container .row .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
        
        @media (min-width: 768px) {
            .container .row .col-md-4 .row .col-md-6 .des {
                -ms-flex: 0 0 70%;
                flex: 0 0 70%;
                max-width: 70%;
            }
            .container .row .col-md-4 .row .col-md-6 .images {
                -ms-flex: 0 0 30%;
                flex: 0 0 30%;
                max-width: 30%;
            }
        }
        
        @media (min-width: 768px) {
            .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
        }
        
        .container .row .col-md-4 .row .col-md-6 .description {
            font-size: 16px;
        }
        
        .container .row .col-md-4 .row .col-md-6 .learn {
            color: #4c9fbf;
        }
        
        .container .row .col-md-3 .topshop {
            width: 270px;
            height: 270px;
        }
        
        .highlight-phone {
            color: #313437;
            background-color: #000;
            padding: 40px 0 40px;
            overflow: hidden;
        }
        
        @media (max-width:767px) {
            .highlight-phone {
                text-align: center;
            }
        }
        
        .highlight-phone p {
            color: #fff;
        }
        
        .highlight-phone h2 {
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.5;
            padding-top: 0;
            margin-top: 0;
            color: #fff;
        }
        
        .highlight-phone .intro {
            font-size: 16px;
            max-width: 500px;
            line-height: 1.5;
        }
        
        @media (max-width:767px) {
            .highlight-phone .intro {
                max-width: none;
            }
        }
        
        .highlight-phone .intro p {
            margin-bottom: 15px;
        }
        
        .highlight-phone .intro .btn {
            padding: 16px 32px;
            border: none;
            background-color: #4c9fbf;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: none;
            font-size: 15px;
            letter-spacing: 0.4px;
            line-height: 1;
        }
        
        .highlight-phone .intro .btn:hover {
            opacity: 1;
        }
        
        .highlight-phone .intro .btn:active {
            transform: translateY(1px);
        }
        
        .highlight-phone .intro .btn-primary {
            background-color: #4c9fbf;
            color: #fff;
        }
        
        .highlight-phone .iphone-mockup {
            position: relative;
            max-width: 260px;
            margin-top: -30px;
            margin-bottom: -230px;
            transform: rotate(0deg);
        }
        
        .highlight-phone .iphone-mockup img.device {
            width: 450;
            height: 300;
        }
        
        .highlight-phone .iphone-mockup .screen:before {
            content: '';
            background-color: #fff;
            position: absolute;
            width: 70%;
            height: 140%;
            top: -12%;
            right: -60%;
            transform: rotate(-0deg);
            opacity: 0.2;
        }
        
        .highlight-phone .container .row .col-md-4 .device {
            width: 150px;
            height: 100px;
        }
        
        .container .row .col-md-12 {
            padding-left: 0px;
            margin-bottom: 10px;
            margin-top: 15px;
        }
        
        .container .row .col-md-12 .hot {
            font-size: 20px;
            color: #b6b5c0;
            padding-left: 0px;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        
        .container .row .col-md-3 {
            padding-left: 0px;
        }
        
        .container .row .col-md-12 h2 {
            font-size: 40px;
        }
        
        .container .row .col-md-12 h2 {
            font-size: 40px;
        }
        
        .container .row .col-md-6 .des {
            font-size: 14px;
            color: #000;
        }
        
        .container .row .col-md-6 img {
            width: 500px;
            height: 400px;
        }
        
        .container .row .col-md-6 .parse_button .btn_create {
            padding: 7px 220px;
            /* width: 500px; */
        }
        
        .container .row .col-md-6 .parse_button .parse {
            padding-left: 10px;
            border: 1px solid #bdbdbd;
            height: 40px;
            width: 500px;
            margin-top: -2px;
            /* margin-bottom: 1px; */
        }
        
        .container .row .col-md-6 .input {
            border: 1px solid #bdbdbd;
            width: 250px;
            height: 40px;
            font-size: 16px;
            padding-left: 5px;
            border-top-left-radius: 5px;
        }
        
        .container .row .col-md-6 .input .parse {
            height: 35px;
            overflow: hidden;
            border-style: none;
            border-color: #fff;
            border-bottom: #bdbdbd;
            border-image: none;
            margin-left: 5px;
        }
    </style>
    </style>
    <link rel="stylesheet" href="animate.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" href="aos.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="fontawesome-all.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="font-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="ionicons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="line-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="material-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="simple-line-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="typicons.min.css">
    <link rel="stylesheet" href="fontawesome5-overrides.min.css" bs-system-element="" bs-hidden="">
    <style></style>
    <style bs-system-element="" bs-hidden=""></style>
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Earn $200+ USD every time you travel abroad</h2>
                    <a class="des" href="">Deliver products to international shoppers and cut your travel costs in half.
 Average earnings per trip.</a>
                    <div>
                        <div class="input">
                            <a class="title">From</a>
                            <input class="parse" type="text" placeholder="City or Country">
                        </div>
                        <div class="input" style="border-top-left-radius:none; border-top-right-radius: 5px;">
                            <a class="title">To</a>
                            <input class="parse" type="text" placeholder="City or Country">
                        </div>
                    </div>

                    <div class="parse_button">
                        <input class="parse" type="text" placeholder="Travel date" title="From">

                        <br>
                        <button class="btn_create" type="button" href="#">Add trip</button>

                    </div>
                    <div style="margin-top:5px;">
                        <a class="des" href="" style="color:4c9fbf">How it works ></a>
                        <a class="des" href="" style="color:#828282">Get notified about new orders</a>
                        <img style="width:80px; height:43px;" src="img/icon/ic_notification.PNG" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/images/im_travel.jpg" alt="">
                </div>
            </div>
            <div class="row">


            </div>





            <div class="container" style="background-color:#e5f3fb">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/icon/ic_secure.PNG" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="name">Secure Payments </h3>
                                <a class="description">Your payment is protected and never released to the traveler until you confirm delivery.</a> <br>
                                <div><a class="learn">Learn more about Trust and Safety</a>
                                    <img src="img/icon/ic_next_to.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/icon/ic_guareanteed.PNG" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="name">Guaranteed delivery</h3>
                                <a class="description">Your are protected from start to finish. If there is an issue with your order, you will get 100% money back or will received.</a> <br>
                                <a class="learn">Learn more about Money Back guarantee</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/icon/ic_24.PNG" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3 class="name">24/7 Customer care</h3>
                                <a class="description">Customer support in your native language, within 24 hours.</a><br>
                                <a class="learn">Go to Help Center</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container" style="margin-top:15px">
                <div class="row">
                    <div class="col-md-12"><a class="hot">TOP SHOP</a></div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_amazon.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_ebay.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_waltmart.PNG" alt=" ">
                    </div>
                    <div class="col-md-3 ">
                        <img class="topshop " src="img/images/im_farfetch.PNG " alt=" ">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container" style="margin-top:15px">
                <div class="row">
                    <div class="col-md-12"><a class="hot">ELECTRICS</a></div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_apple.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_dell.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_canon.PNG" alt=" ">
                    </div>
                    <div class="col-md-3 ">
                        <img class="topshop " src="img/images/im_dji.PNG " alt=" ">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container" style="margin-top:15px">
                <div class="row">
                    <div class="col-md-12"><a class="hot">FASHION AND BEAUTY</a></div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_macys.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_her.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_dior.PNG" alt=" ">
                    </div>
                    <div class="col-md-3 ">
                        <img class="topshop " src="img/images/im_jcrew.PNG " alt=" ">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container" style="margin-top:15px">
                <div class="row">
                    <div class="col-md-12"><a class="hot">SHOES</a></div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_nike.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_adidas.PNG" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="topshop" src="img/images/im_newbalance.PNG" alt=" ">
                    </div>
                    <div class="col-md-3 ">
                        <img class="topshop " src="img/images/im_zappons.PNG " alt=" ">
                    </div>
                </div>
            </div>
        </div>


</body>

</html>