<?php include "header.php";

    $age =$_POST['age'];

    if ($age>=18)
    {
        echo "You are eligible for voting.";
    } 
    else 
    {
        echo "You are not eligible for voting.";
    }
       
    //echo "<h3>  </h3>"
    ?>

<?php include "footer.php" ?>