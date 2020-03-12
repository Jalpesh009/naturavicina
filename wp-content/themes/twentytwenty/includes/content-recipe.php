<?php
$ingredients = $recipe->ingredients(); 

if( count( $ingredients ) > 0 ):
?>
<div class="ingredients active">
	<h2>Ingredients</h2>
	<ul>
	<?php 
	foreach( $ingredients as $i ) :
		//nicely format any fractions
		//echo "<pre>";
		//print_r($i);
		//$item = str_to_fraction($i['amount']).' '.$i['unit'].' ';
			
		//see if a WC product is linked to this ingredient
		$product_option = get_option('ingredient_'.$i['ingredient_id'].'_product');

		if( isset( $product_option[0] ) ) {
			$product_link = get_permalink( $product_option[0] );
			$item .= '<a href="'.$product_link.'">'.$i['ingredient'].'</a>';
		}
		else
			$item .= $i['ingredient'];

		if( ! empty($i['notes']) ) {
			$item = rtrim($item);
			$item .= ', '.$i['notes'];
		}
		?>
		<li><?php echo $item ?></li>
	<?php endforeach; ?>
	</ul>
</div><!-- .ingredients -->
<?php 
	endif; //any ingredients
?>
