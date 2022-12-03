<?php 

    session_start();
    include('header.php');
    include('../model/DB.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <style>

a.one:link, a.one:visited {
  background-color: #00cd66;
  color: white;
  padding: 2px 10px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
}

a.one:hover, a.one:active 
{
  background-color: #008b45;
}

b:link, b:visited {
    
    width: 200px;
    height: 200px;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

.b img {
    width: 30%;
    height: 30%;
   
}

a.two:link, a.two:visited {
  background-color: #1e90ff;
  color: white;
  padding: 2px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.two:hover, a.two:active 
{
  background-color: #104e8b;
}
</style>
</head>
<body>
    
<form align="center" method="post" action="../view/home.php" enctype="multipart/form-data" novalidate>
<fieldset  style = "width: 50%; margin:  0px auto;">

    <legend align="center"><h2>PROFILE PAGE</h2></legend>
        
    <?php

        $sql = "SELECT `ID`, `Email`, `Gender`, `Salary`, `Password`, `image` FROM `employee` WHERE 1";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) 
            {
             while($row = mysqli_fetch_assoc($result))
            {
    ?>
        
        <div class="b">
            <img src="../model/images/<?php echo $row['image']?>" alt="profile pic">
        </div>
        <div >
             <a class="one" href="updateprofile.php" >Update Picture</a>
             </div>  
             <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=<?php echo $row["Email"]; ?> disabled>
        <br><br>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value=<?php echo $row["Gender"]; ?> disabled>
        <br><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" value=<?php echo $row["Salary"]; ?> disabled>
        <br><br>


        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value=<?php echo $row["Password"]; ?> disabled >
        <br><br>
        <div >
             <a class="two" href="changepass.php" >Change Password</a>
             </div>  
        <button  onclick="history.back()">Go Back</button>
    
       
      

        <?php  
            } 
        }
           else{
            echo "no recode found";
           }
           mysqli_close($conn);
        ?>


       
        
        </fieldset>

</form>




<?php 

    include('footer.php');

?>
</body>