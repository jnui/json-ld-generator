<?php
/**
 * Created by PhpStorm.
 * User: nopassword
 * Date: 12/16/15
 * Time: 10:49
 */
$quotes = "\"";
$quotesComma = "\",";
$jsonString = "";

$url = $_GET["url"];
$logo = $_GET["logo"];
$email = $_GET["email"];
$locality = $_GET["city"];
$region = $_GET["state"];
$addr1 = $_GET["address"];
$zip = $_GET["zip"];
$description = $_GET["description"];
$name = $_GET["name"];
$phone = $_GET["phone"];
$hours = $_GET["hours"];
$lat = $_GET["lat"];
$long = $_GET["long"];
$sameAs1 = $_GET["sameas1"];
$hasmap = $_GET["map"];


$jsonString .= "{" . PHP_EOL;
$jsonString .= "  \"@context\": \"http://schema.org\"," . PHP_EOL;
$jsonString .= "  \"@type\": \"Store\",". PHP_EOL;
$jsonString .= "  \"additionalType\": \"http://www.productontology.org/id/Flooring\",". PHP_EOL;
$jsonString .= "  \"url\": ". $quotes . $url .$quotesComma. PHP_EOL;
$jsonString .= "  \"logo\": " . $quotes . $logo .$quotesComma. PHP_EOL;
$jsonString .= "  \"hasMap\": ". $quotes . $hasmap .$quotesComma. PHP_EOL;
$jsonString .= "  \"email\": ". $quotes . $email .$quotesComma. PHP_EOL;
$jsonString .= "    \"address\": {".  PHP_EOL;
$jsonString .= "      \"@type\": \"PostalAddress\"," . PHP_EOL;
$jsonString .= "      \"addressLocality\": ". $quotes . $locality . $url .$quotesComma. PHP_EOL;
$jsonString .= "      \"addressRegion\": ". $quotes . $region .$quotesComma. PHP_EOL;
$jsonString .= "      \"postalCode\": ". $quotes . $zip .$quotesComma. PHP_EOL;
$jsonString .= "      \"streetAddress\": ". $quotes . $addr1 .$quotes. PHP_EOL;
$jsonString .= "    },". PHP_EOL;
$jsonString .= "    \"description\": ". $quotes . $description .$quotesComma. PHP_EOL;
$jsonString .= "    \"name\": ". $quotes . $name .$quotesComma. PHP_EOL;
$jsonString .= "    \"telephone\": ". $quotes . $phone .$quotesComma. PHP_EOL;
$jsonString .= "    \"openingHours\": ". $quotes . $hours .$quotesComma. PHP_EOL;
$jsonString .= "    \"geo\": {". PHP_EOL;
$jsonString .= "      \"@type\": \"GeoCoordinates\",". PHP_EOL;
$jsonString .= "      \"latitude\": ". $quotes . $lat .$quotesComma. PHP_EOL;
$jsonString .= "      \"longitude\": ". $quotes . $long .$quotes. PHP_EOL;
$jsonString .= "    },". PHP_EOL;
$jsonString .= "    \"sameAs\" : [ ". $quotes . $sameAs1 .$quotes . "]". PHP_EOL;


$jsonString .= "}" . PHP_EOL;

//echo "<pre>";
//print_r($jsonString);
//echo "</pre>";

header('Content-Type: application/json');
echo json_encode($jsonString);

