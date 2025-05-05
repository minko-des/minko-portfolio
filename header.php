<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php esc_attr(bloginfo('UTF-8') ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php esc_attr(bloginfo('description') ); ?>">
    <meta name="keywords" content="minko,portfolio,webdesign,webdeveloper,coding,wordpress">
        
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-wrapper">

        <?php get_sidebar(); ?>

        <main class="l-main">
            <header class="l-header">
                <div class="p-header">
                    <div class="header-title">
                        <h1>
                            <a href="<?php echo esc_url( home_url('/') ); ?>">MINKO</a>
                            <span class="lead" aria-hidden="true">Portfolio Site</span>
                            <span class="u-visually-hidden">ポートフォリオサイト</span>
                        </h1>
                    </div>
                    <div class="menu-btn">
                        <button class="c-hamburger-btn" aria-label="メニューを開く"></button>
                    </div>
                </div>
            </header>