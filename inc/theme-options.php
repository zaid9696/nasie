<?php

// Theme Options
add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_image_size( 'search-img', 1100, 190,true );
add_image_size( 'cover-img', 500, 220, true );
add_image_size( 'most-img', 170, 165, true );



// Navigation Set-up

function zaid_starter_nav_setup(){


    register_nav_menu( 'primary','Navigation Header' );
    register_nav_menu( 'secondary','Footer Header' );
}

add_action('after_setup_theme', 'zaid_starter_nav_setup');


// Custom Post Type Creation

function custom_post_type(){


        register_post_type('social_links',array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Social Media Links',
            'add_new_item' => 'Add a new link',
            'edit_item' => 'Edit link',
            'all_items' => 'All links',
            'singlur_name' => 'link'
        ),
        'menu_icon' => 'dashicons-share'
    
    ));
}

add_action( 'init', 'custom_post_type');



/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
 }

// Remove URL Field in Comments 
 function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');

// Showing Widgets in admin area

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );




