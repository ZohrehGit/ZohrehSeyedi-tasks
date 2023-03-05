<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Sign Up</title>
</head>
<body>

	<h2>Sign Up Form</h2>

	<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $phoneErr = "";
	$name = $email = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
	    // check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $nameErr = "Only letters and white space allowed";
	    }
	  }
	  
	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
	    // check if e-mail address is well-formed
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }
	    
	  if (empty($_POST["phone"])) {
	    $phoneErr = "Phone number is required";
	  } else {
	    $phone = test_input($_POST["phone"]);
	    // check if phone number is well-formed
	    if (!preg_match("/^[0-9]{10}$/",$phone)) {
	      $phoneErr = "Invalid phone number format";
	    }
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  Name: <input type="text" name="name" value="<?php echo $name;?>">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
	  Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
	  <span class="error">* <?php echo $phoneErr;?></span>
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>

	<?php
	if ($nameErr == "" && $emailErr == "" && $phoneErr == "" && isset($_POST['submit'])) {
		// send data to database or email
		// ...
		echo "<h3>Thank you for signing up!</h3>";
	}
	?>

</body>
</html>
