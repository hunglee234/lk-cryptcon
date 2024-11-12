<?php 
/**
 * template name: Feature LK
 */
get_header();?>
<section class="lk-our-team lk-pb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="section-heading">
                    <h1 class="our-team--title">Cryptcon Feature</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'sections/best-features') ?>
<section class="perfect-solution lk-pb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="heading-part">
                    <h2>The Perfect Solution For Your Trading</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, 
                        but the majority have suffered alteration in some form by injected humour, or randomised words which don't look even slightly believable.
                         If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
        </div>
        <div class="lk-row">
            <div class="lk-col-8">
                <div class="perfect-solution-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/perfact-trading.jpg" alt="perfect-trading">
                </div>
            </div>
            <div class="lk-col-4">
                <div class="perfect-solution-feature">
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/User-Joined.png" alt="">
                        </div>
                        <div class="feature-box-content">
                            <h3 class="count">2000+</h3>
                            <span>User Joined</span>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/User-Joined.png" alt="">
                        </div>
                        <div class="feature-box-content">
                            <h3 class="count">2000+</h3>
                            <span>User Joined</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>