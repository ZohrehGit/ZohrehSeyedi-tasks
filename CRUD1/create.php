<?php
$title = "CRUD1";
include "../layout/header.php";?>

<form action="" method="post">

    <input type ="text" name ="fname" placeholder="First Name" required> <br><br>
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

                echo"Error: .$conn->error";

            }
        }
?>


<?php ?>

<?php include "../layout/footer.php" ?>