<?php
	require 'include/common.php';
	
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = md5($_POST['pass']);
	
	$qry = "SELECT * FROM `users` WHERE `email_id`='$email' AND `password`='$pass'";
	
	$run = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($run);
	$rowcount = mysqli_num_rows($run);
	
	if($rowcount<1){
		header('location:index.php?x=1');
	} 
	else{
		$_SESSION['email']=$row['email_id'];
	    $_SESSION['id']=$row['id'];
		header('location:home.php');
	}
?>