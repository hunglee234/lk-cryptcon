<?php get_header(); ?>

<div class="container margin-top-bottom-48px">
    <div class="lk-row">
        <h1 class="lk-col-5 category-title">
            The Elite Hospitality Staffing Blog
        </h1>

        <div class="lk-col-5 categories">
            <h2 class="title-premium">Categories</h2>
            <div class="category-nav">
                <?php
                $args = array (
                    'hide_empty' => false,
                );

                $categories = get_categories($args);

                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<p>' . $category->name . '</p>';
                    }
                } else {
                    echo '<p>No categories found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
</div>


<?php get_footer(); ?>