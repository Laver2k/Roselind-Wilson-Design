<?php get_header(); ?>


	<div id="blog-page" class="green-background  page-wrapper footer-padding">

			<div id="blog-list" class="central-wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post();
				echo '<div class="blog-article-box">';
				if ( has_post_thumbnail() ) {
					echo '<a href="'.get_post_permalink().'">';
					the_post_thumbnail();
					echo '</a>';
				} 
				echo '<a href="'.get_post_permalink().'"><h2>'.get_the_title().'</h2></a>';
				the_excerpt();
				echo '<a href="'.get_post_permalink().'"><button>Read More</button></a>';	
				echo '</div>';
				endwhile; ?>
			</div>

			<div id="blog-nav">
			<?php 
			posts_nav(); 
			?>
			</div>

			<?php else : ?>

				<?php 
					echo '<div id="no-results-box">
					<h2>Sorry - no entries found.</h2>
					</div>';
				?>

			<?php endif; ?>
		
	 				

		<!-- End of green wrapper -->
	</div>
	</div>




<?php get_footer(); ?>
