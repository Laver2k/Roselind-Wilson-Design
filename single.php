<?php get_header(); ?>

	<div id="page-blog-post" class="footer-padding">
		<div id="blog-content" class="central-wrap">
			<?php
			if ( has_post_thumbnail() && get_field("hide_featured_image")===false ) {
				the_post_thumbnail();
			} 
			?>
			<div class="text-length">

			<?php while( have_posts() ) : the_post();
			
				echo '<h2 id="post-title">'.get_the_title().'</h2>';
				the_content();

			endwhile; ?>


			</div>
		</div>

		<div id="back-to-blog-wrapper" class="grey-background">
			<a href="blog" id="back-to-blog"><button>back to blog</button></a>
		</div>


	</div>


<?php get_footer(); ?>
