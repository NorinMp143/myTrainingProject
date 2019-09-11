<?php
	require 'include/common.php';
	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}
	$user_id = $_SESSION['id'];
	$select_qry = "SELECT * FROM users_items ui INNER JOIN items i ON ui.item_id=i.id and ui.user_id='$user_id' and ui.status='Added to cart'";
	$num=1;$sum=0;$id="";
	$run=mysqli_query($con,$select_qry);
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
        <div class="cart-mid row-style">
            <table class="table">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
				<?php
					while ($row = mysqli_fetch_array($run)) {
                    $sum+= $row["price"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=confirmed' class='btn btn-primary'>Confirm Order</a></td></tr>";
				?>
            </table>
        </div>
    </div>
</body>
</html>