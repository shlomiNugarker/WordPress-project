<?php get_header(); ?>

<main>
    <div class="container">
        <section class="content">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    echo '<article>';
                    echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
                    echo '<p>' . get_the_excerpt() . '</p>';
                    echo '<a href="' . get_permalink() . '" class="button">Read more</a>';
                    echo '</article>';
                }
            } else {
                echo '<p>No more posts</p>';
            }
            ?>
        </section>

        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>

<?php get_footer(); ?>
