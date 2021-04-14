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
			<caption class="msg">Cart List</caption>
			<tr>
				<th>Quantity</th>
				<th>Price</th>
				<th>Product Name</th>
				<th>Total Amount</th>
				<th>Product Image</th>
				<th>Action</th>
			</tr>
			<?php
					 $select="SELECT * FROM `cart` where user_id='".$_SESSION['user_id']."'";
					 $query=mysqli_query($con,$select);
					while($row=mysqli_fetch_assoc($query))
					{
					?>
					<?php 
					 $select1="SELECT * FROM `product` WHERE product_id='".$row['product_id']."' ";
					 $query1=mysqli_query($con,$select1);
					while($row1=mysqli_fetch_assoc($query1))
					{?>
					<tr>
						<td><?php echo $row['quantity'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row1['name'];?></td>
						<td><?php echo $row['amount'];?></td>
						<td><img src="../admin_theme/img/<?php echo $row1['img'];?>" height="50px" width="50px"></td>
						<td>
							<button><a href="index.php?page=cart_list&id=<?php echo $row['cart_id'];?>">Delete</a></button>
							<?php
							if(isset($_SESSION['user_id']))
							{
							?>
							<button><a href="index.php?page=customization">Buy Now</a></button>
							<?php }
							else{?>
								<button><a href="index.php?page=login">Buy Now</a></button>
							<?php } ?>
						</td>
					
					</tr>
			<?php } }?>
		</table>
	</body>

</html>