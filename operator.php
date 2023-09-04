<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h1>Hello Operators</h1>
    <?php 
    $a = 10;
    $b = 15;
    if ($a<>$b) {
        echo 'Not equal values.';
        echo $a<=>$b;
    }
    else{
        echo "Equal.";
        echo $a<=>$b;
    }
    echo "<br>";
    // echo ($a<$b) ? "A greater.": "B Greater.";
    define('name', 'Usman Khan');
    echo name . '<br>';
    $a = 10;
    $ag = "Your are " . $a > 9 ? "Adult" : "Child";
    echo $ag;
    ?>
</body>
</html>