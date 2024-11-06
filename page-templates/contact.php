<?php 
/**
 * template name: Contact Page
 */
get_header();
?>
<div class="main">
    <section class="lk-subpage-banner">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-12">
                    <div class="lk-subpage-content">
                        <h1 class="lk-subpage-title">
                            Contact With Us
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
    <section class="lk-contact-us lk-pb-200">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-12">
                    <div class="lk-heading-part lk-pb-70">
                        <h2>Send an Inquiry</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>
            <div class="lk-row">
                <div class="lk-col-8">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="lk-row">
                                <div class="lk-col-6">
                                    <div class="lk-form-gr">
                                        <input type="text" name="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="lk-col-6">
                                    <div class="lk-form-gr">
                                        <input type="text" name="text" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="lk-col-6">
                                    <div class="lk-form-gr">
                                        <input type="text" name="text" class="form-control" placeholder="Website" required>
                                    </div>
                                </div>
                                <div class="lk-col-6">
                                    <div class="lk-form-gr">
                                        <input type="text" name="text" class="form-control" placeholder="Subject" requireds>
                                    </div>
                                </div>
                                <div class="lk-col-12">
                                    <div class="lk-form-gr">
                                        <textarea placeholder="Your Message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="lk-col-12">
                                    <button type="submit" class="btn-medium">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="lk-col-4">
                    <div class="contact-info">
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/location.png ?>" alt="">
                            </div>
                            <div class="contact-link">
                                <span class="address">200 East 65th Street 17No, Australia</span>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/phone.png ?>" alt="">
                            </div>
                            <div class="contact-link">
                                <a href="">+0969623498</a>
                                <a href="">+0969623456</a>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/mail.png ?>" alt="">
                            </div>
                            <div class="contact-link">
                                <a href="#">HunglK@gmail.com</a>
                                <a href="#">HunglK@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-social">
                            <ul class="social-icon">
                                <li>
                                    <a href="#" class="fb">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twit">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="insta">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pins">
                                        <i class="fa-brands fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lk-contact-map lk-pb-200">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-12">
                    <div class="lk-heading-part lk-pb-70">
                        <h3>Find Our Office</h3>
                    </div>
                </div>
                <div class="lk-col-12">
                    <div class="lk-ct-map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4862.967825277087!2d106.67029557586896!3d10.81514325847668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752909955607f1%3A0xcff76b5d9e5ec71e!2zMTAzIMSQLiBC4bqhY2ggxJDhurFuZywgUGjGsOG7nW5nIDIsIFTDom4gQsOsbmgsIEjhu5MgQ2jDrSBNaW5oIDcyMTA4LCBWaeG7h3QgTmFt!5e1!3m2!1svi!2s!4v1730707933461!5m2!1svi!2s" allowfullscreen="" style="border:0;width:100%;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>
