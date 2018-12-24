<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="format-detection" content="telephone=no">
        
        <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css">
        
        <?php wp_enqueue_script('jquery');?>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?> >
        
        <div id="header_wrapper">
            <header id="header" class="cq_header">
                
                <!--<div id="header_img">-->
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                <!--</div>-->
                
                <!--<nav>-->
                    <?php
                    /*
                    $args = array(
                        'theme_location' => 'Hauptmenu'    
                    );
                    wp_nav_menu($args);
                    */
                    ?>
                <!--</nav>-->
            </header>
        </div>