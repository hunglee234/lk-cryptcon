<?php 
/**
 * template name: FAQ
 */
get_header();?>
<div class="main">
    <section class="lk-subpage-banner">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-12">
                    <div class="lk-subpage-content">
                        <h1 class="lk-subpage-title">
                            Frequently Asked Questions
                        </h1>
                        <p class="lk-subpage-des">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lk-faq lk-pb-200">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-3">
                    <div class="faq-tabing">
                        <ul class="tab-link">
                            <?php 
                            while( have_rows('tabs')): the_row();
                                $tab_title = get_sub_field('tab_title');
                            ?>
                                <li>
                                    <a href="#" class="btn-large" data-tab="tab-<?php echo get_row_index(); ?>">
                                        <?php echo esc_html($tab_title); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="lk-col-9">
                    <div class="tab-content">
                        <?php 
                        $count = 1;
                        while( have_rows('tabs')): the_row();
                            $tab_title = get_sub_field('tab_title');
                        ?>
                        <div class="tab-panel <?php if($count == 1): echo "current";endif; ?>" id="tab-<?php echo get_row_index(); ?>">
                            <div class="faq-content">
                                <?php
                                if( have_rows('faq_boxes')):
                                    while( have_rows('faq_boxes')): the_row();
                                        $faq_title = get_sub_field('faq_title');
                                        $faq_content = get_sub_field('faq_content');
                                ?>
                                    <div class="faq-box">
                                        <div class="faq-title">
                                            <?php echo esc_html($faq_title); ?>
                                        </div>
                                        <div class="faq-panel">
                                            <p>
                                                <?php echo esc_html($faq_content); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php 
                                    $count++;endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="trusted-brand">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="heading-part">
                    <h3>Trusted By</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-part">
        <div class="brand-slider">
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo','option') ?>" alt="brand-logo">
            </div>
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo_2','option') ?>" alt="brand-logo">
            </div>
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo_3','option') ?>" alt="brand-logo">
            </div>
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo_4','option') ?>" alt="brand-logo">
            </div>
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo_5','option') ?>" alt="brand-logo">
            </div>
            <div class="brand-logo">
                <img src="<?php echo get_field('brand_logo_6','option') ?>" alt="brand-logo">
            </div>
        </div>
    </div>
</section>
<?php get_template_part('sections/newsletter') ?>
<?php get_footer(); ?>