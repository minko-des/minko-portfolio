<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

        <?php get_template_part('template-parts/page-about__main-visual'); ?>
        
        <?php get_template_part('template-parts/page-about__biography'); ?>

        <section class="p-page-about__section__space">
            <div class="section__space__bg">
                <div class="p-arrow-unit ">
                    <img class="arrow" src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                    <img class="arrow" src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                </div>
            </div> 
        </section>

        <?php get_template_part('template-parts/page-about__strengths'); ?>

        <section class="p-contact" id="contact">
            <h2 class="p-section-title fadeIn">Contact</h2>
            <?php echo do_shortcode('[contact-form-7 id="4e619e8" title="お問い合わせ"]'); ?>
        </section>
        
<?php get_footer(); ?>