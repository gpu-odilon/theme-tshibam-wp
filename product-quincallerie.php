<?php 
/*
Template name: Product Quincallerie
*/
 ?>

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>
<div class="container-fluid bg-bur">
		<div>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-cainrie.png" class="img-banner-mob">
		</div>
</div>

<div class="container-fluid bg-gradiant">
	<!-- start slick logo -->
<div class="container container-filter filter-bg">
	<div class="before-page-q1">
		 <div class="container-slick-mobilier">
		 	<div class="car-slicker">
		 		<div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/KS.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/stanley.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/dewalt.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tubesca.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/jobman.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/tubesca.png" class="car-logo">
	            </div>
		 	</div>
		 </div>
	</div>
	<div class="container wrapper-bread">
			<div class="breadcrumb">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item">
				    	<a href="<?php echo site_url(''); ?>">Accueil</a>
				    </li>
				    <li class="breadcrumb-item">
				    	<a href="#">Catégorie</a></li>
				    <li class="breadcrumb-item active" aria-current="page"> quincaillerie générale</li>
				  </ol>
				</nav>
			</div>
			<h3>quincaillerie générale</h3>
	</div>
	<?php get_template_part( 'templates-parts/filtre/filter' ); ?>
	<div class="row">
		<div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php
                  global $paged;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$wp_query = new WP_Query();
                     $wp_query->query('posts_per_page=5&post_type=product&product_cat=quincaillerie'.'&paged='.$paged); 
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
                                 <?php echo $short_description;?>
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