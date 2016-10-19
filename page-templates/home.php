<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying Home Page
 *
 * @package alwizo
 */

get_header(); ?>



    <div class="owl-carousel">

        <?php dynamic_sidebar( 'hero' ); ?>

    </div><!-- .owl-carousel -->

    <section class="line">
        <i class="sprite sprite-triangle"></i>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="line__text">
                        Швейцария, как она есть. Мы знаем эту страну как самих себя, поэтому предлагаем лучшие варианты для Вашей поездки по удивительно выгодной цене. Почувствуйте свежесть и красоту этой горной страны и зарядитесь ее живой силой!
                    </div>
                </div>
            </div>
        </div>        
    </section>
     
    <div  id="content" class="container">

       <div class="row">
        
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="row site-main" role="main">

                <div class="col-md-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'empty' ); ?>

                 <?php endwhile; // end of the loop. ?>

                </div>

            </main><!-- #main -->
            
            <section class="row features">
                <div class="col-lg-12 features__title">
                    Путешествовать с VMP Travel<br> не только приятно, но и выгодно
                </div>
                <div class="col-lg-12 features__subtitle">
                    Швейцария, как она есть. Мы знаем эту страну как самих себя...
                </div>
                <div class="col-lg-4 features__item feature">
                    <i class="sprite sprite-euro"></i>
                    <div class="feature__inner">
                        <div class="feature__title">Лучшие Цены</div>
                        <div class="feature__text">
                            Вы получаете самые выгодные цены на услуги любого сегмента. Это стало возможным благодаря
                            8-летнему опыту работы на рынке и знанию мира туризма изнутри.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 features__item feature">
                    <i class="sprite sprite-heart"></i>
                    <div class="feature__inner">
                        <div class="feature__title">Точность и Надежность</div>
                        <div class="feature__text">
                            Мы работаем точно, как швейцарские часы, чтобы все Ваши заказы выполнялись быстро и
                            качественно. Вы путешествуете и отдыхаете в исторически ценных и живописных уголках Европы
                            совершенно надежно и с гарантией.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 features__item feature">
                    <i class="sprite sprite-star"></i>
                    <div class="feature__inner">
                        <div class="feature__title">Индивидуальный Подход</div>
                        <div class="feature__text">
                            Эксклюзивные туры и программы, трансферы, многогранные прогулки и впечатляющие рассказы
                            лучших гидов Европы – это не роскошь. Это то, что Вы точно получаете при бронировании в VMP
                            Travel.
                        </div>
                    </div>
                </div>
            <div class="features__slogan">
                Обогащайте свое представление о мире!<br>Удивляйте Ваших близких и бизнес партнеров с нашей помощью!
            </div>
            </section><!-- features -->
           
	    </div><!-- #primary -->
            
        </div><!-- row -->
        
    </div><!-- Container end -->

<?php get_footer(); ?>