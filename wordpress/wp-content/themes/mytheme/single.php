<?php get_header(); ?>

<main class="container mx-auto px-4 py-10">
    <article class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold text-blue-600"><?php the_title(); ?></h1>
        <div class="text-gray-600"><?php the_content(); ?></div>
    </article>
</main>

<?php get_footer(); ?>
