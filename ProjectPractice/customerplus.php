<?php
// Start session
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // TODO: Validate input and handle errors

    // Add user to database
    // TODO: Replace this with your database code
    include 'db.php';
    //$db = new PDO('mysql:host=localhost;dbname=team8', 'team8', 'team8pass');
    //$stmt = $conn->prepare("INSERT INTO customer (email, mypass) VALUES (?, ?)");
    //$stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);
    $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address, myPass)
                values('ali','ali','ali','111','$username','ali', '$password')";

    // Redirect to login page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Create User</button>
    </form>
</body>
</html>
