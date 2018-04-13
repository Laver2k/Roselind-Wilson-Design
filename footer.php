			<footer class="footer">


			<div id="footer-social" class="central-wrap">

				<div class="social-block" id="social-email">
					<h3>SIGN UP TO RECEIVE OUR NEWSLETTER</h3>

					<div id="newsletter-input">
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="//roselindwilsondesign.us1.list-manage.com/subscribe/post?u=4543ac0908d47b5a0aa8e9d51&amp;id=446a631033" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							
						<div class="mc-field-group">
							<!--<label for="mce-EMAIL">Email Address </label>-->
							<input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4543ac0908d47b5a0aa8e9d51_446a631033" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
						</div>
						<!--End mc_embed_signup-->

					</div>


				</div>

				<div class="social-block" id="social-networks">
					<h3>FOLLOW US</h3>
					<a href="https://www.facebook.com/RoselindWilsonDesign" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/social/facebook.png" alt="Facebook Icon"></a>
					<a href="https://twitter.com/RosWilsonDesign" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/social/twitter.png" alt="Twitter Icon"></a>
					<a href="http://www.pinterest.com/RosWilsonDesign" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/social/pinterest.png" alt="Pinterest Icon"></a>
					<a href="https://www.instagram.com/roswilsondesign/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/social/instagram.png" alt="Instagram Icon"></a>
				</div>

			</div>

			<div class="central-wrap">
				<ul id="footer-link-list">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false, 'items_wrap'=>'%3$s' ) ); ?>
				</ul>

				<ul id="footer-info-list" >
					<li>&copy; <?php echo date("Y"); ?> ROSELIND WILSON DESIGN</li>
					<li><a onClick="gtag('event', 'contact', { event_category: 'mailto', event_action: 'Click_to_Mail'});" href="mailto:info@roselindwilsondesign.com">info@roselindwilsondesign.com</a></li>
					<li><a onClick="gtag('event', 'contact', { event_category: 'tel', event_action: 'Click_to_Call'});" href="tel:+44203 3711779">020 3371 1779</a></li>
				</ul>

				<p id="footer-address">9 Lonsdale Road London NW6 6RA</p>
			</div>



			<img src="<?php echo get_template_directory_uri(); ?>/_/img/misc/accreditations.png" id="accreditations" alt="Accreditations">


			</footer>

		<!-- Cookies -->
		<div id="cookies-banner">
			<p>We use cookies to ensure that we give you the best experience on our website. See our <a href="./privacy-policy/">Cookie Policy</a>.  If you continue to use our website, we will assume that you are happy with it. <a href="#" id="cookies-accept">OK</a></p>
		</div>

		<?php wp_footer(); ?>


		<?php
		//Only trigger the map code on the contact page.
		if (is_page( 'Contact' ) ):
		?>
		  <script>
	      function initMap() {
	        var destination = {lat: 51.5374521, lng: -0.202599599999985};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 18,
	          center: destination
	        });
	        var marker = new google.maps.Marker({
	          position: destination,
	          map: map
	        });
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNCQU_GBbZEEkgOoZh7Ic9eZ4i_Fbqgw0&callback=initMap">
	    </script>
		<?php
		endif;
		?>




	</body>

</html> 
