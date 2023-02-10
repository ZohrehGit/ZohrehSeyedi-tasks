<?php 

    $servername = "db";
    $username = "cappz";
    $password = "Bardia1395";
    $dbname = "cappz";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        
        die("Connection failed". $conn->connect_error);

    }

?>