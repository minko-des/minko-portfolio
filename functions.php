<?php

function custom_theme_support() {
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    add_theme_support( 'align-wide' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'editor-styles' );
    add_editor_style();
    add_theme_support( 'automatic-feed-links' );

    register_block_style(
        'core/paragraph',
        array(
            'name' => 'custom-style',
            'label' => __( 'Custom Style', 'minko-portfolio' ),
        )
    );
    register_block_pattern(
        'my-plugin/my-block-pattern',
        array(
            'title'       => __( 'My Block Pattern', 'minko-portfolio' ),
            'description' => _x( 'A custom block pattern for my plugin.', 'Block pattern description', 'minko-portfolio' ),
            'categories'  => array( 'my-pattern-category' ),
            'content'     => '<!-- wp:paragraph --><p>' . __( 'This is a custom block pattern.', 'minko-portfolio' ) . '</p><!-- /wp:paragraph -->',
        )
    );
    register_nav_menus( array(
        'sidebar-nav' => esc_html__( 'sidebar navigation', 'minko-portfolio' ),
        'footer-nav' => esc_html__( 'footer navigation', 'minko-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );


function enqueue_theme_assets() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', array(), null);
    wp_enqueue_style( 'style', get_theme_file_uri('/css/style.css'), array(), '1.0.0');
    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), null, true);
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap'), null, true);
    wp_enqueue_script( 'script-main', get_theme_file_uri('/js/main.js'), array(), '1.0.0', true);
    wp_enqueue_script( 'script-gsap', get_theme_file_uri('/js/gsap.js'), array('gsap', 'gsap-scrolltrigger'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_assets' );


// ブロックエディタに適用されるCSSを無効化
function remove_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );


//コメントの返信機能を実装するために必要なスクリプトで、コメントの「返信」ボタンをクリックした際に動作します。
function mytheme_enqueue_comment_reply_script() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_comment_reply_script' );


//テキストドメインを読み込み
function theme_slug_setup() {
    load_theme_textdomain( 'minko-portfolio', get_template_directory() . '/languages' ); //第一引数はテキストドメイン,第二引数は翻訳ファイルの設置場所
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
    

//ウィジェットエリア登録
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
    
?>