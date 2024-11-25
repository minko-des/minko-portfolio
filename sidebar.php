<section class="l-sidebar">
    <div class="p-sidebar c-heading--playfair-display">
        <div class="sidebar-title">
            <h1><a href="<?php echo esc_url( home_url('/') ); ?>">MINKO</a>
            <span>portfolio site</span>
            </h1>
        </div>
        <nav class="p-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'sidebar-nav', //'category_navigation'に登録したメニューを表示
                'menu_class'     => 'nav-menu', //メニュー（カテゴリ名に当たる部分）のクラス名を変更（元々のスタイルが当たるように）
                'container'      => false, //自動生成されるdivタグ要素生成を防ぐ
            ));
            ?>
        </nav>
    </div>
</section>