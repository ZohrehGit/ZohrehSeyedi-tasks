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
    echo "<h2> The resault is: $result </h2>"; 
}
?>


<?php ?>
<?php include "footer.php" ?>