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



<?php include "footer.php" ?>