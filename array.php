<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in php</title>

</head>
<body>
    <h2>Hello to Array</h2>
    <?php
    // singal dimantional array 
    echo '<h3>singal dimantional array<h3>';
    // $arry = array('us', 'au', 'hb');
    $arry = ['us', 'au', 'hb'];
    // $arry2 = array('Usman'=>'us','Asad'=>'au','Haroon bacha'=>'hb');
    $arry2 = ['Usman'=>'us','Asad'=>'au','Haroon bacha'=>'hb'];
    // print_r($arry);
    for($i = 0; $i<3; $i++){
        echo $arry[$i].'<br/>';
    }
    echo $arry['Usman'];

    // mult dimantional array
    echo '<h3>Multi dimantional array<h3>';
    $array = [
        [1,2,3,4],
        [4,5,6,7],
        [7,8,9,0]];
        // echo $array[1][1];
        for($i = 0; $i<count($array); $i++){
            for($a = 0; $a<count($array[1]); $a++){
                // echo "[$i]:[$a] : " . $array[$i][$a] ."<br>";
                echo $array[$i][$a]."  ";
            }
            echo "<br>";
        }
        echo "<h4>Array Function.</h4>";
        // echo array_search("us", $arry2);
        echo "</pre>";
        $rand = array_rand($arry2);
        echo $rand;
        echo "</pre>";
        ?>
</body>
</html>