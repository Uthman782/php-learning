<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor</title>
</head>
<body>
    <h1>constructors</h1>
    <?php
    class fruit{
        public $name;
        public $color;
        public $rate;
        function __construct($n, $c, $r){
            $this->name = $n;
            $this->color = $c;
            $this->rate = $r;
            echo 'Hello I\'am set okay <br>';
        }
        function __destruct(){
            echo "<br>I'am destroied okay!";
        }
        function get_value(){
            echo "Name : " . $this->name . "<br> Color : " . $this->color . "<br> Rate : " . $this->rate;
        }
    }
    $obj = new fruit('Apple', 'red', 'PKR 200');
    $obj->get_value();
    
    ?>
</body>
</html>