<article id="Post<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php the_content(); ?>
</article>