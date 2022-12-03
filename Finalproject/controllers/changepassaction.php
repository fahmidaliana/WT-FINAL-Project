<?php 

session_start();

include('../model/DB.php');
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
     {

		$password = sanitize($_POST['password']);
        $password2 = sanitize($_POST['password2']);
        $password3 = sanitize($_POST['password3']);
        
		$isValid = true;

		if(empty($password))
		{
			$_SESSION['password_error_msg'] = "Password can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['password_error_msg'] = "";
		}
        if(empty($password2))
		{
			$_SESSION['password2_error_msg'] = "Password can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['password2_error_msg'] = "";
		}
        if(empty($password3))
		{
			$_SESSION['password3_error_msg'] = "Password can not be empty";
			$isValid = false;
		}
		else
		{
			$_SESSION['password3_error_msg'] = "";
		}

        if($password3 != $password2)
		{
			$_SESSION['global_error_msg'] = "Password and re-typed password does not match";
			$isValid = false;
		}
		else
		{
			$_SESSION['global_error_msg'] = "";
		}


		if($isValid === true) 
		{
			
			$_SESSION['password_error_msg'] = "" ;
            $_SESSION['password2_error_msg'] = "" ;
            $_SESSION['password3_error_msg'] = "" ;
			$_SESSION['global_error_msg'] = "";
			
			 
			$sql = "UPDATE `employee` SET `Password`='$password2' WHERE ID = 1 ";
			
			$result = mysqli_query($conn, $sql);

            if($result)
			{
				header("Location:../view/profile.php");
			}

			else
			{
				$_SESSION['global_error_msg'] = "Something went wrong";
			   header("Location:../view/changepass.php");
				/* echo "Something went wrong" . mysqli_error($conn); */
			}
			mysqli_close($conn);	

		}
		else
		{
			
			header("Location:../view/changepass.php");
		}
	
    }

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>