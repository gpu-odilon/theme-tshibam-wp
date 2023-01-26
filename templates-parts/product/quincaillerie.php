
<!--  modele template quincaillerie -->
<div class="container mobile-wrappper">

	<ul class="tabs-quincaillerie">
    	<span class="titre-onglet">
    			quincaillerie général
    	</span>
		<li class="tab-link current" data-tab="tab-10">Arrivage</li>
		<li class="tab-link" data-tab="tab-11">Promotion</li>
		<li class="tab-link" data-tab="tab-12">Voir tout</li>
	</ul>

	<div id="tab-10" class="tab-content-quincaillerie current">
		<div class="row">
		
			<div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php
                     $query = new WP_Query('posts_per_page=8&post_type=product&product_cat=quincaillerie');
                     
                      if( $query->  have_posts() )	{
                     
                       while ( $query->have_posts() )	{
                     
                        	$query-> the_post();
                       ?>	
                  <div class="col-md-4 col-piece">
                     <a href="<?php echo site_url('/detail-produit'); ?>">
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
			
		</div>
	</div>

	<div id="tab-11" class="tab-content-quincaillerie">
		 <div class="row">
			</div>
		</div>
	</div>

	<div id="tab-12" class="tab-content-quincaillerie">
		 <div class="row">
			
			
		</div>
	
	</div>

</div>