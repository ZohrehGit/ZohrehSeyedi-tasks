<?php include "header.php";

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $dob =$_POST['bdate'];
    $color =$_POST['color'];
    echo "<h3> Your name is $fname $lname /.
    Your favourite color is $color  and your birthday is $dob
    </h3> "
    ?>

<?php include "footer.php" ?>