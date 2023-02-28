<?php
$title = "customer";
include "../layout/header.php";?>

<form action="" method="post">

    First Name: <br><input type ="text" name ="fName" placeholder="" required size="30"> <br><br>
    Last Name: <br><input type ="text" name ="lName" placeholder="" required size="30"><br><br>
    Phone Number: <br><input type ="text" name ="phoneNum" placeholder="" required size="30"><br><br>
    National Code: <br><input type ="text" name ="nationalCode" placeholder="" size="30"><br><br>
    Email: <br><input type ="text" name ="email" placeholder="a.b@gmail.com" size="30"><br><br>
    
    Address: <br><select name="address" style="width: 250px;">
        <option value="Helsinki"> Helsinki </option>
        <option value="Hämeenlinna"> Hämeenlinna </option>
        <option value="Tampre"> Tampre </option>
    </select><br><br>

    <input type ="submit" value ="Submit" name="submit" >

</form>

<?php
        if(isset($_POST['submit'])){
            $fName=$_POST['fName'];
            $lName=$_POST['lName'];
            $phoneNum=$_POST['phoneNum'];
            $nationalCode=$_POST['nationalCode'];
            $email=$_POST['email'];
            $address=$_POST['address'];

            include 'db.php';
            $sql="insert into customer(fName, lName, phoneNum, nationalCode, email, address)
            values('$fName','$lName','$phoneNum','$nationalCode','$email','$address')";
            
            if($conn->query($sql)===TRUE){
                
                echo" <h5> Your information is added successfully <h5>";

            }
            else{

                echo"Error:" .$conn->Error;

            }
        }
?>


<?php ?>

<?php include "../layout/footer.php" ?>