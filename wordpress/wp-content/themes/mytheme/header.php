<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body class="bg-gray-100">

<header class="bg-gradient-to-r from-blue-500 to-blue-700 text-white py-6 text-center shadow-lg">
    <h1 class="text-3xl font-bold"><?php bloginfo('name'); ?></h1>
    <p class="text-lg"><?php bloginfo('description'); ?></p>
</header>

<nav class="bg-blue-600 p-4 shadow-md">
    <ul class="flex justify-center space-x-6">
        <li><a href="<?php echo home_url(); ?>" class="text-white hover:underline">בית</a></li>
        <li><a href="<?php echo site_url('/blog'); ?>" class="text-white hover:underline">בלוג</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>" class="text-white hover:underline">צור קשר</a></li>
    </ul>
</nav>
