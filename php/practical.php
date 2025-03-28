<!DOCTYPE html>
<html>

<head>
    <title>Php</title>
</head>

<body>

    <?php
$a=50;
$b=60;

// echo "the result is : ".($a+$b) ."<br>";
// echo "the result is : ".($a-$b) ."<br>";
// echo "the result is : ".($a*$b) ."<br>";
// echo "the result is : ".($a/$b) ."<br>";
// echo "the result is : ".($a%$b) ."<br>";
// echo "the result is : ".($a**$b) ."<br>";

// var_dump($a==$b);
// var_dump($a===$b);
// var_dump($a>=$b);
// var_dump($a<=$b);
// var_dump($a==$b);

// switch($a){
//     case 20:    
//     echo "This is 20 Number";
//     break;
//     case 25:
//     echo "This is 25 Number";
//     break;
//     case 30:
//     echo "This is 30 Number";
//     break;
//     case 50:
//     echo "This is 50 Number";
//     break;
//     default:
//     echo "This is is not in memry";
// }
// --------------------------while LOOP
// $i=0;
// while($i<50){
//     // echo $i+1;
//     echo "This is a Number: ".$i." ------   ";
//     $i+=2;;
// }

// --------------------------for LOOP
// for ($i=0; $i < 10; $i++) { 
//       echo "This is :".$i ."Number      ---<br>";
// }


// --------------------------Do while LOOP
// $a=0;
// do {
//         echo "The Number is :".$a."---<br>";
//         $a++;
// } while ($a <= 10);
// --------------------------foreach LOOP
// $arry = array('usman','Asad','Haroon','khan');
// foreach ($arry as  $toget) {
//     echo " $toget <br>";
// }

// --------------------------Function in php

function totalMarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value) {
        $sum+=$value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum=0;
    $i=1;
    foreach ($marksArr as $value) {
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}
// $usmanMarksArr=[40,80,75,70,70,95];
// $totalMksOfUsman=totalMarks($usmanMarksArr);
// $avgMksOfUsman=avgMarks($usmanMarksArr);
// echo "<br>This is total Marks in 550 of Usman Khan is " .$totalMksOfUsman ."<br>And Avg is:".$avgMksOfUsman;

// $asadMarksArr=[45,90,85,80,90,95];
// $totalMksOfAsad=totalMarks($asadMarksArr);
// echo "<br>This is total Marks in 550 of Asad Ullah is " .$totalMksOfAsad ;

//MultiDimensional Array

$mDim=array(
    array(3,2,4,5),
    array(7,5,4,9),
    array(7,2,1,8)
);

for ($i=0; $i < count($mDim); $i++) { 
    for ($j=0; $j < count($mDim[$i]); $j++) { 
        echo $mDim[$i][$j];
        echo "  ";
    }
    echo "<br>";
}


 ?>

</body>

</html>