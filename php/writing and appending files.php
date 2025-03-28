<?php
ECHO"<h2>Hello this is sample Heading.</h2><br>";

$text=fopen("file.txt","r") or die("Unable to open file!");//fopen Means ==> (f) mean (file)and open means(open)
// echo"$text"; //==>It just print (Resource id #3)..

//For reading the file..................
//This is only for Reading..............
$fileR=fread($text,filesize("file.txt"));
echo $fileR;

fclose($text);

$text=fopen("file.txt","a");
fwrite($text,"This is my.<br>");
//This is for writing and changing the file.
// fwrite($text,"Hey This is my and how are your to do this index only for me.");
fclose($text);

// $text=fopen("file.txt","r");
// echo"$text";
//For reading the file
// $cont=fread($text,filesize("file.txt"));
// echo $cont;

?>