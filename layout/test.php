<?php
//Global Scope
$name = "Zohreh";
$number = 2;
$_age = 40;
$last_name = "Seyedi";
$sub = "PHP";
$Sub = "DataBases";

echo $name;
 
function test()
{
    //global keyword
    global $last_name;
    //local Scope
    $a = 20;
    echo $a;

    echo "<br>" . $last_name;
}

test();

// echo "<br>" . $a; --- got error

//static keyword
function test1()
{
    static $num = 5;
    //$num = 5; --- output does not increase
    echo "<br>" . $num;
    $num++;
}

test1();
test1();
test1();

?> 

<?php
echo "<br>";
$host = $_SERVER['SCRIPT_FILENAME'];
echo $host;

// string concatenation
echo "<br>"; 
echo $name . " " . $last_name;
echo "<br>";
echo 'This will print $name';

//strlen built in function
echo "<br>"; 
echo "The length of " . $name ." is: " .strlen($name);

//strpos()
echo "<br>";
echo strpos("hello world Z", "Z");

//string word count
echo "<br>";
echo str_word_count("hello world Z");

//escaping special characters
echo "<br>";
echo "hello world \"Z\"";

//operators
echo "<br>";
echo $number + $_age;

echo "<br>";
echo $number += 40;

echo "<br>";
var_dump($number == $_age); // return false
  
?>