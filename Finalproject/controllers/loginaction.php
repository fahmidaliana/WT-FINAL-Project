<?php 

session_start();
include('../model/DB.php');

	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
     {
        
		$email = sanitize($_POST['email']);
		$password = sanitize($_POST['password']);

		$isValid = true;

		if(empty($email))
		{
			$_SESSION['email_error_msg'] = "Email can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['email_error_msg'] = "";
		}
		if(empty($password))
		{
			$_SESSION['password_error_msg'] = "Password can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['password_error_msg'] = "";
		}

		if($isValid === true) 
		{
			$_SESSION['email_error_msg'] = "";
			$_SESSION['password_error_msg'] = "" ;
			
			$sql = "SELECT  `Email`, `Password` FROM `employee` WHERE 1 ";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if($row["Email"] === $email and $row["Password"] === $password)
					{
						$_SESSION['email'] = $email;
						
						header("Location:../view/home.php");
						$_SESSION['global_error_msg'] = "" ;
						break;
					}
					else
				 {
					$_SESSION['global_error_msg'] = "Email or password does not match";		
					header("Location:../view/login.php");	
				 }
				}
			}
			else
			{
				$_SESSION['global_error_msg'] = "Something went wrong";
			   header("Location:../view/login.php");
			}

		mysqli_close($conn);
	
			
		}

		else
		{
			
			header("Location:../view/login.php");
		}

		
    }

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>