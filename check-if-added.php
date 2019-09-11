<?php
function  check_if_added_to_cart($item_id){
	require 'include/common.php';
	
	$user_id = $_SESSION['id'];
	
	$select_qry="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    
	$run=mysqli_query($con,$select_qry);
	
	if((mysqli_num_rows($run))>=1){
		return 1;
	}
	else{
		return 0;
	}
}
?>