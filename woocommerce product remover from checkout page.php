<?php
/*
Plugin Name:  Woocommerce Product Remover From Checkout Page
Plugin URI:   http://marketingautomationexpert24.com/
Description:     Woocommerce Product Remover From Checkout plugin will your customer/visitors to delete product/products from the checkout page
Version:         1.0
Author:         Ratul Bin Hasan
License:         GPL-2.0+ */


    // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


add_action('woocommerce_after_checkout_billing_form','wooprorem_hellortl');
function wooprorem_hellortl(){ ?>

<style>
.woocommerce-checkout-review-order-table{
display:none;
}

#order_review_heading{
display:none;
}
</style> 
<br>
<?php
echo '<h2> YOUR ORDER </h2> ';
echo do_shortcode( ' [woocommerce_cart] ' );
}
