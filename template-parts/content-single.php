<!-- This is a Blog Post -->
<article>
	<h1><?php the_title(); ?></h1>

	<?php if (has_post_thumbnail()) : ?>
		<div class="featured-image-wrapper">
			<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
		</div>
	<?php endif; ?>

	<p class="text-muted">
		<em>
			<?php
				printf(
					__('Post Created: %s by %s', 'mybasictheme'),
					get_the_date(),
					get_the_author()
				);
			?>
		</em>
	</p>

	<?php the_content(); ?>
</article>
<!-- End of Blog Post -->

<!-- Pagination -->
<?php get_template_part('template-parts/post-pagination'); ?>
<!-- /Pagination -->
