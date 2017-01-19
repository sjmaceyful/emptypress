<?php get_header(); ?>

    <main>
        <div class="inner">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content', 'page' );
				endwhile;
			endif; ?>
        </div>
    </main>

<?php get_footer(); ?>