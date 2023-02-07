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
	
	<div class="container container-filter" data-aos="fade-up" data-aos-duration="1500">
		<div class="top-categorie">
			<span>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/filter.png" class="img-filter">
				Filtre
			</span>
		</div>
		<div class="row filter_show">
			<div class="col-md-4">
				 <?php echo do_shortcode('[searchandfilter id="test"]') ?>
			</div>
			<div class="col-md-4">
				 <?php echo do_shortcode('[searchandfilter id="form_test"]') ?>
			</div>
			<div class="col-md-4">
				<?php echo do_shortcode('[searchandfilter id="attribut_select"]'); ?>
			</div>
			
		</div>
	</div>

	<div class="col-piece" data-aos="fade-up" data-aos-duration="3000">
        <?php echo do_shortcode('[products limit= "6" columns= "3" short_description="show" order="DESC" category="quincaillerie" ]') ?> 
   </div>
		

	<!-- pagination product -->
	<?php get_template_part( 'templates-parts/pagination/pagination-product' ); ?>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>


</div>

 <?php get_footer() ?>