
<?php 

session_start();
include('header.php');


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <script src="JS/changepass.js"></script>
</head>
<body>
<form align="center" method="post" action="../controllers/changepassaction.php" onsubmit="return isValid(this);"novalidate>
<fieldset  style = "width: 50%; margin:  0px auto;">

    <legend align="center"><h2>Change Password</h2></legend>
       


        <label for="password">Current Password:</label>
        <input type="password" id="password" name="password">
        <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""; ?>
        <span id="password_error_msg" style="color:red"></span><br><br>
    
        <label for="password2">New password:</label>
        <input type="password" id="password2" name="password2">
        <?php echo isset($_SESSION['password2_error_msg']) ? $_SESSION['password2_error_msg'] : ""; ?>
        <span id="password2_error_msg" style="color:red"></span><br><br>

        <label for="password3">Re-type password:</label>
        <input type="password" id="password3" name="password3">
        <?php echo isset($_SESSION['password3_error_msg']) ? $_SESSION['password3_error_msg'] : ""; ?>
        <span id="password3_error_msg" style="color:red"></span><br><br>

        <input type="submit" value="submit"><br>
        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>
        
        </fieldset>
     </form>
     
     
</body>
</html>