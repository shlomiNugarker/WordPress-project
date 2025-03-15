<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            echo '<article>';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<a href="' . get_permalink() . '">קרא עוד</a>';
            echo '</article>';
        }
    } else {
        echo '<p>אין פוסטים להצגה.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
