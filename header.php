<?php

/** The header is for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage KeenEtNoa
 * @since 1.0.0
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="masthead" class="site-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="<?= get_option('logo', '');?>" class="keencustom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php /* Primary navigation */
                wp_nav_menu(
                    array(
                        'menu' => 'top_menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker()
                    )
                );
                ?>

                <button class="btn btn-outline" type="submit" id="button-addon2" data-toggle="collapse" data-target="#searchbar">
                    <i class="fas fa-search"></i>
                </button>
                <div class="collapse" id="searchbar">
                    <form class="form-inline ml-auto">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                        </div>
                    </form>
                </div>

            </div>
        </nav>

    </header>



    <!--masthead-->
    <div id="content" class="site-content">