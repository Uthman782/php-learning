<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>FILES</title>
    <style>
        <?php 
            if(isset($_FILES['image'])){
                $name = $_FILES['image']['name'];
                ?>
                .custom-file {
                 background-image: url('img/<?php echo $name; ?>');
                }
                <?php
            }
                else{?>
                .custom-file {
                    background-image: url('img/user-1.jpg');
                }

                    <?php
                }
                    ?>
.custom-file {
    background-size: 100% 100%;
    width: 100px;
    border-radius: 50px;
    height: 100px;
    transition: all .2s ease-in-out;
    cursor: pointer;
    border: 0.5px solid rgba(59, 58, 58, 0.55)
}

.custom-file input[type="file"] {
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}
.col-10 img{
    width: 50%;
}
    </style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center">
        <div id="image" class='custom-file border border-2'>
            <input type='file' id="img" name='image' required>
            <span id="span"></span>
        </div>
        <div class="row">
            <div class="offset-5 col-4">
                <input type="submit" value="Send">
            </div>
        </div>
    </div>
</form>
<?php 
    if (isset($_FILES['image'])){
        $tmp_name = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        // $size = $_FILES['image']['size'];
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        move_uploaded_file($tmp_name, 'img/'. $name);
    }
?>
    <!-- <div class="row d-flex justify-content-center">
        <div class="col-10">
            <?php
            // if(isset($_FILES['image'])){
                // $name = $_FILES['image']['name'];
                ?>
                <img src="img/<?php // echo $name; ?>" alt="">
                <?php
           // }
            ?>
        </div>
        </div> -->
</body>
</html>