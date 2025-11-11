<?php
/**
 * Simple UP Theme Functions
 */

// Подключение стилей
function simple_up_enqueue_styles() {
    wp_enqueue_style('simple-up-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'simple_up_enqueue_styles');

// Регистрация шорткодов
require_once get_template_directory() . '/inc/shortcodes.php';

