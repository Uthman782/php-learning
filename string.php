<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h2>Hello to string Methods</h2>
    <?php
    $str = 'Hello';
    echo "This is sample output: $str <br>";
    // echo md5($str). '<br>';
    $pass_stor = md5($str, true);
    $str2 = 'Hello';
    if($str2 == $str){
        echo 'You are login!';
    }
    echo "<h4>Message Incraption and decraption</h4>";
    $str = 'Hello to here!';
    $inc = convert_uuencode($str);
    echo $inc . '<br>';
    $dec = convert_uudecode($inc);
    echo $dec;
    ?>
</body>
</html>