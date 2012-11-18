<?php
require_once("payread_post_api.php");
require_once("../../../wp-load.php");
/**
 * settle.php
 * Is called by Payer right after a settlement has been performed.
 * Payer will add two parameters:
 * payread_payment_id=XXXXXXXX
 * md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * Example:
 * http://www.myshop.com/settle.php?payread_payment_id=XXXXXXXX&md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * If you have any OrderID enclosed it will look similar:
 * http://www.myshop.com/settle.php?orderid=S1234567&payread_payment_id=XXXXXXXX&md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * Payer will only add to its parameters and not remove any.
 * When you receive the signal from the settle, you can reserve goods/services in your shop.
 * Should always print "TRUE" if it works.
 */	
	

die ("TRUE");
$postAPI=new payread_post_api();

wp_mail('christian@bolstad.se','betalning',print_r($_GET,1));
if($postAPI->is_valid_ip())
	//Checks if the IP address comes from Payer else return false!
	 {
	 	$order = new WC_Order( $_GET['myOrderId'] );
	 	$order->add_order_note( __('Payerbetalningmottagen - betalningsid:' . $_GET['payread_payment_id'], 'woothemes') );
	 	$order->payment_complete();
        die("TRUE");
     }

die("FALSE");
?>
