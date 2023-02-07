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
           <?php echo do_shortcode('[products limit= "6" columns= "3" short_description="show" order="DESC" category="informatique" ]') ?> 
      </div>
	
	<!-- pagination product -->
	<?php get_template_part( 'templates-parts/pagination/pagination-product' ); ?>
	<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>

</div>
</div>

 <?php get_footer() ?>