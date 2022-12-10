<?php 


    session_start();

    if(!isset($_SESSION['email']))
    {
        header("Location:login.php");
    }
    include('header.php');
   
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search User</title>
	<script src="js/search.js"></script>
</head>
<body>

	

	<form align="center" action="../controllers/searchaction.php" method="GET" onsubmit="return search(this);"> 
    <fieldset  style = "width: 50%; margin:  0px auto;">

      <legend align="center"><h2>Search User</h2></legend>
		<input type="search" name="email">
		<input type="submit" name="submit">
        <p id="i1"></p> 
    </fieldset>
	</form>
    
	
   <?php  include('footer.php'); ?>

</body>

</html>