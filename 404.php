<?php get_header(); ?>

    <article>
        <h1><?php _e( 'Not Found', 'curzon_wordy' ); ?></h1>
        <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'curzon_wordy' ); ?></p>
		<?php get_search_form(); ?>
    </article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>