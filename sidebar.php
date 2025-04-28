<section class="l-sidebar">
    <div class="p-sidebar">
        <div class="sidebar-title">
            <h1>
                <a href="<?php echo esc_url( home_url('/') ); ?>">MINKO</a>
                <span class="lead" aria-hidden="true">Portfolio Site</span>
                <span class="u-visually-hidden">ポートフォリオサイト</span>
            </h1>
        </div>
        <nav class="p-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'sidebar-nav',
                'menu_class'     => 'nav-menu',
                'container'      => false,
            ));
            ?>
        </nav>
    </div>
</section>