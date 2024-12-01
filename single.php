<?php get_header(); ?>

        <section class="p-single__main-visual">
            <h2 class="single-title c-heading--playfair-display">Work<span>製作品</span></h2>
            <div class="main-visual__content">
                <p class="product-title c-heading--noto-sans-jp"><?php the_title(); ?></p>
                <div class="img-frame">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(''); ?>
                    <?php else : ?>
                        <p class="u-no-post"><?php esc_html_e('No image', 'minko-portfolio'); ?></p>
                    <?php endif; ?>
                </div>
                
                <?php if(get_field('site-url')): ?>
                    <p class="site-url">
                        <a href="<?php echo esc_url(get_field('site-url')); ?>" target="_blank" rel="noopener noreferrer">
                            <?php the_field('site-url'); ?>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <section class="p-single__article-area c-heading--noto-sans-jp">
            <div class="article__description slideInFromUnder">
                <?php
                $category = get_field('category');
                if($category): ?> 
                    <ul class="c-category__group">
                        <?php foreach( $category as $item): ?>
                            <li class="c-category--large"><?php echo esc_html($item['label']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            
                <?php
                $tag = get_field('tag');
                if($tag): ?> 
                    <ul class="tag__group">
                        <?php foreach( $tag as $item): ?>
                            <li class="c-tag--large"><?php echo esc_html($item['label']); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <p class="article__description__text">
                    <?php the_field('description-text'); ?>
                </p>
            </div>

            <div class="article__detail">
                <div class="article__detail__items-wrap">
                    
                    <?php if(get_field('detail-title-01') || get_field('detail-text-01')): ?>
                        <div class="article__detail__item slideInFromUnder">
                            <?php if(get_field('detail-title-01')): ?>
                                <h3 class="article__detail__item__title"><?php the_field('detail-title-01'); ?></h3>
                            <?php endif; ?>
                            <?php if(get_field('detail-text-01')): ?>
                                <p class="article__detail__item__text"><?php the_field('detail-text-01'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('detail-title-02') || get_field('detail-text-02')): ?>
                        <div class="article__detail__item slideInFromUnder">
                            <?php if(get_field('detail-title-02')): ?>
                                <h3 class="article__detail__item__title"><?php the_field('detail-title-02'); ?></h3>
                            <?php endif; ?>
                            <?php if(get_field('detail-text-02')): ?>
                                <p class="article__detail__item__text"><?php the_field('detail-text-02'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('detail-title-03') || get_field('detail-text-03')): ?>
                        <div class="article__detail__item slideInFromUnder">
                            <?php if(get_field('detail-title-03')): ?>
                                <h3 class="article__detail__item__title"><?php the_field('detail-title-03'); ?></h3>
                            <?php endif; ?>
                            <?php if(get_field('detail-text-03')): ?>
                                <p class="article__detail__item__text"><?php the_field('detail-text-03'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="bg-text--production">Production Detail</div>
        </section>
        
        <section class="p-single__gallery">
            <div class="bg-text--works">Works Display</div>
            <div class="gallery__img">
                <?php
                if(get_field('gallery-img')): ?>            
                    <img src="<?php the_field('gallery-img') ?>" alt="制作品の画像">
                <?php else : ?>
                    <p><?php esc_html_e('No image', 'minko-portfolio'); ?></p>
                <?php endif; ?>
            </div>
        </section>
        
<?php get_footer(); ?>