<?php 

if(isset($_REQUEST['cat_id']))
{
	//echo "single";
	$id=$_REQUEST['cat_id'];
	$url="http://localhost/cakes/index.php?page=products&id=$id";

}
else

{
	//echo "multi";
	$url="http://localhost/cakes/index.php?page=allproducts";

}
$user_id=$_SESSION['user_id'];
$ip=$_SERVER['REMOTE_ADDR'];
	$product_id=$_REQUEST['product_id'];
	$rating=$_REQUEST['rating'];
	 $insert="INSERT INTO rating (user_id,product_id,rating_number,ip)values('$user_id','$product_id','$rating','$ip') ";
			$qry=mysqli_query($con,$insert);
			if($qry){
				//echo "okok";
			?>
				<script type='text/javascript'>

			/*alert('Thanks for rating this product');*/
			window.location='<?php echo $url;?>' ;
				</script>
			<?php }
?>
