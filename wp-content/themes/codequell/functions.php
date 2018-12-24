<?php
/**
 * STYLESHEETS
 * -----------
**/
function cq_register_styles(){
    // Stylesheet für fontawsome
    wp_register_style('all', get_template_directory_uri().'/css/all.css');
    wp_enqueue_style('all');
    
    // Stylesheet für Mediaqueries
    wp_register_style('mediaquery', get_template_directory_uri().'/css/media.css');
    wp_enqueue_style('mediaquery');
}
add_action('wp_enqueue_scripts', 'cq_register_styles');

/**
 * NAVIGATION / MENU
 * -----------------
**/
function cq_register_menu(){
    register_nav_menu('menu_main', 'Hauptmenu');
}
add_action('after_setup_theme', 'cq_register_menu');

/**
 * BEITRAGSBILDER
 * -----------------
**/
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'max-thumb', 9999, 9999 ); //300 pixels wide (and unlimited height)
}


function cq_logo(){
    add_theme_support('custom-logo', array(
        'height'        => 200,
        'width'         => 600,
        'flex-width'    => true,
    ));
}
add_action('after_setup_theme', 'cq_logo');

//Seitentitel
add_action( 'after_setup_theme', 'wpse_theme_setup' );
function wpse_theme_setup() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}

//Feed Links
add_theme_support( 'automatic-feed-links' );

//Mehrsprachigkeit
add_action( 'after_setup_theme', 'cq_partyservice_setup' );
function cq_partyservice_setup(){
    load_theme_textdomain( 'partyservice', get_template_directory() . '/languages' );
}

//Content-Width
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

/**
 * BEGINN: CUSTOMIZER
 * ------------------
**/

//Custom Header
$defaults = array(
    'width'         => 1100,
    'height'        => 200,
    'flex-width'    => true,
    'flex-height'   => true,
);
add_theme_support( 'custom-header',$defaults );

/**
 * Hintergrundfarbe Main-Bereich
 * -----------------------------
**/
$defaults = array(
    'default-color' => '#0866b1'
);
add_theme_support( 'custom-background', $defaults );

/**
 * Hintergrundfarbe Header-Bereich
 * -----------------------------
**/
function cq_customize_register( $wp_customize ) {
    //Setting für das Control header_background
    $wp_customize->add_setting( 'header_background' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    
    //Das Control, welches das Setting für header_background im Customizer darstellt
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header', array(
        'label'      => __( 'Header Background', 'adoptima' ),
        'section'    => 'colors',
        'settings'   => 'header_background',
    ) ) );
    
    /**
     * Textfarbe Main
    **/
    $wp_customize->add_setting( 'main_text' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main', array(
        'label'      => __( 'Main Text', 'adoptima' ),
        'section'    => 'colors',
        'settings'   => 'main_text',
    ) ) );
    
    /**
     * Hintergrundfarbe Footer
    **/
    //Setting für das Control footer_background
    $wp_customize->add_setting( 'footer_background' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    
    //Das Control, welches das Setting für header_background im Customizer darstellt
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
        'label'      => __( 'Footer Background', 'adoptima' ),
        'section'    => 'colors',
        'settings'   => 'footer_background',
    ) ) );
    
    /**
     * Textfarbe Footer
    **/
    //Setting für das Control footer_background
    $wp_customize->add_setting( 'footer_text' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    
    //Das Control, welches das Setting für header_background im Customizer darstellt
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer', array(
        'label'      => __( 'Footer Text', 'adoptima' ),
        'section'    => 'colors',
        'settings'   => 'footer_text',
    ) ) );
}
add_action( 'customize_register', 'cq_customize_register' );

function cq_customize_css()
{
    ?>
    <style type="text/css">
        div#header_wrapper { background-color: <?php echo get_theme_mod('header_background', '#000000'); ?>;} /* Ändert die Hintergrundfarbe für das Element <header> */
        
        /* <main> Element: Styles setzen */
        main { 
            color: <?php echo get_theme_mod('main_text', '#000000'); ?>;
        } 
        
        /* <footer> Element: Styles setzen */
        div#footer_wrapper { 
            background-color: <?php echo get_theme_mod('footer_background', '#000000'); ?>;
            color: <?php echo get_theme_mod('footer_text', '#000000'); ?>;
        } 
    </style>
    <?php
}
add_action( 'wp_head', 'cq_customize_css');

/**
 * ENDE: CUSTOMIZER
 * ------------------
**/



?>