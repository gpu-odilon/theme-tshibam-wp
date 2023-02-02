<?php 
/*
	Template name: Single product
*/
?>

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>
<?php get_template_part( 'templates-parts/breadcrumb/nav-breadcrumb' ); ?>

<div class="container-fluid bg-gradiant">
	<div class="container container-filter filter-bg mobile-wrappper">
		
		<?php get_template_part( 'templates-parts/filtre/filter' ); ?>
		
		<div class="row clswrap">	<!--  fiche produit -->
			<div class="col-md-6">
				<span class="img-fic">
					<?php the_post_thumbnail(); ?>
				</span>
			</div>
			<div class="col-md-6">
				<div class="contenu-produits">
					<h3>
						<?php the_title( '<h2 class="product_title entry-title">', '</h2>' ); ?>
					</h3>
					<span>Marque : 
							<?php if( get_field('marque') ): ?>
							<?php the_field('marque'); ?>
							<?php endif; ?></span>
					<div class="titre-description">Description du produit</div>
					<p>
						<?php the_content() ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row">    <!--  description technique  -->
			<div class="desc-tec">
				<h3><?php echo("Description du  technique") ?></h3>
				<table class="table table-bordered" width="100%">
					<tbody>
				      <tr>
				        <td class="td-bg">Fabricant</td>
				        <td>
				        	<?php if( get_field('fabricant') ): ?>
							<?php the_field('fabricant'); ?>
							<?php endif; ?>
				        </td>
				      </tr>
				      <tr>
				        <td class="td-bg">Marque</td>
				        <td>
				        	<?php if( get_field('marque') ): ?>
							<?php the_field('marque'); ?>
							<?php endif; ?>
				        </td>
				      </tr>
				      <tr>
				        <td class="td-bg">Modèle</td>
				        <td>
				        	<?php if( get_field('modele') ): ?>
							<?php the_field('modele'); ?>
							<?php endif; ?>
				        </td>
				      </tr>
				      <tr>
				        <td class="td-bg">Dimensions du produit (L x l x h)	</td>
				        <td>
				        	<?php if( get_field('dimension_du_produit') ): ?>
							<?php the_field('dimension_du_produit'); ?>
							<?php endif; ?>
				        </td>
				      </tr>
				    </tbody>
				</table>
			</div>
		</div>

		<div class="row wrap-sim-product"> <!-- produit similaires   -->
			<div class="similaire-product" data-aos="fade-left" data-aos-duration="1500">
				<h3><?php echo("produits similaires") ?></h3>
			</div>
		</div>
		<div class="row row-similaire">
			
			<div class="col-piece">
            <div class="content-product">
               <div class="img-product-cat">
                  <?php
                     $query = new WP_Query('posts_per_page=9&post_type=product&product_cat=');
                     
                      if( $query->  have_posts() )	{
                     
                       while ( $query->have_posts() )	{
                     
                        	$query-> the_post();
                       ?>	
                  <div class="col-md-3 col-piece">
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
		
		<div class="all-product">
			<a href="<?php echo site_url(); ?>">
				<?php echo('Voir tout les produits') ?>
			</a>
		</div>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>
	</div>
	
</div>

<?php get_footer() ?>