
<!--   breadcrumb themes product  -->
<div class="container-fluid bg-detail">
		<div class="container" data-aos="fade-up" data-aos-duration="1500">
			<div class="breadcrumb">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li>
				    	<?php do_action( 'woocommerce_before_main_content' );?>
				    </li>
				  </ol>
				</nav>
			</div>
			<h3>
				<span class="property-type-badge">
				    <?php   
				        $terms = wp_get_post_terms( get_the_id(), 'product_cat' );
				        $term  = reset($terms);
				        echo $term->name;
				    ?>
				</span>
			</h3>
	</div>
</div>