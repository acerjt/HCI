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
            -webkit-user-select: none;
            user-select: none;
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
        
        .container .row .col-md-12 .parse_button .btn_create {
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
        
        .container .row .col-md-12 .parse_button .btn_create:hover {
            background-color: #3f89a8;
            border-bottom: none;
        }
        
        .highlight-phone .container .row .col-md-8 .intro .btn_create {
            padding: 8px 32px;
            text-align: center;
            height: 40px;
            margin: 0px;
            border: 1px solid #4c9fbf;
            background: #4c9fbf;
            box-shadow: none;
            margin-top: 150px;
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
        
        .highlight-phone .container .row .col-md-8 .intro .btn_create:hover {
            opacity: 1;
        }
        
        .highlight-phone .container .row .col-md-8 .intro .btn_create:active {
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
            color: #fff;
            background-color: #4c9fbf;
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
            font-size: 25px;
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
            padding-left: 15px;
            padding-top: 15px;
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
        
        .btn-setting {
            background-image: url(img/icon/ic_setting.png);
            background-repeat: no-repeat;
            background-position: left;
            color: #000;
            background-color: #fff;
            height: 35px;
            width: 150px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #fff;
            padding-left: 40px;
        }
        
        .des {
            color: #fff;
            font-size: 14px;
        }
        
        .money {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }
        
        .container .row .col-md-3 .title {
            font-size: 16px;
            color: #4c9fbf;
            padding-bottom: 5px;
            text-align: center;
            border-bottom: 2px solid #4c9fbf;
        }
        
        .filter {
            font-size: 16px;
            border: none;
            background-color: #f2f2f2;
            background-image: url(img/icon/ic_down.png);
            background-repeat: no-repeat;
            background-position: right;
            padding-right: 50px;
            margin-left: 15px;
        }
        
        .name {
            font-size: 20px;
            font-weight: bold;
            color: #000;
        }
        
        .time {
            font-size: 14px;
            color: #828282;
        }
        
        .content {
            background-color: #f2f2f2;
        }
        
        .col-md-12 {
            background-color: #fff;
            border-radius: 5px;
            width: 500px;
            height: 700px;
            padding-left: 15px;
        }
        
        .container .row .col-md-12 .request img {
            max-width: 50px;
            float: left;
            margin-right: 15px;
        }
        
        .content .container .row .col-md-12 .product_image {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 200px;
            height: 200px;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
        }
        
        .content .container .row .col-md-12 .name-product {
            font-size: 20px;
            color: black;
            margin-left: 15px;
            font-weight: bold;
        }
        
        .content .container .row .col-md-12 .title {
            font-size: 16px;
            color: #828282;
            font-weight: normal;
            padding-right: 10px;
        }
        
        .content .container .row .col-md-12 .inside {
            font-size: 16px;
            color: black;
            font-weight: normal;
        }
        
        .content .container .row .col-md-12 .panel {
            margin-top: 0px;
            margin-bottom: 15px;
            width: 300px;
            height: 50px;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 5px;
            padding-left: 5px;
            padding-top: 5px;
        }
        
        .container .row .col-md-12 .btn_create {
            padding: 3px 220px;
        }
        
        .btn_create {
            padding: 5px 32px;
            text-align: center;
            margin-left: 15px;
            height: 40px;
            margin: 10px;
            border: 1px solid #4c9fbf;
            border-radius: 5px;
            background: #4c9fbf;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            font-size: 16px;
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

        <div class="highlight-phone">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="intro">
                            <h2>America Cayon, CA, US - Ho Chi Minh City, VN, November 19</h2>

                            <button class="btn-setting">  Trip settings</button></div>
                    </div>
                    <div class="col-md-4">
                        <a class="money" href="">$0</a>
                        <br>
                        <a href="" class="des">Your total earnings</a>
                        <br>
                        <a class="money" href="">$0</a>
                        <br>
                        <a href="" class="des">Total value of items</a>


                    </div>
                </div>
            </div>
        </div>



        <div>
            <div class="container" style="margin-top:15px; margin-bottom: 15px;">
                <div class="row">
                    <div class="col-md-3">
                        <a href="" class="title">8 Orders</a>
                    </div>
                    <div class="col-md-3">
                        <a href="" class="title" style="border-bottom: none;">0 Offers</a>
                    </div>
                    <div class="col-md-3">
                        <a href="" class="title" style="border-bottom: none;">0 To deliver</a>
                    </div>
                    <div class="col-md-3 ">
                        <a href="" class="title" style="border-bottom: none;">0 Delived</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="margin-top:15px;">
                        <a href="" style="color:#000; font-size:20px;">ORDERS AVAILABLE FOR DELIVERY</a>
                    </div>
                    <div class="col-md-4" style="margin-top:15px;">
                        <button href="" class="filter">Filter</button>
                        <button href="" class="filter">Sorting</button>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="request">
                            <img class="rounded-circle " src="img/avatar/av_1.jpg ">
                            <a href=" " class="name">Tung Nguyen</a>
                            <a href=" " class="time ">December 23, 2019</a>
                        </div>
                        <br>
                        <img class="product_image" src="img/images/im_iphone11_ebay.png" alt="">
                        <a class="name-product" href="">Buy Simple Mobie - Apple iPhone 11 Pro (64KB) - Space Gray from Amazon.s</a>
                        <div class="panel-1">
                            <a class="title" href="">Delivery To   </a>
                            <a class="inside" href="">Ho Chi Minh City, VN</a>
                            <a class="title" href="">From   </a>
                            <a class="inside" href="">United State of America</a><br>

                            <a class="title" href="">Before   </a>
                            <a class="inside" href="">December 24, 2019</a><br>
                        </div>
                        <div class="panel">
                            <a class="title" href="">Where to buy   </a>
                            <a class="inside" style="color:#4c9fbf">www.amabuy.com</a><br>
                            <a class="title" href="">Price for 1 product</a>
                            <a class="inside" href="">$ 400</a><br>

                        </div>
                        <a href="" class="inside">Traveler reward</a>
                        <a href="" class="name" style="font-weight: bold;">$ 10</a> <br>
                        <button class="btn_create" type="button" href="#">Make Offer</button>
                    </div>
                </div>
            </div>
        </div>




</body>

</html>