<?php
	require 'include/common.php';
	if(isset($_SESSION['email'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <style>
        .row-style{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
		include 'include/header.php';
		include 'include/login.php';
	?>
    
    <div class="container">
        <div class="row row-style">
            <div class="col-sm-10">
                <h2>LIVE SUPPORT</h2>
                <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                    lpsum is that it has a more-or-less normal distribution of letters.
                    There are many variations of passages of Lorem lpsum available, but the majority
                    have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                    if you are going to use a passage of Lorem lpsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </p>
            </div>
            <div class="col-sm-2">
                <img src="img/liveS.png" alt="Live Support">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <h2>CONTACT US</h2>
                <form>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Company Information :</h2>
                <p style="line-height: 27px;">500 Lorem lpsum Dolor Sit,<br>
                    22-56-2-9 Sit Amet, Lorem,<br>USA<br>
                    Phone: (00) 222 666 444<br>
                    Fax: (000) 000 00 00 0<br>
                    Email: info@mycompany.com<br>
                    Follow on: Facebook, Twitter
                </p>
            </div>
        </div>
    </div>
    <?php
		include 'include/footer.php';
	?>
</body>
</html>