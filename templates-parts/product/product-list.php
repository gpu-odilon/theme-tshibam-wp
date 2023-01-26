
<?php 

 ?>
 <!--  Modele template page piece de rechange -->
<div class="container mobile-wrappper">
   <ul class="tabs">
      <span class="titre-onglet">
      Pièces de rechange pour matériel roulant
      </span>
      <li class="tab-link current" data-tab="tab-1">Arrivage</li>
      <li class="tab-link" data-tab="tab-2">Promotion</li>
      <li class="tab-link" data-tab="tab-3">Voir tout</li>
   </ul>
   <div id="tab-1" class="tab-content current">
      <div class="row">
         <div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php
                     $query = new WP_Query('posts_per_page=7&post_type=product&product_cat=pieces');
                     
                      if( $query->  have_posts() )	{
                     
                       while ( $query->have_posts() )	{
                     
                        	$query-> the_post();
                       ?>	
                  <div class="col-md-4 col-piece">
                     <a href="<?php the_permalink(); ?> <?php //wc_get_template_part( 'content', 'product' ); ?>">
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
   <div id="tab-2" class="tab-content">
   </div>
   <div id="tab-3" class="tab-content">
   </div>
</div>




