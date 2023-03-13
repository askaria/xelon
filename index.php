<?php
/*
	Основной шаблон
*/

get_header(); ?>

<section id="main" class="main section" aria-label="Main screen">

    <div class="main__logo logo_m">
        <svg viewBox="0 0 500 150">
            <use href="#logo"></use>
        </svg>
    </div>

    <div class="main__scroll">Листайте вниз</div>

    <div class="main__bg">
        <picture>
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/bg-640.webp" media="(max-width: 640px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg-640.jpg" media="(max-width: 640px)">

            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/bg-980.webp" media="(max-width: 980px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg-980.jpg" media="(max-width: 980px)">

            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/bg-1366.webp" media="(max-width: 1366px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg-1366.jpg" media="(max-width: 1366px)">

            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/bg.webp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" alt="">
        </picture>
    </div>

</section>

<section id="menu" class="menu section" aria-label="Menu screen">
    <?php if (has_nav_menu('primary')) :
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'menu__inner'
        ));
    endif; ?>
</section>

<?php get_footer(); ?>