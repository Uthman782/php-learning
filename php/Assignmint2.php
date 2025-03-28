<?php
$checkValue = false;
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <title>Data Entery Form</title>
    <style>
        label {
            font-size: 25px;
        }

        .cont {
            width: 85%;
            position: absolute;
            margin: -10px 0px 0px 110px;
            height: 260px;
            border: 1px solid rgba(0, 26, 255, 0.032);
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgba(100, 250, 254, 250.932);
            background-color: rgba(20, 2, 25, 0.90);
            border-radius: 5px 5px 250% 200%;
            /* color:blue; */
        }

        #form_inp {
            position: relative;
            top: 70px;
            width: 50%;
            height: 350px;
            /* border: 1px solid black; */
            margin: 0px auto;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
        }

        #click {
            width: 20%;
            font-size: 16px;
            align-self: flex-end;
            border-radius: 5px;
            border: 0.1px solid gray;
        }

        .p {
            position: absolute;
            top: 316px;
            color: red;
            font-size: 18px;
        }

        .cont h5 {
            margin: 0px 0px 30px 0px;
            font-size: 50px;
            position: relative;
            top: -60px;
        }

        .tableClass {
            display: flex;
            border: 2px solid #eef;
            /* background-color: gray; */
            width: 80%;
            resize: none;
            overflow: auto;
            flex-wrap: wrap;
            max-height: 252px;
            margin-top: 109px;
            margin-left: 10%;
            margin-bottom: 60px;
        }

        table {
            width: 100%;
            padding: 10px;
            font-size: 20px;
        }

        th {
            padding: 10px 20px;
            background-color: #eeffee;
            /* text-align: center; */
        }

        table,
        tr,
        td {
            /* border: 1px solid #eeeffe; */
            transition: 0.3s;
            padding: 10px;
        }
        tr{
            border-bottom: 1px solid #eef;
        }
        tr:nth-child(even) {
            /* background: #ffaaff; */
            background-color: rgba(20, 2, 25, 0.50);
            color: #eeeffe;
        }

        tr:nth-child(even) td:hover {
            background-color: white;
            color: gray;
        }

        tr:nth-child(odd) td:hover {
            background-color: gray;
            color: #eeeffe;
        }

        tr:nth-child(odd) {
            background-color: rgba(250, 255, 250, 0.10);
        }
        .std_table_title{
            width: 80%;
            /* border: 1px solid black; */
            position: absolute;
            margin-left: 140px;
            margin-top: 60px;
        }
    </style>
    <link rel="stylesheet" href="../project/styleOfDisplay.css">
</head>

<body>
    <div class="cont">
        <?php
        if ($checkValue) {
            echo "
            <h5>O Hello Enter your Data Okay</h5>
            ";
        }
            else{
            echo"
            <h5>Enter your Data right here</h5>
            ";
            }
        ?>
        
    </div>

    <form action="/php/Assignmint2.php" method="post" id="form_inp">
        <div class="name">
            <?php if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>Name: </label>";
            } else {
                echo "<label style='color:rgb(205,205,255);'>Name: </label>";
            } ?><input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="No">
            <?php if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>Class: </label>";
            } else {
                echo "<label style='color:rgb(205,205,255);'>Class: </label>";
            } ?><input type="text" name="class" placeholder="Enter your Class">
        </div>
        <div class="No">
            <?php if ($checkValue) {
                echo "<label style='color:rgb(255,0,5);'>Fees: </label>";
            } else {
                echo "<label style='color:rgb(5,5,5,0.8);'>Fees: </label>";
            } ?><input type="text" name="fee" placeholder="Enter your Fee">
        </div>
        <?php
        if ($checkValue)
            echo "<p class='p'>*Please enter some values.. </p>";
        ?>
        <input type="submit" id="click">
    </form>
    <div class="std_table_title">
       <h2> Student Table Data Here </h2>
    </div>
    <?php
    // $select = mysqli_query($con, "SELECT * FROM std");
    require "db1.php";
    $sql = "SELECT * FROM std";
    $select = mysqli_query($con, $sql);
    echo "<div class='tableClass'>";
    echo " <table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Class</th>
		<th>Fees</th>
	</tr>";


    if (mysqli_num_rows($select) > 0) {
        $num = 1;
        while ($row = mysqli_fetch_assoc($select)) {
            echo "
	<tr>
		<td>" . $num . "</td>
		<td>" . $row['name'] . "</td>
		<td>" . $row['class'] . "</td>
		<td>" . $row['fee'] . "</td>
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
    <footer class="site-footer">
        <div class="container mt-5 mt-lg-0">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers
                        build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="#">C++</a></li>
                        <li><a href="#">UI Design</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Android</a></li>
                        <li><a href="#">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.html">Our Home Page</a></li>
                        <li><a href="About Us.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                        <a href="#">Usman Khan</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>