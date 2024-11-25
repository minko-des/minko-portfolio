<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php esc_attr(bloginfo('UTF-8') ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- レスポンシブに必要 -->
    <title>minko-portfolio</title>
    <meta name="description" content="<?php esc_attr(bloginfo('description') ); ?>">  <!-- ページの内容を表す文章を書く、検索結果のタイトル下に表示される -->
    <meta name="keywords" content="minko,portfolio,webdesign,webdeveloper,coding,wordpress">
        
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?> <!-- 他のプラグインやスクリプトがここに適切なコンテンツやコードを挿入できるようになります。 -->

    <div class="l-wrapper">

        <?php get_sidebar(); ?>

        <main class="l-main">
            <header class="l-header">
                <div class="p-header">
                    <div class="header-title c-heading--playfair-display">
                        <h1><a href="<?php echo esc_url( home_url('/') ); ?>">MINKO</a><span>portfolio site</span></h1>
                    </div>
                    <div class="menu-btn">
                        <button class="c-hamburger-btn"></button>
                    </div>
                </div>
            </header>