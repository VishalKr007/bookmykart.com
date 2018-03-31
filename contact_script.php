<?php
	error_reporting(0);
	require_once("includes/common.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($regex_email, $email))
		{
			$m = "<span style='color: red;'>Enter a valid Email Id</span>";
			header('location: contact.php?m1='.$m);
			exit;
		}
		
		$message = $_POST['message'];
		$message = mysqli_real_escape_string($con,$message);
		$message = strip_tags($message);
		$query = "INSERT INTO contacts
		(Name, Email, Message)
		VALUES
		('{$name}','{$email}','{$message}')";
		if(mysqli_query($con,$query)){
			echo "Thank-you for your message. We will get back to you as soon as possible. Go back to website <a href='index.php'>here</a>";
		}else{
			echo "error while inserting the records".mysqli_error($con);
		}
	}
?>