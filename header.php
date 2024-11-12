<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?> <!-- Cho phép Wordpress kiểm soát phần head của bạn  -->
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <div class="lk-row">
                <div class="header-logo lk-col-6">
                    <a href="<?php echo site_url(); ?>" class="logo">
                        <img src="<?php echo get_field('logo_main','option') ?>" alt="Logo">
                    </a>
                </div>
                <div class="nav-menu lk-col-6">
                    <ul class="list-button">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Roadmap</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#" class="last-list-button">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
