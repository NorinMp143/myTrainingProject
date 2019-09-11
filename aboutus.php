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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <?php
		include 'include/header.php';
		include 'include/login.php';
	?>
    
    <div class="container">
        <div class="row row-style">
            <div class="col-md-4">
                <h3>WHO WE ARE</h3><br>
                <div>
                    <img src="img/men-emp.jpg" alt="working employees make a successful company with their talent and hard work">
                </div>
                <div>
                    E-store is an American electronic commerce company with headquarters in Washington. it is the largest
                    Internet-based retailer in the United States. E- Store started as an online blog, but soon diversified,
                    Selling mobile phones. E- Store also sells certain low-end products like USB cables and other accessories.
                    E-Store has separate retail websites for United States, United Kingdom & Ireland, France, Canada, Germany,
                    Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers
                    international shipping to certain other.
                </div>
            </div>
            <div class="col-md-4">
                <h3>OUR HISTORY</h3><br>
                <div>
                    <h5 class="blueText">1998-</h5>
                    <p>
                        The company was founded in 1998, spurred by what Velos called his "Initiating framework", Which
                        described his efforts as an initiate to participate in the Internet business boom during that time.
                        In 1998, Velos left his employment as president of Ofcol & Co. and moved to Seattle. He began to work
                        on a business plan for what would eventually become E-Store.
                    </p>
                    <h5 class="blueText">2002-</h5>
                    <p>
                        In January 2002, E-store has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.
                    </p>
                    <h5 class="blueText">2008-</h5>
                    <p>
                        In July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.
                    </p>
                    <h5 class="blueText">2015-</h5>
                    <p>
                        E-Store received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Foom with all the current institutional investors. including Kalaari Capital etc.
                    </p>
                </div>       
            </div>
            <div class="col-md-4">
                <h3>OPPORTUNITIES</h3><br>
                <h5><b>Available Roles</b></h5>
                <p>
                    1. Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]<br><br>
                    2. Business Apprentice [6 Months Internship]<br><br>
                    3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship]
                </p>
            </div>
        </div>
    </div>
    <?php
		include 'include/footer.php';
	?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>