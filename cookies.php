<?php
$cookie_name = 'user';
$cookie_value = 'Usman Khan';
setcookie($cookie_name, $cookie_value, time() + 36000, '/')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    echo $_COOKIE[$cookie_name];
    ?>
</body>
</html>