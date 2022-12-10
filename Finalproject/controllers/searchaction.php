<?php 
	
    include('../model/DB.php');

	if ($_SERVER["REQUEST_METHOD"] === "GET") {

		$key = sanitize($_GET['email']);
		$res = search($key);

		
		
		if (empty($key)) {
			echo "No record found";
		}
		else {
			while($row = mysqli_fetch_assoc($res)) {
                
                
                echo "Email: " . $row['Email'] ; 
                echo "<br>";
                echo "First Name: " . $row['FirstName'] ;
                echo "<br>";
                echo "Last Name: " . $row['LastName'] ;
                echo "<br>";
                echo "Phone Number: " . $row['PhoneNumber'] ;
                
			}
		}
	
		
	}

	function sanitize($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>