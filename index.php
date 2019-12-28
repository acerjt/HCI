<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "{$page}.php";

if (file_exists($path)) {
		require 'header.php';
		require "{$path}";
		require 'footer.php';
}
 else {
	require "./pages/404.php";
}
