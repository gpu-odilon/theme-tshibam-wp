<?php 
/*
Template name: Product mobilier du bureau
*/
 ?>

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>
<div class="container-fluid bg-detail bg-bur">
		<div class="container" data-aos="zoom-in" data-aos-duration="3000">
			<div class="breadcrumb">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item">
				    	<a href="<?php echo site_url(''); ?>">Accueil</a>
				    </li>
				    <li class="breadcrumb-item">
				    	<a href="#">Catégorie</a></li>
				    <li class="breadcrumb-item active" aria-current="page"> mobilier de bureau</li>
				  </ol>
				</nav>
			</div>
			<h3>mobilier de bureau</h3>
	</div>
</div>

<div class="container-fluid filter-bg">
	<!-- start slick logo -->
<div class="container container-filter">
	<div class="before-page-bureau">
		 <div class="container-slick-mobilier">
		 	<div class="car-slicker">
		 		<div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/conforama.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/habitat.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/poltron.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/AMPM.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/zanotta.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/habitat.png" class="car-logo">
	            </div>
		 	</div>
		 </div>
	</div>

	<?php get_template_part( 'templates-parts/filtre/filter' ); ?>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info1.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info2.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info2.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info3.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info3.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info4.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info4.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info5.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info5.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info6.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info6.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info7.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info7.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info2.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info2.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info8.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info8.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info9.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info9.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info3.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info3.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info1.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info5.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info5.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info10.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info10.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info6.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info6.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>

	<!-- pagination product -->
	<?php get_template_part( 'templates-parts/pagination/pagination-product' ); ?>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>

</div>
</div>

 <?php get_footer() ?>