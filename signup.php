<?php
	require 'include/common.php';
	if(isset($_SESSION['email'])){
		header('location:home.php');
	}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Page - Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>
       .row-style{
        margin-top:0;
        margin-bottom:0;
       }
       .btmftr{
        min-height:0;
        margin-bottom: 0px;
       }
    </style>
    </head>
<body>
    <?php
		include 'include/header.php';
		include 'include/login.php';
	?>
    
    <div class="container btmftr">
        <div class="row row-style">
            <div class="gotomid">
                <form method="POST" action="signup_script.php">
                    <label><h2><b>SIGN UP</b></h2></label>
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Name" pattern="[a-zA-Z]+">
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
                    <div class="form-group">
                        <input type="number" name="contact" class="form-control" placeholder="Contact" pattern="[0-9],{10,}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City" pattern="[a-zA-Z ]+">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Address" class="form-control" placeholder="Address" pattern="[a-zA-Z0-9, ]+">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
		include 'include/footer.php';
	?>
</body>
</html>