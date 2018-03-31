<?php
    session_start();
    error_reporting(0);
    require_once("includes/common.php");
    if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);

		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = MD5($password);

		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND Password='" . $password . "'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0)  //  if no records found in database
			header('location: error.php');
		else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['user_id'] = $row['id'];
			header('location: products.php');	
		}
	}
?>


