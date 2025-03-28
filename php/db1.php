<?php

$host = "localhost";
$username = "root";
$pass = "";
$dbname = "kims";

$con = mysqli_connect($host, $username, $pass, $dbname);

if (!$con) {
// 	echo "Connection is Done";
// }else{
	die("<p style='color:red;'>Connection failed: " . mysqli_connect_error() .'</p>');
}


// $insert  = "INSERT INTO std (name, class, fee) VALUES('asadullah', '5th', 1000)";

// if (mysqli_query($con,$insert)) {
// 	echo "Data Inserted";
// }else{
// 	echo "Error: " . $insert . "<br>" . mysqli_error($con);
// }





?>