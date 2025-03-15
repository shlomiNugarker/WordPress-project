<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
?>
