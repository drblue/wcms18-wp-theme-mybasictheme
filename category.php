<?php
get_header();
?>

<div class="container">
	<h1><?php single_cat_title('Category Archive for: '); ?></h1>

	<div class="row">
		<div class="col-md-9 content">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<!-- This is a Blog Post -->
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></div>

					<?php the_excerpt(); ?>

					<hr>
					<!-- End of Blog Post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End of posts -->
		</div><!-- /.col-md-9 -->

		<div class="col-md-3 blog-sidebar">
			<!-- sidebar -->
			<?php get_sidebar(); ?>
			<!-- end sidebar -->
		</div><!-- /.col-md-3 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
