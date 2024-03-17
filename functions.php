<?php require_once get_theme_file_path('inc/tgm.php')?>

<?php function agency_scripts(){
    // CSS FILE
    wp_enqueue_style('googleapis-com',get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.css');
    wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css');



    // JS FILE
    wp_enqueue_script('jquery-min',get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('popper-min',get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('carousel-min',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('magnific-popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('isotope-min',get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('imageloaded-min',get_template_directory_uri().'/assets/js/imageloaded.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('counterup-min',get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('waypoint-min',get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js', array('jquery'),'1.0',true);




}
add_action('wp_enqueue_scripts','agency_scripts');

function agency_setup_theme(){
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');


    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array( 'aside','gallery'));

}
add_action('after_setup_theme','agency_setup_theme');




function agency_custom_post(){
    register_post_type('Gallary',[
        'public' => true,
        'labels' => [
            'name' => 'Gallary',
            'all_items' => 'All Gallary',
            'add_new' => 'add new Gallary',
            'add_new_item' => ' Gallary image',
            'Set_featured_image' => ' Gallary image',

        ],

        'supports' => ['title', 'thumbnail', 'editor']

    ]);

}
add_action('init', 'agency_custom_post'); 

function agency_widget(){

    register_sidebar([
        'name'=> 'Right Sidebar',
        'description'=> 'This is widget',
        'id'=> 'Right-sidebar'


    ]);




}


add_action('widgets_init','agency_widget');





register_nav_menus([
    'main'=> 'main menu',
    'footer'=> 'footer menu',
    'sidebar'=> 'sidebar menu',

    

]);



function custom_service(){

    register_post_type('Service',
    array(
        'labels' => array(
         'name'=> 'Service',
         'singular_name' => 'Service',
         'add_new' => 'Add_new service',
         'Add_new_item' => 'New service',
         'edit_item' => 'service item',
         'new_item'=> 'Service New item',
         'view_item' => 'view Service',
         'not_found' => 'sorry we colud not found the post',

        ),
        'menu_icon' => 'dashicons-admin-site',
        'public' => true,
        'publicly_queryable' => true,
        'menu_position' => 8,
        'has_archive'=> true,
        'exclude-from_search' => true,
        'hierarchical'=> true,
        'capability_type'=> 'post',
        'show_ui' => true,
        'rewrite' => array('slag'=> 'wordpress'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        ));
}
add_action('init','custom_service');











?>




