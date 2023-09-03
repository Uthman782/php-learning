<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes in PHP</title>
</head>
<body>
    <h1>Welcome to fruit market</h1>
    <?php 
    class fruit{
        public $name = 'Mango';
        public $color = 'red';
        function set_name($name){
            $this->name = $name;
        }
        function set_color($color){
            $this->color = $color;
        }

        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }
    $apple = new fruit();
    $banana = new fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    $banana->set_color('yellow');
    echo $apple->get_name();
    echo '<br>';
    echo $banana->get_name();
    echo '<br>';
    echo $banana->name;
    echo '<br>';
    echo $apple->color;

    
    ?>
</body>
</html>