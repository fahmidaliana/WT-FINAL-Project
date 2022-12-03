<?php 


    session_start();

    if(!isset($_SESSION['email']))
    {
        header("Location:login.php");
    }

  
    include('header.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>

.nav {
  overflow: hidden;
  background-color: 	MediumPurple;
}


.nav a {
  float: left;
  text-align:center;
  color: white;
  position: relative;
  left: 40%;
  right: 40%;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
  
}



.nav a:hover {
  background-color: #fffafa;
  color: BlueViolet;
}

</style>
</head>
<body>
    <fieldset  style = "width: 50%; margin:  0px auto;">   
        <legend  align="center"><h2>WELCOME</h2></legend>

<div  class="nav">

  <a  href="../view/customerprofile.php">Customer profile</a>

</div>

<br><br>

<div class="nav">

  <a href="../view/order.php">Orders</a>
 
</div>

<br><br>

<div class="nav">

  <a href="../view/statement.php">Statement</a>

</div>

<br><br>

<div class="nav">

  <a href="../view/custormercart.php">Customer Cart</a>

</div>

<br><br>

<div class="nav">

  <a href="../view/profile.php">My profile</a>

</div>

<br><br>

<div class="nav">
<a href="../controllers/logoutaction.php">Log out</a>
</div>


</fieldset>
</body>

<?php 

include('footer.php');

?>
</html>