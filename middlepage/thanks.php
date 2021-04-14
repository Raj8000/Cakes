<?php
// update transection_id by order_id
			//echo 	$_SESSION['pay_shipping'];

		 //$order_id=$_SESSION['order_id'];
$success_order=$_GET['email'];
$cancel_order=$_GET['order'];
		
if($cancel_order=="cancel"){
	echo "<div class='col-md-6 col-md-offset-3 btn btn-primary '>Your Order has been Canceled  Successfull .!!</div>";
	unset($_SESSION['pay_shipping']);
		
}else{
	$transaction_id=$_REQUEST['txn_id'];
	//$paymet_method=$_REQUEST['payment_method'];
 	$update ="UPDATE `shipping_detail` SET txn_id='".$transaction_id."',status='done' WHERE shipping_id='".$_SESSION['pay_shipping']."'";
	$qry_update=mysqli_query($con,$update);
	if($qry_update)
	{

		 echo "<div class='col-md-6 col-md-offset-3 btn btn-primary '>Your Order has been Placed  Successfull .!!</div>";
		 unset($_SESSION['pay_shipping']);
	}
}
		
		
//print_r($_REQUEST);

?>