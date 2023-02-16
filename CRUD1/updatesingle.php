<?php
$title = "Update your info";
include "../layout/header.php";
include 'db.php';

$a = $_GET['id'];
$result = mysqli_query($conn, "select * from studentInfo where id = '$a'");
$row = mysqli_fetch_array($result)

?>

<h2> Update your information below </h2>

<form name = "update" method = "post" action = "">

    <input type ="text" name ="fname" placeholder="First Name" required value = "<?php echo $row['fname'];?>"> <br><br>
    <input type ="text" name ="lname" placeholder="Last Name" required value = "<?php echo $row['lname'];?>"> <br><br>
    <input type ="text" name ="city" placeholder="City" required value = "<?php echo $row['city'];?>"><br><br>
        
        <select name="groupid" value = "<?php echo $row['groupid'];?>">
            <option value="Group1"> Group1 </option>
            <option value="Group2"> Group2 </option>
            <option value="Group3"> Group3 </option>
        </select><br><br>

    <input type ="submit" value ="update your information" name="update" >
    <input type ="submit" value ="delete your information" name="delete" >

</form>

<?php

    if (isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $groupid = $_POST['groupid'];

        $query = mysqli_query($conn, "UPDATE studentInfo set 
        fname = '$fname', lname = '$lname', city = '$city', groupid = '$groupid'
        where id = '$a'");

            if ($query){

                echo "<h2> Your Information updated Successfully </h2>";
            }
            else{
                echo "<h2> Not update </h2>";
            }
    }

    if (isset($_POST['delete'])){
    
        $query = mysqli_query($conn, "delete from studentInfo where id = '$a'");

            if ($query){

                echo "<h2> Your information delete Successfully </h2>";
            }
            else{
                echo "<h2> Delete failed </h2>";
            }
    }

?>

<?php ?>

<?php include "../layout/footer.php" ?>