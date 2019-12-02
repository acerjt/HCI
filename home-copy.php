<html>

<head>
    <base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="./embed/bootstrap/4/default/bootstrap.min.css">
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
        
        html::-webkit-scrollbar {
            width: 9.333333333333334px;
            height: 9.333333333333334px;
        }
    </style>
    <link rel="stylesheet" href="./embed/animation/animate.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" href="./embed/animation/aos.min.css" bs-system-element="" bs-hidden="">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/font-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/ionicons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/line-awesome.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/material-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/typicons.min.css">
    <link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" bs-system-element="" bs-hidden="">
    <style>
        .highlight-clean {
            color: #313437;
            background-color: #fff;
            padding: 50px 0;
        }
        
        .highlight-clean p {
            color: #7d8285;
        }
        
        .highlight-clean h2 {
            font-weight: bold;
            margin-bottom: 25px;
            line-height: 1.5;
            padding-top: 0;
            margin-top: 0;
            color: inherit;
        }
        
        .highlight-clean .intro h2 {
            font-size: 40px;
        }
        
        .highlight-clean .intro {
            font-size: 15px;
            max-width: 500px;
            margin: 0 auto 25px;
        }
        
        .highlight-clean .buttons {
            text-align: left;
        }
        
        .highlight-clean .buttons .btn {
            padding: 16px 32px;
            margin: 6px;
            border: 1px solid #4c9fbf;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: uppercase;
            /* border-radius:5px; */
            /* font-weight: bold; */
            font-size: 20px;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none;
            background-color: #ddd;
        }
        
        .highlight-clean .buttons .btn:hover {
            opacity: 1;
        }
        
        .highlight-clean .buttons .btn:active {
            transform: translateY(1px);
        }
        
        .highlight-clean .buttons .btn-light {
            text-transform: none;
            border: 1px solid #4c9fbf;
            background-color: #fff;
        }
        
        .highlight-clean .buttons .btn-primary {
            background-color: #4c9fbf;
            ;
            text-transform: none;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css?bsCacheToken=1575176343123">
    <style>
        .photo-gallery {
            color: #313437;
            background-color: #fff;
        }
        
        .photo-gallery p {
            color: #7d8285;
        }
        
        .photo-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }
        
        @media (max-width:767px) {
            .photo-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }
        
        .photo-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px;
        }
        
        .photo-gallery .intro p {
            margin-bottom: 0;
        }
        
        .photo-gallery .photos {
            padding-bottom: 20px;
        }
        
        .photo-gallery .item {
            padding-bottom: 30px;
        }
    </style>
    <style>
        .projects-horizontal {
            color: #313437;
            background-color: #fff;
        }
        
        .projects-horizontal p {
            color: #000;
        }
        
        .projects-horizontal h2 {
            font-weight: bold;
            margin-bottom: 20px;
            padding-top: 40px;
            color: inherit;
            font-size: 40px;
        }
        
        @media (max-width:767px) {
            .projects-horizontal h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }
        
        .projects-horizontal .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 10px;
        }
        
        .projects-horizontal .projects {
            padding-bottom: 40px;
        }
        
        .projects-horizontal .item {
            padding-top: 60px;
            min-height: 160px;
        }
        
        @media (max-width:767px) {
            .projects-horizontal .item {
                padding-top: 40px;
                min-height: 160px;
            }
        }
        
        .projects-horizontal .item .name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 15px;
            color: inherit;
        }
        
        @media (max-width:991px) {
            .projects-horizontal .item .name {
                margin-top: 22px;
            }
        }
        
        .projects-horizontal .item .description {
            font-size: 15px;
            margin-bottom: 0;
        }
    </style>
    <style></style>
    <style>
        .team-boxed {
            color: #313437;
            background-color: #eef4f7;
        }
        
        .team-boxed p {
            color: #7d8285;
        }
        
        .team-boxed h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }
        
        @media (max-width:767px) {
            .team-boxed h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }
        
        .team-boxed .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .team-boxed .intro p {
            margin-bottom: 0;
        }
        
        .team-boxed .people {
            padding: 50px 0;
        }
        
        .team-boxed .item {
            text-align: center;
        }
        
        .team-boxed .item .box {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            margin-bottom: 30px;
        }
        
        .team-boxed .item .name {
            font-weight: bold;
            margin-top: 28px;
            margin-bottom: 8px;
            color: inherit;
        }
        
        .team-boxed .item .title {
            text-transform: uppercase;
            font-weight: bold;
            color: #d0d0d0;
            letter-spacing: 2px;
            font-size: 13px;
        }
        
        .team-boxed .item .description {
            font-size: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        
        .team-boxed .item img {
            max-width: 160px;
        }
        
        .team-boxed .social {
            font-size: 18px;
            color: #a2a8ae;
        }
        
        .team-boxed .social a {
            color: inherit;
            margin: 0 10px;
            display: inline-block;
            opacity: 0.7;
        }
        
        .team-boxed .social a:hover {
            opacity: 1;
        }
    </style>
    <style>
        .testimonials-clean {
            color: #313437;
            background-color: #eef4f7;
        }
        
        .testimonials-clean p {
            color: #7d8285;
        }
        
        .testimonials-clean h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }
        
        @media (max-width:767px) {
            .testimonials-clean h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }
        
        .testimonials-clean .intro {
            font-size: 15px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .testimonials-clean .intro p {
            margin-bottom: 0;
        }
        
        .testimonials-clean .people {
            padding: 50px 0 20px;
        }
        
        .testimonials-clean .item {
            margin-bottom: 32px;
        }
        
        @media (min-width:768px) {
            .testimonials-clean .item {
                height: 220px;
            }
        }
        
        .testimonials-clean .item .box {
            padding: 30px;
            background-color: #fff;
            position: relative;
        }
        
        .testimonials-clean .item .box:after {
            content: '';
            position: absolute;
            left: 30px;
            bottom: -24px;
            width: 0;
            height: 0;
            border: 15px solid transparent;
            border-width: 12px 15px;
            border-top-color: #fff;
        }
        
        .testimonials-clean .item .author {
            margin-top: 28px;
            padding-left: 25px;
        }
        
        .testimonials-clean .item .name {
            font-weight: bold;
            margin-bottom: 2px;
            color: inherit;
        }
        
        .testimonials-clean .item .title {
            font-size: 13px;
            color: #9da9ae;
        }
        
        .testimonials-clean .item .description {
            font-size: 15px;
            margin-bottom: 0;
        }
        
        .testimonials-clean .item img {
            max-width: 40px;
            float: left;
            margin-right: 12px;
            margin-top: -5px;
        }
        
        .text-left {
            text-align: left!important;
            width: 440px;
            line-height: 20px;
            margin-bottom: 0px;
            margin-left: 6px;
        }
        
        .testimonials-clean .container .intro h2 {
            width: 560px;
            font-size: 40px;
        }
        
        .projects-horizontal .container .intro .buttons .btn {
            padding: 5px 10px;
            margin: 6px;
            border-color: #fff;
            border-bottom: 3px solid #4c9fbf;
            color: #000;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            border-radius: 0px;
            font-weight: bold;
            font-size: 15px;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none;
            background-color: #fff;
            text-transform: none;
            text-align: center;
            text-align: center!important;
        }
        
        .projects-horizontal .buttons {
            text-align: center;
        }
        
        .first-letter {
            font-size: 35px;
            line-height: 70px;
            initial-letter: 2;
        }
        
        .subhead::first-letter {
            initial-letter: 4;
        }
        
        .team-boxed .container .intro h2 {
            font-size: 40px;
            width: 760px;
            text-align: center;
            /* width: 800px; */
            /* margin-left: 0px; */
        }
    </style>
    <style bs-system-element="" bs-hidden=""></style>
</head>

<body>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-left">Shop Anywhere, Travel Everywhere</h2>
                <p class="text-left">TradeZ connects shoppers and travelers who help each other access the world. </p>
                <div class="buttons"><a class="btn btn-primary" role="button" href="#">Order with TradeZ</a><button class="btn btn-light" type="button">Travel with TradeZ</button></div>
            </div>

        </div>
    </div>
    <div class="photo-gallery"></div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Recently Completed Orders</h2>
                <p class="text-center">These orders were recently delivered to the other side of the world. Safely, quickly and affordably.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description"><img class="recent-order1" src="img/images/im_iphone.png" alt=""></p>
                    </div>
                    <div class="author">
                        <img class="rounded-circle" src="blob:https://bootstrapstudio.io/0b78c8b5-d934-461c-b359-c13c604eb924">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author">
                        <img class="rounded-circle" src="blob:https://bootstrapstudio.io/0b78c8b5-d934-461c-b359-c13c604eb924">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/79d3e91a-8567-4f33-b416-e1a38e74fa2f">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">How TradeZ work</h2>
                <div class="buttons"><a class="btn btn-primary" role="button" href="#">For Shoppers</a><button class="btn btn-light" type="button">For Traveler</button></div>
                <p class="text-center">TradeZ is the go-to way to shop for products that aren’t available in your country or are too expensive to buy locally. You can order just about anything on TradeZ, from baby clothes and kids toys to tech gadgets and nutritional supplements.
                </p>

            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="blob:https://bootstrapstudio.io/0f6c3b90-db4b-4d82-bc13-11f6a370d54c"></a>
                        </div>
                        <div class="col">
                            <h3 class="name"><span class="first-letter">1</span>Tell us about the item you are looking for</h3>
                            <p class="description">With TradeZ, you can get any item from around the world. To get started, create an order for a product you want and include details such as where a traveler can buy it and how much it costs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="blob:https://bootstrapstudio.io/277cf51c-26e7-4941-80ea-3f7ab28be06b"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Wait for travelers to make delivery offers</h3>
                            <p class="description">Once you publish your order, we’ll share it with our entire traveler community. Then, travelers heading to your city will bid to deliver it by making an offer.</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="blob:https://bootstrapstudio.io/277cf51c-26e7-4941-80ea-3f7ab28be06b"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Wait for travelers to make delivery offers</h3>
                            <p class="description">Once you publish your order, we’ll share it with our entire traveler community. Then, travelers heading to your city will bid to deliver it by making an offer.</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="blob:https://bootstrapstudio.io/277cf51c-26e7-4941-80ea-3f7ab28be06b"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Agree on a monetary reward for your traveler</h3>
                            <p class="description">TradeZ auto-calculates all applicable taxes and fees, including the monetary reward you agree to pay your traveler for delivering your item. If your traveler doesn’t deliver your order for any reason, you will receive a full
                                refund.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="blob:https://bootstrapstudio.io/277cf51c-26e7-4941-80ea-3f7ab28be06b"></a>
                        </div>
                        <div class="col">
                            <h3 class="name">Meet with your traveler and receive your item</h3>
                            <p class="description">Coordinate a time and public place to meet your traveler. When you receive your item, make sure to confirm delivery so that your traveler gets paid.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">We pride ourselves on quality service</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/6b266c49-8aff-4422-84d5-0b137b7e3b34">
                        <h3 class="name">Ben Johnson</h3>
                        <p class="title">Musician</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/79d3e91a-8567-4f33-b416-e1a38e74fa2f">
                        <h3 class="name">Emily Clark</h3>
                        <p class="title">Artist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/0b78c8b5-d934-461c-b359-c13c604eb924">
                        <h3 class="name">Carl Kent</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">We pride ourselves on quality service</h2>
                <p class="text-center">It’s safe, easy and a fun way to make money traveling the world. </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="#">Primary</a><button class="btn btn-light" type="button">Secondary</button></div>
        </div>
    </div>
    <div class="photo-gallery"></div>
</body>

</html>