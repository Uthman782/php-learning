<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>

    <h1>Hello to php loops</h1>
    <?php
    $arry = [
        "usman"=>'Australia',
        "Asad"=>'Sudi Arab',
        "Haroon"=>'Pakistan'
    ];
    echo '<ul>';
    foreach ($arry as $key=>$value){
        echo "<li>$key = = > $value <br></li>";
    }
    echo '</ul>';
    ?>
</body>
</html>