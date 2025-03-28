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

// $select = mysqli_query($con, "SELECT * FROM std");
$sql = "SELECT * FROM std";
$select = mysqli_query($con, $sql);

echo " <table border='1' style='padding:10px; font-size:30px;'>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Class</th>
		<th>Fees</th>
	</tr>";


if (mysqli_num_rows($select) > 0) {

	while ($row = mysqli_fetch_assoc($select)) {
echo "
	<tr>
		<td style='padding:10px; color:blue;' >".$row['id']."</td>
		<td style='padding:10px; color:blue;' >".$row['name']."</td>
		<td style='padding:10px; color:blue;' >".$row['class']."</td>
		<td style='padding:10px; color:blue;' >".$row['fee']."</td>
	</tr>";
	}
	echo "</table>";
}else {
  echo "0 results";
}

mysqli_close($con);
?>

