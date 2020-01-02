<!DOCTYPE html>
<html>

<head>

	<title>Checbox Collection</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Poppins:500,600&display=swap" rel="stylesheet">
	<style>
		/* Created by Mitali */






		input[type="checkbox"]:focus {
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0) !important;
		}

		input[type="checkbox"] {
			-webkit-appearance: none;
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			cursor: pointer;
			outline: none;
		}

		.style4 {
			height: 25px;
			width: 50px;
			background-color: #e5e5e5;
			border-radius: 50px;
			transition: 0.3s;
		}

		.style4:before {
			content: "";
			position: absolute;
			height: 20px;
			width: 20px;
			background-color: white;
			border-radius: 50%;
			left: 5px;
			top: 2.5px;
			transition: 0.3s;
		}

		.style4:after {
			position: absolute;
			font-size: 45px;
			font-weight: bold;
			color: #e5e5e5;
			left: 100px;
			letter-spacing: 0.5px;

			transition: 0.3s;
		}

		.style4:checked {
			background-color: #4c9fbf;
		}

		.style4:checked:before {
			background-color: white;
			left: 25px;
		}

		.style4:checked:after {
			color: #4c9fbf;
		}
	</style>
</head>

<body>

	<div class="containner">

		<input type="checkbox" class="style4">
	</div>		



</body>

</html>