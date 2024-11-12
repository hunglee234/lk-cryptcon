<?php
/**
 * template name: Blog
 */
get_header(); ?>
<section class="lk-blog ptb-200">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-12">
                <div class="section-heading lk-ptb-200">
                    <h1 class="title-bh">Blog Updated</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lk-blog-list">
    <div class="container">
        <div class="lk-row">
            <div class="lk-col-8">
                <div class="blog-list-part">
                    <div class="blog-list-box">
                        <div class="blog-list-img">
                            <a href="#">
                                <img src="" alt="">
                            </a>
                        </div>
                        <div class="blog-list-detail">
                            <ul class="blog-meta">
                                <li>18 Januray, 2022</li>
                                <li>By Khắc Hùng</li>
                            </ul>
                            <a href="#" class="blog-list-title">Cryptcon is a clean, modern and crypto specific HTML template</a>
                            <a href="#" class="read-more">
                                <span>Read More</span>
                                <img src="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lk-col-4">
                <div class="blog-sidebar">
                    <div class="blog-search">
                        <input type="text" name="search" class="form-control" placeholder="Search Post...">
                        <button class="blog-search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="blog-category">
                        <h2 class="blog-cat-title">
                            Categories
                        </h2>
                        <ul>
                            <?php
                            $categories = get_categories();
                            foreach ( $categories as $category ) {
                                // Lấy ID và số lượng bài viết của danh mục
                                $category_id = $category->term_id;
                                $category_name = $category->name;
                                $category_count = $category->count;
                                
                                // Hiển thị danh mục và số lượng bài viết
                                echo '<li>';
                                echo '<a href="' . esc_url( get_category_link( $category_id ) ) . '">';
                                echo '<span class="cat">' . esc_html( $category_name ) . '</span>';
                                echo '<span class="count">(' . $category_count . ')</span>';
                                echo '</a>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="blog-about">
                        <h2 class="blog-cat-title">About Us</h2>
                        <div class="abt-img">                        
                            <img src="<?php echo get_field('about_us_img','option') ?>" alt="blog-about">
                        </div>
                        <div class="abt-detail">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                    <div class="blog-tags">
                        <h2 class="blog-cat-title">
                            Popular Tags
                        </h2>
                        <ul>
                            <?php 
                                // Lấy tất cả các thẻ trong Wordpress
                                $tags = get_tags();
                                // Duyệt qua từng thẻ và hiển thị thông tin
                                foreach ( $tags as $tag ) {
                                    echo '<li>';
                                    // Liên kết đến trang thẻ
                                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">';
                                    // Hiển thị tên thẻ
                                    echo '<span>' . esc_html( $tag->name ) . ' </span>';
                                    echo '</a>';
                                    echo '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="blog-news">
                        <h2 class="blog-cat-title">latest News</h2>
                        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );

                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                            <div class="blog-news-box">
                                <div class="blog-news-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php 
                                        the_post_thumbnail('full');
                                        ?>
                                    </a>
                                </div>
                                <div class="blog-news-detail">
                                    <span class="date"><?php echo get_the_date('d F, Y'); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>Không có bài viết nào</p>';
                        endif;
                        ?>
                    </div>
                    <div class="blog-contact">
                        <img src="<?php echo get_field('logo_no_text','option') ?>" alt="favicon">
                        <h2 class="blog-contact-title">How Can We Help You?</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text has roots in a piece..</p>
                        <a href="#" class="btn-small">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>