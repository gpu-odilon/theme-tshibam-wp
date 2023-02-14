
<!--Modele page template sous catégorie piece de rechange -->

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>


<div class="container-fluid bg-gradiant">
	<?php get_template_part( 'templates-parts/breadcrumb/nav-breadcrumb' ); ?>
	<!-- start slick logo -->
<div class="container container-filter filter-bg">
	<div class="categories">
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
	
	<div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php

                      if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
                       ?>

                  <div class="col-md-4 col-piece">
                     <a href="<?php the_permalink(); ?>">
                        <div class="borderred">
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
                  <?php   
                     }
                     }
                               wp_reset_query();
                     wp_reset_postdata();
                       ?>
               </div>
         </div>
   </div>

	
	<!-- pagination product -->
	<?php get_template_part( 'templates-parts/pagination/pagination-product' ); ?>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>

</div>
</div>

 <?php get_footer() ?>