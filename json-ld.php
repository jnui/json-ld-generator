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
	<title>Free Json-LD generator for a store - Flooring digital agency</title>
	<meta name="description" content="This free tool creates json-ld code snippets for physical stores, in particular flooring stores. Includes open hours, same as, automatic coordinate retrieval. Floorforce is a digital agency for the flooring industry.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/normalize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script>window.html5 || document.write('<script src="../js/vendor/html5shiv.js"><\/script>')</script>
	<![endif]-->
</head>
<body>
<h1>Free json-ld schema generator for a store location - compliments of <a href="http://www.floorforce.com">Floorforce</a></h1>
<div id="main">
	<div class="notes">
	<div class="instructions">
		<h2>about this Json-ld schema generator</h2>
		<p>Floorforce does alot of local SEO work for local flooring stores, we really like the new JSON-LD schema format, and so we created this tool to make it easier to create the script snippets for our customers. </p>
	</div>
	<div class="instructions">
		<h2>json-ld generator features</h2>
		<ul>
			<li>Automatically calculates latitude & longitude from address</li>
			<li>Ability to add multiple opening hours</li>
			<li>Ability to add multiple same-as links (social media links)</li>
			<li>Fine tune entity type with additional type via <a href="http://www.productontology.org/">productontology.org</a></li>
			<li>Updated to conform to <a href="https://developers.google.com/structured-data/local-businesses/?hl=en">google's new json-ld changes</a></li>
		</ul>
	</div>

	</div>
	<h2>Json-ld generator tool</h2>
	<form method="get" action="process-ld.php">
		<input type="text" id="name" name="name" placeholder="Business name">
		<input type="text" id="address" name="address" placeholder="address">
		<input type="text" id="city" name="city" placeholder="city">
		<input type="text" id="state" name="state" placeholder="state code">
		<input type="text" id="zip" name="zip" placeholder="zip">
		<input type="text" id="country" name="country" placeholder="Country Code 2 Letters e.g. US">

		<input type="text" id="phone" name="phone" placeholder="phone">
		<input type="text" id="email" name="email" placeholder="email">
		<input type="text" id="url" name="url" placeholder="url">
		<input type="text" id="logo" name="logo" placeholder="logo url">

		<textarea id="description" name="description" placeholder="description"></textarea>
		<input type="text" id="additional" name="additional" placeholder="additional type e.g. http://www.productontology.org/id/Flooring" value="http://www.productontology.org/id/Flooring">
		<input type="text" id="map" name="map" placeholder="map url">
		<span class="coord" style="display:none;padding:3px;border:1px solid #cccccc;background-color:#eee;cursor: pointer; margin: 0 auto; width: 30%;">fill lat & long co-ordinates below</span>
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



		<select id="sameas" style="display:block;">
			<option value="0" selected>Choose number of social media links</option>
			<option value="1">1 social media link</option>
			<option value="2">2 social media links</option>
			<option value="3">3 social media links</option>
			<option value="4">4 social media links</option>
			<option value="5">5 social media links</option>
		</select>
		<div class="linksDiv"></div>
		<!-- <input type="text" id="sameas1" name="sameas1" placeholder="social media url 1"> -->
		<input type="submit" id="formButton" value="generate json-ld" name="submit">
		<p class="form-instructions">Fill out this form and click the button- you can click the generate button any time, even if the form is empty. (clicking the button will NOT clear the form)</p>
	</form>
	<div id="preSurround">
		<p>If you have only one location put the following code on every page of your website, if you have more than
			one location, then put this code on each location page. Make sure you put this snippet <strong>inside the body tags</strong></p>
		<a id="copybutton" href="#">copy code to clipboard</a>
		<pre id="jsonFormat">

		</pre>
	</div>
</div>
<span>validate the code at google's tool <a href="https://developers.google.com/structured-data/testing-tool" target="_blank">http://developers.google.com/structured-data/testing-tool/</a></span>

<span class="footer">created by <a class="nodecoration" href="http://www.niumata.com">Johnny Niumata</a> at <a href="http://www.floorforce.com">Floorforce A digital agency for the flooring industry</a></span>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="../js/plugins.js"></script>
<script src="js/main.js">$('#main').css('height',$('form').height();</script>
</body>
</html>
