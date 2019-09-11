<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	if(isset($_GET['alert'])){
		session_destroy();?>
		<script>
			alert('Password Successfully Changed! you need to login again with New Password.');
			window.open('index.php','_SELF'); 
		</script><?php
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
    <style>
       .row-style{
        margin-top:0;
        margin-bottom:0;
       }
    </style>
    </head>
<body>
    <?php
		include 'include/header.php';
	?>
    <div class="container btmftr">
        <div class="row row-style">
            <div class="gotomid">
                <form method="POST" action="settings_script.php">
                    <label><h2><b>Change Password</b></h2></label>
					<?php if(isset($_GET['y'])){
						echo '<small style="color:red;font-weight:bold;">Password Not Matched!</small>';
					}?>
                    <div class="form-group">
                        <input type="password" name="oldpass" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="newpass" class="form-control" placeholder="New Password">
                    </div>
					<?php if(isset($_GET['x'])){
						echo '<small style="color:red;font-weight:bold;">Re-type Password Not Matched!</small>';
					}?>
                    <div class="form-group">
                        <input type="password" name="renewpass" class="form-control" placeholder="Re-type New Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>