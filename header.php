<?php
/*
    Header
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">

    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/fonts/montserrat-v25-cyrillic_latin-300.woff2" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/fonts/montserrat-v25-cyrillic_latin-regular.woff2" crossorigin>

    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/img/bg-640.webp" as="image" media="(max-width: 640px)" type="image/webp">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/img/bg-980.webp" as="image" media="(min-width: 640.1px) and (max-width: 980px)" type="image/webp">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/img/bg-1366.webp" as="image" media="(min-width: 980.1px) and (max-width: 1366px)" type="image/webp">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/img/bg.webp" as="image" media="(min-width: 1366.1px)" type="image/webp">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">

        <div class="header__logo logo_s logo_hide">
            <svg viewBox="0 0 166 50">
                <use href="#logo"></use>
            </svg>
            <h1 class="logo__heading text_hide">Xelon</h1>
        </div>

        <a href="#menu" class="header__burger">
            <span></span>
        </a>

    </header>

    <main id="site-main" class="site-main disable_scrollbars">