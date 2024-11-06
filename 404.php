<?php 
/**
 * template name: 404 Page
 */
get_header();
?>
<section class="error-page">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="error-content">
                    <h1 class="error-title">Page not Found</h1>
                    <a href="#" class="btn-large">Back to Home</a>
                </div>
                <div class="error-img">
                    <img src="<?php echo get_template_directory_uri() ?> /assets/images/404-img.png ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter ptb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="newsletter-box">
                    <div class="newsletter-title">
                        <div class="newsletter-title">
                            <h3>Stay Informed And Never Miss An Cryptcon Update!</h3>
                        </div>
                    </div>
                    <div class="newsletter-form">
                        <form>
                            <div class="lk-col-8">
                                <div class="form-group">
                                    <input type="text" name="newsletter" placeholder="Enter Your Mail" class="form-control" required>
                                </div>
                            </div>
                            <div class="lk-col-4">
                                <button type="submit" class="btn-large">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>