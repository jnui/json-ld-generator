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
$country = $_GET["country"];
$description = $_GET["description"];
$name = $_GET["name"];
$phone = $_GET["phone"];
$lat = $_GET["lat"];
$long = $_GET["long"];
//$sameAs1 = $_GET["sameas1"];
$hasmap = $_GET["map"];
$hoursString = "[";


function addRange( $range, $id){
	$rangeString = "";
	if($id > 1){
		$rangeString .= ",";
	}
	$rangeString .= "{";
	$rangeString .= '"@type":"OpeningHoursSpecification",';
	$rangeString .= '"dayOfWeek":[';
	$rangeString .= '"'. implode('","', $range) .'"';
	$rangeString .= '],';
	$GLOBALS['hoursString'] .= $rangeString;
	addTime($id, count($range));
}
function addTime($id, $countx){
	$rangehoursString = '"opens": "' .$_GET['open'.$id] . '", "closes": "'.$_GET['close'.$id] . '"}';

	$GLOBALS['hoursString'] .= $rangehoursString;
}

if(isset($_GET['range1'])) {
	$rangeDays1 = array();
	foreach($_GET['range1'] as $day){
		array_push($rangeDays1, $day);
	}
	addRange($rangeDays1, 1);
}
if(isset($_GET['range2'])) {
	$rangeDays2 = array();
	foreach($_GET['range2'] as $day){
		array_push($rangeDays2, $day);
	}
	addRange($rangeDays2, 2);
}
if(isset($_GET['range3'])) {
	$rangeDays3 = array();
	foreach($_GET['range3'] as $day){
		array_push($rangeDays3, $day);
	}
	addRange($rangeDays3,3);
}
if(isset($_GET['range4'])) {
	$rangeDays4 = array();
	foreach($_GET['range4'] as $day){
		array_push($rangeDays4, $day);
	}
	addRange($rangeDays4,4);
}
if(isset($_GET['range5'])) {
	$rangeDays5 = array();
	foreach($_GET['range5'] as $day){
		array_push($rangeDays5, $day);
	}
	addRange($rangeDays5,5);
}
if(isset($_GET['range6'])) {
	$rangeDays6 = array();
	foreach($_GET['range6'] as $day){
		array_push($rangeDays6, $day);
	}
	addRange($rangeDays6,6);
}
if(isset($_GET['range7'])) {
	$rangeDays7 = array();
	foreach($_GET['range7'] as $day){
		array_push($rangeDays7, $day);
	}
	addRange($rangeDays7,7);
}
function addDay($day){
	$dayStr = "";

}
$hoursString .= "]";

$jsonString .= "{" . PHP_EOL;
$jsonString .= "  \"@context\": \"http://schema.org\"," . PHP_EOL;
$jsonString .= "  \"@type\": \"Store\",". PHP_EOL;
$jsonString .= "  \"additionalType\": \"http://www.productontology.org/id/Flooring\",". PHP_EOL;
$jsonString .= "  \"url\": ". $quotes . $url .$quotesComma. PHP_EOL;
$jsonString .= "  \"logo\": " . $quotes . $logo .$quotesComma. PHP_EOL;
$jsonString .= "  \"hasMap\": ". $quotes . $hasmap .$quotesComma. PHP_EOL;
$jsonString .= "  \"email\": ". $quotes . $email .$quotesComma. PHP_EOL;
$jsonString .= "  \"address\": {".  PHP_EOL;
$jsonString .= "      \"@type\": \"PostalAddress\"," . PHP_EOL;
$jsonString .= "      \"streetAddress\": ". $quotes . $addr1 . $quotesComma.PHP_EOL;
$jsonString .= "      \"addressLocality\": ". $quotes . $locality  .$quotesComma. PHP_EOL;
$jsonString .= "      \"addressRegion\": ". $quotes . $region .$quotesComma. PHP_EOL;
$jsonString .= "      \"postalCode\": ". $quotes . $zip .$quotesComma. PHP_EOL;
$jsonString .= "      \"addressCountry\": ". $quotes . $country . $quotes. PHP_EOL;
$jsonString .= "    },". PHP_EOL;
$jsonString .= "  \"description\": ". $quotes . $description .$quotesComma. PHP_EOL;
$jsonString .= "  \"name\": ". $quotes . $name .$quotesComma. PHP_EOL;
$jsonString .= "  \"telephone\": ". $quotes . $phone .$quotesComma. PHP_EOL;
$jsonString .= "  \"openingHoursSpecification\":" . $hoursString . "," .PHP_EOL;
$jsonString .= "  \"geo\": {". PHP_EOL;
$jsonString .= "      \"@type\": \"GeoCoordinates\",". PHP_EOL;
$jsonString .= "      \"latitude\": ". $quotes . $lat .$quotesComma. PHP_EOL;
$jsonString .= "      \"longitude\": ". $quotes . $long .$quotes. PHP_EOL;
$jsonString .= "    }". PHP_EOL;
//$jsonString .= "  \"sameAs\" : [ ". $quotes . $sameAs1 .$quotes . "]". PHP_EOL;


$jsonString .= "}" . PHP_EOL;

//echo "<pre>";
//print_r($jsonString);
//echo "</pre>";

header('Content-Type: application/json');
echo json_encode($jsonString);

