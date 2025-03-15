<?php get_header(); ?>

<main class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <section class="md:col-span-2">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    echo '<article class="bg-white shadow-md rounded-lg p-6">';
                    echo '<h2 class="text-2xl font-bold text-blue-600"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';

                    // Show full content for single post pages, but only excerpts on the blog page
                    if (is_singular()) {
                        echo '<div class="text-gray-600">' . get_the_content() . '</div>';
                    } else {
                        echo '<p class="text-gray-600">' . get_the_excerpt() . '</p>';
                        echo '<a href="' . get_permalink() . '" class="block mt-4 text-blue-500 font-semibold hover:underline">Read More →</a>';
                    }

                    echo '</article>';
                }
            } else {
                echo '<p class="text-gray-600">No posts available.</p>';
            }
            ?>
        </section>

        <!-- Sidebar -->
        <aside class="bg-gray-100 p-6 rounded-lg">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
