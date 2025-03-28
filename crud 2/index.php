<?php
$delete = false;
$update = false;
$checkValue = false;
// echo $_GET['update'];
if (isset($_GET['update'])) {
    $update = true;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && $update) {
    require "db1.php";
    $id = $_GET['update'];
    $updateName = $_POST["updatename"];
    $updateClass = $_POST["updateclass"];
    $updateFee = $_POST["updatefee"];
    if ($updateName && $updateClass && $updateFee) {
        $update  = "UPDATE `std` SET `name` = '$updateName', `class` = '$updateClass', `fee` = '$updateFee' WHERE `std`.`id` = $id;";

        if (!mysqli_query($con, $update)) {
            //     echo "<p style='Color:green'>Data updated into DataBase</p>";
            // } else {
            echo "<p style='color:red'>Error:</p> " . $update . "<br>" . mysqli_error($con);
        }
    } else {
        $checkValue = true;
    }
}

if(!$update){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "db1.php";
        $name = $_POST["name"];
        $class = $_POST["class"];
        $fee = $_POST["fee"];
        if ($name && $class && $fee) {
            $insert  = "INSERT INTO std (name, class, fee) VALUES('$name', '$class', $fee)";
            
            if (!mysqli_query($con, $insert)) {
            //     echo "<p style='Color:green'>Data Inserted into DataBase</p>";
            // } else {
                echo "<p style='color:red'>Error:</p> " . $insert . "<br>" . mysqli_error($con);
            }
        } else {
            $checkValue = true;
        }
    }
}

if (isset($_GET['delete'])) {
    require "db1.php";
    $id = $_GET['delete'];
    $delete = "DELETE FROM `std` WHERE `std`.`id` = $id";
    if (!mysqli_query($con, $delete)) {
        //     echo "<p style='Color:green'>Data updated into DataBase</p>";
        // } else {
        echo "<p style='color:red'>Error:</p> " . $delete . "<br>" . mysqli_error($con);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleTable.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="login-box">
        <h2>Enter your Data</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <div class="user-box">
                <input type="text" name="name" required="">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="class" required="">
                <label>Class</label>
            </div>
            <div class="user-box">
                <input type="text" name="fee" required="">
                <label>Fees</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" value="Submit" name="submit">
            </a>
        </form>
    </div>
    <div class="std_table_title">
        <?php
        require "db1.php";
        $numT=false;
        $sql = "SELECT * FROM std";
        $select = mysqli_query($con, $sql);
        if (mysqli_num_rows($select) > 0) {
            $numT=true;
            $num = 0;
            while ($row = mysqli_fetch_assoc($select)) {
                $num++;
            }
        }
            if($numT){
                echo"<h2> Student Data Here ( $num  ) Student here</h2>";
            }
            else{
                echo"<h2> Student Data Here (0) Student here</h2>";
    
            }
        
        ?>
    </div>
    <?php
    require "db1.php";
    $sql = "SELECT * FROM std";
    $select = mysqli_query($con, $sql);
    // $select = mysqli_query($con, "SELECT * FROM std");
    if(mysqli_num_rows($select)==0){
        echo "<div class='tableClass'>";
        echo " <table>
        <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Class</th>
		<th>Fees</th>
		<th>Action</th>
        </tr>";
    }
    else if (mysqli_num_rows($select) > 0) {
        $num = 1;
        echo "<div class='tableClass'>";
        echo " <table>
        <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Class</th>
		<th>Fees</th>
		<th>Action</th>
        </tr>";
        
        while ($row = mysqli_fetch_assoc($select)) {
            $id = $row['id'];

            echo "
	<tr>
		<td>" . $num . "</td>
		<td>" . $row['name'] . "</td>
		<td>" . $row['class'] . "</td>
		<td>" . $row['fee'] . "</td>
		<td>" . "<a href='index.php?update=$id' class='update'>Update</a>" ."<a href='index.php?delete=$id' class='delete'>Delete</a>". "</td>
	</tr>";
            $num++;
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "0 results";
    }
    mysqli_close($con);
    ?>
</body>

</html>