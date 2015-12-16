<?php
/**
 * Created by PhpStorm.
 * User: nopassword
 * Date: 12/16/15
 * Time: 10:14
 */

?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/normalize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script>window.html5 || document.write('<script src="../js/vendor/html5shiv.js"><\/script>')</script>
	<![endif]-->
</head>
<body>
<p>Create json-ld snippet for flooring location</p>
<div id="main">
	<form method="get" action="process-ld.php">
		<input type="text" id="name" name="name" placeholder="Dealer name">
		<input type="text" id="address" name="address" placeholder="address">
		<input type="text" id="zip" name="zip" placeholder="zip">
		<input type="text" id="city" name="city" placeholder="city">
		<input type="text" id="state" name="state" placeholder="state code">
		<input type="text" id="phone" name="phone" placeholder="phone">
		<input type="text" id="email" name="email" placeholder="email">
		<input type="text" id="url" name="url" placeholder="url">
		<input type="text" id="logo" name="logo" placeholder="logo url">
		<textarea id="description" name="description" placeholder="description"></textarea>
		<input type="text" id="lat" name="lat" placeholder="lat">
		<input type="text" id="long" name="long" placeholder="long">
		<input type="text" id="hours" name="hours" placeholder="hours">
		<input type="text" id="map" name="map" placeholder="map url">
		<input type="text" id="sameas1" name="sameas1" placeholder="social media url 1">
		<input type="submit" id="formButton" value="get json-ld" name="submit">
	</form>
	<div id="preSurround">
		<a id="copybutton" href="#">copy</a>
		<pre id="jsonFormat">

		</pre>
	</div>
</div>
created by <a href="http://www.niumata.com">John Niumata Local SEO expert Florida</a>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
