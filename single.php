<?php get_header(); ?>

<main>
    <div class="inner">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/post/content', 'single' );
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
		endif; ?>


		<?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>
