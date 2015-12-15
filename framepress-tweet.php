<?php
    /*
    Plugin Name: Framepress QuoteTweet
    Plugin URI: https://solutions.io/
    Description: Display a quote that people can tweet.
    Author: solutions.io
    Version: 1.0
    Author URI: https://solutions.io
    */

function fptweet_shortcode( $atts, $content = null ) {
  $link = get_permalink();
  return '<div class="fptweet">' . $content . '<a target="_blank" href="https://twitter.com/intent/tweet?text=' . $content . '&url=' . $link . '">Klick für Tweet</a></div>';
}
add_shortcode( 'fptweet', 'fptweet_shortcode' );

function framepress_tweet_style() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'framepress_tweet_style', $plugin_url . 'assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'framepress_tweet_style' );
?>