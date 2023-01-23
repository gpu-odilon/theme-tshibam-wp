<?php
/**
 * Displays the site navigation and logos
 * @since T-shibam 1.0
 */

?>
<body>
    <div class="container" id="myHeader">
      
     <header>
       <nav id="navigation1" class="navigation">
        <div class="nav-header logo">
          <a class="nav-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php
                  $custom_logo_id = get_theme_mod('custom_logo');
                  $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                  ?>
                <img class="img-logo"  id="myLogo" src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
          </a>
          <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
          <ul class="nav-menu align-to-right">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>">ACCUEIL</a>
            </li>
            <li>
              <a href="#">Produits</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="<?php echo esc_url(home_url('/piece-de-rechange')); ?>">PIèCES  rechange pour matériel
roulant </a></li>
                    <p>Nos pièces détachées couvrent les marques de poids lourds et pour remorques les plus répandues du marché : DAF, Iveco, Man, Mercedes, Renault, Scania.
Elles sont d'origine, homologuées et respectant les standards de qualité et sécurité.
Elles sont d’origine, homologuées et respectant les 
standards de qualité et de sécurité.
</p>
                   <div>
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/meganav1.png" class="nav-megaBtm">
                   </div>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="<?php echo esc_url(home_url('/quincaillerie-generale')); ?>">Quincaillerie</a></li>
                    <p>Groupe T-Shibam propose une gamme de panneaux solaires photovoltaïques, spécialement sélectionnés par des experts et respectant des critères d'exigence.
Nous vous avons sélectionné uniquement du matériel fabriqué par des marques leader, fiables et proposant les meilleurs garanties du marché solaire.</p>
                    <div>
                      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/meganav2.png" class="nav-megaBtm">
                    </div>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="<?php echo esc_url(home_url('/produit-informatique')); ?>">Informatique</a></li>
                    <p>Le Groupe T-Shibam, représentant agréé, propose du matériel informatique de grande marque (HP, Asus, Dell Samsung, Fujitsu) en fonction de vos besoins spécifiques et propose également une large sélection de smartphones et tablettes.</p>
                    <div>
                      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/meganav3.png" class="nav-megaBtm">
                    </div>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="<?php echo esc_url(home_url('/mobilier-du-bureau')); ?>">Mobilier de bureau</a></li>
                    <p>Vous trouverez une large gamme de fournitures pour votre bureau à des tarifs très intéressants chez Groupe T-Shibam.</p>
                   <div>
                      <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/meganav4.png" class="nav-megaBtm">
                    </div>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/a-propos')); ?>">
                <?php echo("a propos") ?>
              </a>
            </li>
          </ul>
        </div>
      </nav>
     </header>

    </div>
    <div class="search-wrapper">
          <div class="container">
              <div class="row cat1">
                  <div class="col-md-3 cls1">
                      <span>
                          <?php echo "CATEGORIES"; ?>
                      </span>
                  </div>
                  <div class="col-md-9 cls2">
                       <form>
                           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Recherche produit" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/search-icon.png">
                                    </button>
                                </span>
                            </div>
                        </div>
                       </form>
                  </div>
              </div>
          </div>
    </div>
</body>

    
