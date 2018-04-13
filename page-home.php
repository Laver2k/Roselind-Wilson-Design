<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

	<div id="page-homepage" class="page-wrapper">

		<!-- Slider -->
		<div id="homepage-slider" class="custom-slider page-hero grey-background">
			<div id="prev-slide" class="slider-arrow"><img src="<?php echo get_template_directory_uri(); ?>/_/img/icons/slider-left.png" alt="Show Previous Slide"></div>
			<div id="next-slide" class="slider-arrow"><img src="<?php echo get_template_directory_uri(); ?>/_/img/icons/slider-right.png" alt="Show Next Slide"></div>
			<ul>
				<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 
				'posts_per_page' => 5 ) 
					); 
				while ( $loop->have_posts() ) : $loop->the_post();
					$showOnHomepage = get_field("homepage_slider_choice");
					$image = get_field('homepage_slider_image');
					$image_size = 'full';
					if( $showOnHomepage == 1 && $image ) {
					?>
						<li>
							<?php echo wp_get_attachment_image( $image["id"], $image_size );?>
							<div class="text-length slider-description"><?php echo get_the_title();?><br/><a class="property-read-more" href="<?php echo get_the_permalink();?>">READ CASE STUDY</a></div>
						</li>
					<?php
					}
				endwhile; wp_reset_query(); ?>

			</ul>
		</div>
		<!-- End of Slider -->

		<!-- Intro -->
		<div id="homepage-intro" class="grey-background">
			<div class="central-wrap text-length ">
				<p><span class="bold">Welcome to Roselind Wilson Design</span>, an award-winning, luxury interior design and interior architecture studio based in Queen’s Park, North West London. Stepping into our light-filled, loft space studio, you’ll find a dedicated, passionate team working harmoniously to design outstanding homes, stunning hospitality interiors and beautiful spaces that reflect the lifestyle of our discerning clients.</p>
				<a href="/about-us"><button>About us</button></a>
			</div>
		</div>
		<!-- End of Intro -->

		<!-- Luxury Interior Design -->
		<div id="homepage-interior-design">
			<div class="left">

				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image-640.webp 640w, <?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image.webp 800w" type="image/webp">
				  <source srcset="<?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image-640.jpg 640w, <?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image.jpg 800w" type="image/jpeg"> 
				  <img src="<?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image.jpg" alt="Beautiful Design" srcset="<?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image-640.jpg 640w, <?php echo get_template_directory_uri(); ?>/_/img/home/home-side-image.jpg 800w">
				</picture>

			

			</div>
			<div class="right">
				<div>
					<h3>Luxury Interior Design &amp; Interior Architecture</h3>
					<p>Our studio houses a dynamic team of experienced interior designers, architectural designers and luxury experts. This pool of diverse talent means we can offer specialist areas including residential and hospitality interiors, furniture design and interior architecture. In addition, we have an extensive supplier database and long established relationships with highly skilled craftsmen, giving us the scope to utilise new techniques and interesting materials.</p>

					<a href="/services"><button>What We do</button></a>
				</div>

			</div>
		</div>
		<!-- End of Luxury Interior Design -->


		<!-- Blog Preview -->

		<?php 
		//We just want 1 result to display here.  If there isnt one, dont show the section.
		$blogAlreadyOutput = false;
		$loop = new WP_Query( array( 
		'posts_per_page' => -1 ) 
		); 
		while ( $loop->have_posts() ) : $loop->the_post();
			$featuredOnHomepage = get_field('show_on_homepage');
			if($featuredOnHomepage && $blogAlreadyOutput == false) {
			$blogAlreadyOutput = true;
			?>

			<div id="homepage-blog-preview">
				<h2 class="central-wrap">From the studio</h2>
				<?php the_post_thumbnail(); ?>
				<div id="homepage-excerpt-wrapper">
					<a href="<?php echo the_permalink();?>"><h3><?php echo get_the_title();?></h3></a>
					<p ><?php echo get_the_excerpt();?></p>
					<a href="<?php echo the_permalink();?>"><button>Read More</button></a>
				</div>
				<?php
				}
				?>
			</div>	


		<?php endwhile; wp_reset_query(); ?>
		<!-- End of Blog Preview -->


		<!-- As featured in -->
		<div id="homepage-featured-in" class="footer-padding">
			<div id="featured-in-box" class="central-wrap final-content">
				<span>As featured in...</span>
				<div id="featured-in-sets">
					<div class="featured-in-set">
						<a href="category/in-the-press/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/misc/featured-in-1.png" alt="ID Yearbook, Interior Design, Grand Designs, Living Etc logos"></a>
					</div>
					<div class="featured-in-set">
						<a href="category/in-the-press/"><img src="<?php echo get_template_directory_uri(); ?>/_/img/misc/featured-in-2.png" alt="English Home, Achica, Homes and Gardens, Interior Elite logos"></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of As featured in -->
		
	</div>



<?php get_footer(); ?>
