<?php get_header(); ?>

<div id="page-portfolio-single" class="page-wrapper">

	<div id="property-title"><h2><?php echo get_the_title();?></h2></div>

	<?php
	if ( has_post_thumbnail() ) {
		echo "<div id='property-hero'>";
		the_post_thumbnail();
		echo "</div>";
	} 
	?>

	<!-- 2 side by side blocks -->
	<?php
	$sbsLeft = get_field( "sbs-left" );
	$sbsRight = get_field( "sbs-right" );
	if( $sbsLeft && $sbsRight ) {
	?>
	<div id="portfolio-summary">
		<div id="portfolio-intro">
			<p><?php echo $sbsLeft; ?></p>
		</div>
		<div id="portfolio-awards">
			<div>
				<?php echo wp_get_attachment_image( $sbsRight["id"], 'full' );?>
			</div>
		</div>
	</div>
	<?php 
	}
	?>


	<!-- 3D -->
	<?php
	$summary3d = get_field( "3d_summary" );
	$fullImage3d = get_field( "3d_full_width_image" );
	if($fullImage3d) {
	?>
	<div id="portfolio-3d">
		<?php 
		if($summary3d) {
		?>
		<p><?php echo $summary3d; ?></p>
		<?php
		}
		if($fullImage3d) {
		?>
		<?php echo wp_get_attachment_image( $fullImage3d["id"], 'full' );?>
		<?php 
		}
		?>
	</div>
	<?php
	}
	?>


	<!-- Side by Side Image A -->
	<?php
	$leftImage1 = get_field( "a_left_image");
	$rightImage1 = get_field( "a_right_image");
	if($leftImage1 && $rightImage1){
	?>
	<div class="portfolio-image-double">
		<div class="portfolio-single-block">
			<?php echo wp_get_attachment_image( $leftImage1["id"], 'full' );?>
		</div>
		<div class="portfolio-single-block">
			<?php echo wp_get_attachment_image( $rightImage1["id"], 'full' );?>
		</div>
	</div>
	<?php
	}
	?>


	<!-- Side by Side Image B -->
	<?php
	$leftImage2 = get_field( "b_left_image");
	$rightImage2 = get_field( "b_right_image");
	if($leftImage2 && $rightImage2){
	?>
	<div class="portfolio-image-double">
		<div class="portfolio-single-block">
			<?php echo wp_get_attachment_image( $leftImage2["id"], 'full' );?>
		</div>
		<div class="portfolio-single-block">
			<?php echo wp_get_attachment_image( $rightImage2["id"], 'full' );?>
		</div>
	</div>
	<?php
	}
	?>


	<!-- Slider Image -->
	<?php
	$sliderImage1 = get_field( "full_width_slider_image_1");
	$sliderImage2 = get_field( "full_width_slider_image_2");
	$sliderImage3 = get_field( "full_width_slider_image_3");
	$sliderImage4 = get_field( "full_width_slider_image_4");
	?>


	<!-- Slider -->
	<div class="custom-slider grey-background">
		<?php
		if($sliderImage1) {
		?>
		<div id="prev-slide" class="slider-arrow"><img src="<?php echo get_template_directory_uri(); ?>/_/img/icons/slider-left.png" alt="Show Previous Slide"></div>
		<div id="next-slide" class="slider-arrow"><img src="<?php echo get_template_directory_uri(); ?>/_/img/icons/slider-right.png" alt="Show Next Slide"></div>
		<?php 
		}
		?>
		
		<?php
		if($sliderImage1) {
			echo '<ul>';
		}
			$image_size = 'full';

			if( $sliderImage1  ) {
			?>
				<li><?php echo wp_get_attachment_image( $sliderImage1["id"], $image_size);?></li>
			<?php
			}
			if( $sliderImage2  ) {
			?>
				<li><?php echo wp_get_attachment_image( $sliderImage2["id"], $image_size);?></li>
			<?php
			}
			if( $sliderImage3  ) {
			?>
				<li><?php echo wp_get_attachment_image( $sliderImage3["id"], $image_size);?></li>
			<?php
			}
				if( $sliderImage4  ) {
			?>
				<li><?php echo wp_get_attachment_image( $sliderImage4["id"], $image_size);?></li>
			<?php
			}			
		
		if( $sliderImage1  ) {
			echo '</ul>';
		}
		?>
	</div>
	<!-- End of Slider -->



	<!-- Text Block -->
	<?php
	$sbsLeft0 = get_field("full_width_text");
	if($sbsLeft0) {
	?>
	<div class="portfolio-text-block">
		<p><?php echo $sbsLeft0; ?></p>
	</div> 
	<?php
	}
	?>

	<!-- Testimonials -->
	<?php
	$testimonialImage = get_field("testimonial_image");
	$testimonialHeading = get_field("testimonial_heading");
	$testimonialText = get_field("testimonial_text");

	if($testimonialImage && $testimonialHeading && $testimonialText) {
	?>

	<div class="portfolio-testimonials central-wrap">
		<h2 >The client said...</h2>
		<?php echo wp_get_attachment_image( $testimonialImage["id"], 'full' );?>
		<div class="testimonial-box">
			<p class="testimonial-exerpt"><?php echo $testimonialHeading; ?></p>
			<p class="testimonial-full"><?php echo $testimonialText; ?></p>
		</div>
	</div> 
	<?php
	}
	?>

	<!-- CTA -->
	<div id="cta-bar">
		<h2>Let's talk about your project...</h2>
		<a href="contact/"><button>CONTACT US TODAY</button></a>
	</div>

	<!-- Back to portfolio -->
	<div id="back-to-portfolio" class="grey-background footer-padding">
		<a href="portfolio/"><button>back to portfolio</button></a>
	</div>

</div>


<?php get_footer(); ?>
