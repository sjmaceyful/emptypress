<?php get_header(); ?>

<main>
    <div class="inner">

        <?php single_post_title('<h1>', '</h1>'); ?>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/post/content' );
			endwhile;
		endif; ?>

		<?php if ( have_posts() ) : ?>
            <div>
                <?php next_posts_link( 'Older posts' ); ?> / <?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php endif; ?>

		<?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>
