<?php
function mytheme_setup() {
    add_theme_support('title-tag'); 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
