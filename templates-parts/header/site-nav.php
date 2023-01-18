<?php
/**
 * Displays the site navigation and logos
 * @since T-shibam 1.0
 */

?>
<body>
    <div class="container">
      
      <nav class="navbar">
        <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div>

          <ul class="menu-items">
            
            <li>
                <a href="#">
                    <?php wp_nav_menu(array( 'theme_location' => 'menu_principal'  )) ?>
                </a>
            </li>
            
          </ul>

          <h1 class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php
                  $custom_logo_id = get_theme_mod('custom_logo');
                  $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                  ?>
                <img class="img-logo"  id="myLogo" src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
          </h1>

        </div>
      </nav>
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

    
