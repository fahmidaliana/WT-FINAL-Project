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
    <title>Custormer Cart</title>

    <style>
    table, th, td 
    {
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <fieldset  style = "width: 70%; margin:  0px auto;">
   <legend align="center" ><h2>Custormer Cart</h2></legend> 

          <table align="center" style="width:90%">
            <tr>
                <th>Custormer id</th>   
                <th>First name</th>
                <th>Last name</th>
                <th>Wedding date</th>
                <th>Budget</th>
                <th>features wanted</th>

             
            </tr>

            <tr>
         
            <?php
                $sql = "SELECT `ID`, `FirstName`, `LastName`, `WD`, `Budget`, `Flower`, `ThemeColour`, `Music`, `Food` FROM `customer` WHERE 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                    while($row = mysqli_fetch_assoc($result))
                {
     
            ?>
            
            <tr>
                <td align="center"><?php echo $row["ID"]; ?></td>
                <td align="center"><?php echo $row["FirstName"]; ?></td>
                <td align="center"><?php echo $row["LastName"]; ?></td>
                <td align="center"><?php echo $row["WD"]; ?></td>
                <td align="center"><?php echo $row["Budget"]; ?></td>
               
                <td>
                    <li>Flowers:<?php echo $row["Flower"]; ?></li>
                    <li>Theme colour:<?php $row["ThemeColour"]; ?></li>
                    <li>Music:<?php echo $row["Music"]; ?></li>
                    <li>Food:<?php echo $row["Food"]; ?></li>
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
         <button onclick="history.back()">Go Back</button>
         </fieldset>
        
    <?php 
        include('footer.php'); 
    ?>

</body>
</html>

