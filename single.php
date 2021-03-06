<?php
get_header();
?>

<main class="container">
	<div class="row">
		<div class="col-md-9 content">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'single'); ?>
					<hr>
					<?php get_template_part('template-parts/latest-posts'); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<?php get_template_part('template-parts/content', 'none'); // template-parts/content-none.php ?>
			<?php endif; ?>
			<!-- End of posts -->
		</div><!-- /.col-md-9 -->

		<?php get_sidebar(); ?>
	</div><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();
