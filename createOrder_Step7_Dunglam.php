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
    <style>
        .highlight-phone {
            color: #313437;
            background-color: #eef4f7;
            padding: 50px 0 55px;
            overflow: hidden;
        }
        
        @media (max-width:767px) {
            .highlight-phone {
                text-align: center;
            }
        }
        
        .highlight-phone p {
            color: #7d8285;
        }
        
        .highlight-phone h2 {
            font-weight: bold;
            margin-bottom: 35px;
            line-height: 1.5;
            padding-top: 0;
            margin-top: 0;
            color: inherit;
        }
        
        .highlight-phone .intro {
            font-size: 18px;
            max-width: 500px;
            line-height: 1.5;
        }
        
        @media (max-width:767px) {
            .highlight-phone .intro {
                max-width: none;
            }
        }
        
        .highlight-phone .intro p {
            margin-bottom: 35px;
        }
        
        .highlight-phone .intro .btn {
            padding: 16px 32px;
            border: none;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 13px;
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
            background-color: #055ada;
            color: #fff;
        }
        
        .highlight-phone .iphone-mockup {
            position: relative;
            max-width: 260px;
            margin-top: -30px;
            margin-bottom: -230px;
            transform: rotate(-15deg);
        }
        
        .highlight-phone .iphone-mockup img.device {
            width: 100%;
            height: auto;
        }
        
        .highlight-phone .iphone-mockup .screen {
            position: absolute;
            width: 88%;
            height: 77%;
            top: 12%;
            border-radius: 2px;
            left: 6%;
            border: 1px solid #444;
            background-color: #aaa;
            overflow: hidden;
            background: url(blob:https://bootstrapstudio.io/b72edc7e-1ca7-4e6a-9121-96e8cc666f68);
            background-size: cover;
            background-position: center;
        }
        
        .highlight-phone .iphone-mockup .screen:before {
            content: '';
            background-color: #f2f2f2;
            position: absolute;
            width: 70%;
            height: 140%;
            top: -12%;
            right: -60%;
            transform: rotate(-19deg);
            opacity: 0.2;
        }
        
        .content .container .row .col-md-8 .panel-content {
            padding-left: 15px;
            background-color: #fff;
            padding-top: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            width: 750px;
            height: 950px;
            margin-bottom: 15px;
        }
        
        .content .container .row .col-md-8 .panel-choose-offer {
            padding-left: 15px;
            background-color: #fff;
            padding-top: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            width: 700px;
            height: 100px;
            margin-bottom: 15px;
            margin-top: 15px;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery {
            margin-bottom: 15px;
            margin-top: 50px;
            padding-left: 15px;
            background-color: #fff;
            padding-top: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            width: 700px;
            height: 460px;
        }
        
        .content .container .row .col-md-12 a {
            color: #000;
            font-size: 20px;
        }
        
        .content .container .row .col-md-8 .des {
            color: #828282;
            margin-top: 0px;
            font-size: 15px;
        }
        
        .content .container .row .col-md-8 .parse {
            margin-top: 5px;
            margin-bottom: 15px;
            padding-top: 5px;
            border-radius: 5px;
            border: 1px solid #4c9fbf;
            height: 40px;
            width: 500px;
            text-align: center;
        }
        
        .content .container .row .col-md-8 .ip_input {
            padding-left: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #f2f2f2;
            background-color: #f2f2f2;
            height: 40px;
            width: 500px;
            margin-top: 5px;
        }
        
        .col-xs-2 {
            background: #00f;
            color: #FFF;
        }
        
        .col-half-offset {
            margin-left: 15px;
        }
        
        .content .container .row .col-md-8 .container .row img {
            width: 100px;
            height: 100px;
        }
        
        .content .container .row .col-md-8 .product_image {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 200px;
            height: 200px;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
        }
        
        .content .container .row .col-md-8 .reload_button {
            background-color: #4c9fbf;
            width: 40px;
            height: 40px;
            border-radius: 5px;
            margin-left: 10px;
            margin-bottom: 5px;
        }
        
        .content .container .row .col-md-8 .name {
            font-size: 20px;
            color: black;
            font-weight: bold;
        }
        
        .content .container .row .col-md-4 .panel-top {
            background-color: #fff;
            padding-top: 15px;
            padding-left: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            height: 400px;
        }
        
        .content .container .row .col-md-4 .panel-bottom {
            background-color: #fff;
            padding-top: 15px;
            padding-left: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            height: 160px;
        }
        
        .content .container .row .col-md-4 a {
            font-size: 20px;
            color: black;
            font-weight: bold;
        }
        
        .content .container .row .col-md-4 .title {
            font-size: 15px;
            color: #828282;
            font-weight: normal;
            padding-right: 10px;
        }
        
        .content .container .row .col-md-4 .inside {
            font-size: inherit;
            color: black;
            font-weight: normal;
        }
        
        .content .container .row .col-md-4 input {
            background-color: #f2f2f2;
            height: 0.1px;
            border: 0.1px solid #f2f2f2;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 300px;
        }
        
        .line {
            background-color: #f2f2f2;
            height: 0.1px;
            border: 0.1px solid #f2f2f2;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 500px;
        }
        
        .content .container .row .col-md-8 .quantity img {
            width: 22px;
            height: 22px;
        }
        
        .content .container .row .col-md-8 .long {
            width: 500px;
            height: 60px;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 5px;
        }
        
        .content .container .row .col-md-8 .panel {
            margin-top: 5px;
            width: 300px;
            height: 80px;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 5px;
            padding-left: 5px;
            padding-top: 5px;
        }
        
        .content .container .row .col-md-8 .panel .title {
            font-size: 15px;
            color: #828282;
            font-weight: normal;
            padding-right: 10px;
        }
        
        .content .container .row .col-md-8 .panel .inside {
            font-size: 15px;
            color: black;
            font-weight: normal;
        }
        
        .content .container .row .col-md-8 .long .recommend {
            font-size: 15px;
            color: #27ae60;
        }
        
        .btn-primary {
            margin-top: 15px;
            color: #fff;
            background-color: #4c9fbf;
            border-color: #4c9fbf;
        }
        
        .content .container .row .col-md-4 .buttons a {
            font-size: 15px;
            font-weight: normal;
            color: #fff;
        }
        
        .content .container .row .col-md-4 img {
            max-width: 40px;
            float: left;
            margin-left: -6px;
            margin-top: -5px;
        }
        
        .content .container .row .col-md-8 .panel-content .rounded-circle {
            max-width: 40px;
            float: left;
            margin-left: 5px;
            margin-right: 5px;
            margin-top: 5px;
        }
        
        .btn-primary:hover {
            color: #fff;
            background-color: #3f89a8;
            border-color: #3f89a8;
        }
        
        .btn-primary:active {
            color: #fff;
            background-color: #3f89a8;
            border-color: #3f89a8;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request .name {
            font-size: 15px;
            font-weight: bold;
            color: #000;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request {
            margin-top: 15px;
            margin-left: 15px;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request img {
            max-width: 50px;
            float: left;
            margin-right: 15px;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request .name {
            font-size: 20px;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request .time {
            font-size: 15px;
            color: #828282;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request .btn-primary {
            color: #4c9fbf;
            background-color: #fff;
            border-color: #3f89a8;
            font-size: 15px;
        }
        
        .content .container .row .col-md-8 .panel-request-delivery .request .btn-primary:hover {
            color: #fff;
            background-color: #3f89a8;
            border-color: #3f89a8;
            font-size: 15px;
        }
        
        .content .container .row .col-md-8 .panel-content .panel-payment {
            margin-top: 5px;
            width: 500px;
            height: 460px;
            background-color: #fff;
            border: 1px solid #828282;
            border-radius: 5px;
            padding-left: 15px;
            padding-top: 5px;
            margin-bottom: 15px;
        }
        
        a {
            font-size: 20px;
            color: #000;
        }
        
        .img-payment {
            width: 470px;
            padding-left: 0px;
            padding-top: 5px;
            padding-bottom: 15px;
        }
        
        .content .container .row .col-md-4 .des {
            font-size: 13px;
            font-weight: normal;
        }
        
        .content .container .row .col-md-8 h4 {
            font-size: 25px;
        }
    </style>
    <style></style>
    <style bs-system-element="" bs-hidden=""></style>
</head>

<body style="background-color: #f2f2f2;">
    <div></div>
    <div class="head">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <div class="content" style="margin-top:15px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-content">
                        <h4>Payment</h4>
                        <img class="rounded-circle " src="img/avatar/av_1.jpg ">
                        <a href=" " class="name">Tung Nguyen</a>
                        <div class="rating-start">
                            <img src="img/icon/ic_start_active.png" alt="">
                            <img src="img/icon/ic_start_active.png" alt="">
                            <img src="img/icon/ic_start_active.png" alt="">
                            <img src="img/icon/ic_start_active.png" alt="">
                            <img src="img/icon/ic_start_active.png" alt="">
                        </div>
                        <div class="panel">
                            <a class="title" href="">From   </a>
                            <a class="inside" href="">United State of America</a><br>
                            <a class="title" href="">To   </a>
                            <a class="inside" href="">Ho Chi Minh City, VN</a><br>
                            <a class="title" href="">Delivery before   </a>
                            <a class="inside" href="">December 24, 2019</a><br>
                        </div>
                        <a href="">Payment method</a><br>
                        <input class="ip_input" type="text" value="Your country   VietNam">
                        <br>
                        <a class="des" style="color:#4c9fbf" href="">Learn about payment opstions</a><br>
                        <div class="panel-payment">
                            <a href="">International credit card</a>
                            <a class="des" href="">USD</a><br>
                            <img class="img-payment" src="img/images/im_payment.png" alt="">
                            <a href="">Card number</a>
                            <input style="color:#828282; width:470px;" class="ip_input" type="text" value="Enter your card number">
                            <a href="">Expiration</a>
                            <input style="color:#828282; width:470px;" class="ip_input" type="text" value="MM/YY">
                            <a href="">Enter name as appears on your card</a>
                            <input style="color:#828282; width:470px;" class="ip_input" type="text" value="Enter your card number">
                            <a href="">Country</a>
                            <input style="color:#828282; width:470px;" class="ip_input" type="text" value="Country">

                        </div>
                        <a href="">Price summary</a>
                        <div class="panel">
                            <a class="title" href="">Price product   </a>
                            <a class="inside" style="text-align: right">$ 400</a><br>
                            <a class="title" href="">US Sale tax</a>
                            <a class="inside" href="">$ 35.2</a><br>
                            <a class="title" href="">International Delivery fee</a>
                            <a class="inside" href="">$ 15</a><br>
                        </div>
                        <a href="">Order total</a>
                        <a href="" style="font-weight: bold;">$ 450.2</a> <br>

                    </div>



                </div>

                <div class="col-md-4 ">
                    <div class="panel-top ">

                        <a href=" ">Buy Simple Mobie - Apple iPhone 11 Pro (64KB) - Space Gray from Amazon.s</a><br>
                        <img src="img/images/im_iphone.jpg" alt="">
                        <input type="text " value=" ">
                        <br>
                        <a class="title " href=" ">From   </a>
                        <a class="inside " href=" ">United State of America</a><br>
                        <a class="title " href=" ">To   </a>
                        <a class="inside " href=" ">Ho Chi Minh City, VN</a><br>
                        <a class="title " href=" ">Delivery before   </a>
                        <a class="inside " href=" ">December 24,2019</a><br>
                        <input type="text " value=" ">
                        <a class="inside " href=" ">Product price</a>
                        <a href=" ">$ 400</a>
                        <div class="buttons ">
                            <a class="btn btn-primary " role="button " href="# ">Request delivery offers</a>
                        </div>
                        <img src="img/icon/ic_protect.png" alt="">
                        <a class="des" style="color:green" href="">100% Money Back Guarantee</a><br>
                        <a class="des" style="color:#828282" href="">Get the item you ordered or get your money back</a><br>

                    </div>
                    <div class="panel-bottom " style="margin-top:15px ">
                        <a class="des" href="">Things keep in mind</a><br>
                        <input class="line" type="text " value="">
                        <br>
                        <a class="des" style="color:#4c9fbf" href=" ">Can I pay in installments?<br>
                                What methods of payment does TradeZ accept?<br>
                                Can I cancel my order or return my item?<br>
                                More about how TradeZ work?</a><br>


                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>