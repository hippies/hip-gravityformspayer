<?php
require_once("payread_post_api.php");
/*
 * auth.php
 * Is called by Payer right after an authorize has been performed.
 * Payer will add two parameters:
 * payread_payment_id=XXXXXXXX
 * md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * Example:
 * http://www.myshop.com/auth.php?payread_payment_id=XXXXXXXX&md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * If you have any OrderID enclosed it will look similar:
 * http://www.myshop.com/auth.php?orderid=S1234567&payread_payment_id=XXXXXXXX&md5hash=F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0F0
 * Payer will only add to its parameters and not remove any.
 * When you receive the signal from the auth, you can reserve goods/services in your shop.
 * Should always print "TRUE" if it works.
 */

$postAPI=new payread_post_api();

if($postAPI->is_valid_ip()){//Checks if the IP address comes from Payer else return false!
        die("TRUE");
    }

die("FALSEZ");
?>
