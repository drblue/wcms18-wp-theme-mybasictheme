<?php
/* Template Name: FAQ page */
get_header();
?>

<main class="container content">
	<!-- Do we have a page? -->
	<?php if (have_posts()) : ?>
		<!-- Yey, we has a page -->
		<?php while (have_posts()) : the_post(); ?>
			<!-- This is a Page -->
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<!-- Accordion of FAQs -->
			<?php get_template_part('template-parts/accordion-faq'); ?>
			<!-- End Accordion -->

			<!-- End of Page -->
		<?php endwhile; ?>
	<?php endif; ?>
	<!-- End of posts -->
</main><!-- /.container -->

<?php
get_footer();
