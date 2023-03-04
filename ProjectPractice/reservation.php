<?php
$title = "Reservation";
include "../layout/header.php";?>

<!-- Reservation form -->
<form method="post" style="margin: 7rem 0 2rem 2rem;">
<div class="row">
        <div class="col">
            <label for="fName">First Name:</label><br>
            <input type="text" id="fName" name="fName" ><br><br>
        </div>
        
        <div class="col">
            <label for="lName">Last Name:</label><br>
            <input type="text" id="lName" name="lName" ><br><br>
        </div>
  </div>

  <div class="row">
        <div class="col">
            <label for="phoneNum">Phone Number:</label><br>
            <input type="tel" id="phoneNum" name="phoneNum" ><br><br>
        </div>
        
        <div class="col">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" ><br><br>
        </div>
  </div>

  <div class="row">
        <div class="col">
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>
        </div>
        
        <div class="col">
            <label for="time">Time:</label><br>
            <input type="time" id="time" name="time" required><br><br>
        </div>
  </div>

  <div class="row">     
        <div class="col">
            <label for="num_guests">Number of Guests:</label><br>
            <input type="number" id="num_guests" name="num_guests" min="1" max="10" required><br><br>
        </div>
  </div>

<input type="submit" name="submit" value="Reserve">

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
