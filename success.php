<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	$user_id=$_SESSION['id'];
	
	$message=$_GET['itemsid'];
	if($message=="confirmed"){
		$qry = "UPDATE `users_items` SET `status`='confirmed' WHERE `user_id`='$user_id'";
		$run = mysqli_query($con,$qry) or die(mysqli_error($con));
	}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacle=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shopping Cart - Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
       .center-div{
           max-width: 600px;
           margin: 0 auto;
       }
       
    </style>
    </head>
<body>
    <?php
		include 'include/header.php';
	?>
    <div class="container btmftr row-style text-center">
        <div class="panel center-div">
            <div class="panel-body">
                <p>Thank you for ordering from E-Store. The order shall be delivered to you shortly.</p>
            </div>
        </div><br>
        <p>Order some more electronic items <a href="home.php">here</a>.</p>
    </div>
</body>
</html>