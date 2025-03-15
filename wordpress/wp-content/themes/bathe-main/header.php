<?php
/**
 * The header
 *
 * @package Bathe
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-200 transition-colors duration-300' ); ?>>
<?php wp_body_open(); ?>

<header class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-4 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo or Site Title -->
        <h1 class="text-3xl font-bold tracking-tight">
            <a class="hover:underline focus:outline-none focus:ring-2 focus:ring-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    bloginfo( 'name' );
                } ?>
            </a>
        </h1>

        <!-- Navigation Menu -->
        <nav class="md:flex space-x-6">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex space-x-6 text-lg font-medium',
                'fallback_cb' => false
            ));
            ?>
        </nav>

        <!-- Dark Mode Toggle -->
        <button id="theme-toggle" class="p-2 rounded bg-gray-300 dark:bg-gray-700 hover:bg-gray-400 dark:hover:bg-gray-600 transition duration-300">
            🌙 / ☀️
        </button>
    </div>
</header>

<div class="lg:flex grow">
    <main id="primary" class="grow p-8" role="main">