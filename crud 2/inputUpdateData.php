<?php
require "db1.php";
$id = $_GET['update'];
$sql = "SELECT * FROM std WHERE `id`='$id'";
$select = mysqli_query($con, $sql);
// if (mysqli_num_rows($select) > 0) {
//     $row = mysqli_fetch_assoc($select);
//        echo $row['name'];

// }
?>
<style>
    .goBack {
        /* border: 1px solid black; */
        margin: 0px 0px 0px 340px;
        height: 12%;
        position: absolute;
        display: flex;
        justify-content: flex-end;
    }

    .goBack button {
        /* margin:38px 0px 0px 0px; */
        width: 30%;
        height: 40px;
        font-size: 16px;
        border-radius: 5px;
    }
</style>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="form_inp">
    <div class="name">

        <?php if (mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_assoc($select);
            $name = $row['name'];
            $class = $row['class'];
            $fees = $row['fee'];
            if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>UpdateName: <span style='color:white; font-size:14px;'>($name)</span></label>";
            } else {
                echo "<label style='color:rgb(205,205,255);'>UpdateName: <span style='color:white; font-size:14px;'>($name)</span></label>";
            }
            echo "
           <input type='text' name='updatename' placeholder='$name'> </div>";
            echo " 
<div class='No'>";
            if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>UpdateClass: <span style='color:white; font-size:14px;'>($class)</span></label>";
            } else {
                echo " <label style='color:rgb(205,205,255);'>UpdateClass: <span style='color:white; font-size:14px;'>($class)</span></label>";
            }
            echo "<input type='text' name='updateclass' placeholder='$class'>
</div>
<div class='No'>";
            if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>UpdateFees: <span style='color:black; font-size:14px;'>($fees)</span></label>";
            } else {
                echo "<label style='color:rgb(5,5,5,0.8);'>UpdateFees: <span style='color:black; font-size:14px;'>($fees)</span></label>";
            }
            echo "<input type='text' name='updatefee' placeholder='$fees'>
</div>";
        }
        ?>
        <?php
        if ($checkValue)
            echo "<p class='p'>*Please enter some values.. </p>";
        ?>
        <input type="submit" id="click">
</form>
<form action="index.php" class="goBack">
    <button type="submit" style="background-color: black; color:#fff;">Go Back</button>
</form>