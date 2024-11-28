<?php get_header(); ?>

        <section class="p-main-visual">
            <div class="catch-title c-heading--playfair-display">
                <p class="catch-title__head">Hello,My name is</p>
                <div class="catch-title__name__container">
                    <p class="catch-title__name">Toshiki Miyazawa</p>
                </div>
            </div>
            <div class="title__lead c-heading--playfair-display">
                <p class="title__lead__type">Web Designer</p>
                <p class="title__lead__text">site design,logo design,card production</p>
                <p class="title__lead__type">Web Developer</p>
                <p class="title__lead__text">coding,wordpress theme development</p>
            </div>
            <p class="bg-text c-heading--playfair-display">MINKO</p>
            <img class="catch__logo" src="<?php echo esc_url(get_theme_file_uri('/images/logo.png') ); ?>" alt="バッジロゴ">
        </section>

        <section class="p-about">
            <h2 class="p-section-title">About</h2>
            <div class="about-content">
                <figure class="about-content__caption slideInFromUnder">
                    <div class="about-content__caption__img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/about.png') ); ?>" alt="minkoの写真">
                    </div>
                    <figcaption class="about-content__caption__name" >
                        <p>Toshiki Miyazawa | 宮澤 利季</p>
                        <p><span>handlename</span> : MINKO</p>
                    </figcaption>
                </figure>
                <div class="about-content__lead slideInFromUnder">
                    <p class="about-content__lead__heading c-heading--noto-serif-jp">私について</p>
                    <p class="about-content__lead__text">ポートフォリオをご覧いただきありがとうございます。<br>
                    2023年からウェブデザインやフロントエンド開発に関心を持ち、独学やオンラインスクールで学び始めました。以前は自動車部品メーカーのエンジニアとして、20年以上モノづくりに携わってきました。
                        ウェブ制作に惹かれたのは、モノづくりの楽しさと通じる部分が多く、さらにはその可能性の広さです。
                        現在、ウェブ制作の分野でのキャリアチェンジを目指し活動中です。</p>
                    <div class="c-link-btn slideInFromRight"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'page-about' ) ) ); ?>"><span class="c-heading--inter">View More</span></a></div>
                </div>
            </div>
        </section>

        <section class="p-skills slideInFromLeft">
            <h2 class="p-section-title">Skills<span>できること</span></h2>
            <div class="skill__content-wrap">
                <?php get_template_part('template-parts/skill-design'); ?>
                <?php get_template_part('template-parts/skill-development'); ?>
            </div>
        </section>

        <section class="p-works" id="works">
            <p class="section-lead">製作品</p>
            <h2 class="p-section-title">Works</h2>
            <p class="bg-text--left">Expressing Hope</p>
            <p class="bg-text--right">Connecting Hope</p>
            <div class="works-archive slideInFromUnder">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                get_template_part('template-parts/works-item');
                    endwhile;
                else :
                endif ;
                ?>
            </div>
        </section>

        <section class="p-contact" id="contact">
            <h2 class="p-section-title fadeIn">Contact</h2>
            <?php echo do_shortcode('[contact-form-7 id="4e619e8" title="お問い合わせ"]'); ?>
        </section>

<?php get_footer(); ?>