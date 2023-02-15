<?php 
   ?>
<?php get_header( 'shop' ); ?>
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
   <?php get_template_part( 'templates-parts/header/site-nav' ); ?>
</header>
<div class="container-fluid wrapper">
   <div class="container" data-aos="zoom-in" data-aos-duration="3000">
      <div class="scrolling-limit">
        <div class="scrolling">
            <h3><?php echo("Ventes des pièces de rechange") ?></h3>
        </div>
      </div>
      <div class="scrolling-inverse">
        <div class="inverse">
         <span>pour matériel roulant</span>
        </div>
      </div>
      
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
</div>

<?php get_template_part( 'templates-parts/fixed-sociaux/shares' ); ?>

<div class="container product-top">
   <div class="row">
      <div class="col-md-3 col-sm-3 slik-int" data-aos="fade-up" data-aos-duration="1500">
         <a href="<?php echo site_url('/piece-de-rechange'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit1.png" class="img-product"> 
            <div class="overlay">
               <div class="title">Matériel<br> roulant</div>
               <span>voir tout les produits</span>
            </div>
         </a>
      </div>
      <div class="col-md-3 col-sm-3 slik-int" data-aos="zoom-in" data-aos-duration="1500">
         <a href="<?php echo site_url('/produit-informatique'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit1.png" class="img-product"> 
            <div class="overlay">
               <div class="title">Informatique</div>
               <span>voir tout les produits</span>
            </div>
         </a>
      </div>
      <div class="col-md-3 col-sm-3 slik-int" data-aos="zoom-in" data-aos-duration="3000">
         <a href="<?php echo site_url('/mobilier-du-bureau'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit2.png" class="img-product">  
            <div class="overlay">
               <div class="title">Mobilier<br>de bureaux</div>
               <span>voir tout les produits</span>
            </div>
         </a>
      </div>
      <div class="col-md-3 col-sm-3 slik-int" data-aos="zoom-in" data-aos-duration="3000">
         <a href="<?php echo site_url('/quincaillerie-generale'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit3.png" class="img-product"> 
            <div class="overlay">
               <div class="title">Quincaillerie</div>
               <span>voir tout les produits</span>
            </div>
         </a>
      </div>
   </div>
</div>

<!-- Start templates parts -->
<?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>
<?php get_template_part( 'templates-parts/product/product-list' ); ?>
<?php get_template_part( 'templates-parts/product/product-info' ); ?>
<?php get_template_part( 'templates-parts/product/mobilier' ); ?>
<?php get_template_part( 'templates-parts/product/quincaillerie' ); ?>

<!-- end list product to categorie  -->
<div class="container-fluid clsbanner2">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-xs-6 col-lg-8 col-sm-8" data-aos="fade-right" data-aos-duration="2000">
            <div class="left-auth">
               <span class="nou-authen">
               <?php echo("PRODUITS AUTHENTIQUES ET DE GRANDE MARQUE") ?>
               </span>
               <p>Groupe T-SHIBAM fournit exclusivement des produits authentiques des constructeurs leaders mondiaux.</p>
            </div>
         </div>
         <div class="col-md-4 col-xs-4 col-xs-4 col-lg-4 col-sm-4" data-aos="fade-left" data-aos-duration="2000">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner2.png" class="banner-2">
         </div>
      </div>
   </div>
</div>
<?php get_footer() ?>