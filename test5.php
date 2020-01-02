
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
        /* [contenteditable=true] {
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
        } */
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
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="process-bar.min.css">
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
            margin-bottom: 15px;
            height: 400px;
        }
        
        .content .container .row .col-md-8 div {
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
            width: 500px;
            text-align: center;
        }
        
        .content .container .row .col-md-8 .ip_input {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 5px;
            border: 1px solid #f2f2f2;
            background-color: #f2f2f2;
            /* height: 40px; */
            width: 100%;
            margin-bottom: 15px;
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
        
        .content .container .row .col-md-4 .panel-top {
            background-color: #fff;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            /* height: 300px; */
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
            width: 300px;
        }
        
        .content .container .row .col-md-8 .quantity img {
            width: 22px;
            height: 22px;
        }
        
        .content .container .row .col-md-8 .long {
            /* width: 500px; */
            height: 60px;
            margin-top: 3px;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 5px;
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
            font-size: 20px;
            font-weight: normal;
            height: 40px;
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
        
        .progressbar li.active:before {
            border-color: #4c9fbf;
            background-color: #4c9fbf;
            background: url(img/icon/ic_checked.png);
            background-repeat: no-repeat;
            color: transparent;
            background-position: 50% 50%;
        }
        
        .progressbar li.active+li:after {
            background: #4c9fbf;
        }
        
        .progressbar li.active+li:before {
            border-color: #4c9fbf;
            background-color: #4c9fbf;
            background: url(img/icon/ic_fly.png);
            background-repeat: no-repeat;
            color: transparent;
            background-position: 50% 50%;
        }
        
        @media (min-width: 576px) {
            .col-md-4 {
                padding-right: 0px;
                padding-left: 0px;
            }
        }
        
        @media (min-width: 768px) {
            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 52%;
                max-width: 66.666667%;
                margin-left: 100px;
            }
            .col-md-4 {
                position: relative;
                width: 100%;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        .content .container .row .col-md-4 .buttons {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        hr {
            margin-top: 5px;
            margin-bottom: 5px;
        }
        
        img {
            width: 25px;
            height: 25px;
        }
    </style>
    <style></style>
    <style bs-system-element="" bs-hidden=""></style>
</head>
<body style="background-color: #f2f2f2;">
    <div class="head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="root">
                        <div class="container">
                            <ul class="progressbar">
                                <li class="active">Product details</li>
                                <li>Delivery details</li>
                                <li style="color:#bdbdbd">Summary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="margin-top:15px">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="height:auto">
                    <h3 style="font-weight:bold; font-size:25px">Offer details</h3>
                    <div style="color:#4c9fbf" class="des">United State, US - Ho Chi Minh City, VN, November 24, 2019.</div>
                    <hr>
                    <div>Summary</div>
                    <div class="ip_input" style="display: flex; margin-bottom:5px;margin-top:5px;">
                        <div style="margin-right:30px; color: #828282">
                            Date delivery
                        </div>
                        <div contenteditable="true" style="flex-grow:1">
                            November 24, 2019
                        </div>
                        <div>
                            <img src="img/icon/ic_calender.png" alt="">
                        </div>
                    </div>
                    <div class="des">Shopper asked to deliver an order before <b>December 24, 2019</b></div>
                    <div class="ip_input" style="display: flex; margin-top:15px;">
                        <div style="margin-right:30px;color: #828282">
                            Your delivery reward
                        </div>
                        <div contenteditable="true" style="flex-grow:1">
                            $ 10
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div>
                            <img src="img/icon/ic_check-square.png" alt="">
                        </div>
                        <div style="color:#828282; font-size:16px;padding-top:4px; margin-left:10px;">ADD SHIPPING AND CUSTOMS FEES</div>
                    </div>
                    <div class="ip_input" style="display: flex; margin-top:5px;">
                        <div contenteditable="true" style="flex-grow:1">
                            $ 0
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div>
                            <img src="img/icon/ic_check-square.png" alt="">
                        </div>
                        <div style="color:#828282; font-size:16px;padding-top:4px; margin-left:10px;">ADD 7.75% US SALES TAX</div>
                    </div>
                    <div class="des">We noticed that you�re traveling from United Stated, US. We will include US sales tac into the final price for the shopper to pay.</div>
                    
                    <div class="content-title">Message shopper</div>
                    <textarea class="ip_input " style="margin-bottom:15px; height:100px;">Hi! I�m traveling from United State, US to Ho Chi Minh City, VN. I�ll keep you up-to-date about your order and will coordinate a time and place to met closer to delivery.</textarea>
                    <div style="display: flex;">
                        <div>
                            <img src="img/icon/ic_uncheck.png" alt="">
                        </div>
                        <div style="color:#828282; font-size:16px;padding-top:4px; margin-left:10px;">By making a delivery offer, I agree to TradeZ�s Terms and Conditions and acknowledge that I am familiar with and agree to abide by the customs rules and regulations of my destination country. I also acknowledge that I am responsible
                            for paying customs duties and incurring any loses that may incur at customs in my destination country.</div>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-light " role="button" href="?page=addTrip_step3" style="width: 100%; margin-top: 15px;margin-bottom: 15px; height:40px">Make delivery offer</a>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="panel-top" style="margin-bottom: 15px">
                    <div style="display:flex;">
                        <div>
                        <a href=" ">Buy Simple Mobie - Apple iPhone 11 Pro (64KB) - Space Gray from Amazon</a><br>
                        </div>
                        <div>
                        <img style="width:70px; height:100px; "src="img/images/im_product-detail.jpg" alt="">
                        </div>
                    
                    </div>    
                    <div class="title" style="color:#4c9fbf;" >
                                <div>
                                    Order details
                                </div>
                            </div>
                   
                      
                        <hr>
                     
                        <div class="delivery-infor" style="display: flex">
                            <div class="title" style="flex-grow:1">   Product price</div>
                            <span class="inside" style="float:right;">$ 400.00</span>
                        </div>
                        <div class="delivery-infor" style="display: flex">
                            <div class="title" style="flex-grow:1">Your delivery reward</div>
                            <span class="inside" style="float:right;">$ 10.00</span>
                        </div>
                        
                        <hr>
                        <div style="display: flex">
                            <div class="inside" style="margin-right:10px;flex-grow:1;margin: auto 0px;">Total</div>
                            <div style="font-weight: bold;font-size:24px">$410.00</div>
                        </div>
                        
                    </div>
                    <div class="panel-top" style="margin-bottom:15px">
                        <img src="img/icon/ic_idea.png" alt="">
                        <span class="title" style="color:#000;" href="">FAQ about making offer</span>
                        <hr>
                        <div class="title" style="color:#4c9fbf;">How it works: from making delivery offers to getting paid.</div>
                        <hr>
                        <div class="title" style="color:#4c9fbf;">Why must I buy this item with my own money?</div>
                        <hr>
                        <div class="title" style="color:#4c9fbf;">Information about customs.</div>
                        <hr>
                        <div class="title" style="color:#4c9fbf;">What are customs fees? Do I need to collect or pay them?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
