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

<body <?php body_class( 'antialiased flex flex-col min-h-screen bg-background text-foreground transition-colors duration-300' ); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header' ); ?>

<div class="lg:flex grow">
    <main id="primary" class="grow p-8 text-foreground" role="main">