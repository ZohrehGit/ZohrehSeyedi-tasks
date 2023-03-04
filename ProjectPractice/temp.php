<!-- Reservation form -->
<form method="post" style="margin: 7rem 0 2rem 2rem;">
  
  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date" required><br><br>

  <label for="time">Time:</label><br>
  <input type="time" id="time" name="time" required><br><br>

  <label for="num_guests">Number of Guests:</label><br>
  <input type="number" id="num_guests" name="num_guests" min="1" max="10" required><br><br>

  <label for="fName">First Name:</label><br>
  <input type="text" id="fName" name="fName" ><br><br>

  <label for="lName">Last Name:</label><br>
  <input type="text" id="lName" name="lName" ><br><br>

  <label for="phoneNum">Phone Number:</label><br>
  <input type="tel" id="phoneNum" name="phoneNum" ><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" ><br><br>

  <input type="submit" name="submit" value="Reserve">
</form>
