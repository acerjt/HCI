<html>

<head>
    <!-- <base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden=""> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
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
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="process-bar.min.css">
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

        .content .container .row .col-md-8 {
            background-color: #fff;
            padding-top: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }

        .content .container .row .col-md-8 a {
            color: #000;
            font-size: 20px;
        }

        .content .container .row .col-md-8 .des {
            color: #828282;
            margin-top: 0px;
            font-size: 14px;
        }

        .content .container .row .col-md-8 .parse {
            margin-top: 5px;
            margin-bottom: 15px;
            padding-top: 5px;
            border-radius: 5px;
            border: 1px solid #4c9fbf;
            height: 40px;
            width: 100%;
            text-align: center;
        }

        .content .container .row .col-md-8 .ip_input {
            padding-left: 10px;
            border-radius: 5px;
            border: 1px solid #f2f2f2;
            background-color: #f2f2f2;
            height: 40px;
            width: 100%;
            margin-top: 0px;
            font-size: 16px;
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
            margin-top: 0px;
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
            padding: 5px 5px 5px 5px;
            border-radius: 5px;
            /* margin-left: 10px; */
            /* margin-bottom: 5px; */
        }

        .content .container .row .col-md-4 .panel-top {
            background-color: #fff;
            padding-top: 15px;
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
        }

        .content .container .row .col-md-4 a {
            font-size: 20px;
            color: black;
            font-weight: bold;
        }

        .content .container .row .col-md-4 .title {
            font-size: 16px;
            color: #828282;
            font-weight: normal;
            padding-right: 10px;
        }

        .content .container .row .col-md-4 .inside {
            font-size: 16px;
            color: black;
            font-weight: normal;
        }

        .content .container .row .col-md-4 input {
            background-color: #f2f2f2;
            height: 0.1px;
            border: 0.1px solid #f2f2f2;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 320px;
        }

        .content .container .row .col-md-8 .quantity img {
            width: 22px;
            height: 22px;
        }

        .btn-primary {

            color: #fff;
            background-color: #4c9fbf;
            border-color: #4c9fbf;
        }

        .content .container .row .col-md-4 .buttons {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .content .container .row .col-md-4 .buttons a {
            font-size: 20px;
            font-weight: normal;
            /* height: 40px; */
            width: 100%;
            color: #fff;
            text-align: center;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #3f89a8;
            border-color: #3f89a8;
        }

        .content .container .row .col-md-8 h4 {
            font-size: 25px;
        }

        .head {
            background-color: #fff;
            height: 100px;
            padding-top: 15px;
        }

        .progressbar li {
            float: left;
            color: #4c9fbf;
            width: 30%;
            position: relative;
            text-align: center;
            list-style-type: none;
        }




        @media (min-width: 576px) {

            /* .col-md-8 {
                -ms-flex: unset;
                flex: unset;
                width: inherit;
            } */
            .content .container .row .col-md-8 {
                margin-bottom: 15px;
                margin-left: unset;
            }

            .col-md-4 {
                padding: unset;
            }

            .content .container .row .col-md-8 .container .row .col-xs-2 img {
                max-width: 89px;
                max-height: 89px;
            }

            .content .container .row .col-md-8 .ip_input_link {
                padding-left: 10px;
                border-radius: 5px;
                border: 1px solid #f2f2f2;
                background-color: #f2f2f2;
                height: 40px;
                width: 90%;
                margin-top: 0px;
                font-size: 16px;
            }

            .content .container .row .col-md-8 .reload_button {
                background-color: #4c9fbf;
                width: 40px;
                height: 40px;
                padding: 5px 5px 5px 5px;
                border-radius: 5px;
                margin-left: 2px;
                /* margin-bottom: 5px; */
            }
            .delivery-container{
                display: flex;
            }
            .delivery-infor{
                margin: auto;
            }
        }

        @media (min-width: 768px) {
            .col-md-8 {
                -ms-flex: unset;
                flex: unset;
                width: inherit;
            }

            .content .container .row .col-md-8 {
                margin-bottom: 30px;
                margin-left: 100px;
            }

            .content .container .row .col-md-8 .container .row .col-xs-2 img {
                max-width: 100px;
                max-height: 100px;
            }

            .content .container .row .col-md-8 .ip_input_link {
                padding-left: 10px;
                border-radius: 5px;
                border: 1px solid #f2f2f2;
                background-color: #f2f2f2;
                height: 40px;
                width: 90%;
                margin-top: 0px;
                font-size: 16px;
            }

            .content .container .row .col-md-8 .reload_button {
                background-color: #4c9fbf;
                width: 40px;
                height: 40px;
                padding: 5px 5px 5px 5px;
                border-radius: 5px;
                margin-left: 10px;
                /* margin-bottom: 5px; */
            }

            .col-md-4 {
                padding: 0px 15px;
            }
            .delivery-container{
                display: initial;
            }
        }

        .content-title {
            font-size: 20px;
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
                <div class="col-md-12">
                    <div class="root">
                        <div class="container">
                            <ul class="progressbar">
                                <li class="fly active">Product details</li>
                                <li style="color:#bdbdbd">Delivery details</li>
                                <li style="color:#bdbdbd">Summary</li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="content" style="margin-top:15px ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="font-weight:bold">1. Review Product Details</h3>
                    <div class="content-title">Product link</div>
                    <input class="ip_input_link" type="text " value="https://amabuy.vn/us/amazon/iPhone11-Pro-64(GB)... ">
                    <img class="reload_button " src="img/icon/ic_reload.png " alt=" "></a><br>
                    <img src="img/icon/ic_global.png " alt=" ">
                    <a class="des" href=" ">www.amabuy.vn</a><br>
                    <div class="container " style="margin-bottom:15px ">

                        <div class="row ">
                            <div class="col-xs-2 " id="p1 "><img src="img/images/im_amabuy.png " alt=" "></div>
                            <div class="col-xs-2 col-half-offset " id="p2 "><img src="img/images/im_sendo.png " alt=" "></div>
                            <div class="col-xs-2 col-half-offset " id="p3 "><img src="img/images/im_lazada.jpg " alt=" "></div>
                            <div class="col-xs-2 col-half-offset " id="p4 "><img src="img/images/im_tiki.jpg " alt=" "></div>
                            <div class="col-xs-2 col-half-offset " id="p5 "><img src="img/images/im_ebay1.png " alt=" "></div>

                        </div>
                    </div>
                    <div class="content-title">Product Images</div>
                    <img class="product_image " src="img/images/im_iphone11_ebay.png " alt=" "> <br>
                    <div class="parse">

                        <img style="text-align:left; " src="img/icon/ic_camera.png ">
                        <a style="color:#4c9fbf "> Upload Image</a>
                    </div>
                    <div class="content-title">Product name</div>
                    <input class="ip_input " style="margin-bottom:15px; " type=" text " value="Simple Mobile - Apple iPhone 11 Pro (64KB) - Space Gold from... ">
                    <br>
                    <div class="content-title">Product details</div>
                    <textarea class="ip_input " style="margin-bottom:15px; height:100px;"> Enter product details like size, color, model, etc... </textarea>
                    <br>
                    <div class="content-title">Price on www.amabuy.com</div>
                    <input class="ip_input " style="margin-bottom:15px; " type="text " value="$400 ">
                    <br>

                    <div class="quantity" style="margin-bottom: 15px;display:flex">
                        <div style="flex-grow: 1">Quantity</div>
                        <div style="display: flex">

                            <img src="img/icon/ic_add.png " alt=" ">
                            <div style="margin: 0px 8px">1</div>
                            <img src="img/icon/ic_minus.png " alt=" ">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="panel-top" style="margin-bottom: 15px">
                        <a href=" ">Buy Simple Mobie - Apple iPhone 11 Pro (64KB) - Space Gray from Amazon.s</a><br>
                        <hr>
                        <div class="delivery-container">

                        <div class="delivery-infor" style="display: flex">
                            <div class="title">
                                <div>
                                    From
                                </div>
                            </div>
                            <div class="inside">United State of America</div>
                        </div>
                        <div class="delivery-infor" style="display: flex">
                            <div class="title">To</div>
                            <span class="inside">Ho Chi Minh City, VN</span>
                        </div>
                        </div>
                        <hr>
                        <div style="display: flex">

                            <div class="inside" style="margin-right:10px;flex-grow:1;margin: auto 0px;">Product price</div>
                            <div style="font-weight: bold;font-size:24px">$400.00</div>
                        </div>
                        <div class="buttons">
                            <a class="btn btn-light " role="button " href="?page=createOrder_Step2">Next</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>