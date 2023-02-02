<?php 
/*
Template name: Product Informatique
*/
 ?>

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>
<div class="container-fluid">
	<div class="bacgrd-info">
			
	</div>
</div>

<div class="container-fluid bg-gradiant">
	<!-- start slick logo -->
<div class="container container-filter filter-bg">
	<div class="before-page-info">
		 <div class="container-slick-mobilier">
		 	<div class="car-slicker">
		 		<div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dell.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/samsung.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/HP.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lenovo.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/samsung.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/HP.png" class="car-logo">
	            </div>
		 	</div>
		 </div>
	</div>

	<div class="container">
		<div class="row">
			<?php echo do_shortcode( '[searchandfilter id="form1"]' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php
                    global $paged;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$wp_query = new WP_Query();
                     $wp_query->query('posts_per_page=4&post_type=product&product_cat=informatique'.'&paged='.$paged); 
                     ?>
                     
                      <?php if ( $wp_query->have_posts() ) : ?>
                     	 <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>	


                  <div class="col-md-4 col-piece">
                     <a href="<?php the_permalink(); ?>">
                        <div class="borderred" data-aos="fade-up" data-aos-duration="1500">
                           <div class="img-product-cat">
                              <?php the_post_thumbnail(); ?>
                           </div>
                           <div class="desc-product">
                              <?php the_title( '<h2 class="product_title entry-title">', '</h2>' ); ?>
                              <p>
                                 <?php 
                                    $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
                                    ?>
                              <div class="woocommerce-product-details__short-description">
                                 <?php echo $short_description; // WPCS: XSS ok. ?>
                              </div>
                              </p><br>
                              <span>Voir plus de détails ></span>
                           </div>
                           <div class="hoverlays">
		                         <?php the_post_thumbnail(); ?>
		                    </div>
                        </div>
                     </a>
                  </div>

                  <?php endwhile; ?>
				    	<?php wp_reset_postdata(); ?>
						<?php endif; ?>

               </div>
            </div>
         </div>
	</div>
	
	<!-- pagination product -->
	<?php get_template_part( 'templates-parts/pagination/pagination-product' ); ?>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>

</div>
</div>

 <?php get_footer() ?>