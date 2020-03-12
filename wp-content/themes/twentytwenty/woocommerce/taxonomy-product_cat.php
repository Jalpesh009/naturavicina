<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_get_template( 'archive-product.php' );
?>
<div id="pianta" class="fixed"> <img src="https://orto.naturavicina.it/themes/default-bootstrap/img/pianta.png" alt=""><div class="img-tree" style="height: 0%;"></div></div>
<script>
function sumvalues(){
	var sum = 0;        
	jQuery(".txtbox").each(function() {          
		if (!isNaN(this.value) && this.value.length != 0) {
		sum += parseFloat(this.value);
		}    
	});
	jQuery(".img-tree").height(sum.toFixed(0)+'%');
	//alert(sum.toFixed(0));
	return "valid input"
}
</script>