
<?php $title = "PHP is interesting";
include "header.php" ?>
    
    <h1>Zohreh Seyedi - Team 8</h1>

    <?php
    //inClass Task1
    echo "Zohreh Seyedi <br>";
    echo "Team-8 <br>";
    ?>

    <?php
    echo " Hello world! My name is \"zohreh\" <br> ";
    ?>

    <?php echo date('l jS \of F Y h:i:s A');?>
    <br>
    <?php echo date("m.d.Y");?>

    <h3> ------------------ </h3>
    
    <h3>JavaScript is interesting</h3>
    
    <script>
        document.write("Hello world JavaScript");
    </script><br><br>

    <h3> Change Backgroud-Color </h3>

    <h2>Changing background-color</h2>
    
    <form>
        <input type="color" name="newColor"
        onchange="changeColor('newColor', this.value)">
    </form>

    <h3> ------------------ </h3>

    <h3>PHP is interesting</h3>
   
    <?php 
    $g1=5;
    $g2=4;
    $g3=5;
    echo "<table>
    
    <tr>
    <th> S.N </th> <th> Name </th> <th> Grade </th>
    </tr>

    <tr>
    <td> 1 </td> <td> Pekka </td> <td> $g1 </td>
    </tr>
    
    <tr>
    <td> 2 </td> <td> Johanna </td> <td> $g2 </td>
    </tr>
    
    <tr>
    <td> 3 </td> <td> John </td> <td> $g3 </td>
    </tr>
    
    <table>";
    ?>
    
<h3> Docker </h3>
<img src="images/docker.jpg" alt="first shot" width="1000px">

    <?php echo date('l jS \of F Y h:i:s A');?>
    <br>
    <?php echo date("m.d.Y");?>
    <?php include "footer.php" ?>