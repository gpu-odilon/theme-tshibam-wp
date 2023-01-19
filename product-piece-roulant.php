<?php 
/*
Template name: piece roulant
*/
 ?>

<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>

<div class="container-fluid bg-roule">
	<div>
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-detail.png" class="img-banner-mob">
	</div>
</div>

<div class="container-fluid bg-gradiant">
	<!-- start slick logo -->
<div class="container container-filter filter-bg">
	<div class="before-page-piece">
		 <div class="container-slick-mobilier">
		 	<div class="car-slicker">
		 		<div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/boss.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/elf-logo.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/wabco-logo.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mahle-logo.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/boss.png" class="car-logo">
	            </div>
	            <div>
	                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/narva-logo.png" class="car-logo">
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
				    <li class="breadcrumb-item active" aria-current="page"> pièces de rechange pour matériel roulant</li>
				  </ol>
				</nav>
			</div>
			<h3>pièces de rechange pour matériel roulant</h3>
	</div>

	<?php get_template_part( 'templates-parts/filtre/filter' ); ?>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom2.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom2.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom1.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/moteur.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/moteur.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bat.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bat.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom1.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bat.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bat.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bougie.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bougie.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel1.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel2.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel2.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel3.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/materiel3.png" class="product-name">
                    </div> 
				</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mob6.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mob6.png" class="product-name">
                    </div> 
				</a>
		</div>
		<div class="col-md-4 col-piece">
			<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bougie.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p><br>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bougie.png" class="product-name">
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