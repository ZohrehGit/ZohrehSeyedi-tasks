<?php
$title = "customer";
    if(isset($_POST['submit']))
    {
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $phoneNum=$_POST['phoneNum'];
        $nationalCode=$_POST['nationalCode'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $myPass=$_POST['myPass'];
        $confirm_password=$_POST['confirm_password'];

        if ($myPass == $confirm_password)
        {
            $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address, myPass)
            values('$fName','$lName','$phoneNum','$nationalCode','$email','$address', '$myPass')"; 
            header("Location: ../layout/index.php");
            exit;
        } 
        else
            {
            echo" <h5> Password and Confirm Password do not match <h5>";
            }
        //$servername = "db";
        //$username = "team8";
        //$password = "team8pass";
        //$dbname = "team8";
        //include('db.php');
        //$conn = new mysqli($servername, $username, $password, $dbname);
        
    }
?>
<?php include "../layout/header.php";
      include('db.php');?>
<!DOCTYPE html>
<html>
<form method="post">
    <h5>Restaurant Sign Up Form</h5>
    <div class="row">
        <div class="col">
            First Name:     <br><input type ="text" name ="fName" placeholder="" required size="30"> <br><br>
            Last Name:      <br><input type ="text" name ="lName" placeholder="" required size="30"><br><br>
        </div>
        <div class="col">
            Phone Number:   <br><input type ="text" name ="phoneNum" placeholder="" required size="30"><br><br>
            National Code:  <br><input type ="text" name ="nationalCode" placeholder="" size="30"><br><br>
        </div>
        <div class="col">
            Address:        <br><select name="address" style="width: 250px;">
                                <option value="Helsinki"> Helsinki </option>
                                <option value="Hämeenlinna"> Hämeenlinna </option>
                                <option value="Tampre"> Tampre </option>
                            </select><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Email:              <br><input type ="text" name ="email" placeholder="" required size="30"><br><br>
            Password:           <br><input type ="password" name="myPass" required><br><br>
            Confirm password:   <br><input type ="password" name="confirm_password" required><br><br>
        </div>
    </div>
    <input type ="submit" value ="submit" name="submit" >
</form>
</html>
<?php include "../layout/footer.php" ?>