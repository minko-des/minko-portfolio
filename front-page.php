<?php get_header(); ?>

    <?php get_template_part('template-parts/main-visual'); ?>
    <?php get_template_part('template-parts/about'); ?>      

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