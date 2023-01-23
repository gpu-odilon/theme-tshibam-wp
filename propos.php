<?php 
/*
	Template name: A propos
*/
 ?>


	<?php get_header() ?>
            
    <?php get_template_part( 'templates-parts/header/site-header' ); ?>

    <div class="container-fluid wrapper-propos">
    		<div class="container" data-aos="zoom-in" data-aos-duration="3000">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo site_url(''); ?>">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> a propos</li>
                      </ol>
                    </nav>
                </div>
                <h3>a propos</h3>
            </div>
    </div>

    <div class="container qsn">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
                <div class="left-propos">
                    <h3><?php echo("QUI SOMMES NOUS ?") ?></h3>
                    <p>Depuis plus de 5 ans, Groupe T-Shibam, votre partenaire des pros à Madagascar, commercialise des pièces détachées pour poids lourd et engins.<br>

A part la vente de pièces de rechange pour engins et poids lourd, il accompagne également les professionnels du BTP grâce à la distribution de quincaillerie générale, matériels d’électricité, revêtement mural/sol et sanitaire et fournit des produits aux entreprises, des fournitures de bureau aux équipements informatiques et aménagements.

</p>
                </div>
            </div>
            <div class="col-md-6 qsn-img" data-aos="fade-left" data-aos-duration="3000">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/left-propos.png" class="img-left-qsn">
            </div>
        </div>
        <div class="btm-qsn" data-aos="fade-right" data-aos-duration="3000">
            <p>Tous nos produits en stock sont livrables en 48 heures après commande sur Antananarivo et pour les produits qui ne sont pas disponibles dans notre stock, nous comptons sur la réactivité de nos fournisseurs pour vous les livrer rapidement.</p>
        </div>
    </div>

    <div class="container-fluid slider-qsn" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="car-qsn">
                <div class="qsn-carouseul">

                    <div>
                        <h3><?php echo("QUINCAILLERIE GÉNÉRALE") ?></h3>
                        <p>Depuis des années, nous accompagnons tous les bâtisseurs, en distribuant les plus grandes marques du bâtiment, dans le respect des normes et des réglementations.</p>
                        <a href="<?php echo esc_url(home_url('/quincaillerie-generale')); ?>">voir les produits >
                            
                        </a>
                    </div>
                    <div class="bef_aft">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/slick-qsn.png" class="img-qsn-car">
                    </div>

                    <div>
                        <h3><?php echo("Pièces de rechange pour matériel roulant") ?></h3>
                        <p>Depuis des années, nous accompagnons tous les bâtisseurs, en distribuant les plus grandes marques du bâtiment, dans le respect des normes et des réglementations.</p>
                        <a href="<?php echo esc_url(home_url('/piece-de-rechange')); ?>">voir les produits ></a>
                    </div>
                    <div class="bef_aft">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pneu-absolu.png" class="img-qsn-car">
                    </div>

                     <div>
                        <h3><?php echo("Informatique") ?></h3>
                        <p>Depuis des années, nous accompagnons tous les bâtisseurs, en distribuant les plus grandes marques du bâtiment, dans le respect des normes et des réglementations.</p>
                        <a href="<?php echo esc_url(home_url('/produit-informatique')); ?>">voir les produits ></a>
                    </div>
                    <div class="bef_aft">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/info10.png" class="img-qsn-car">
                    </div>

                    <div>
                        <h3><?php echo("Quincaillerie") ?></h3>
                        <p>Depuis des années, nous accompagnons tous les bâtisseurs, en distribuant les plus grandes marques du bâtiment, dans le respect des normes et des réglementations.</p>
                        <a href="<?php echo esc_url(home_url('/quincaillerie-generale')); ?>">voir les produits ></a>
                    </div>
                    <div class="bef_aft">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/c2.png" class="img-qsn-car">
                    </div>

                    <div>
                        <h3><?php echo("Mobilier de bureau") ?></h3>
                        <p>Depuis des années, nous accompagnons tous les bâtisseurs, en distribuant les plus grandes marques du bâtiment, dans le respect des normes et des réglementations.</p>
                        <a href="<?php echo esc_url(home_url('/mobilier-du-bureau')); ?>">voir les produits ></a>
                    </div>
                    <div class="bef_aft">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bureau3.png" class="img-qsn-car">
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php get_template_part( 'templates-parts/snippe/snippe-our' ); ?>
            
    <?php get_footer() ?>

 