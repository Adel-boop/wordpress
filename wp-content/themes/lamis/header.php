<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lamis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'UTF-8' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="rs-17">
        <div class="rs-menu-form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <div class="rs-menu-form__container">
                            <div class="rs-menu-form__logo">
                                <?php if( has_custom_logo() ): the_custom_logo(); ?>
                                                                <?php else: ?>
                                                                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                                                            <?php endif; ?>
                            </div>

                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_class'      => 'rs-menu-form__menu rs-menu-form__menu-desktop',
                                )
                            );
                            ?>
                            <div class="rs-menu-form__burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="#" class="rs-menu-form__icon rs-menu-form__icon-like" style="-webkit-mask-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/heart.svg);"></a>
                            <a href="#" class="rs-menu-form__icon rs-menu-form__icon-basket" style="-webkit-mask-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shopping-cart.svg);"></a>
                            <div class="rs-menu-form__icon rs-menu-form__icon-search" style="-webkit-mask-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/search.svg);"></div>
                            <div class="rs-menu-form__search">
                                <form method="post" action="#">
                                    <input type="text">
                                    <button><span></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rs-menu-form__menu rs-menu-form__menu-mobile">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <form class="rs-menu-form__mobile-search">
                            <input type="text">
                            <button><span></span></button>
                        </form>
                        <?php
                            $menuParameters = array(
                                'theme_location' => 'menu-1',
                                'container'       => false,
                                'echo'            => false,
                                'items_wrap'      => '%3$s',
                                'depth'           => 0,
                            );
                            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
