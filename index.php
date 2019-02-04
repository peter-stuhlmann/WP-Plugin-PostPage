<?php
/*
 * Plugin Name: PostPage Flex by Peter R. Stuhlmann
 * Description: Wordpress plugin, that integrates for example the recent posts in form of a tile view (flexbox) on any page.
 * Version: 1.0.0
 * Author: Peter R. Stuhlmann
 * Author URI: https://peter-stuhlmann-webentwicklung.de
 * Plugin URI: https://peter-stuhlmann-webentwicklung.de/wp-plugin/postpage-flex
 */


// Stylesheets and JavaScript files

function postPage_flex_enqueue_scripts() {
    wp_enqueue_style( 'postpage-flex-styles', plugin_dir_url( __FILE__ ) . "/assets/css/style.css", '', '20190204');
}
add_action( 'wp_enqueue_scripts', 'postPage_flex_enqueue_scripts' );


// Allows the integration of shortcodes in widget areas:

add_filter( 'widget_text', 'do_shortcode' );


// Display blogposts only with thumbnail and title

function postPage_flex_display_blogposts($atts, $content = NULL) {
    $atts = shortcode_atts(
        [
            'orderby' => 'date',
            'posts_per_page' => '-1',
            'category_name' => '',
            'tag' => '',
            'format' => 'square',
            'hover' => ''
        ], $atts, 'recent-posts' );
        
    $query = new WP_Query( $atts );

    $output = '<div class="ppf_flex">';

    while($query->have_posts()) : $query->the_post();

    $backgroundImageUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') );
    
        $output .= '
        <div class="ppf_flex-items '.esc_attr($atts['hover']).'" style="background-image: url(' . $backgroundImageUrl . ')">
          <a href="' . get_permalink() . '">
            <img class="ppf_transparent" src="' . plugins_url( 'assets/img/'.esc_attr($atts['format']).'.png', __FILE__ ) . '"><span>' . get_the_title() . '</span>
          </a>
        </div>';
    
    endwhile;

    wp_reset_query();

    return $output . '</div>';
}
        
add_shortcode('recent-blogposts', 'postPage_flex_display_blogposts');


// Display blogposts with thumbnail, title, date, author and excerpt

function postPage_flex_display_blogposts_complex($atts, $content = NULL) {
    $atts = shortcode_atts(
        [
            'orderby' => 'date',
            'posts_per_page' => '-1',
            'category_name' => '',
            'tag' => '',
            'format' => '2x1',
            'hover' => ''
        ], $atts, 'recent-posts' );
        
    $query = new WP_Query( $atts );

    $output = '<div class="ppf_flex">';

    while($query->have_posts()) : $query->the_post();

    $backgroundImageUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') );
    
        $output .= '
        <div class="ppf_flex-items-complex '.esc_attr($atts['hover']).'">
          <a href="' . get_permalink() . '">
            <img style="background-image: url(' . $backgroundImageUrl . ')" class="ppf_transparent" src="' . plugins_url( 'assets/img/'.esc_attr($atts['format']).'.png', __FILE__ ) . '">
            <span class="ppf_date">' . get_the_date() . '</span>
            <span class="ppf_title">' . get_the_title() . '</span>
            <span class="ppf_author">von ' . get_the_author() . '</span>
          </a>
          <span class="ppf_excerpt">' . get_the_excerpt() . '</span><a class="ppf_readmore" href="' . get_permalink() . '">READ MORE &rarr;</a>
        </div>';
    
    endwhile;

    wp_reset_query();

    return $output . '</div>';
}
        
add_shortcode('recent-blogposts-complex', 'postPage_flex_display_blogposts_complex');


// Plugin row meta

function postPage_flex_plugin_row_meta( $links, $file ) {    
    if ( plugin_basename( __FILE__ ) == $file ) {
        $row_meta = array(
          'donate' => '<a href="https://www.paypal.me/prstuhlmann/2" style="color: green" target="_blank">Donate</a>'
        );
 
        return array_merge( $links, $row_meta );
    }
    return (array) $links;
}

add_filter( 'plugin_row_meta', 'postPage_flex_plugin_row_meta', 10, 2 );


// Admin Menu

function postPage_flex_admin_menu() {
    $page_title = 'PostPage Flex';
    $menu_title = 'PostPage Flex';
    $capability = 'manage_options';
    $menu_slug = 'postpage-flex-settings';
    $function = 'postPage_flex_settings';
    add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action('admin_menu', 'postPage_flex_admin_menu');


// Plugin page

function postPage_flex_settings() {
    $infoPage = file_get_contents(plugins_url( 'assets/txt/infopage.txt', __FILE__ ));
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    } echo $infoPage;
}