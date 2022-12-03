<?php 

    session_start();
    include('header.php');
    

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <script src="JS/registration.js"></script>
</head>
<body>
    
<form align="center" method="post" action="../controllers/registrationaction.php" onsubmit="return isValid(this);" novalidate>
<fieldset  style = "width: 50%; margin:  0px auto;">

    <legend align="center"><h2>REGISTRATION PAGE</h2></legend>

        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" >
        <?php echo isset($_SESSION['fname_error_msg']) ? $_SESSION['fname_error_msg'] : ""; ?>
        <span id="fname_error_msg" style="color:red"></span><br><br>

        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname">
        <?php echo isset($_SESSION['lname_error_msg']) ? $_SESSION['lname_error_msg'] : ""; ?>
        <span id="lname_error_msg" style="color:red"></span><br><br>



        <label for="dob">Date of birth:</label>
        <input type="date" id="dob" name="dob">
        <?php echo isset($_SESSION['dob_error_msg']) ? $_SESSION['dob_error_msg'] : ""; ?>
        <span id="dob_error_msg" style="color:red"></span><br><br>


        <label for="weddate">Wedding Date:</label>
        <input type="date" id="weddate" name="weddate">
        <?php echo isset($_SESSION['weddate_error_msg']) ? $_SESSION['weddate_error_msg'] : ""; ?>
        <span id="weddate_error_msg" style="color:red"></span><br><br>


        <label for="budget">Wedding Budget:</label>
        <input type="number" id="budget" name="budget">
        <?php echo isset($_SESSION['budget_error_msg']) ? $_SESSION['budget_error_msg'] : ""; ?>
        <span id="budget_error_msg" style="color:red"></span><br><br>


        <label for="gender">Gender:</label>

        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>

        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>
        <?php echo isset($_SESSION['gender_error_msg']) ? $_SESSION['gender_error_msg'] : ""; ?>
        <span id="gender_error_msg" style="color:red"></span><br><br>


        <label for="phone">Phone number:</label>
        <input type="number" id="phone" name="phone">
        <?php echo isset($_SESSION['phone_error_msg']) ? $_SESSION['phone_error_msg'] : ""; ?>
        <span id="phone_error_msg" style="color:red"></span><br><br>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""; ?>
        <span id="email_error_msg" style="color:red"></span><br><br>



        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""; ?>
        <span id="password_error_msg" style="color:red"></span><br><br>


        <label for="cpassword">Confirm password:</label>
        <input type="password" id="cpassword" name="cpassword">
        <?php echo isset($_SESSION['cpassword_error_msg']) ? $_SESSION['cpassword_error_msg'] : ""; ?>
        <span id="cpassword_error_msg" style="color:red"></span><br><br>


        <input type="submit" value="submit">
        <a href="../view/login.php">I already have an account</a> <br><br>

        <?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""; ?>
   
        </fieldset>

</form>




<?php 

    include('footer.php');

?>
</body>