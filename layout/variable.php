<?php
$title = "variable";
include "header.php" ?>

<h1> inClass 07-02-2023 </h1>

<h3>
    1.	Create a simple html form to get Firstname and Lastname from the user and use echo statement 
    to print using <h3> tag: Hello …., You are welcome to my site.
    (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA  
</h3>

<form action="action.php" method="post">

    <div class="row">
        <div class="col">
            First Name: <input type ="text" name="fname" required placeholder="First Name" class="form-control">
            <!-- fname is relate to database column -->
        </div>
        
        <div class="col">
            Last Name: <input type ="text" name="lname" required placeholder="First Name" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col">
            Birth Date: <input type ="date" name="bDate" required placeholder="Birthday" class="form-control">
        </div>
        
        <div class="col">
            
        </div>
    </div>

        select fav color: <input type ="color" name="color"><br>
        <input type ="submit" name="submit">
<?php
    //define string variable
    $string1 = "Zohreh";
    $string2 = "Seyedi";
    
    // string concatenation
    echo "<br>"; 
    echo $string1 . " " . $string2;
    $lenString = "$string1 $string2";

    // string length
    echo "<br>"; 
    echo "The length of " . $lenString ." is: " .strlen($lenString); 
    echo "<br>"; 

    

     
?>

<h3> 
    5.	Write a script to add up the numbers: 298, 234, 46. Use variables to 
    store these numbers and echo statement to output your answer.
</h3>
<?php
    //define int variable and sum
    $number1 = 298;
    $number2 = 234;
    $number3 = 46;
    $sum = $number1 + $number2 + $number3;

    echo "Sum is: " .$sum;
    echo "<br>";  
?>

<h3> 
    5.	Write a script to add up the numbers: 298, 234, 46. Use variables to 
    store these numbers and echo statement to output your answer.
</h3>
<?php
    //define int variable and sum
    $number1 = 298;
    $number2 = 234;
    $number3 = 46;
    $sum = $number1 + $number2 + $number3;

    echo "Sum is: " .$sum;
    echo "<br>";  
?>

<h3> 
    6.	Write a PHP script to detect the browser being used to view your pages. 
    (Use predefined variables: $_SERVER)
</h3>
<?php
    //predefine $_SERVER
    echo $_SERVER['HTTP_USER_AGENT']; 
?>

<h3> 
    7.	Write a PHP script in the footer section of your universal footer 
    just below the Copyright information to display the last modification 
    time of a file. (Hint: Use predefined variable, base name function & 
    date function to print the date and time)
</h3>
<?php

?>

</form>
<?php include "footer.php" ?>