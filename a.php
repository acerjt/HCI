<html><head><base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden=""> 
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
				<title>Untitled</title><link rel="stylesheet" href="./embed/bootstrap/4/default/bootstrap.min.css">
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
			display:none;
		}

		html{
			-webkit-user-select: none;
			user-select:none;
			overflow: auto !important;
		}

		body{
			min-height:650px;
		}

		*{
			cursor:default !important;
			pointer-events:all !important;
		}

		a{
			cursor:text;
		}

		img:not([src]):not([srcset]){
			background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIg0KCXhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIg0KCXdpZHRoPSIxNjVweCIgaGVpZ2h0PSIxNjVweCIgdmlld0JveD0iMCAwIDE2NSAxNjUiPg0KPHBhdGggZmlsbFJ1bGU9ImV2ZW5vZGQiIGQ9Ik0gMC43OSAyLjIxQyAwLjc5IDIuMjEgMi4yMSAwLjc5IDIuMjEgMC43OSAyLjIxIDAuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMC43OSAyLjIxIDAuNzkgMi4yMVoiIGZpbGw9InJnYigxOTMsMTk1LDE5NSkiLz48cGF0aCBmaWxsUnVsZT0iZXZlbm9kZCIgZD0iTSAxNjIuNzkgMC43OUMgMTYyLjc5IDAuNzkgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMTYyLjc5IDAuNzkgMTYyLjc5IDAuNzlaIiBmaWxsPSJyZ2IoMTkyLDE5NCwxOTUpIi8+PC9zdmc+');
			width: 80px;
			height: 80px;
			background-size: 100%;
			background-repeat:no-repeat;
		}

		/* Stopping css animations on the stage */

		*:not([bs-anim-preview]){
			transition:none !important;
			transition-duration: 0s !important;
		}

		[bs-dragged]{
			opacity:0.3 !important;
		}

		/* Inline editing */

		[contenteditable=true] {
			box-shadow:-1px -1px 1px rgba(17, 142, 232, 0.85), 
				1px 1px 1px rgba(17, 142, 232, 0.85), 
				0 0 11px rgba(17, 142, 232, 0.85) !important;
			outline:none !important;
			min-height:1em;
			cursor:initial !important;
		}

		[contenteditable=true] *:not([contenteditable=false]){
			cursor:initial !important;
		}

		[contenteditable=true]:empty:before {
		    content: "\00a0\00a0" !important;
		}

		[contenteditable=true] [contenteditable=false] {
			box-shadow:0 0 0 1px rgba(17, 142, 232, 0.85);
		}

		/* Preventing mouse events for embeds */

		iframe, embed, object, audio{
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
		.container-fluid:empty:before{
			background-color:#eee;
			content:'Empty Row';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
		}

		div[class*="col-"]:empty:before{
			content:'Empty Column';
		}

		form:empty:before{
			content:'Empty Form';
		}

		.form-group:empty:before{
			content:'Empty Form Group';
		}

		form.navbar-form:empty:before{
			display: inline-block;
			padding:0 40px;
			font-size:16px;
			line-height:36px;
		}

		.container:empty:before,
		.container-fluid:empty:before{
			content:'Empty Container';
		}

		.thumbnail img:not([src]){
			background-repeat: no-repeat;
		    background-size: 100% 85%;
		    background-position-y: 50%;
		    width: 100%;
			height: 180px;
		}

		/* Making the dropdown menus have a white background when they're edited */

		.dropdown-item:active,
		.dropdown-menu>li>a:focus{
			background:unset;
			color:unset;
		}

		/* This is needed because the li items are 0x0px by default,
		and bootstrap studio can't select them */

		.pagination>li {
		  float: left;
		}

		/* Iframes without src are colored in gray */
		.embed-responsive iframe:not([src]){
			background-color:#ddd;
		}

		/* This is needed, otherwise split buttons in input groups break into two lines. */

		.input-group-btn .btn-group > .btn{
			float:none;
		}

		

		div[class*="col-"]:empty,		
		div.col:empty{
			display:flex;
		}

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.container:empty:before, 
		.container-fluid:empty:before{
			width: 100%;
		}

		div.col:empty:before{
			background-color:#eee;
			content:'Empty Column';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
			width:100%;
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

		</style><link rel="stylesheet" href="./embed/animation/animate.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="./embed/animation/aos.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/fontawesome-all.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/font-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/ionicons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/line-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/material-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/simple-line-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="./embed/fonts/typicons.min.css"><link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" bs-system-element="" bs-hidden=""><style></style><style>.testimonials-clean {
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
  font-size: 16px;
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

</style><style bs-system-element="" bs-hidden=""></style></head>
			<body><div class="testimonials-clean"><div class="container"><div class="intro"><h2 class="text-center">Testimonials </h2><p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p></div><div class="row people"><div class="col-md-6 col-lg-4 item"><div class="box"><p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p></div><div class="author"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/cac1f7c3-8c54-40f3-a759-3e8b7db2bccd"><h5 class="name">Ben Johnson</h5><p class="title">CEO of Company Inc.</p></div></div><div class="col-md-6 col-lg-4 item"><div class="box"><p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p></div><div class="author"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/ed3c8cc0-13cb-420d-9a0f-6a4947a199c6"><h5 class="name">Carl Kent</h5><p class="title">Founder of Style Co.</p></div></div><div class="col-md-6 col-lg-4 item"><div class="box"><p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p></div><div class="author"><img class="rounded-circle" src="blob:https://bootstrapstudio.io/02309722-70bb-45e3-867b-6c3118878bf0"><h5 class="name">Emily Clark</h5><p class="title">Owner of Creative Ltd.</p></div></div></div></div></div></body></html>