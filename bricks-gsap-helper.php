<?php
/**
 * Plugin Name:     Bricks GSAP Helper
 * Description:     Enqueue GSAP and helper scripts/styles for Bricks, including heroSequence preset.
 * Version:         1.3.8
 * Author:          Kasper Gram
 * Text Domain:     bricks-gsap-helper
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', [], '3.13.0', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', ['gsap'], '3.13.0', true);
    wp_enqueue_script('gsap-splittext', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js', ['gsap'], '3.13.0', true);
    wp_enqueue_script('bricks-gsap-helper', plugin_dir_url(__FILE__) . 'assets/js/bricks-gsap-helper.js', ['gsap','gsap-scrolltrigger','gsap-splittext'], '1.3.8', true);
    wp_enqueue_style('bricks-gsap-helper-css', plugin_dir_url(__FILE__) . 'assets/css/bricks-gsap-helper.css', [], '1.0.3');
});
