<?php 

// Register Navigation here
function aeon_register_menus(){
        register_nav_menus(array(
            'main-menu'=> esc_html__('Main Menu', 'aeon')
        ));
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'aeon' ),
        ) );
        }
        add_action( 'init', 'aeon_register_menus' );
        




function aeon_enqueue_styles(){

        // Enqueue CSS Dependancy
                wp_enqueue_style('bootstrap-min', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');
                wp_enqueue_style('navigation', get_stylesheet_directory_uri().'/assets/css/navigation.css');
                 wp_enqueue_style('style', get_stylesheet_directory_uri().'/assets/css/style.css');
                wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/assets/font-awesome/css/fontawesome-all.min.css', array(), true );
        
        // Enqueue JS Dependancy
                wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), true );
                wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array(), true );
                wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), true );
                wp_enqueue_script( 'myScript', get_template_directory_uri().'/assets/js/scripts.js', array(), true );
              
        }
            add_action('wp_enqueue_scripts', 'aeon_enqueue_styles');
         
            

 // Enqueue Function for Dependancy



function aeon_theme_features(){   
// adding title-tag
add_theme_support('title-tag');
//adding Sidebr

//adding post-thumbnails
add_theme_support('post-thumbnails');
add_image_size( imageBanner,1500,350, true);
//adding excerpt function customization

//adding comment

//adding date customization

} 

if(function_exists('cft_register_block_type')){
        add_action('cft/init','register_cft_types' );
}
function register_cft_types(){
        cft_register_block_type(
                array(
                        'name' => 'toaster',
                        'title' => __('Toaster'),
                        'discription' => __('A Custom Toaster Block.'),
                        'render_template' => 'template-parts/blocks/toaster/toaster.php',
                        'icon' => 'editor-paste-text',
                        'keyword' => array('toaster','product '),

                )
                );

}

/* Register Components */
require get_template_directory().'/functions/classFunction.php';
require get_template_directory().'/functions/block-function.php';
require get_template_directory().'/functions/sidebar-register.php';
require get_template_directory().'/functions/custom-widgets.php';

?>