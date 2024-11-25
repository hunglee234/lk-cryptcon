<section class="related-blog lk-pb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="heading-part heading-center wow fadeInUp animated" style="visibility: visible;">
                    <h2>Our Latest News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>
        <div class="lk-row">
            <?php
                // Lấy danh mục của bài viết hiện tại
                $categories = get_the_category();
                $category_ids = array();

                // Nếu bài viết có danh mục, lấy ID danh mục
                if ($categories) {
                    foreach ($categories as $category) {
                        $category_ids[] = $category->term_id;
                    }
                }

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array(get_the_ID()), // không lấy bài viết hiện tại
                    'category__in' => $category_ids // lọc theo dnah mục bài viết hiện tại
                );

                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
            <div class="lk-col-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            the_post_thumbnail('full');
                            ?>
                        </a>
                    </div>
                    <div class="blog-detail">
                        <ul class="blog-meta">
                            <li>
                                <span class="lk-date"><?php echo get_the_date('d F, Y'); ?></span>
                            </li>
                            <li>
                                <span class="lk-author"><?php echo get_the_author(); ?></span>
                            </li>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="blog-title">
                            <?php the_title(); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="read-more-btn">
                            <span>Read More</span>
                            <img src="<?php echo get_field('arrow_right','option') ?>" alt="arrow-right">
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
            else :
                echo '<p>Không có bài viết liên quan</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>