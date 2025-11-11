<?php
/**
 * Simple UP Theme Functions
 */

// Подключение шрифтов Google Fonts
function simple_up_enqueue_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Unbounded:wght@400;500;700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'simple_up_enqueue_fonts');

// Подключение стилей
function simple_up_enqueue_styles() {
    wp_enqueue_style('simple-up-style', get_template_directory_uri() . '/assets/css/style.css', array('google-fonts'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'simple_up_enqueue_styles');

// Регистрация шорткодов
require_once get_template_directory() . '/inc/shortcodes.php';

