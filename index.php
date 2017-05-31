<!DOCTYPE html>
<html lang="en" >
<head>
<?php session_start(); ?>
	<meta charset="UTF-8">
	<title>firebase graph</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
	    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="Semantic-UI-CSS-master/semantic.js"></script>
</head>
<body>

<?php
	if(isset($_SESSION["login"])){
		include_once("system/main.page.php");
	}else{
		include_once('system/user/login.page.php');
	}
?>
</body>
</html>
