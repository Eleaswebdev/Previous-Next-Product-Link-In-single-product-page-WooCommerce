add_action( 'woocommerce_before_single_product', 'eleas_prev_next_product' );
 
// and if you also want them at the bottom...
add_action( 'woocommerce_after_single_product', 'eleas_prev_next_product' );
 
function eleas_prev_next_product(){
 
echo '<div class="prev_next_buttons">';
 
   // 'product_cat' will make sure to return next/prev from current category
        $previous = next_post_link('%link', '&larr; PREVIOUS', TRUE, ' ', 'product_cat');
   $next = previous_post_link('%link', 'NEXT &rarr;', TRUE, ' ', 'product_cat');
 
   echo $previous;
   echo $next;
    
echo '</div>';
         
}
