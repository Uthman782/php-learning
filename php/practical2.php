<html>

<head>
    <title>Assignment</title>
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    form {
        width: 30%;
        height: 300px;
        /*border: 1px solid black;*/
        margin: 0px auto;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }

    .name,
    .No {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    label {
        font-size: 30px;
        font-weight: 700;
    }

    .name input,
    .No input {
        width: 100%;
        height: 50px;
    }

    #click {
        flex-grow: 1;
    }
    </style>

</head>

<body>

    <?php
$name ="";
$email = "";
$nameErr="";
$emailErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = testing($_POST["name"]);

	  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		$nameErr = "Wrong way";
	  }
	}
	
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = testing($_POST["email"]);
	} }
function testing($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="name">

            <label>Name: </label><input type="text" value="<?php echo $name;?>" name="name" placeholder="Enter the Name">
			<span>* <?php echo $nameErr;?></span>
			<br>
        </div>
        <div class="No">
            <label>No: </label><input type="email" value="<?php echo $email;?>" name="email" placeholder="Enter the No">
			<span>* <?php echo $emailErr;?></span>
			<br>
        </div>
        <input type="submit" id="click">
    </form>
    <?php
echo "<h2>Your Input:</h2>";
echo "<h2>Name: </h2>$name";
echo "<br>";
echo "<h2>Email</h2>: ".$email;
?>
    </h1>

</body>

</html>