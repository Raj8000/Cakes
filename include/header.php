<?php error_reporting(0); ?>

<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<?php $page=$_GET['page'];?>
						<li <?php if($page=='myaccount'){ echo "class='active'";} ?> ><a href="index.php?page=myaccount">My Account</a></li>
						<!-- <li <?php if($page=='checkout'){ echo "class='active'";} ?>><a href="index.php?page=checkout">Checkout</a></li> -->
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
					<!--	<p><span class="cart"> </span>Cart<label>$5256</label></p>-->
				</div>
				<div class="top-header-right">
					<ul>
						<li>
							<form method="POST" action="index.php?page=allproducts">
								<input type="text" name="search_string">
								<input type="submit" value="" name="search" />
							</form>
							<?php/*
								if(isset($_POST['search']))
								{
									$search_string=$_POST['search_string'];
									echo $select="SELECT * FROM product WHERE name like '%".$search_string."%'";
									
									$query=mysqli_query($con,$select);

									$_POST['search_string'];
									
								}*/
							?>
						</li>
						<?php
							if($_SESSION['user_id']!='')
							{
							?>
							<li <?php if($page=='logout'){ echo "class='active'";} ?>><a href="index.php?page=logout">Logout</a></li>
							<?php
							}
							else 
							{
							?>
							<li <?php if($page=='login'){ echo "class='active'";} ?>><a href="index.php?page=login">Login</a></li>
						<?php
							}
							?>
						<li <?php if($page=='register'){ echo "class='active'";} ?>><a href="index.php?page=register">Register</a></li>
					</ul>

				</div>
				<div class="clearfix"><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);}?></div>
			</div>

		</div>
<?php 
	
if($_SESSION['user_id']!='') 
	{
?>
<div style="float:right";>
					
					<!-- <img src="img/avatar.jpg" alt="avatar"> -->

				<div class="detail-pro">Welcome,
					<?php 

						$select="SELECT * FROM `user_reg` WHERE email='".$_SESSION['email']."' ";
						$query=mysqli_query($con,$select);
						$result=mysqli_fetch_array($query);
						echo $result['first_name'];
					?>
					<img class="img-thumbnail" src="admin_theme/img/<?php echo $result['img'];?>" height="70px" width="70px">
		 		</div>

</div>
<?php }?>
