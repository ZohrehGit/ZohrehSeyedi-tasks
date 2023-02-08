<?php
$title = "controlflow";
include "header.php" ?>

<?php
?>
<h3></h3>
<h3>inClass 08-02-2023</h3>
<h3>1.	Write a script that gets the current month and</h3>
<?php
    $m = date("F"); 
    if ($m == "Aguest")
    {
    echo "It's August, so it's still holiday.";
    }
    else
    {
        echo "Not August, this is Month-name so I don\'t have any holidays.";
    }  
?>

<h3>2.	Assign colour red to a variable name $color and</h3>
<?php

    $color = "red";

    if ($color == "red")
    {
    echo "The color is red.";
    }
    else
    {
        echo "The color is not red.";
    }  
?>

<h3>3.	Write a program to grade students based on their total score </h3>
<?php

    $totalScore = "75";

    if ($totalScore<50)
    {
    echo "Fail.";
    }
    elseif ($totalScore>=50 && $totalScore<60)
    {
        echo "Pass.";
    } 
    elseif ($totalScore>=60 && $totalScore<70)
    {
        echo "Good.";
    } 
    elseif ($totalScore>=70 && $totalScore<80)
    {
        echo "Good.";
    } 
    elseif ($totalScore>=80)
    {
        echo "Exelent.";
    }  
?>

<h3>4.	Write a program to get inputs (age and name) from the user and based on their age, </h3>

     <form action="actionCheckAge.php" method="post">

     <div class="row">
         <div class="col">
             Name: <input type ="text" name="fname" required placeholder="First Name" class="form-control">
         </div>
         <div class="col">
             
         </div>
     </div>
 
     <div class="row">
         <div class="col">
             age: <input type ="Number" name="age" required placeholder="age" class="form-control">
         </div>
         <div class="col">
             
         </div>
     </div>
         <input type ="submit" name="submit">

<h3>5.	In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. Use Switch statement </h3>
   
<?php

$httpUA = $_SERVER['HTTP_USER_AGENT'];

    switch ($httpUA) 
    {
    case strpos($httpUA, "Edg") == true;
        echo "<br> You are using Microsoft Edge";
    break;

    case strpos($httpUA, "Chrome") == true;
        echo "<br> You are using Goolge Chrome";
    break;
    
    case strpos($httpUA, "Firefox") == true;
        echo "<br> You are using Mozila Firefox";
    break;
    }
?>

<?php include "footer.php" ?>