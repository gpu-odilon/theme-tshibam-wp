
<?php 
/*
    Template name: index
*/
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name') ?></title>
    </head>
    <body>

        <?php get_header() ?>
        <?php get_template_part( 'templates-parts/header/site-header' ); ?>

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

    <!--   start section product -->
    <div class="container product-top">
            <div class="row">
                <div class="col-md-4 col-sm-4 slik-int">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit1.png" class="img-product"> 
                        <div class="overlay">
                            <div class="title">Informatique</div>
                            <span>voir tout les produits</span>
                        </div> 
                    </a>
                </div>
                 <div class="col-md-4 col-sm-4 slik-int">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit2.png" class="img-product">  
                        <div class="overlay">
                            <div class="title">Mobilier<br>de bureaux</div>
                            <span>voir tout les produits</span>
                        </div> 
                    </a>
                </div>
                 <div class="col-md-4 col-sm-4 slik-int">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/produit3.png" class="img-product"> 
                        <div class="overlay">
                            <div class="title">Mobilier<br>de bureaux</div>
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
        <?php get_footer() ?>
    </body>
   
        
  
</html>