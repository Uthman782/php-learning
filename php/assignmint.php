<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="usmanKhan";
    // Connecting database......................................................
    $conn=mysqli_connect($servername, $username, $password,$database);
    // Checking The connection Here............................................
    if(!$conn){
        die("The connection is not successeful try agin.<br>".mysqli_connect_error());
    }
    else{
        echo "Connection is Successeful completed thanks<br>";
    }

    $Ctable="CREATE TABLE `class` (`S.No` INT(11) NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `Father Name` TEXT NOT NULL , PRIMARY KEY (`S.No`))";
    $result=mysqli_query($conn,$Ctable);
//     if($result){
//     echo"Your are created Table in your Database '".$database."'";
//     // $result=mysqli_query($conn,$Ctable);
//     // echo"True";
//       }
//   else{
//         echo"You are Already Created Table in this '".$database."' DataBase  Error ".mysqli_error($conn);
//     }
    

?>
<html>

<head>
    <title>Assignment</title>
    <!-- .........................................CSS Styling -->
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    form {
        width: 30%;
        height: 300px;
        /*border: 1px solid black;*/
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }

    .name,
    .No {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    label {
        font-size: 30px;
        font-weight: 700;
    }

    .name input,
    .No input {
        width: 100%;
        height: 50px;
        padding:10px;
        font-size:15px;
        transition:0.8s;
    }
    input:hover{
        /* background-color:orange; */
        /* outline:2px solid orange; */
        /* border:1px solid white; */
        /* box-shadow:0.2px 0.2px 2px 1px gray; */
        /* border-radius:3px; */
        /* color:white; */
    }
    input:focus{
        background-color:black;
        outline:1px solid black;
        border:2px solid white;
        box-shadow:0.2px 0px 10px 1px black;
        border-radius:4px;
        color:white;
    }
    #click {
        flex-grow: 1;
    }
    </style>

</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div class="name">

            <label>Name: </label><input type="text" name="name" placeholder="Enter the Name">
        </div>
        <div class="No">
            <label>Father Name: </label><input type="text" name="FName" placeholder="Enter the Father Name">
        </div>
        <input type="submit" id="click">
    </form>
    <?php

    echo "<h2>Your Input:</h2>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name =$_POST['name'];
    $FName =$_POST['FName'];    
    // echo "<h2>Your Input:</h2>";
    echo "<h2>Name: </h2> <h3>$Name</h3>";
    echo "<br>";
    echo "<h2>Father Name</h2> <h3>".$FName."</h3>";
    echo"<br>";

    $INS="INSERT INTO `class` (`S.No`, `Name`, `Father Name`) VALUES ('', '$Name', '$FName')";
    $result=mysqli_query($conn,$INS);
    if($result){
        echo"<h4>your are inserting is completed.</h4>";
        echo"<br>";
    }
    else{
        echo "<h4>Your are already inserted data in this s.no in database..</h4>".mysqli_error($conn);
        echo"<br>";
    }
    }
    
    ?>

</body>

</html>