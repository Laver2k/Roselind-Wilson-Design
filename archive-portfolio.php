<?php get_header(); ?>

<div id="page-portfolio-index" class="page-wrapper footer-padding">

<?php
 $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
$wp_query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 99, 'paged' => $paged ) );
?>

<?php if ( $wp_query->have_posts() ) : ?>


	<!-- the loop -->
	<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

		<?php 
		//$image = get_field('homepage_slider_image');
		$image_size = 'portfolio-listing';
		if(get_the_post_thumbnail()) {
		?>
			<div class="index-property central-wrap">
				<a href="<?php echo get_the_permalink();?>">
				<?php
					the_post_thumbnail($image_size);
				?>
				</a>
				<a class="property-link" href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a>
			</div>
		<?php
		}
		?>

	<?php endwhile; ?>
	<!-- end of the loop -->


<?php endif; ?>


<?php wp_reset_postdata(); ?>

</div>


<?php get_footer(); ?>
