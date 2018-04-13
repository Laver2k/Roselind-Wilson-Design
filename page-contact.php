	<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>


	<div id="contact-page" class="page-wrapper grey-background footer-padding">


		<picture>
		  <source srcset="<?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero-640.webp 640w, <?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero.webp 1600w" type="image/webp">
		  <source srcset="<?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero-640.jpg 640w, <?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero.jpg 1600w" type="image/jpeg"> 
		  <img src="<?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero.jpg" srcset="<?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero-640.jpg 640w, <?php echo get_template_directory_uri(); ?>/_/img/contact/contact-hero.jpg 1600w" alt="Desk with magazine and tools" id="contact-hero" class="page-hero">
		</picture>

			<!-- Contact Intro -->
			<div id="contact-intro" class="central-wrap hero-overlap">
				<img src="<?php echo get_template_directory_uri(); ?>/_/img/contact/lonsdale-road-sign.png" id="lonsdale-road" class="circle-overlap" alt="Street Sign for Lonsdal Road">
				<h2>Contact Us</h2>
				
				<div id="contact-wrapper">

					<div id="contact-description">
						<p>At Roselind Wilson Design our team of professional interior designers, architectural designers and luxury experts are focused to thoughtfully interpret and deliver a diverse scope of briefs across residential, corporate and hospitality projects.</p>
						<p>Our bright, spacious studio in Queen’s Park is a welcoming sanctuary where clients can discuss ideas or design concepts. </p>
						<p>If you'd like to find out more about what we do and how we do it, please get in touch using the form on this page or give us a call on <a id="contact-form-phone" onClick="gtag('event', 'contact', { event_category: 'tel', event_action: 'Click_to_Call'});" href="tel:+44203 3711779">+44(0)203 371 1779</a>.</p>
					</div>

					<div id="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="47" title="Send a Message"]'); ?>
					</div>

				</div>

			</div>
			<!-- End of Contact Intro-->

			<div id="map-wrapper" class="central-wrap">
				<div id="map-container">
					<div id="map"></div>
				</div>
				<div id="address">
					<div>
						<p class="company-name">Roselind Wilson Design</p>
						<p class="address">9 Lonsdale Road, London NW6 6RA</p>

						<p class="tel">Tel: <a onClick="gtag('event', 'contact', { event_category: 'tel', event_action: 'Click_to_Call'});" href="tel:+44203 3711779">+44 (0) 203 371 1779</a></p>
						<p class="email"><a onClick="gtag('event', 'contact', { event_category: 'mailto', event_action: 'Click_to_Mail'});" href="mailto:info@roselindwilsondesign.com">info@roselindwilsondesign.com</a></p>

						<p class="press-enquiries">Press enquiries</p>

						<p class="press-text">Please contact: Geraldine Wilson</p>
						<p class="press-text">Chief Marketing Officer</p>
						<p class="press-text">Tel: <a onClick="gtag('event', 'contact', { event_category: 'tel', event_action: 'Click_to_Call'});" href="tel:+442030580848">+44 (0) 203 058 0848</a></p>
						<p class="press-text"><a onClick="gtag('event', 'contact', { event_category: 'mailto', event_action: 'Click_to_Mail'});" href="mailto:geraldine@roselindwilsondesign.com">geraldine@roselindwilsondesign.com</a></p>
					
					</div>
				</div>
			</div>




	</div>



<?php get_footer(); ?>
