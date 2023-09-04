<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Hello to Functions !</h1>
    <?php
    function wow(){
        echo 'WoW Yar!';
    }
    function sum(&$a, &$b){
        $a = 20;
        $b = 30;
    }
    $a = 10;
    $b = 6;
    echo "<h3>Before</h3>";
    echo 'a=> '. $a .' and b=> '. $b;
    sum($a, $b);
    echo "<h3>After</h3>";
    echo 'a=> '. $a .' and b=> '. $b;
    echo '<br>';
    $func = 'wow';
    $func();
    ?>
</body>
</html>