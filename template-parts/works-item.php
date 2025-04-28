<article class="p-works-item">
    <a class="works-item__content" href="<?php echo get_permalink(); ?>">
        <div class="works-item__thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(''); ?>
            <?php else : ?>
                <p class="u-no-post">No image</p>
            <?php endif; ?>
        </div>

        <div class="works-item__description">
            <div class="work__title">
                <h3 class="name">
                    <?php the_title(); ?>
                </h3>
                <p class="date">
                    <?php echo esc_html(get_field('date')); ?>
                </p>
            </div>
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
        </div>
    </a>
</article>