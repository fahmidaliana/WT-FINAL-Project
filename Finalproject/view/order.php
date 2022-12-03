<?php 


    session_start();

    if(!isset($_SESSION['email']))
    {
        header("Location:login.php");
    }
    include('header.php');
    include('../model/DB.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <style>
    table, th, td 
    {
        border: 2px solid black;
    }
    </style>
</head>
<body>

<fieldset  style = "width: 60%; margin:  0px auto;">

<legend align="center"><h2>ORDERS PAGE</h2></legend>

    


          <table align="center" style="width:60%">
            <tr>
                <th>Custormer id</th>
                <th>Email</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Dath of birth</th>
                <th>Phone number</th>               
                <th>Wedding date</th>
                <th>Cancel option</th>
                <th>Confimation option</th>
            </tr>

            <tr>
         
            <?php

                    $sql = "SELECT `ID`, `FirstName`, `LastName`, `PhoneNumber`, `Email`, `DOB`, `WD` FROM `customer`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) 
                    {
                        while($row = mysqli_fetch_assoc($result))
                    {
        
            ?>
            
            <tr>
                <td align="center"><?php echo $row["ID"]; ?></td>
                <td align="center"><?php echo $row["Email"]; ?></td>
                <td align="center"><?php echo $row["FirstName"]; ?></td>
                <td align="center"><?php echo $row["LastName"]; ?></td>
                <td align="center"><?php echo $row["DOB"]; ?></td>
                <td align="center"><?php echo $row["PhoneNumber"]; ?></td>
                <td align="center"><?php echo $row["WD"]; ?></td>
               
         
                <form action="../controllers/delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
                        <td><input type="submit" name="delete" value="Delete"></td>
                </form>
                <td>  
                    <button type="button" onclick="alert('Order confirm massage sent sucessfully')">Comfim</button>
                </td>

            </tr>
            <?php
                     } 
                    }
                       else{
                        echo "no recode found";
                       }
                       mysqli_close($conn);
            ?>
        </table>
        <button  onclick="history.back()">Go Back</button>
        
        </fieldset>
    <?php 
        include('footer.php'); 
    ?>
         
 
</body>
</html>

