<?php 
$action=$_REQUEST['action'];
		if(isset($action) && $action=='update_qty')
	{
		//echo "update";
		$cart_id=$_REQUEST['cartid'];
	$quantity=$_REQUEST['quantity'];


	$res=mysqli_query($con,"select * from cart where cart_id='".$cart_id."' ");


		$row=mysqli_fetch_array($res);
		
		$quantity=$_REQUEST['quantity'];
		 $a=$row['price'];
		$total=$quantity * $row['price'];
		$ip=$_SERVER['REMOTE_ADDR'];
 		$updatecart="UPDATE cart SET quantity='".$quantity."',amount='".$total."' WHERE cart_id='".$cart_id."'";
		$qry=mysqli_query($con,$updatecart);
		if($qry)
		{
			header('location:index.php?page=cart_list');
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/list.css"/>
		<title>Cart List</title>
	</head>
	<body>
		<?php

			if(isset($_GET['id']))
			{
				 $id=$_GET['id'];
				 $del="delete from `cart` where cart_id=".$id;
				$qry=mysqli_query($con,$del);
				
				if($qry)
				{
					header("location:index.php?page=cart_list");
				}
			}



		?>
		<table border="2px" align="center" id="customers">
			<center><h1><b>Cart List</b></h1></center>
			<tr>
				<th>Sr. No.</th>
				<th>Quantity</th>
				<th>Weight (gms.)</th>
				<th>Price</th>
				<th>Product Name</th>
				<th>Total Amount</th>
				<th>Product Image</th>
				<th>Action</th>
			</tr>
			<?php
			$ip=$_SERVER['REMOTE_ADDR'];
					 $select="SELECT * FROM `cart` where ip='".$ip."' AND `order_id`='0' ";
					 $query=mysqli_query($con,$select);
					while($row=mysqli_fetch_assoc($query))
					{
					?>
					<?php 
					 $select1="SELECT * FROM `product` WHERE product_id='".$row['product_id']."' ";
					 $query1=mysqli_query($con,$select1);
					$row1=mysqli_fetch_assoc($query1);

					 ?>
					<tr>
						<td><?php if (empty($i)){
   								echo $i = 1;
										}
										else
										{
   											echo $i++;
										}?></td>

					<form method="post" action="">

							<td>

								<input name="quantity" size="3" style="padding-left:25px;" type="text" value="<?php echo $row['quantity'] ?>"  >
								
                            	<!-- <form method="post" action="index.php?page=update_qty"> -->


								<input type="hidden" name="action" value="update_qty" >
								<input type="submit" name="update_qty" value="ok">
								<input type="hidden" name="cartid" value="<?php echo $row['cart_id']; ?>" >
								<!-- </form>	 -->
								<!-- </a> -->
							</td>
							
							</form>
							

							<?php $weight=$row['weight']* 250; ?>

						<td><?php echo $weight?></td>
						<td>₹ <?php echo $row['price'];?></td>
						<td><?php echo $row1['name'];?></td>
						<td>₹ <?php echo $row['amount'];?></td>
						<td><img src="admin_theme/img/<?php echo $row1['img'];?>" height="50px" width="50px"></td>
						<td>
							<a href="index.php?page=cart_list&id=<?php echo $row['cart_id'];?>"><button>Delete</button></a>
							<?php
							if(isset($_SESSION['user_id']))
							{
							?>
							<a href="index.php?page=customization&cart_id=<?php echo $row['cart_id']; ?>"><button>Buy Now</button></a>
							<?php }
							else{?>
								<button><a href="index.php?page=login">Buy Now</a></button>
							<?php } ?>
						</td>
					
					</tr>
			<?php $i++; } ?>
		</table>
	</body>

</html>
