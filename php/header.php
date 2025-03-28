<!DOCTYPE html>
<html>

<head>
	<title>Hello Web</title>
</head>

<body>
	<h1>I am first heading</h1>
	<?php
	// $any = array(
	// 	"usman" => "red",
	// 	"Asad" => "Green",
	// 	"Khan G" => "Blue",
	// 	"Kamran" => "Orange",
	// 	"Haroon" => "Tomato",
	// );
	// echo "<ul>";
	// foreach($any as $key => $value){
	// echo "<li>";
	// 	echo $key ." = " .$value ."<br>";
	// echo "</li>";
	// }
	// echo "</ul>";
	$arry1 = ['Banana','Apple', 'Orange', 3=>'Grapes'];
	$arry2 = ['carrot', 3 => 'pea'];
	$NewArray = array_replace($arry1, $arry2);
	echo "<pre>";

	print_r($NewArray);
	echo "</pre>";

	?>
</body>

<body>