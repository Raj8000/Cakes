<div class="main-menu">
			<div class="container-fluid">
			<div class="head-nav">
					<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
				<span class="menu"> </span>
				<ul>
					<?php
						$page=$_GET['page'];
					?>
					<li <?php if($page==""){echo "class='active'";}?>><a href="index.php">Home</a></li>
					<li <?php if($page=="products"){echo "class='active'";}?>><a href="index.php?page=allproducts">products</a>
						<ul class="dropdown">
							<?php
								$select="SELECT * FROM `category`";
								$query=mysqli_query($con,$select);
								while($row=mysqli_fetch_array($query))
								{
								?>
								<li><a href="index.php?page=products&id=<?php echo $row['cat_id'];?>"><?php echo $row['name'];?></a></li>
								<?php } ?>
							
						</ul>
					</li>
					<li <?php if($page=="allproducts"){echo "class='active'";}?>><a href="index.php?page=allproducts">All products</a>

					<li <?php if($page=="about"){echo "class='active'";}?>><a href="index.php?page=about">about</a></li>
					<li <?php if($page=="contact"){echo "class='active'";}?>><a href="index.php?page=contact">Contact</a></li>
					<li <?php if($page=="feedback"){echo "class='active'";}?>><a href="index.php?page=feedback">Feedback</a></li>					
					<li <?php if($page=="cart_list"){echo "class='active'";}?>><a href="index.php?page=cart_list">Cart List</a></li>					
					
					<div class="clearfix"> </div>
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
			</div>
		</div>
	