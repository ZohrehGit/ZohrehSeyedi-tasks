<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}

		h2 {
			margin-top: 40px;
			text-align: center;
		}

		form {
			width: 50%;
			margin: auto;
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #ccc;
			text-align: center;
		}

		label {
			display: inline-block;
			text-align: left;
			margin: 10px;
			width: 100px;
		}

		input[type="text"],
		input[type="password"],
		input[type="submit"],
		input[type="checkbox"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			width: 60%;
			margin: 10px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		.psw {
			float: right;
			margin-top: 0;
		}

		.container {
			padding: 16px;
			text-align: right;
			margin: 10px;
			margin-top: 0;
			background-color: white;
		}

		.container::after {
			content: "";
			clear: both;
			display: table;
		}
	</style>
</head>
<body>
	<?php 
		$title = "log in";
		include "../layout/header.php";
	?>

	<h2>Login Form</h2>
	<form method="post">
		<label>Email:</label>
		<input type="text" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="myPass" required><br><br>
      
		<input type="submit" name="submit" value="Login"><br><br>

		<label>Remember me  </label>
		<input type="checkbox" checked="checked" name="remember"><br><br>

		<div class="container">
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>

		<!-- <span><?php echo $error; ?></span> -->
	</form>

	<?php include "../layout/footer.php"; ?>
</body>
</html>
