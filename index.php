	<?php get_header(); ?>
	<main>
		<h1><?php bloginfo('name'); ?></h1>
		<?php while (have_posts()) : the_post(); ?>
		<article>
		<?php the_post_thumbnail(medium); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_excerpt();?>
		</article>
		<?php endwhile; ?>
	</main>
		<?php get_footer(); ?>

