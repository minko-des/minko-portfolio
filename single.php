<?php get_header(); ?>

    <div class="p-single-page">
        <article class="single__article">
            <div class="single__heading fadeIn">
                <h2 class="single__heading__title">
                    <span aria-hidden="true">Work</span>
                    <span class="u-visually-hidden">制作実績</span>
                </h2>
                <p class="date">
                    <?php echo esc_html(get_field('date')); ?>
                </p>
            </div>

            <section class="main-visual fadeIn">
                <div class="mockup">
                    <img src="<?php echo esc_url(get_field('mockup')); ?>" alt="制作品のビジュアル画像" loading="lazy">
                </div>

                <?php
                $site_url = get_field('site_url');
                if ($site_url):
                ?>
                <p class="site-url">
                    <a href="<?php echo esc_url($site_url); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo esc_html($site_url); ?>
                    </a>
                </p>
                <?php endif; ?>
            </section>

            <section class="description">
                <h3 class="single__title"><?php the_title(); ?></h3>
                <div class="work__category">
                    <?php
                    $categories = get_field('category');
                    if (!empty($categories) && is_array($categories)) {
                        foreach ($categories as $category) {
                            echo '<span>' . esc_html($category) . '</span>';
                        }
                    }
                    ?>
                </div>
                <p class="description__text">
                    <?php the_field('description_text'); ?>
                </p>
            </section>

            <section class="detail">
                <div class="detail-wrap">
                    <div class="detail__concept slideInFromUnder">
                        <h4 class="title">
                            <span aria-hidden="true">Concept</span>
                            <span class="u-visually-hidden">コンセプト</span>
                        </h4>
                        <p class="text">
                            <?php the_field('detail_concept'); ?>
                        </p>
                    </div>
                    <div class="detail__creativepoint slideInFromUnder">
                        <h4 class="title">
                            <span aria-hidden="true">Creative Point</span>
                            <span class="u-visually-hidden">創意工夫のポイント</span>
                        </h4>
                        <p class="text">
                            <?php the_field('detail_creativepoint'); ?>
                        </p>
                    </div>
                </div>
            </section>
        </article>

        <?php
        $designcomp_pc = get_field('designcomp_pc');
        $designcomp_sp = get_field('designcomp_sp');

        if ($designcomp_pc && $designcomp_sp): ?>
            <article class="designview">
                <h4 class="designview__title fadeOut">
                    <span aria-hidden="true">Responsive Design</span>
                    <span class="u-visually-hidden">レスポンシブデザイン</span>
                </h4>
                <div class="designcomp-wrap slideInFromUnder">
                    <div class="designcomp__pc">
                        <p class="designcomp__title">Computer display</p>
                        <div class="designcomp__img">
                            <img src="<?php echo esc_url(get_field('designcomp_pc')); ?>" alt="パソコン画面用のデザインカンプ画像" loading="lazy">
                        </div>
                    </div>
                    <div class="designcomp__sp">
                        <p class="designcomp__title">Smartphone display</p>
                        <div class="designcomp__img">
                            <img src="<?php echo esc_url(get_field('designcomp_sp')); ?>" alt="スマホ画面用のデザインカンプ画像" loading="lazy">
                        </div>
                    </div>
                </div>
            </article>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>