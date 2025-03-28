<!DOCTYPE html>
<html>
<head>
	<title>JavaScript</title>
</head>
<body>


<?php

// index Array
// $cars = array("Volvo", "BMW", "Toyota");

// // echo $cars[1];

// foreach ($cars as $value) {
// 	echo $value."<br>";
// }


// Associate Array
// $cars = array("model"=>"Volvo", "color"=>"BMW", "company"=>"Toyota");

// echo $cars["model"]."<br>";
// echo $cars["color"];
// echo $cars["company"];


// Multi-Dimenstinal array

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);


echo $cars[1][1];



?>



</body>
</html>