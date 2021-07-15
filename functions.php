<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}



function load_stylesheets(){



    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css',array(),2,'all');
    wp_enqueue_style('styles');

    wp_register_style('hover',get_template_directory_uri() . '/css/hover.css',array(),1,'all');
    wp_enqueue_style('hover');

    wp_register_style('animate',get_template_directory_uri() . '/css/animate.min.css',array(),1,'all');
    wp_enqueue_style('animate');

    wp_register_style('OwlCarousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel');

    wp_register_style('OwlCarousel-theme',get_template_directory_uri() . '/css/owl.theme.default.min.css',array(),1,'all');
    wp_enqueue_style('OwlCarousel-theme');


}
add_action('wp_enqueue_scripts','load_stylesheets');







//load scripts
function addjs()
{

    wp_register_script('j-q-u-er-y',get_template_directory_uri() . '/js/jquery-3.1.0.min.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('OwlCarousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('OwlCarousel');


    wp_register_script('custom',get_template_directory_uri() . '/js/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');


}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

//Register menus
register_nav_menus(
    array(
        'top-menu' => __( 'Top Menu', 'GDC' ),
        'footer-menu' => __('Footer Menu')
    )
);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
