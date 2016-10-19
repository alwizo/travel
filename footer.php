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


            <footer id="colophon" class="footer" role="contentinfo">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 footer-top__item slogan">
                                    <div class="slogan__logo"><?php if (!has_custom_logo()) { ?>
		                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		                                	<?php bloginfo( 'name' ); ?>
		                                </a>
	                                <?php } else { the_custom_logo(); } ?>
                                    </div><!-- slogan__logo -->
                                        <div class="slogan__text">Команда VMP Travel делает свою работу на 100%,
                                                чтобы Вы могли получать от отдыха новые впечатления и наполняться
                                                положительными эмоциями надолго.
                                        </div>
                                </div>
                                <div class="col-lg-3 col-md-6 footer-top__item contacts">
                                    <div class="contacts__title">Наши контакты</div>
                                    <div class="contacts__phone">
                                        <i class="sprite sprite-phone"></i>
                                        +41 (0)76 285 27 70
                                    </div>
                                    <div class="contacts__email">
                                        <i class="sprite sprite-envelope"></i>
                                        info@vmp-travel.com
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 offset-lg-1 footer-top__item order">
                                    <div class="order__title">
                                        Отправить заявку
                                    </div>
                                    <div class="order__form">
                                        <form method="get">
                                            <input type="text" class="form-control" id="country" placeholder="Страна отдыха...">
                                            <input type="text" class="form-control" id="email" placeholder="Ваш e-mail...">
                                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal" id="go">Перейти</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 copy">
                                    © 2016 VMP Travel - Swiss Tour Operator and DMC. All Rights Reserved.
                                </div>
                                <div class="col-lg-6 footer-menu">
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
