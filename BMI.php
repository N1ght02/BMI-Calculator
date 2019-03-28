<?php

if(!isset($_GET['gewicht']) || !isset($_GET['lengte_cm'])) {
	echo '<p style="color: red">U bent vergeten tekst in te voeren. Probeer het opnieuw</p>';
	return;
}
if(empty($_GET['lengte_cm']) || empty($_GET['gewicht'])) {
	echo '<p style="color: red">U bent vergeten tekst in te voeren. Probeer het opnieuw</p>';
	return;
}
$gewicht = $_GET ["gewicht"];
$lengte =  $_GET ["lengte_cm"];
BMIcalc($gewicht,$lengte);



function BMIcalc ($gewicht,$lengte) {
    echo "uw gewicht " . $gewicht . " kg.<br>";
    echo "uw lengte " . $lengte . " m<br>";
    $BMI = round($gewicht / ($lengte / 100 * $lengte / 100), 1);
    echo "uw BMI is: " . $BMI . "<br>";
    switch (true) {
  		case ($BMI < 18.5):
  			echo '<p style="color: red">U heeft onder gewicht</p>';
  			break;
  		case ($BMI < 24.9):
  			echo '<p style="color: darkgreen">U heeft een normaal gewicht</p>';
  			break;
  		case ($BMI < 29.9):
  			echo '<p style="color: red">U heeft over gewicht</p>';
  			break;
  		case ($BMI < 34.9):
  			echo '<p style="color: red">U heeft obesitas klasse 1</p>';
  			break;
  		case ($BMI < 39.9):
  			echo '<p style="color: red">U heeft obesitas klasse 2</p>';
  			break;
  		case ($BMI < 40):
  			echo '<p style="color: red">U heeft obesitas klasse 3</p>';
  			break;
  		case ($BMI > 40):
  			echo '<p style="color: red;">U heeft obesitas klasse 3</p>';
  			break;
  	}

}
  ?>
