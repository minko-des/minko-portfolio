<article class="p-works-item">
    <a class="works-item__content-wrap" href="<?php echo get_permalink(); ?>">
        <figure class="works-item__caption">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(''); ?>
            <?php else : ?>
                <p class="u-no-post">No image</p>
            <?php endif; ?>
            <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                <h5><?php the_title(); ?></h5>
                <div class="excerpt"><?php the_excerpt(); ?></div>
            </figcaption>
        </figure>
        <div class="works-item__category__wrap">
            <?php
            $category = get_field('category');
            if($category): ?> 
                <ul class="c-category__group">
                    <?php foreach( $category as $item): ?>
                        <li class="c-category--small"><?php echo esc_html($item['label']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            <?php
            $tag = get_field('tag');
            if($tag): ?> 
                <ul class="tag__group">
                    <?php foreach( $tag as $item): ?>
                        <li class="c-tag--small"><?php echo esc_html($item['label']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </a>
</article>