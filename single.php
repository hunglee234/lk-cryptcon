<?php 
get_header();
?>
<div class="lk-back-home">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="back-home-btn">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="read-more">
                        <img src="<?php echo get_field('arrow_right','option'); ?>" alt="">
                        <span>Back to Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-detail-main lk-pb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="blog-cover">
                    <div class="blog-list-part">
                        <?php 
                            if (have_posts()) : 
                            while (have_posts()) : the_post();
                        ?>
                            <div class="blog-heading">
                                <ul class="blog-meta">
                                    <li>
                                        <span class="lk-date"><?php echo get_the_date('d F, Y'); ?></span>
                                    </li>
                                    <li>
                                        <span class="lk-author"><?php echo get_the_author(); ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-title">
                                <?php echo get_the_title(); ?>
                            </div>
                            <div class="blog-banner">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <?php the_content(); ?>
                            </div>
                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>Không có bài viết nào</p>';
                        endif;
                        ?>
                    </div>
                    <div class="blog-detail-tag-social">
                        <div class="blog-detail-tag">
                            <?php
                            $post_tags = get_the_tags();
                            if ($post_tags) {
                                echo '<ul>';
                                foreach ($post_tags as $tag) {
                                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                                }
                                echo '</ul>';
                            } else {
                                echo 'Bài viết này chưa có tag.'; 
                            }
                            ?>
                        </div>
                        <div class="blog-detail-social">
                            <a href="#" class="share-btn">
                                <img src="<?php echo get_field('share','option') ?>" alt="share">
                            </a>
                        </div>
                    </div>
                    <div class="blog-comment-post-single">
                        <div class="blog-comment-box">
                            <div class="blog-comment-img">
                                <img src="<?php echo get_field('image_author_1'); ?>" alt="comment-author-1">
                            </div>
                            <div class="blog-comment-detail">
                                <h4 class="commentor">Khắc Hùng</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have any suffered alteration in some form, by injected humour even slightly believable.</p>
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
                    <div class="blog-comment-post">
                        <h3 class="blog-detail-title">Comments (03)</h3>
                        <div class="blog-comment-box">
                            <div class="blog-comment-img">
                                <img src="<?php echo get_field('image_author_2'); ?>" alt="comment-author-1">
                            </div>
                            <div class="blog-comment-detail">
                                <h4 class="commentor">Nam IT</h4>
                                <span class="comment-date">28 tháng 11, 2024</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have any suffered alteration in some form, by injected humour even slightly believable.</p>
                                <a href="#" class="btn-small comment-reply">Reply</a>
                            </div>
                        </div>
                        <div class="blog-comment-box">
                            <div class="blog-comment-img">
                                <img src="<?php echo get_field('image_author_3'); ?>" alt="comment-author-1">
                            </div>
                            <div class="blog-comment-detail">
                                <h4 class="commentor">Johan Sansona</h4>
                                <span class="comment-date">28 February, 2022</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have any suffered alteration in some form, by injected humour even slightly believable.</p>
                                <a href="#" class="btn-small comment-reply">Reply</a>
                            </div>
                        </div>
                        <div class="blog-comment-box">
                            <div class="blog-comment-img">
                                <img src="<?php echo get_field('image_author_4') ?>" alt="comment-author-4">
                            </div>
                            <div class="blog-comment-detail">
                                <h4 class="commentor">Sunny jamwed</h4>
                                <span class="comment-date">28 February, 2022</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have any suffered alteration in some form, by injected humour even slightly believable.</p>
                                <a href="#" class="btn-small comment-reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="leave-comment">
                        <h3 class="blog-detail-title">Leave a Comment</h3>
                        <div class="leave-comment-form">
                            <form method="post" class="contactfrm">
                                <div class="lk-row">
                                    <div class="lk-col-6">
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="lk-col-6">
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="lk-col-12">
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Website" required="">
                                        </div>
                                    </div>
                                    <div class="lk-col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="lk-col-12">
                                        <button type="submit" class="btn-medium">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-blog">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="blog-detail-title">
                    <h3>Related posts</h3>
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
<?php get_template_part('sections/newsletter') ?>
<?php get_footer(); ?>