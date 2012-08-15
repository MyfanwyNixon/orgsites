<?php
/**
 * @package Cross_Post_Details
 * @version 1.0
 */
/*
Plugin Name: Cross Post Details
Plugin URI: http://wordpress.org/extend/plugins/
Description: Allow access to the data from Cross posts made using ThreeWP Broadcast plugin
Author: Struan Donald
Version: 1.0
Author URI: http://www.mysociety.org/
*/

add_filter('posts_fields', 'cross_post_details_fields' );
add_filter('posts_join', 'cross_post_details_join' );

function cross_post_details_join( $join ) {
    global $wpdb;
    $join .= " LEFT JOIN wp__3wp_broadcast_broadcastdata ON " .
             $wpdb->posts . ".ID = wp__3wp_broadcast_broadcastdata.post_id
             AND wp__3wp_broadcast_broadcastdata.blog_id = 1 ";

    return $join;
}

function cross_post_details_fields( $fields ) {
    $fields .= ", wp__3wp_broadcast_broadcastdata.data";
    return $fields;
}
