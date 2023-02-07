<?php
// Gestion des images mises en avant
add_theme_support("post-thumbnails");

// Gestion des menus
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );

//  styles and script themes T-shibam
function charger_style_script() {
wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), false );
wp_enqueue_style( 'style');

wp_register_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false );
wp_enqueue_style( 'responsive');

wp_register_style( 'mobilier', get_template_directory_uri() . '/assets/css/style-mob.css', array('style'), false );
wp_enqueue_style( 'mobilier');

wp_register_style( 'aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), false );
wp_enqueue_style( 'aos-style');

wp_register_script( 'script-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), false );
wp_enqueue_style( 'script-aos');

wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery-slick'), false );

wp_enqueue_script( 'jquery-zomm', get_template_directory_uri() . '/assets/js/jquery.exzoom.js', array(), false );

wp_register_style( 'style-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), false );
wp_enqueue_style( 'style-bootstrap');

wp_register_script( 'script-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), false );
wp_enqueue_style( 'script-bootstrap');

wp_enqueue_style( 'style-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), false );

wp_enqueue_style( 'zoom-css', get_template_directory_uri() . '/assets/css/jquery.exzoom.css', array(), false );

wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery-slick'), false );

wp_enqueue_script('jquery-slick','https://code.jquery.com/jquery-3.6.1.js',array(),'6.0.3',false);

}

add_action('wp_enqueue_scripts', 'charger_style_script');



//  Add support for core custom logo 
$logo_width  = 300;
$logo_height = 100;
add_theme_support(
    'custom-logo',
    array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

// add support themes plugins woocommerce 
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}

add_filter('woocommerce_default_catalog_orderby', 'changer_orderby');
function changer_orderby( $sort_by ) {
    return 'date';
}  

add_filter( 'ws247_piew_small_gallery_limit', 'your_new_piew_small_gallery_limit');
function your_new_piew_small_gallery_limit(){
    $new_limit = 3;
    return $new_limit;
}

//add support function php pagination product custom
the_posts_pagination( array(
'mid_size' => 7,
'prev_text' => __( 'Previous Page', 'textdomain' ),
'next_text' => __( 'Next Page', 'textdomain' ),
) );

// add support woocommerce display shurt description courte produit code promo
function  tutsplus_excerpt_in_product_archives ()  {
     
    echo "<div class='descr_excerp'>".wp_trim_words (  get_the_excerpt (),  10  )."</div>";
         
}
add_action (  'woocommerce_after_shop_loop_item_title' ,  'tutsplus_excerpt_in_product_archives' ,  40  );

// function display read more product code promo
add_action('woocommerce_after_shop_loop_item_title','read_more');
function read_more() {
    global $product;
    if ($product){
        $url = esc_url($product->get_permalink() );
        echo '<a rel="nofollow" href="' .$url .'" class="read_more modal-toggle">Voir plus de détails ></a>'
        ;
    }
}

 function print_menu_shortcode($atts, $content = null) {
extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
return wp_nav_menu( array( 'menu' => $name, 'menu_class' => $class, 'echo' => false ) );
}

add_shortcode('menu', 'print_menu_shortcode');