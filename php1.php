<?php
$age = 18;
$name = 'Usman Khan';
$fathername = 'Adul Samad';
$country = 'Pakistan';

// echo "<h2>Hello " .$name . " to php again!</h2>";
// echo "<h3>Your Father name is " .$fathername . " </h3>";
// echo "<h3>Your age is " .$age . " </h3>";
// echo "<h3>Your living in " .$country . " </h3>";
$laptop = array('Toshiba', 'HP', 'Dell', 'Apple', 'Lenove', 11);
// echo var_dump($laptop);
// define('Laptop', 'HP, Dell, Apple, Lenove, Toshiba');
define('Laptop', ['HP', 'Dell', 'Apple', 'Lenove', 'Toshiba']);
echo Laptop[1   ];    
echo var_dump(Laptop);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - first</title>
</head>
<body>
    <h2>Hello <?php echo $name ?> to php again!</h2>
    <h3>Your Father name is <?php echo $fathername ?></h3>
    <h3>Your age is <?php echo $age?></h3>
    <h3>Your living in <?php echo $country?></h3>
    <h1>Laptops in Market !</h1>
    <ul>
    <?php 
    for ($i=0; $i < count($laptop); $i++) { 
        ?>
            <li><?php echo $laptop[$i] ?></li>
            <?php
    }
    ?>
    
</ul>

</body>
</html>