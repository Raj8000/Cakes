<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
<?php 
    $user_id=$_SESSION['user_id'];
    
   $select="SELECT * FROM shipping_detail WHERE user_id='".$user_id."' AND status='pandding' order by shipping_id DESC ";
   $qry=mysqli_query($con,$select);
   $row=mysqli_fetch_assoc($qry);

    $select1="SELECT * FROM user_reg WHERE user_id='".$user_id."' ";
   $qry1=mysqli_query($con,$select1);
   $row1=mysqli_fetch_assoc($qry1);


     $select2="SELECT * FROM cart WHERE order_id='".$row['order_id']."' AND user_id='".$user_id."' ";
   $qry2=mysqli_query($con,$select2);
   $row2=mysqli_fetch_assoc($qry2);

    
     $select3="SELECT * FROM `product` WHERE  `product_id`='".$row2['product_id']."' ";
   $qry3=mysqli_query($con,$select3);
   $row3=mysqli_fetch_assoc($qry3);

       $select4="SELECT * FROM `order` WHERE  order_id='".$row['order_id']."' ";
   $qry4=mysqli_query($con,$select4);
   $row4=mysqli_fetch_assoc($qry4);
  /// echo "<pre>"; echo $row4['cust_id'];
       $select5="SELECT * FROM `customization` WHERE  cust_id='".$row4['cust_id']."' ";
   $qry5=mysqli_query($con,$select5);
   $row5=mysqli_fetch_assoc($qry5);




  ?>
<div id="content" class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order  </h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo $row1['first_name'].' '.$row1['last_name'];?><br>
    					<?php echo $row1['address'];?><br>
    					
    					<?php echo $row1['mobile_number'];?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					<?php echo $row['first_name'].' '.$row['last_name'];?><br>
                        <?php echo $row['s_address'];?><br>
                        <?php echo $row['s_pincode'];?><br>
    					<?php echo $row['contact'];?><br>
    					<?php echo $row['date'];?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<!-- <div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Visa ending **** 4242<br>
    					jsmith@email.com
    				</address>
    			</div> -->
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					   <?php echo $row['date'];?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td><strong>Cake Weight</strong></td>
        							<td><strong>Cake Print Name</strong></td>
        							<!-- <td class="text-center"><strong>Price</strong></td> -->
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
                                    <td> <?php echo $row3['name'];?></td>

                                    <?php $sub_weight=$row2['weight']*250 ;?>
                                    <td > <?php echo $sub_weight ;?> gms.</td>
    								<td > <?php echo $row5['text'];?></td>
    								<!-- <td class="text-center"><?php echo $row2['price'];?></td> -->
    								<td class="text-center"><?php echo $row2['quantity'];?></td>
    								<td class="text-right">₹ <?php echo $row5['total_price'];?></td>
                                           
                                    <?php 
                                     /*$check=$row5['coupan_status'];
                                        if($check=='yes')

                                        {?>
                                            <td class="text-right">Rs.(<?php echo $row5['total_price'];?>)</td>
                                           
                                        <?php }
                                        else
                                        {?>
                                           <td class="text-right">Rs.(<?php echo $row2['amount'];?>)</td>
                                       <?php }*/ ?>

                                    
    							</tr>
                               <!--  <tr>
        							<td>BS-400</td>
    								<td class="text-center">$20.00</td>
    								<td class="text-center">3</td>
    								<td class="text-right">$60.00</td>
    							</tr>
                                <tr>
            						<td>BS-1000</td>
    								<td class="text-center">$600.00</td>
    								<td class="text-center">1</td>
    								<td class="text-right">$600.00</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">$670.99</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">$15</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">$685.99</td>
    							</tr> -->
    						</tbody>
    					</table>
                         <!-- <a href="index.php?page=Payment" style="float: right;">
                             

                         </a> -->
    <form method="post" name="paypal_form" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
    <input type="hidden" value="dhaval.business@gmail.com" name="business">
    <input type="hidden" name="rm" value="2"/>
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" value="http://localhost/cakes/index.php?page=thanks" id="edit-return" name="return">
    <input type="hidden" name="method" value="Paypal"/>
    <input type="hidden" value="http://localhost/cakes/index.php?page=thanks&email=notify" name="notify_url">
    <input type="hidden" value="http://localhost/cakes/index.php?page=thanks&order=cancel" name="cancel_return"> 
    <input type="hidden" value="USD" id="edit-currency-code" name="currency_code">
    <input type="hidden" name="custom" value="<?php echo $_SESSION['order_id']; ?>">
    <input type="hidden" value="<?php echo nl2br($row['address']); ?>"  name="address1">
    <input type="hidden" value="<?php echo $rwFetchUser['City'];  ?>" name="city">
    <input type="hidden" value="<?php echo $rwFetchUser['State']; ?>"  name="State">
    <input type="hidden" value="<?php echo $row['email']; ?>"  name="email">
    <input type="hidden" value="<?php echo $row['first_name']; ?>"  name="first_name">
    <input type="hidden" value="<?php echo $row['last_name']; ?>" name="last_name">
    <input type="hidden" value="<?php echo $row['contact']; ?>"  name="phone">
    <input type="hidden" value="<?php echo number_format($row2['amount']/66.55,2);?>" name="amount">
    <input type="hidden" value="Order <?php echo  $orderRecord['order_id']; ?> at DEMO SHOPPE" name="item_name">
    <span class="button active">    
    <input type="submit" class="form-control" name="confirm_order"  value="Confirm Order">
    
    </span>
</form>
    				</div>
    			</div>
    		</div>

    	</div>
    </div>
</div>

<div id="editor"></div>

<!-- Button -->
<button id="cmd">Generate PDF</button>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Javascript -->

<script src="js/jspdf.min.js"></script>
<script src="js/custom-js-pdf.js"></script>