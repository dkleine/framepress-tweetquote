<?php
    /*
    Plugin Name: Framepress QuoteTweet
    Description: Display a quote that people can tweet using: [fptweet title="$"]$content[/fptweet].
    Author: solutions.io
    Version: 1.1
    Author URI: https://solutions.io
    */

function fptweet_shortcode( $atts, $content = null ) {
  $attr = shortcode_atts(array(
    'title' => '',
    ), $atts);
  $link = get_permalink();
  return '<div class="fptweet">' . do_shortcode($content) . '<a target="_blank" href="https://twitter.com/intent/tweet?text=' . do_shortcode($content) . '&url=' . $link . '">'. esc_attr($attr['title']) .'</a></div>';
}
add_shortcode( 'fptweet', 'fptweet_shortcode' );

function framepress_tweet_style() {
  $plugin_url = plugin_dir_url( __FILE__ );
  wp_enqueue_style( 'framepress_tweet_style', $plugin_url . 'assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'framepress_tweet_style' );