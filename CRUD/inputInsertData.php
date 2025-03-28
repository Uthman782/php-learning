<form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="form_inp">
<div class="name">
    <?php if ($checkValue) {
        echo "<label style='color:rgb(255,0,5);'>Name: </label>";
    } else {
        echo "<label style='color:rgb(205,205,255);'>Name: </label>";
    } ?><input type="text" name="name" placeholder="Enter your name">
</div>
<div class="No">
    <?php if ($checkValue) {
        echo "<label style='color:rgb(255,0,5);'>Class: </label>";
    } else {
        echo "<label style='color:rgb(205,205,255);'>Class: </label>";
    } ?><input type="text" name="class" placeholder="Enter your Class">
</div>
<div class="No">
    <?php if ($checkValue) {
        echo "<label style='color:rgb(255,0,5);'>Fees: </label>";
    } else {
        echo "<label style='color:rgb(5,5,5,0.8);'>Fees: </label>";
    } ?><input type="text" name="fee" placeholder="Enter your Fee">
</div>
<?php
if ($checkValue)
    echo "<p class='p'>*Please enter some values.. </p>";
?>
<input type="submit" id="click">
</form>