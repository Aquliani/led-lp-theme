<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Led-lp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!--    CUSTOM CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/css/awesome/css/font-awesome.min.css">

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>

<header class="page-border page-border-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center">
                <?php
                if (is_home()) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'menu_class' => 'nav nav-pills'
                    ));
                }
                ?>
            </div>
            <!-- /.col-sm-6 col-sm-offset-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

