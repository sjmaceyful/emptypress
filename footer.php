<footer class="site-footer">
    <div class="inner">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer'
		) ); ?>
        <small>&copy; <?php echo date( "Y" ) . ' ' . esc_html( get_bloginfo( 'name' ) ) . ' All Rights Reserved.' ?></small>
    </div>
</footer>

<script src="<?php bloginfo( 'template_directory' ); ?>/assets/scripts/dist/global.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>