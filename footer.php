<footer>
    <div class="footer-content">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-4">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="<?php echo get_field('logo_main','option') ?>" alt="">
                        </a>
                        <p>
                            <?php echo get_field('desc_cryptcon','option') ?>
                        </p>
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
                <div class="lk-col-8">
                    <div class="lk-row">
                        <div class="lk-col-4">
                            <div class="footer-link">
                                <h3 class="footer-title">Our Pages</h3>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="lk-col-4">
                            <div class="footer-link">
                                <h3 class="footer-title">Our Pages</h3>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="index.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="lk-col-4">
                            <div class="footer-link">
                                <h3 class="footer-title">Information</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <?php echo get_field('hotline_main','option') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php echo get_field('email_main','option') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php echo get_field('address_main','option') ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="lk-row">
                <div class="lk-col-8">
                    <div class="copyright-text">
                        <p>
                            @ Cryptcon all Rights Reserved. Designed By 
                            <a href="#">Eokaay.com</a>
                        </p>
                    </div>
                </div>
                <div class="lk-col-4">
                    <div class="copyright-text">
                        <ul>
                            <li>
                                <a href="#">Privacy Policys</a>
                            </li>
                            <li>
                                <a href="#">Term of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?> <!-- Hook để thêm các tệp JS -->
</body>
</html>
