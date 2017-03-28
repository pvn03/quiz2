<?php
	if(isset($_POST["submit"])){
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$emailId = $_POST['email_id'];
		setcookie("first_name", $firstName);
		setcookie("last_name", $lastName);
		setcookie("email_id", $emailId);
	}
	else if(!isset($_COOKIE["first_name"])) {
		echo '  <script>
					var response = confirm("Please fill up the form first!");
					if (response == true){
						window.location = "welcome.php";
					}
				</script>';
	}
	echo "You have successfull registered";	
?>