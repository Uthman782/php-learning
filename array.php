<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in php</title>

</head>
<body>
    <h1>Hello to Array</h1>
    <?php
    // $arry = array('us', 'au', 'hb');
    $arry = ['us', 'au', 'hb'];
    // $arry2 = array('Usman'=>'us','Asad'=>'au','Haroon bacha'=>'hb');
    $arry2 = ['Usman'=>'us','Asad'=>'au','Haroon bacha'=>'hb'];
    // print_r($arry);
    for($i = 0; $i<3; $i++){
        echo $arry[$i].'<br/>';
    }
    echo $arry2['Usman'];
    ?>
</body>
</html>