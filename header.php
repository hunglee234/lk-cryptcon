<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?> <!-- Cho phép Wordpress kiểm soát phần head của bạn  -->
</head>
<body <?php body_class(); ?>>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div id="loader"></div>
    </div> --> 
    <header class="header">
        <div class="container">
            <div class="lk-row flex-align">
                <div class="header-logo lk-col-4">
                    <a href="<?php echo site_url(); ?>" class="logo">
                        <img src="<?php echo get_field('logo_main','option') ?>" alt="Logo">
                    </a>
                </div>
                <div class="main-menu lk-col-8">
                    <div class="nav-menu">
                        <ul class="list-button">
                            <li><a href="#">Home</a></li>
                            <li class="mega-menu">
                                <a href="#">
                                    Pages
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-content">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog-list.html">Our Blog</a></li>
                                    <li><a href="token-sale.html">Token Sale</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQ’s</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Feature</a></li>
                            <li><a href="#">Roadmap</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="sign-in">
                        <a href="#" class="btn-small">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </header> 
