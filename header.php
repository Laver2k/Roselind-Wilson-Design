<!doctype html>

	<head>
		<!--SEO Agency's tags START -->
		<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18486319-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-18486319-1');
		</script>
		<script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
	    	gtag('send', 'event', 'Contact_Form', 'Submit'); }, false ); 
    	</script>
    	<!--SEO Agency's tags END --> 

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#000"/>

		<title><?php wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/_/img/logos/favicon.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
		<script type="application/ld+json">
		{ "@context" : "http://schema.org",
		"@type" : "Organization",
		"name" : "Roselind Wilson Design",
		"url" : "http://www.roselindwilsondesign.com",
		"sameAs" : [ "https://www.facebook.com/RoselindWilsonDesign",
		"https://www.instagram.com/roswilsondesign",
		"https://www.linkedin.com/company/5845920",
		"https://twitter.com/RosWilsonDesign"]
		}
		</script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >

		<div id="header-wrapper" class="desktop">
			<header class="central-wrap ">
				<div id="logo">

					<a href="<?php echo get_home_url();?>">

						<img src="<?php echo get_template_directory_uri(); ?>/_/img/logos/header-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/_/img/logos/header-logo-big.png 2x" alt="Logo of RWD" id="desktop-logo">

					</a>

					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/_/img/logos/header-logo-small.png" alt="Smaller Logo of RWD" id="desktop-logo-small"></a>
				</div>

				<nav id="desktop-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'container' => false ) ); ?>
				</nav>

			</header> 	
		</div>

		<?php
		//Only show blog menu on blog pages
		if ( (is_home() || is_search() || is_archive() || is_single() ) && get_post_type() !== 'portfolio' ) {
		?>
		<div id="blog-cat-nav">
			<nav id="category-nav" class="central-wrap">

				<div id="category-list">
					<?php wp_nav_menu( array( 'theme_location' => 'blog-menu', 'container' => false ) ); ?>
				</div>

				<div id="blog-search">
					<?php echo get_search_form(); ?>
				</div>

			</nav>
		</div>
		<?php
		}
		?>

		<div id="mobile-header">
			<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/_/img/logos/header-logo-small.png" alt="Smaller Logo of RWD"></a>
			<a href="#" id="show-mobile-menu">Menu</a>
		</div>


		<nav id="mobile-nav">
			<a href="#" id="close-button">&times;</a>
			<ul>
			  	<?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>

				<?php wp_nav_menu( array( 'theme_location' => 'blog-menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
	


			</ul>
		</nav>

			
		<div id="wrapper">




