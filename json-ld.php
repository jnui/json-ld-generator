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
		<input type="text" id="name" name="name" placeholder="Business name">
		<input type="text" id="address" name="address" placeholder="address">
		<input type="text" id="city" name="city" placeholder="city">
		<input type="text" id="state" name="state" placeholder="state code">
		<input type="text" id="zip" name="zip" placeholder="zip">
		<span class="coord" style="display:none;padding:3px;border:1px solid #cccccc;background-color:#eee;cursor: pointer;">fill co-ordinates</span>
		<input type="text" id="phone" name="phone" placeholder="phone">
		<input type="text" id="email" name="email" placeholder="email">
		<input type="text" id="url" name="url" placeholder="url">
		<input type="text" id="logo" name="logo" placeholder="logo url">
		<textarea id="description" name="description" placeholder="description"></textarea>
		<input type="text" id="lat" name="lat" placeholder="lat">
		<input type="text" id="long" name="long" placeholder="long">
		<select id="hour-ranges" style="display:block;">
			<option value="0" selected>Choose number of opening hour ranges</option>
			<option value="1">1 range of opening hours</option>
			<option value="2">2 ranges of opening hours</option>
			<option value="3">3 ranges of opening hours</option>
			<option value="4">4 ranges of opening hours</option>
			<option value="5">5 ranges of opening hours</option>
			<option value="6">6 ranges of opening hours</option>
			<option value="7">7 ranges of opening hours</option>
		</select>


		<input type="text" id="map" name="map" placeholder="map url">
		<input type="text" id="sameas1" name="sameas1" placeholder="social media url 1">
		<input type="submit" id="formButton" value="generate json-ld" name="submit">
		<p>Fill out this form and click the button- you can click the generate button any time, even if the form is empty. </p>
	</form>
	<div id="preSurround">
		<p>put the following code on your website, or location page</p>
		<a id="copybutton" href="#">copy code to clipboard</a>
		<pre id="jsonFormat">

		</pre>
	</div>
</div>
<p>check the code at google's tool <a href="https://developers.google.com/structured-data/testing-tool" target="_blank">http://developers.google.com/structured-data/testing-tool/</a></p>
<p>created by <a href="http://www.niumata.com">John Niumata Local SEO Palm Beach County FL</a></p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
