<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package alwizo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Modal -->
<div class="modal in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel1">Заявка</h4>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Ваше Имя</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email2" class="h4">Ваш Email</label>
                        <input type="email" class="form-control" id="email2" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="phone" class="h4">Телефон</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="country2" class="h4">Страна Отдыха</label>
                        <input type="text" class="form-control" id="country2" required>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="message" class="h4 ">Детали Отдыха</label>
                        <textarea id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                        <div id="msgSubmit" class="h3 text-center invisible">Message Submitted!</div>
                    </div>
                    <div class="form-group col-sm-6">
                        <button type="submit" id="form-submit" class="btn btn-danger btn-lg pull-right  btn-send">Отправить</button>
                    </div>
                    </div>
                </form>
            </div><!--modal-body-->
        </div>
    </div>
</div>


<div id="page" class="hfeed site">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'alwizo' ); ?></a>

        <nav class="navbar navbar-dark site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-wrapper">
                            <!--<div class="navbar-header">-->
                                <!-- Your site title as branding in the menu -->
                                <!--<div class="nav navbar-nav navbar-left">-->
	                                <?php if (!has_custom_logo()) { ?>
		                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		                                	<?php bloginfo( 'name' ); ?>
		                                </a>
	                                <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
                                <!--</div>-->
                            <!--</div>-->
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row" style="display: none;">
                                <div class="col-lg-12">
                                    <?php wp_nav_menu(
                                            array(
                                                'theme_location' => 'short',
                                                'container_class' => 'short-menu',
                                                'menu_class' => 'nav navbar-nav',
                                                'fallback_cb' => '',
                                                'menu_id' => 'short-menu',
                                                'walker' => new wp_bootstrap_navwalker()
                                            )
                                    ); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php wp_nav_menu(
                                            array(
                                                'theme_location' => 'primary',
                                                'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar primary-menu',
                                                'menu_class' => 'nav navbar-nav',
                                                'fallback_cb' => '',
                                                'menu_id' => 'main-menu',
                                                'walker' => new wp_bootstrap_navwalker()
                                            )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                    <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> <!-- .container -->

        </nav><!-- .site-navigation -->






