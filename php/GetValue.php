<html>

<head>
    <title>Assignment</title>
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
    }

    #click {
        flex-grow: 1;
    }
    </style>

</head>

<body>

    <form action="/php/assignmint.php" method="post">
        <div class="name">

            <label>Name: </label><input type="text" name="name" placeholder="Enter the Name">
        </div>
        <div class="No">
            <label>No: </label><input type="text" name="FName" placeholder="Enter the Father Name">
        </div>
        <input type="submit" id="click">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "<h2>Your Input:</h2>";
        $name =$_POST['name'];
        $FName =$_POST['FName'];    
        
        // $Name="Haroon";
        // $FName="Abdussamad";
        

    $database="usman5";
    $con=mysqli_connect($servername, $username, $password,$database);
    $Ctable="CREATE TABLE `class` (`S.No` INT(11) NOT NULL AUTO_INCREMENT , `Name` TEXT NOT NULL , `Father Name` TEXT NOT NULL , PRIMARY KEY (`S.No`))";
    $result=mysqli_query($con,$Ctable);
    $INS="INSERT INTO `class` (`S.No`, `Name`, `Father Name`) VALUES ('', '$Name', '$FName')";
    $result=mysqli_query($con,$INS);
    if($result){
        echo"your are inserting is completed.";
        echo"<br>";
    }
    else{
        echo "Your are already inserted data in this s.no in database..".mysqli_error($conn);
        echo"<br>";
    }
    echo "<h2>Name: </h2>$name";
    echo "<br>";
    echo "<h2>Phone No</h2> ".$number;
    }
    
    ?>
    </h1>
    
</body>

</html>