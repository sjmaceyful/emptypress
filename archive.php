<?php get_header(); ?>

<main>

	<?php if ( have_posts() ) : ?>
		<?php the_archive_title('<h1>', '</h1>'); ?>
		<?php the_archive_description('<p>', '</p>'); ?>
	<?php endif; ?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/post/content' );
		endwhile;
	endif; ?>

	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
