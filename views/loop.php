<div class="posts">

	<?php

	while (have_posts()) :
		the_post();

		get_template_part( 'views/content-archive', get_post_type() );
	endwhile;

	the_posts_pagination();

	?>

</div><!-- .posts -->