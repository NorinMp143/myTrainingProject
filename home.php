<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
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
    <link rel="stylesheet" href="css/style2.css">
    <style>
      img{width: auto;} 
      
    </style>
    </head>
<body>
    <?php
		include 'include/header.php';
		include 'check-if-added.php';
	?>
    <div class="container">
        <div class="row row-style">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 1</div>
                    <div class="panel-body"><center><img src="img/vivo-v9.jpg" alt="Vivo v9" height="200px"></center>
                        <br><p>Octa Core, 2.2 GHz, Snapdragon 626, 4 GB RAM, 6.3 inches (16 cm),
                            1080x2280 px, 400 PPI, IPS LCD, 16 MP + 5 MP Dual Primary Cameras,
                            LED Flash, 24 MP Front Camera<br>
                            <b>Price : 20,499 Rs</b>
                        </p><br>
                        <?php
							if(check_if_added_to_cart(1)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=1" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                   
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 2</div>
                    <div class="panel-body"><center><img src="img/samsung1.jpg" alt="Samsung Galaxy M40" height="200px"></center>
                        <br>
                        <p>Octa core (2 GHz, Dual Core + 1.7 GHz, Hexa Core), Snapdragon 675, 6 GB RAM,
                            6.3 inches (16 cm), 1080x2340 px, 409 PPI, LCD,
                            32 MP + 8 MP + 5 MP Triple Primary Cameras, LED Flash, 16 MP Front Camera<br>
                            <b>Price : 19,990 Rs</b>
                        </p>
                        <?php
							if(check_if_added_to_cart(2)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=2" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 3</div>
                    <div class="panel-body"><center><img src="img/vivo-vz.jpg" alt="Vivo Z1 Pro" height="200px"></center>
                        <br><p>
                            Octa core (2.3 GHz, Dual Core + 1.7 GHz, Hexa Core), 
                            Snapdragon 712, 4 GB RAM, 6.53 inches (16.59 cm), 1080x2340 px, 
                            395 PPI, IPS LCD, 16 MP + 8 MP + 2 MP Triple Primary Cameras, 
                            LED Flash, 32 MP Front Camera<br>
                            <b>Price : 14,990 Rs</b>    
                        </p>
                        <?php
							if(check_if_added_to_cart(3)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=3" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 4</div>
                    <div class="panel-body"><center><img src="img/oneplus7.jpg" alt="OnePlus 7" height="200px"></center>
                        <br>
                        <p>
                            Octa core (2.84 GHz, Single Core + 2.42 GHz, Tri core + 1.8 GHz, Quad core),
                            Snapdragon 855, 6 GB RAM, 6.41 inches (16.28 cm), 1080x2340 px, 402 PPI,
                            Optic AMOLED, 48 MP + 5 MP Dual Primary Cameras, Dual LED Flash, 16 MP Front Camera<br>
                            <b>Price : 32,999 Rs</b>
                        </p>
                        <?php
							if(check_if_added_to_cart(4)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=4" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 5</div>
                    <div class="panel-body"><center><img src="img/oppo.jpg" alt="OPPO Reno" height="200px"></center>
                        <br>
                        <p>
                            Octa core (2.2 GHz, Dual Core + 1.7 GHz, Hexa Core), Snapdragon 710, 8 GB RAM,
                            6.4 inches (16.26 cm), 1080x2340 px, 403 PPI, AMOLED, 
                            48 MP + 5 MP Dual Primary Cameras, LED Flash, 16 MP Front Camera<br>
                            <b>Price : 32,990 Rs</b>
                        </p><br>
                        <?php
							if(check_if_added_to_cart(5)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=5" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile 6</div>
                    <div class="panel-body"><center><img src="img/xiomi.jpg" alt="Xiaomi Black Shark 2" height="200px"></center>
                        <br>
                        <p>
                            Octa core (2.84 GHz, Single Core + 2.42 GHz, Tri core + 1.8 GHz, Quad core),
                            Snapdragon 855, 6 GB RAM, 6.39 inches (16.23 cm), 1080x2340 px, 403 PPI, 
                            AMOLED, 48 MP + 12 MP Dual Primary Cameras, LED Flash, 20 MP Front Camera<br>
                            <b>Price : 39,999 Rs</b>
                        </p><br>
                        <?php
							if(check_if_added_to_cart(6)){
								echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
							}
							else{?>
								<a href="cart-add.php?id=6" class="btn btn-primary btn-block">Add to cart</a>
							<?php
							}								
						?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>