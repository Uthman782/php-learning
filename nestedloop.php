<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
    <style>
        *{
            box-sizing: border-box;
        }
        table{
            border: 1px solid black;
            padding: 10px;
        }
        table tr{
            border: 1px solid black;
        }
        table tr td{
            border: 1px solid black;
            padding: 15px;
        }
        table tr td:hover{
            padding: 16px;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Hello to Nested loop !</h1>
    <table>
    <?php
    function nestedloop($b){

        for ($i=1; $i < 100; $i +=10) { 
            ?>
        <tr><?php
        for ($a=$i; $a < ($i+10); $a++) { 
            ?>
                <td><?php echo $a + $b?></td>
                <?php
        }?>
        </tr>
        <?php
    }
    }
    nestedloop(2);
    ?>
    </table>
</body>
</html>