<?php
$title = "array";
include "header.php" ?>

<form action = "" method = "get">

<input type = "number" placeholder="Enter your first number" name = "num1">
<input type = "number" placeholder="Enter your second number" name = "num2">

<select name = operator>

    <option value = "add">Add</option>
    <option value = "sub">Subtract</option>
    <option value = "mul">Multiply</option>
    <option value = "div">Divide</option>

</select>

<input type = "Submit" name = "cal" value = "calculate">

</from>

<?php
if (isset($_GET["cal"])) 
{
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch ($operator) 
    {
        case "add":
            $result = $num1 + $num2;
        break;
        
        case "sub":
            $result = $num1 - $num2;
        break;

        case "mul":
            $result = $num1 * $num2;
        break;

        case "div":
            $result = $num1 / $num2;
        break;

        default:
            $result = "Error";
    }

    //echo "The resault is: " 
}

if (isset($result)) 
{
    echo "<h3> The resault is: $result </h3>"; 
}
?>

<?php

    echo "<h3> 1.Write a php script to display courses as list. </h3>";
        
        $courses = array("PHP", "HTML","JavaScript", "CMS", "Project");

        for ($i = 0; $i < count($courses); $i++) 
        {
            echo "<li> $courses[$i] <br>";
        }
    
    echo "<h3> 2.The unset() function is used to remove element from the array. </h3>";

        $courses1 = array("PHP", "HTML","JavaScript", "CMS", "Project");
        
        unset($courses1[2]);
    
        echo implode(",", $courses1);

    echo "<h3> 3.Sort the following array </h3>";

        $courses3 = array("PHP", "HTML","JavaScript", "CMS", "Project");
        
        echo "<h5>a) ascending order sort by value </h5>";
        asort($courses3);
        echo implode(",", $courses3);

        echo "<h5>b) ascending order sort by Key</h5>";
        ksort($courses3);
        echo implode(",", $courses3);

        echo "<h5>c) descending order sort by Value</h5>";
        arsort($courses3);
        echo implode(",", $courses3);

        echo "<h5>d) descending order sort by Key</h5>";
        krsort($courses3);
        echo implode(",", $courses3);

    echo "<h3> 4.Change the following array's all values to upper case. </h3>";

        $courses4=array("php", "html", "javascript", "cms", "project");

            for($i=0 ; $i<count($courses4) ; $i++){

                $courses4[$i] = strtoupper($courses4[$i]);
            }
        
            echo implode(',' ,$courses4);

    echo "<h3> 5.List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h3>";

        $colorArr = array("Green" => "#00ff00", "Blue" => "#0000ff", "Yellow" => "#ffff00", "Pink" => "#ffc0cb", "Black" => "#000000");

        $num = array_keys($colorArr);

            for ($i = 0; $i < count($num); $i++) {
                echo $num[$i] . ": " . $colorArr[$num[$i]] . "<br>";
            }

    echo "<h3> 6.PHP script to calculate and display average temperature, five lowest and highest temperatures. </h3>";

        $tempArr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

        $sum = array_sum($tempArr);
        $count = count($tempArr);
        $average = $sum / $count;

        sort($tempArr);

        $lowTemp = array_slice($tempArr, 0, 5);

        $highTemp = array_slice($tempArr, -5);

        echo "Average temperature: " . $average . "<br>";
        echo "Five lowest temperatures: " . implode(", ", $lowTemp) . "<br>";
        echo "Five highest temperatures: " . implode(", ", $lowTemp);
?>

<?php ?>
<?php include "footer.php" ?>