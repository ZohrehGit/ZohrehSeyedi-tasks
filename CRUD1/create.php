<?php
$title = "CRUD1";
include "../layout/header.php";?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Restaurant</title>
    <link rel="stylesheet" href="style.css">

</head>

<form action="" method="post" onsubmit="return crud()" name="form1">

    <input type ="text" name ="fname" placeholder="First Name" required onblur="fnameVal()"> <br><br>
    <input type ="text" name ="lname" placeholder="Last Name" required><br><br>
    <input type ="text" name ="city" placeholder="City" required><br><br>
    
    <select name="groupid">
        <option value="Group1"> Group1 </option>
        <option value="Group2"> Group2 </option>
        <option value="Group3"> Group3 </option>
    </select><br><br>

    <input type ="submit" value ="Submit" name="submit" >

</form>

<?php
        if(isset($_POST['submit'])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $city=$_POST['city'];
            $groupid=$_POST['groupid'];

            include 'db.php';
            $sql="insert into studentInfo(fname,lname,city,groupid)
            values('$fname','$lname','$city', '$groupid')";
            
            if($conn->query($sql)===TRUE){
                
                echo"Your information is added successfully";

            }
            else{

                echo"Error:" .$conn->error;

            }
        }
?>


<?php ?>

<?php include "../layout/footer.php" ?>