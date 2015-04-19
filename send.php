<?php
	$check = 0;
if(isset($_POST["mail"])) { 
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$name = preg_replace("/[^a-zA-Z\s]/", "", $name);
	if (empty($name)) {
		$check = 1;
	}else{	
		if (empty($email)) {
			$check = 2;
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$check = 3;
			}else{
				if (empty($message)) {
					$check = 4;
				}else{
					$to = filter_var("freddyvallanadan@gmail.com", FILTER_SANITIZE_EMAIL);
					$subjects = "New Message - $name Contact $phone";
					$msgs = "$message";
					$from = "$email";
					$headers = "From:" . $from;
					mail($to,$subjects,$msgs,$headers);
					$check = 5;
				}
			}
		}
	}
	header("location:contact.php?c=".$check);
}else{
	header("location:contact.php?c=".$check);
}
?>