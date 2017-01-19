<?php get_header(); ?>

    <main>
        <div class="inner">

			<?php if ( have_posts() ) : ?>

                <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'curzon_wordy' ), get_search_query() ); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
				<?php endwhile; ?>

			<?php else : ?>

                <h1 class="entry-title"><?php _e( 'Nothing Found', 'curzon_wordy' ); ?></h1>
                <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'curzon_wordy' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>

			<?php get_sidebar(); ?>

        </div>
    </main>

<?php get_footer(); ?>