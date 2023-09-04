<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break and continue</title>
</head>
<body>
    <h1>Hello to Break and continue statement</h1>
    <?php
    for ($i=0; $i < 10; $i++) { 
        if ($i==5){
            goto abc;
        }
        echo "$i  ";
    }
    abc:{
        echo "Hello Usman I am Lable    ";
    }
    ?>
</body>
</html>