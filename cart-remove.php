<?php
	require 'include/common.php';
	$item_id=$_GET['id'];
	$user_id=$_SESSION['id'];
	$qry="Delete FROM users_items WHERE user_id='$user_id' and item_id='$item_id'";
	$run=mysqli_query($con,$qry) or die(mysqli_error($con));
	header('location:cart.php');
?>