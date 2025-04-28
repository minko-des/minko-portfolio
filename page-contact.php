<?php get_header(); ?>

    <article class="p-page-contact">
        <section class="contact__heading fadeIn">
            <h2 class="contact__heading__title">
                <span aria-hidden="true">Contact</span>
                <span class="u-visually-hidden">お問合せ</span>
            </h2>
            <p class="contact__heading__lead">
                制作のご依頼・ご相談などお気軽にお問い合わせくださいませ。
            </p>
        </section>
        <section class="contact__form" id="contact">
            <?php echo do_shortcode('[contact-form-7 id="4e619e8" title="お問い合わせ"]'); ?>
        </section>
    </article>
        
<?php get_footer(); ?>