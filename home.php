<html>

<head>
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
        .highlight-clean {
            color: #313437;
            background-color: #fff;
            padding: 20px 0;
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

        .join-gobal .buttons {
            text-align: center;
        }





        .highlight-clean .buttons .btn {
            padding: 13px 32px;
            margin: 6px;
            border: 1px solid #4c9fbf;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: uppercase;
            border-radius: 0px;
            /* font-weight: bold; */
            font-size: 20px;
            letter-spacing: 0.4px;
            line-height: 1;
            outline: none;
            background-color: #ddd;
        }

        .join-gobal .buttons .btn {
            padding: 12px 32px;
            margin: 6px;
            border: 1px solid #4c9fbf;
            background: none;
            box-shadow: none;
            text-shadow: none;
            opacity: 0.9;
            text-transform: uppercase;
            border-radius: 0px;
            /* font-weight: bold; */
            font-size: 18px;
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

        .highlight-clean .buttons .btn-light1 {
            text-transform: none;
            border: 1px solid #4c9fbf;
            background-color: #fff;
            color: #4c9fbf;
            border-radius: 5px;
            transition: 0.3s !important;
        }

        .highlight-clean .buttons .btn-light1:hover {
            background-color: #3f89a8;
            color: #fff;
        }

        .highlight-clean .buttons .btn-light1:not(:disabled):not(.disabled).active,
        .highlight-clean .buttons .btn-light1:not(:disabled):not(.disabled):active {
            color: #000 !important;
            background-color: #fff !important;
            border: 1px solid #4c9fbf !important;
            box-shadow: none;
        }


        .highlight-clean .buttons .btn-primary {
            background-color: #4c9fbf;
            text-transform: none;
            border-radius: 5px;
            color: #fff;
            box-shadow: none;
            text-shadow: none;
            transition: 0.3s !important;
        }

        .highlight-clean .buttons .btn-primary:hover {
            background-color: #3f89a8;
            cursor: -webkit-zoom-out;
        }

        .highlight-clean .buttons .btn-primary:not(:disabled):not(.disabled).active,
        .highlight-clean .buttons .btn-primary:not(:disabled):not(.disabled):active {
            color: #000 !important;
            background-color: #4c9fbf !important;
            border: none;
            box-shadow: none;
        }

        .join-gobal .buttons .btn:hover {
            opacity: 1;
        }

        .join-gobal .buttons .btn:active {
            transform: translateY(1px);
        }

        .join-gobal .buttons .btn-light2 {
            text-transform: none;
            border: 1px solid #4c9fbf;
            background-color: #fff;
        }

        .join-gobal .buttons .btn-primary {
            background-color: #4c9fbf;
            text-transform: none;
            color: #fff;
        }

        .join-gobal {
            height: 250px;
        }
    </style>
    <link rel="stylesheet" href="lightbox.min.css">
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

        @media (max-width:576px) {

            .testimonials-clean .container .intro h2 {
                width: initial !important;
                font-size: 36px !important;
            }

            .testimonials-clean .intro {
                font-size: 15px;
                max-width: 540px !important;
                ;
                /* margin: 0 auto; */
            }
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
            margin-top: 15px;
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
            padding-top: 20px;
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
            /* max-width: 500px; */
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
            font-size: 25px;
            margin-top: 28px;
            margin-bottom: 8px;
            color: inherit;
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
            margin-bottom: 50px;
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
            /* .testimonials-clean .item {
                height: 550px;
            } */
        }

        .testimonials-clean .item .box {
            padding: 30px;
            border-radius: 0px;
            width: 300px;
            border-top-left-radius: 0px;
            border-top-color: transparent;
            background: url(img/images/im_amazon.png);
            position: relative;
            background-position: 50% 50%;
            background-repeat: no-repeat;
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
            /* max-width: 40px; */
            float: left;
            /* margin-righ  t: 12px; */
            /* margin-top: -5px; */
        }

        .text-left {
            text-align: left !important;
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
            text-align: center !important;
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
            /* width: 860px; */
            text-align: center;
            /* width: 800px; */
            /* margin-left: 0px; */
        }
    </style>
    <style bs-system-element="" bs-hidden=""></style>
    <style>
        @media (min-width: 576px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active+.carousel-item,
            .carousel-inner .active+.carousel-item+.carousel-item {
                display: block;
            }

            /* .carousel-inner
             {
                width: 300px !important;
            } */

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: none;
                margin-right: initial;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

        }



        /* @media only screen and (max-width: 576px) {
            .recent-order-group {
                display: none;
            }
        } */
        @media only screen and (min-width: 1200px) {
            #carouselExample {
                display: none;
            }
        }

        @media (min-width: 576px) {
            .testimonials-clean .item {
                width: 320px;
                margin-left: 110px;
                margin-right: 110px;
            }

            .join-gobal .buttons .btn-primary,.join-gobal .buttons .btn-light2 {

                width: 100%;
            }
        }

        /* .team-boxed .people {
            align-items: center;
        } */

        @media (min-width: 768px) {
            .testimonials-clean .item {
                width: 320px;
                margin-left: 0px;
                margin-right: 0px;
            }

            .join-gobal .buttons .btn-primary,.join-gobal .buttons .btn-light2 {

                width: initial;
            }
            
        }
    </style>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-left header-content-title">Shop Anywhere, Travel Everywhere</h2>
                <p class="text-left">TradeZ connects shoppers and travelers who help each other access the world. </p>
                <div class="buttons"><a class="btn btn-primary" role="button" href="?page=createOrder_Step0">Order with TradeZ</a><button class="btn btn-light1" type="button">Travel with TradeZ</button></div>
            </div>

        </div>
    </div>
    <div class="photo-gallery"></div>
    <!-- <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Recently Completed Orders</h2>
                <p class="text-center">These orders were recently delivered to the other side of the world. Safely, quickly and affordably.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div style=" background: url(img/images/im_nike.png); " class="box">

                    </div>
                    <div class="author">
                        <img class="rounded-circle" src="img/avatar/av_1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div style="background: url(img/images/im_nike.png); " class="box">

                    </div>
                    <div class="author">
                        <img class="rounded-circle" src="img/avatar/av_2.jpg">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div style=" background: url(img/images/im_nike.png); " class="box">

                    </div>
                    <div class="author"><img class="rounded-circle" src="img/avatar/av_3.jpg">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-md-6 col-lg-4 item d-block w-100">
                                <div style="background: url(img/images/im_nike.png); " class="box">

                                </div>
                                <div class="author">
                                    <img class="rounded-circle" src="img/avatar/av_2.jpg">
                                    <h5 class="name">Carl Kent</h5>
                                    <p class="title">Founder of Style Co.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-6 col-lg-4 item d-block w-100">
                                <div style=" background: url(img/images/im_nike.png); " class="box">

                                </div>
                                <div class="author"><img class="rounded-circle" src="img/avatar/av_3.jpg">
                                    <h5 class="name">Emily Clark</h5>
                                    <p class="title">Owner of Creative Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-6 col-lg-4 item d-block w-100">
                                <div style=" background: url(img/images/im_nike.png); " class="box">

                                </div>
                                <div class="author">
                                    <img class="rounded-circle" src="img/avatar/av_1.jpg">
                                    <h5 class="name">Ben Johnson</h5>
                                    <p class="title">CEO of Company Inc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Recently Completed Orders </h2>
                <p class="text-center">These orders were recently delivered to the other side of the world. Safely, quickly and affordably.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="order-container">
                        <div style="height:350px;position: relative;border: 1px solid #e0e0e0; border-bottom:none">
                            <img style="height:100%;width:100%;" src="img/images/im_nike.png" alt="">
                        </div>
                        <div class="align-items-center" style="border: 1px solid #e0e0e0;display:flex;padding-top:32px;padding-left:20px;padding-right:20px;padding-bottom:20px">
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                            <div class="align-items-center">
                                <i class="fas fa-plane fa-lg"></i>
                            </div>
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div>
                        <div style="height:350px;position: relative;border: 1px solid #e0e0e0; border-bottom:none">
                            <img style="height:100%;width:100%;" src="img/images/im_robot.png" alt="">
                        </div>
                        <div class="align-items-center" style="border: 1px solid #e0e0e0;display:flex;padding-top:32px;padding-left:20px;padding-right:20px;padding-bottom:20px">
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                            <div class="align-items-center">
                                <i class="fas fa-plane fa-lg"></i>
                            </div>
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div>
                        <div style="height:350px;position: relative;border: 1px solid #e0e0e0; border-bottom:none">
                            <img style="height:100%;width:100%;" src="img/images/im_camera.jpg" alt="">
                        </div>
                        <div class="align-items-center" style="border: 1px solid #e0e0e0;display:flex;padding-top:32px;padding-left:20px;padding-right:20px;padding-bottom:20px">
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                            <div class="align-items-center">
                                <i class="fas fa-plane fa-lg"></i>
                            </div>
                            <div class="align-items-center" style="display: flex;flex-direction:column; width:120px">
                                <div>
                                    <img src="img/avatar/av_1.jpg" style="border-radius: 50%;width:72px;height:72px" alt="">
                                </div>
                                <div style="margin:auto; margin-top:12px;margin-bottom:12px;background-color: #ff7364;padding: 4px 8px 4px 8px;border-radius: 30px;font-size: 13px;color: #fff;">earned $15</div>
                                <div style="font-weight: 550">Traveler</div>
                                <div style="color: #8f8f95">Diana</div>
                                <div style="color: #8f8f95">San Francisco</div>
                                <div style="color: #8f8f95">CA, US</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro" id="how-it-work">
                <h2 class="text-center">How TradeZ work</h2>
                <div class="buttons"><a class="btn btn-primary" role="button" href="#">For Shoppers</a><button class="btn btn-light" type="button">For Traveler</button></div>
                <p class="text-center">TradeZ is the go-to way to shop for products that aren’t available in your country or are too expensive to buy locally. You can order just about anything on TradeZ, from baby clothes and kids toys to tech gadgets and nutritional supplements.
                </p>

            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">1.Tell us about the item you are looking for</h3>
                            <p class="description">With TradeZ, you can get any item from around the world. To get started, create an order for a product you want and include details such as where a traveler can buy it and how much it costs.</p>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="img/images/im_tell.jpg"></a>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">2.Wait for travelers to make delivery offers</h3>
                            <p class="description">Once you publish your order, we’ll share it with our entire traveler community. Then, travelers heading to your city will bid to deliver it by making an offer.</p>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="img/images/im_wait.jpg"></a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">3.Agree on a monetary reward for your traveler</h3>
                            <p class="description">TradeZ auto-calculates all applicable taxes and fees, including the monetary reward you agree to pay your traveler for delivering your item. If your traveler doesn’t deliver your order for any reason, you will receive a full
                                refund.
                            </p>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="img/images/im_agree.jpg"></a>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col">
                            <h3 class="name">4.Meet with your traveler and receive your item</h3>
                            <p class="description">Coordinate a time and public place to meet your traveler. When you receive your item, make sure to confirm delivery so that your traveler gets paid.</p>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <a href="#"><img class="img-fluid" src="img/images/im_meet.jpg"></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <div class="team-boxed" style="background-color:white">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">We pride ourselves on quality service</h2>
                <p class="text-center">It’s safe, easy and a fun way to make money traveling the world.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_secure.png">
                        <h3 class="name">Secure Online Payments</h3>
                        <p class="description">Your money is safe with Grabr every step of the way. Grabr uses a secure payment system and you have a money back guarantee.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_guareanteed.png">
                        <h3 class="name">Guaranteed delivery</h3>

                        <p class="description">If a traveler cancels your order or delivers an item in bad condition, we will issue a full refund and aim to match you with a new traveler. </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_multiple.png">
                        <h3 class="name">Multiple Payment Options</h3>

                        <p class="description">To make your life easier, we accept a range of payment methods including Visa, MasterCard and American Express, with more options available soon. </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_no.png">
                        <h3 class="name">No Hidden Fees</h3>
                        <p class="description">For full transparency, Grabr uses machine learning to calculate all applicable taxes and fees before you publish your order, so you know exactly how much you are paying. </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_community.png">
                        <h3 class="name">Community of Verified Shoppers and Travelers</h3>
                        <p class="description">Trust is our top priority at Grabr, and we work hard to ensure that our community treats all members with the utmost respect. </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="img/icon/ic_24.png">
                        <h3 class="name">24/7 Customer Care</h3>
                        <p class="description">Our dedicated team of customer service professionals are on hand to resolve any issue that arises throughout the order and delivery process. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="join-gobal" style="background-image: url('img/images/im_join.jpg');">
        <div class="container">
            <div class="intro" style="padding-Top:55px">
                <h2 class="text-center" style="color:#fff">Join our global community</h2>

            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="?page=createOrder_Step0">Shop overseas products</a><button class="btn btn-light2" type="button">Make money traveling</button></div>
        </div>
    </div>
    <div class="photo-gallery"></div>
</body>
<script>
    $('#carouselExample').on('slide.bs.carousel', function(e) {


        var $e = $(e.relatedTarget);

        var idx = $e.index();
        console.log("IDX :  " + idx);

        var itemsPerSlide = 3;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
</script>

</html>