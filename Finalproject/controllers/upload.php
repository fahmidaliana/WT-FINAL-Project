<?php 

session_start();

if(isset($_POST['submit']) && isset($_FILES['image']))
{

    include('../model/DB.php');


    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    
    $isValid = true;


    if($error === 0)
    {
        if($img_size < 125000)
        {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);    
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png");

                if(in_array($img_ex_lc,$allowed_exs))
                {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../model/images/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                }

                else
                {
                    /* $em="file type wrong";
            header("Location:../view/updateprofile.php?error=$em"); */
                $_SESSION['type_error_msg'] = "File type not sutable";
			    $isValid = false;
                header("Location:../view/updateprofile.php");
                } 
           
        }
    
        else
        {
             /* $em="sorry too big";
            header("Location:../view/updateprofile.php?error=$em"); */
            $_SESSION['size_error_msg'] = "File size is too large";
            header("Location:../view/updateprofile.php");
			$isValid = false;
        }
    }

    if($isValid === true)
    {
			$_SESSION['size_error_msg'] = "" ;
			$_SESSION['type_error_msg'] = "";
            $_SESSION['global_error_msg'] = "";


            
			$sql = "UPDATE `employee` SET `image`='$new_img_name' WHERE ID = 1 ";
			
			$result = mysqli_query($conn, $sql);

            if($result)
			{
				header("Location:../view/profile.php");
			}

			else
			{
				$_SESSION['global_error_msg'] = "Something went wrong";	
			$isValid = false;
			}
            mysqli_close($conn);
	
    }
   

}
else
{
    header("../view/updateprofile.php");
}

?>