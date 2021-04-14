<form method="post" name="paypal_form" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
    <input type="hidden" value="dhaval.business@gmail.com" name="business">
    <input type="hidden" name="rm" value="2"/>
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" value="index.php?page=thanks" id="edit-return" name="return">
    <input type="hidden" name="method" value="Paypal"/>
    <input type="hidden" value="index.php?page=thanks&email=notify" name="notify_url">
    <input type="hidden" value="index.php?page=thanks&order=cancel" name="cancel_return"> 
    <input type="hidden" value="USD" id="edit-currency-code" name="currency_code">
     <input type="hidden" name="custom" value="<?php echo $_SESSION['order_id']; ?>">
    <input type="hidden" value="<?php echo nl2br($rwFetchUser['Address']); ?>"  name="address1">
    <input type="hidden" value="<?php echo $rwFetchUser['City'];  ?>" name="city">
    <input type="hidden" value="<?php echo $rwFetchUser['State']; ?>"  name="State">
    <input type="hidden" value="<?php echo $rwFetchUser['Email']; ?>"  name="email">
    <input type="hidden" value="<?php echo $rwFetchUser['First_Name']; ?>"  name="first_name">
    <input type="hidden" value="<?php echo $rwFetchUser['Last_Name']; ?>" name="last_name">
    <input type="hidden" value="<?php echo $rwFetchUser['Mobile_No']; ?>"  name="phone">
    <input type="hidden" value="<?php echo number_format(12000/66.55,2);?>" name="amount">
    <input type="hidden" value="Order <?php echo  $orderRecord['order_id']; ?> at DEMO SHOPPE" name="item_name">
    <span class="button active">    
    <input type="submit" name="confirm_order"  value="Confirm Order">
    </span>
</form>