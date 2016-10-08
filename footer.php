<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package alwizo
 */
?>

<?php get_sidebar('footerfull'); ?>

<!--<div class="wrapper" id="wrapper-footer">-->

    
                <footer id="colophon" class="footer" role="contentinfo">
                    
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 slogan">
                                    	                                <?php if (!has_custom_logo()) { ?>
		                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		                                	<?php bloginfo( 'name' ); ?>
		                                </a>
	                                <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
                                        <div class="slogan__text">Команда VMP Travel делает свою работу на 100%, чтобы Вы могли получать от отдыха новые впечатления и наполняться положительными эмоциями надолго.</div>
                                </div>
                                <div class="col-md-4 contacts">
                                    <div class="contacts__title">Наши контакты</div>
                                    <div class="contacts__phone">+41 (0)76 285 27 70</div>
                                    <div class="contacts__email">info@vmp-travel.com</div>
                                </div>
                                <div class="col-md-4">
                                    <form action="action">
                                        <input type="text" class="form-control" id="" placeholder="Страна отдыха...">
                                        <input type="text" class="form-control" id="" placeholder="Ваш e-mail...">
                                        <button type="submit" class="btn btn-danger btn-block">Перейти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="siteinfo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 copy">
                                    © 2016 VMP Travel - Swiss Tour Operator and DMC. All Rights Reserved.
                                </div>
                                <div class="col-md-6">
                                  <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer',
                                        'container_class' => '',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'footer-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
