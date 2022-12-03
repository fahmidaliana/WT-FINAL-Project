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
    <title>Custormer Profiles</title>

    <style>
    table, th, td 
    {
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <fieldset  style = "width: 50%; margin:  0px auto;">
   <legend align="center" ><h2>Custormer profile</h2></legend> 

          <table align="center" style="width:100%">
            <tr>
                <th>Custormer id</th>
                <th>Email</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Dath of birth</th>
                <th>Phone number</th>               
                <th>Wedding date</th>
             
            </tr>

            <tr>
         
            <?php

            $sql = "SELECT `ID`, `FirstName`, `LastName`,`Gender`, `PhoneNumber`, `Email`, `DOB`, `WD` FROM `customer` WHERE 1";
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
                <td align="center"><?php echo $row["Gender"]; ?></td>
                <td align="center"><?php echo $row["DOB"]; ?></td>
                <td align="center"><?php echo $row["PhoneNumber"]; ?></td>
                <td align="center"><?php echo $row["WD"]; ?></td>
               
                

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
         <button onclick="history.back()">Go Back</button>
         </fieldset>
        
    <?php 
        include('footer.php'); 
    ?>

</body>
</html>

