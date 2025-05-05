                    <footer class="l-footer">
                        <div class="p-footer">
                            <div class="footer__top">
                                <p class="footer__top__text">
                                    ポートフォリオサイトをご覧いただきありがとうございます。<br>
                                    ご依頼・ご相談は<span>Contact</span>フォームからお気軽にお問い合わせください。
                                </p>
                                <p class="footer__top__name">MINKO</p>
                            </div>
                            <div class="footer__link-area">
                                <div class="link__icon-wrap">
                                    <a class="link__icon__x" href="<?php echo esc_url('https://x.com/minko_des'); ?>" target="_blank" rel="noopener noreferrer" aria-label="エックスのアカウントページへ移動">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_x.svg') ); ?>" alt="Xのロゴ" loading="lazy">
                                    </a>
                                    <a class="link__icon__github" href="<?php echo esc_url('https://github.com/minko-des'); ?>" target="_blank" rel="noopener noreferrer" aria-label="ギットハブのアカウントページへ移動">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_github.svg') ); ?>" alt="GitHubのロゴ" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="footer__nav">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'footer-nav',
                                    'menu_class'     => 'nav-menu',
                                    'container'      => false,
                                ));
                                ?>
                            </div>
                            <div class="copyright">
                                <small>© MINKO portfolio 2025</small>
                            </div>
                            <div class="scroll-btn" aria-label="ページの先頭へ戻る">
                                <a href="">
                                    <p class="up-arrow" aria-hidden="true">上矢印</p>
                                </a>
                            </div>
                        </div>
                    </footer>
                </main>
            </div>  <!-- class="l-wrapper" -->

        <?php wp_footer(); ?>
    </body>
</html>