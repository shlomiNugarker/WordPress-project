<?php if ( have_posts() ) : ?>

<ul class="space-y-6 "> <!-- Added spacing between list items -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<li class="p-6 bg-card dark:bg-card-foreground rounded-lg shadow-md transition hover:shadow-lg"> <!-- Updated colors to match theme -->
			<h1 class="text-2xl font-bold text-foreground dark:text-primary-foreground hover:underline">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<div class="text-muted-foreground dark:text-secondary-foreground mt-3">
				<?php the_content(); ?>
			</div>
		</li>

	<?php endwhile; ?>

</ul>

<?php else : ?>
<p class="text-center text-muted-foreground dark:text-muted">No posts available.</p>
<?php endif; ?>