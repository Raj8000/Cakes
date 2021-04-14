<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-cakes Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<!-- /top-header -->
		<!-- main-menu -->
		
		<!-- /main-menu -->
	<!-- service -->
<!-- <div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">new varieties</h3>
                    
			<ul id="flexiselDemo3">
				<?php
			
					$select_record="SELECT * FROM `product` ORDER BY product_id DESC LIMIT 0,5";
				    $query_select_record=mysqli_query($con,$select_record);   	 
				    while($row=mysqli_fetch_array($query_select_record)) 
				    {
				    ?>
				<li>
					
					<div class="biseller-column">
					
				    	
					<img src="../../admin_theme/img/<?php echo $row['img'];?>" style="height:200px;" alt="" class="veiw-img">
											
						<div class="veiw-img-mark">
							<a href="index.php?page=singlepage&id=<?php echo $row['product_id'];?>">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4><?php echo $row['name']; ?></h4>
						<p><?php echo $row['price']; ?></p>
					</div>
						<a href="index.php?page=cart_action&id=<?php echo $row['product_id']; ?>"><button class="add2cart">
						    <span>| Add to Cart</span> </button></a>			
					</div>
                   
				</li>
             	<?php }?>			
 -->				<!-- <li>
					<div class="biseller-column">
					<img src="images/12.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="index.php?page=singlepage">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Printed Cake</h4>
						<p>$ 600.99</p>
					</div>
						<a href="index.php?page=singlepage"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
			
				<li>
					<div class="biseller-column">
					<img src="images/13.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="index.php?page=singlepage">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Forest Egg</h4>
						<p>$ 400.99</p>
					</div>
						<a href="index.php?page=singlepage"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/14.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="index.php?page=singlepage">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4>Butter Scotch </h4>
						<p>$ 219.99</p>
					</div>
						<a href="index.php?page=singlepage"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>
					</div>
				
				</li>
 -->				
<!-- 	     	</ul>

			</div>
		</div>	
 -->		<div class="container">
			<div class="row">
				<h3 class="new-models">Products</h3>
			</div>
		</div>
		<div class="container">
			
			<div class="row">
				<?php

					if(isset($_POST['search_string']))
					{
						$search_string=$_POST['search_string'];
						$select_record="SELECT * FROM product WHERE name like '%".$search_string."%'";
						
					}
					else
					{
					$select_record="SELECT * FROM `product`";
				    }
				    $query_select_record=mysqli_query($con,$select_record);   	 
				    while($row=mysqli_fetch_array($query_select_record)) 
				    {
				    ?>
				<div class="col-md-3  products biseller-column">
					<img src="admin_theme/img/<?php echo $row['img'];?>" alt="" class="veiw-img">
							<div class="veiw-img-mark">
							<a href="index.php?page=singlepage&id=<?php echo $row['product_id'];?>">Quick view</a>
						</div>
					
						<div class="biseller-name">
							<h4><?php echo $row['name']; ?></h4>
							<p>250gms.(₹ <?php echo $row['price']; ?>)</p>


							<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
</style>
</head>
<body>

<?php
///$cat_id=$_REQUEST['id'];
$rate=0;
$ip=$_SERVER['REMOTE_ADDR'];
$product_id=$row['product_id'];
 $sel1="SELECT * FROM rating WHERE product_id='".$product_id."'";
$qry1=mysqli_query($con,$sel1);
$count=mysqli_num_rows($qry1);$rating='';
	while($row1=mysqli_fetch_assoc($qry1)){
	
	 $rating +=$row1['rating_number'];
}

 $avg=$rating /$count;
$roundavg=round($avg,1);

	if($roundavg>=5)
	{
		echo '5';
	}
	else
	{
		echo $roundavg;
	}
	for ($i=1; $i <=5 ; $i++) { 
?><a onclick="rate(<?php echo $i?>,<?php echo $row['product_id']?>,<?php echo $cat_id?>);"><span class="fa fa-star  <?php if($roundavg>=$i)echo 'checked'?>" ></span></a>
		
<?php }
?>

<!-- <a onclick="rate(1,<?php echo $row['product_id']?>);"><span class="fa fa-star  checked" ></span></a>
<a onclick="rate(2,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(3,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(4,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(5,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
 -->

<script type="text/javascript">
	function rate($rating,$product_id)
	{

		window.location="index.php?page=rating_action&product_id="+$product_id+"&rating="+$rating;
		//alert("Thanks for rating"+" you give "+$rating+" for this product "+$product_id);
		
	}
</script>	
</body>
</html>
						</div>
						<a href="index.php?page=cart_action&id=<?php echo $row['product_id']; ?>"><button class="add2cart">
						     </button></a>			
				
				</div>
				<?php }unset($_POST['search_string']); ?>
			</div>

		</div>
			

	<!-- footer -->
	<!-- /footer -->
	

