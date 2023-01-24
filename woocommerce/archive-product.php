<?php 


 ?>

<?php get_header( 'shop' ); ?>


<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'templates-parts/header/site-nav' ); ?>

</header>

<div class="container-fluid wrapper">
        <div class="container" data-aos="zoom-in" data-aos-duration="3000">
            <h3><?php echo("Ventes des pièces de rechange") ?></h3>
            <span>pour matériel roulant</span>
        </div>

        <!--   start carouseul images logos  -->
        <div>
           <div class="container-slicker slicker">
                <div class="carousel">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/boss.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/elf-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/wabco-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/max-part-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/narva-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/Osram-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/wabco-logo.png" class="slic-logos">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mahle-logo.png" class="slic-logos">
                    </div>
                     <div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/narva-logo.png" class="slic-logos">
                    </div>
                </div>
            </div>
        </div>
        <!--   ++++++++++++++++++++++++++++  -->
        
    </div>


<div class="container">

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
			<div class="col-md-4 col-sm-4 col-lg-4 col-sm-4 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product">
						<div class="img-product-cat">
							 <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-name">
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
			<div class="col-md-4 col-sm-4 col-lg-4 col-sm-4 col-piece">
				<a href="#">
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
			<div class="col-md-4 col-sm-4 col-lg-4 col-sm-4 col-piece">
				<a href="#">
					<div class="content-product">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom2.png" class="img-piec">
						</div>
						<div class="desc-product">
							<h2>Lorem ipsum dolor</h2>
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
		</div>
		
	</div>

	<div id="tab-2" class="tab-content">
		
	</div>

	<div id="tab-3" class="tab-content">
		
		
	</div>

</div>  <!-- end list product to categorie  -->

 <?php get_footer() ?>