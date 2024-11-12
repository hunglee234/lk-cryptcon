<?php
add_filter('walker_nav_menu_start_el', 'append_da_damn_hover_popup', 15, 2);
function append_da_damn_hover_popup($item_output, $item) {
    $check_mega_1 = get_field('mega_1', $item);
    $check_mega_2 = get_field('mega_2', $item);
    if($check_mega_1 == true){
        // if there's no content, just return the <a> directly
        $list_posts = get_field('select_post_show_in_menu', $item);
        if (! get_field('select_post_show_in_menu', $item)) {
            return $item_output;
        }
        if( $list_posts ): 
            $mega = '<div class="mega-popup mc-fade-in-bottom">';
            $mega .= '<div class="mega-popup-contain">';
            $mega .= '<div class="mega-name-pop-and-show-more">';
            if (get_field('name_menu_item', $item)) {
                $mega .= '<div class="mega-name-pop">';
                $mega .= get_field('name_menu_item', $item);
                $mega .= '</div>';
            }
            if (get_field('name_menu_item', $item)) {
                $mega .= '<a href='.get_field('link_show_more', $item).' class="mega-show-more">';
                $mega .= 'Show more';
                $mega .= '</a>';
            }
            $mega .= '</div>';
            $mega .= '<div class="mega-row">';
            foreach( $list_posts as $featured_post ): 
                $permalink = get_permalink( $featured_post->ID );
                $title = get_the_title( $featured_post->ID );
                $url_thumb_post = get_the_post_thumbnail_url( $featured_post->ID );
                $date_post = get_the_date( 'D M j', $featured_post->ID, );
                
                if( $title ) {
                    $mega .= '<a href='. $permalink.' class="mega-item">';
                    $mega .= '<div class="mega-item-thumb">';
                    $mega .= '<img src='. $url_thumb_post.' alt='. $url_thumb_post.' />';
                    $mega .= '</div>';
                    $mega .= '<div class="mega-item-title">';
                    $mega .= $title;
                    $mega .= '</div>';
                    $mega .= '<div class="mega-item-date">';
                    $mega .= $date_post;
                    $mega .= '</div>';
                    $mega .= '</a>';
                }
            endforeach;
            $mega .= '</div>';
            $mega .= '</div>';
            $mega .= '</div>';
        endif;  
        return $item_output.$mega;
    }elseif($check_mega_2 == true){
        $mega = '<div class="mega-popup mc-fade-in-bottom mc-mega-2">';
        $mega .= '<div class="mega-popup-contain">';
        if (get_field('lable_mega_2', $item)) {
            $mega .= '<div class="mega-lable-pop">';
            $mega .= get_field('lable_mega_2', $item);
            $mega .= '</div>';
        }
        $mega .= '<div class="mega-row-2">';
        $column1 = get_field('column_1', $item);
        if( $column1  ){
            $mega .= '<div class="mega-2-col">';
            $mega .= '<div class="colum-1-thumb">';
            $mega .= '<img src='. get_the_post_thumbnail_url( $column1->ID ).' alt='.  get_the_post_thumbnail_url( $column1->ID ) .' />';
            $mega .= '<div class="colum-1-thumb-bg">';
            $mega .= '<img src='. get_the_post_thumbnail_url( $column1->ID ).' alt='.  get_the_post_thumbnail_url( $column1->ID ) .' />';
            $mega .= '</div>';
            $mega .= '</div>';
            $mega .= '<div class="colum-1-title">';
            $mega .= get_the_title( $column1->ID );
            $mega .= '</div>';
            $mega .= '<a href="#" class="mega-2-show-more">';
            $mega .= 'Show more';
            $mega .= '</a>';
            $mega .= '</div>';
        }
        $column2 = get_field('column_2', $item);
        if( $column2  ){
            $mega .= '<div class="mega-2-col">';
            $mega .= '<div class="column-2-lable">';
            $mega .= 'Top News';
            $mega .= '</div>';
            foreach( $column2 as $column ): 
                $permalink = get_permalink( $column->ID );
                $mega .= '<div class="column-2-item">';
                $mega .= '<div class="column-2-row">';
                $mega .= '<div class="column-2-item-thumb">';
                $mega .= '<img src='. get_the_post_thumbnail_url( $column->ID ) .' alt='. get_the_post_thumbnail_url( $column->ID ) .' />';
                $mega .= '</div>';
                $mega .= '<div class="column-2-item-content">';
                $mega .= '<div class="mega-item-title">';
                $mega .= get_the_title(  $column->ID );
                $mega .= '</div>';
                $mega .= '<div class="mega-item-date">';
                $mega .= get_the_date( 'D M j', $column->ID, );
                $mega .= '</div>';
                $mega .= '</div>';
                $mega .= '</div>';
                $mega .= '</div>';
            endforeach;
            $mega .= '</div>';
        }
        $column3 = get_field('column_3', $item);
        if( $column3  ){
            $mega .= '<div class="mega-2-col mc-cs-mega-2-col">';
            $mega .= '<div class="column-3-lable">';
            $mega .= 'Latest News';
            $mega .= '</div>';
            foreach( $column3 as $column ): 
                $permalink = get_permalink( $column->ID );
                $mega .= '<div class="column-3-item">';
                $mega .= '<div class="column-3-item-content">';
                $mega .= '<div class="mega-item-title">';
                $mega .= get_the_title(  $column->ID );
                $mega .= '</div>';
                $mega .= '<div class="mega-item-date">';
                $mega .= get_the_date( 'D M j', $column->ID, );
                $mega .= '</div>';
                $mega .= '</div>';
                $mega .= '</div>';
            endforeach;
            $mega .= '</div>';
        }
        $mega .= '</div>';
        $mega .= '</div>';
        $mega .= '</div>';
        return $item_output.$mega;
    }else{
        return $item_output;
    }
    

    
    
}