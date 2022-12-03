<?php 

    session_start();
    if(isset($_SESSION['email']))
    {
        header("Location:home.php");
    }
    include('header.php');
   
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <script src="JS/login.js"></script>
</head>
<body>

    <form align="center" method="post" action="../controllers/loginaction.php" onsubmit="return isValid(this);" novalidate>
       
    <fieldset  style = "width: 50%; margin:  0px auto;">

        <legend align="center"><h2>LOGIN PAGE</h2></legend>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""; ?>
        <span id="email_error_msg" style="color:red"></span><br><br>


        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""; ?>
        <span id="password_error_msg" style="color:red"></span><br><br>

        <input type="submit" value="submit"><br><br>

        

        <a href="../view/registration.php">Not registered yet'?</a> <br><br>

        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>

    </fieldset>

    </form>

 
 

    <?php 

        include('footer.php');

    ?>
</body>
</html>