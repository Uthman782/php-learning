<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global and local variable</title>

</head>
<body>
    <h1>Hello to Global and Local variable</h1>
    <?php
    $x = 'PHP global';
    if(true){
        global $x;
         $x = "JS Global"; //it can change the global variable and it make problem.
        echo "Hello To if! ";
        echo $x;
    }
    echo'<br>';
    echo $x;
    ?>
</body>
</html>