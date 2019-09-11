<?php
	require 'include/common.php';
	$name=mysqli_real_escape_string($con,$_POST['Name']);
	$add=mysqli_real_escape_string($con,$_POST['Address']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	$mobno=$_POST['contact'];
	$email = $_POST['Email'];
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if(!preg_match($regex_email,$email)){
		echo "Incorrect email";
	}
	$pass = $_POST['pass'];
	if(strlen($pass)<8){
		echo "Password must have 8 characters.";
	}
	$email = mysqli_real_escape_string($con, $email);
	$pass = md5(mysqli_real_escape_string($con, $pass));
	$select_query = "SELECT id FROM users WHERE email_id=='$email'";
	if(mysqli_num_rows($select_query)>0){
		echo "email is already exists.";
	}
	else{
		$insert_qry = "INSERT INTO users(`name`, `email_id`, `password`, `contact`, `city`, `address`) 
		values('$name', '$email', '$pass', '$mobno', '$city', '$add')";
	$fetch_id_result = mysqli_query($con, $insert_qry) or die(mysqli_error($con));
	$_SESSION['id']=mysqli_insert_id($con);
	$_SESSION['email']=$email;
	header('location:home.php');
	}
?>