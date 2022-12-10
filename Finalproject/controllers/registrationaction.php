<?php 

session_start();
include('../model/DB.php');

	if ($_SERVER['REQUEST_METHOD'] === "POST")
     {
		$fname = sanitize($_POST['fname']);
		$lname = sanitize($_POST['lname']);
		$dob = sanitize($_POST['dob']);
		$weddate = sanitize($_POST['weddate']);
		$budget = sanitize($_POST['budget']);
		$gender = sanitize($_POST['gender']);
		$phone = sanitize($_POST['phone']);
		$email = sanitize($_POST['email']);
		$password = sanitize($_POST['password']);
		$cpassword = sanitize($_POST['cpassword']);


		$isValid = true;

        if (empty($fname)) {
			$_SESSION['fname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}

		else{
			$_SESSION['fname_error_msg'] = "";
		}
        
        if (empty($lname)) {
			$_SESSION['lname_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['lname_error_msg'] = "";
		}
        
        if (empty($gender)) {
			$_SESSION['gender_error_msg'] = "Please select the correct option";
			$isValid = false;
		}
		else{
			$_SESSION['gender_error_msg'] = "";
		}
		if (empty($phone)) {
			$_SESSION['phone_error_msg'] = "Please select the correct option";
			$isValid = false;
		}
		else{
			$_SESSION['phone_error_msg'] = "";
		}
		if (empty($dob)) {
			$_SESSION['dob_error_msg'] = "Please select the correct option";
			$isValid = false;
		}
		else{
			$_SESSION['dob_error_msg'] = "";
		}
		if (empty($weddate)) {
			$_SESSION['weddate_error_msg'] = "Please select the correct option";
			$isValid = false;
		}
		else{
			$_SESSION['weddate_error_msg'] = "";
		}

		if (empty($budget)) {
			$_SESSION['budget_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['budget_error_msg'] = "";
		}

		if (empty($email)) {
			
			$_SESSION['email_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['email_error_msg'] = "";
		}
		
		if (empty($password)) {
			$_SESSION['password_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
		}
		else{
			$_SESSION['password_error_msg'] = "";
		}
        if (empty($cpassword)) {
			$_SESSION['cpassword_error_msg'] = "Please fill up this segment properly";
			$isValid = false;
			
		}
		else{
			$_SESSION['cpassword_error_msg'] = "";
		}

        if($password != $cpassword){
			$_SESSION['global_error_msg'] = "Password and re-typed password does not match";	
			$isValid = false;
        }
		if ($isValid === true) {

			$_SESSION['fname_error_msg'] = "";
			$_SESSION['lname_error_msg'] = "" ;
			$_SESSION['email_error_msg'] = "";
			$_SESSION['gender_error_msg'] = "" ;
			$_SESSION['password_error_msg'] = "" ;
			$_SESSION['cpassword_error_msg'] = "" ;
			$_SESSION['dob_error_msg'] = "" ;
			$_SESSION['weddate_error_msg'] = "" ;
			$_SESSION['phone_error_msg'] = "" ;
			$_SESSION['budget_error_msg'] = "" ;


			$sql = "INSERT INTO `customer`(`ID`, `FirstName`, `LastName`, `Gender`, `PhoneNumber`, `Email`, `Password`, `DOB`, `WD`, `Budget`) VALUES (NULL,'$fname','$lname','$gender','$phone','$email','$password','$dob','$weddate','$budget')";
			
			$result = mysqli_query($conn, $sql);

			if($result)
			{
				header("Location:../view/login.php");
			}

			else
			{
				echo "Something went wrong" . mysqli_error($conn);
			}

			//$_SESSION['password_error_msg'] = "" ;


            /*  $arr = array("fname" => $_POST['fname'], "lanme" => $_POST['lname'],"password"=>$_POST['password'],"email"=>$_POST['email'],"gender"=>$_POST['gender'],"dob"=>$_POST['dob'],"weddate"=>$_POST['weddate'],"phone"=>$_POST['phone']);
             $arr = json_encode($arr);

            var_dump($arr);
			$filename="../model/newusers.json";
            $file = fopen($filename, "a");
            fwrite($file, $arr);
			header("Location:../view/login.php"); */	
		}
		
		else
		{
			header('Location:../view/registration.php');
		}
		mysqli_close($conn);
    }

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>