<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <style>
        .img {
            position: absolute;
            top: 50px;
            left: 45%;
            width: 10%;
            border-radius: 100px;
        }

        form {
            display: flex;
            margin-left: 43.5678%;
        }

        form input {
            width: 90px;
            background-color: rgba(0, 30, 300, 0.4);
            border: 0px;
            color: #fff;
        }

        form input:hover {
            background-color: rgba(0, 30, 300, 0.2);
            color: while;
        }
    </style>
</head>

<body>
    <?php
if (isset($_FILES['image'])) {
    echo"<pre>";
    print_r($_FILES['image']);
    echo"</pre>";
    $tmp_name = $_FILES['image']['tmp_name'];
    $img = $_FILES['image']['name'];
    move_uploaded_file($tmp_name, "img/" . $img);
    require "db1.php";
        if ($img) {
            $insert  = "INSERT INTO img (image) VALUES('$img')";
            
            if (!mysqli_query($con, $insert)) {
                echo "<p style='color:red'>Error:</p> " . $insert . "<br>" . mysqli_error($con);
            }
}
}
    require "db1.php";
    $sql = "SELECT * FROM img";
    $select = mysqli_query($con, $sql);
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $img =$row['image'];
        }
        echo "<img src='img/$img' alt='This is not availible here' class='img'>";
        
    }
    ?>
    <form action="fileImage.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Send">
    </form>
    <!-- <img src='' alt='This is not availible here' > -->

</body>

</html>