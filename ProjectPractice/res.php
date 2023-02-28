<?php
$title = "Reservation";
include "../layout/header.php";?>

<!-- Reservation form -->
<form method="post">
  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required><br><br>

  <label for="time">Time:</label>
  <input type="time" id="time" name="time" required><br><br>

  <label for="num_guests">Number of Guests:</label>
  <input type="number" id="num_guests" name="num_guests" min="1" max="10" required><br><br>

  <label for="fName">First Name:</label>
  <input type="text" id="fName" name="fName" ><br><br>

  <label for="lName">Last Name:</label>
  <input type="text" id="lName" name="lName" ><br><br>

  <label for="phoneNum">Phone Number:</label>
  <input type="tel" id="phoneNum" name="phoneNum" ><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" ><br><br>

  <input type="submit" name="submit" value="Reserve Table">
</form>

<?php
// Submit
if(isset($_POST['submit'])) {
    
  // Retrieve data
  $date = $_POST['date'];
  $time = $_POST['time'];
  $num_guests = $_POST['num_guests'];
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $phoneNum = $_POST['phoneNum'];
  $email = $_POST['email'];

  // Save to database or send email to restaurant
  include 'db.php';
  $sql="INSERT INTO reservation (reservationDate, reservationTime, numGuests)
        VALUES ('$date', '$time', '$num_guests')";

    $sql="INSERT INTO customer(fName, lName, phoneNum, email)
    VALUES('$fName', '$lName', '$phoneNum','$email')";
            
  if($conn->query($sql) === TRUE){
    echo "<h5>Your reservation has been confirmed</h5>";
  } else {
    echo "Error: " . $conn->error;
  }

  exit;
}
?>

<?php include "../layout/footer.php" ?>
