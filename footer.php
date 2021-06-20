<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scotts_of_Thrapston
 */

?>

	<footer id="colophon">
		<div class="footer">
			<div class="container">
				<div class="footer__column--first">
					<div class="footer__row flex">
						<?php 
						$logo_id = get_field('logo_light', 'option');
						$logo_src = wp_get_attachment_image_src($logo_id)[0];
						$logo_alt = get_post_meta( $logo_id, '_wp_attachment_image_alt', true );
						?>
						<img class="footer__logo" src="<?= $logo_src; ?>" alt="<?= $logo_alt; ?>">

						<p class="footer__about">Established in 1920, Scotts of Thrapston has an enviable reputation for manufacturing high quality, specialist timber products including Summerhouses, Stables, Garages and Car Barns, Luxury Doors and Windows.</p>
					</div>
					<div class="footer__row">
						<p class="footer__form-text">Sign up for future updates, offers and latest news. View our <a href="#">privacy policy</a>.</p>
						<form action="" class="footer__form flex">
							<input type="email" placeholder="Email Address*">
							<button type="submit" class="button--outline"><span></span>Sign up</button>
						</form>
					</div>

					<div class="footer__row">
						<p class="footer__address">Scotts of Thrapston, Bridge Street, Thrapston, Northamptonshire, NN14 4LR</p>
					</div>
				</div>
				<div class="footer__column">
					<div class="footer__row flex">
						<?php 
						$args = array(
							'menu' => 6,
							'menu_class' => 'footer__menu',
							'container' => false
						);

						wp_nav_menu( $args );
						?>

						<?php 
						$args = array(
							'menu' => 7,
							'menu_class' => 'footer__menu',
							'container' => false
						);

						wp_nav_menu( $args );
						?>

						<?php 
						$args = array(
							'menu' => 8,
							'menu_class' => 'footer__menu',
							'container' => false
						);

						wp_nav_menu( $args );
						?>
					</div>

					<div class="footer__contact footer__row flex">
						<div class="footer__details">
							<a href="tel:01832 732366">01832 732366</a>
							<span class="seporator">|</span>
							<a href="mailto:info@scottsofthrapston.co.uk">info@scottsofthrapston.co.uk</a>
						</div>

						<div class="footer__social flex">
							<a href="#" target="_blank" class="footer__social-icon footer__social-icon--twitter">
								<svg xmlns="http://www.w3.org/2000/svg" width="17.474" height="14.2" viewBox="0 0 17.474 14.2">
									<path id="Path_364" data-name="Path 364" d="M-1138.728,1075.4q.01.231.011.464a10.13,10.13,0,0,1-10.2,10.2,10.145,10.145,0,0,1-5.5-1.61,7.241,7.241,0,0,0,.855.05,7.192,7.192,0,0,0,4.452-1.535,3.589,3.589,0,0,1-3.349-2.49,3.6,3.6,0,0,0,.674.064,3.586,3.586,0,0,0,.944-.126,3.587,3.587,0,0,1-2.876-3.515c0-.015,0-.03,0-.045a3.568,3.568,0,0,0,1.624.448,3.583,3.583,0,0,1-1.595-2.984,3.569,3.569,0,0,1,.485-1.8,10.178,10.178,0,0,0,7.389,3.746,3.6,3.6,0,0,1-.093-.817,3.585,3.585,0,0,1,3.585-3.585,3.579,3.579,0,0,1,2.617,1.132,7.174,7.174,0,0,0,2.276-.87,3.6,3.6,0,0,1-1.576,1.983,7.153,7.153,0,0,0,2.059-.564A7.283,7.283,0,0,1-1138.728,1075.4Z" transform="translate(1154.413 -1071.862)" fill="#fff"/>
								</svg>
							</a>

							<a href="#" target="_blank" class="footer__social-icon footer__social-icon--facebook">
								<svg xmlns="http://www.w3.org/2000/svg" width="7.628" height="14.689" viewBox="0 0 7.628 14.689">
									<path id="Path_365" data-name="Path 365" d="M-962.788,1073.073h-1.383c-1.084,0-1.294.515-1.294,1.271v1.667h2.586l-.336,2.611h-2.249v6.7h-2.7v-6.7h-2.255v-2.611h2.255v-1.926a3.146,3.146,0,0,1,3.359-3.452,18.48,18.48,0,0,1,2.015.1Z" transform="translate(970.416 -1070.635)" fill="#fff"/>
								</svg>
							</a>

							<a href="#" target="_blank" class="footer__social-icon footer__social-icon--pinterest">
								<svg xmlns="http://www.w3.org/2000/svg" width="11.55" height="14.92" viewBox="0 0 11.55 14.92">
									<path id="Path_362" data-name="Path 362" d="M-605.008,1081.514a2.458,2.458,0,0,1-2.094-1.069s-.5,1.976-.6,2.356a9.167,9.167,0,0,1-1.547,2.8.115.115,0,0,1-.2-.049,9.613,9.613,0,0,1,.026-3.257c.164-.7,1.1-4.67,1.1-4.67a3.293,3.293,0,0,1-.274-1.356c0-1.27.737-2.218,1.653-2.218a1.148,1.148,0,0,1,1.156,1.286,18.329,18.329,0,0,1-.756,3.042,1.326,1.326,0,0,0,1.353,1.651c1.624,0,2.716-2.086,2.716-4.557,0-1.878-1.265-3.284-3.566-3.284a4.059,4.059,0,0,0-4.219,4.1,2.472,2.472,0,0,0,.565,1.68.417.417,0,0,1,.124.478c-.042.158-.135.537-.176.688a.3.3,0,0,1-.429.215,3.3,3.3,0,0,1-1.754-3.274c0-2.435,2.053-5.354,6.125-5.354a5.121,5.121,0,0,1,5.426,4.909C-600.384,1079-602.252,1081.514-605.008,1081.514Z" transform="translate(611.934 -1070.731)" fill="#fff"/>
								</svg>
							</a>

							<a href="#" target="_blank" class="footer__social-icon footer__social-icon--instagram">
								<svg xmlns="http://www.w3.org/2000/svg" width="15.949" height="15.949" viewBox="0 0 15.949 15.949">
									<path id="Subtraction_10" data-name="Subtraction 10" d="M10.5,14.949H4.453A4.458,4.458,0,0,1,0,10.5V4.453A4.458,4.458,0,0,1,4.453,0H10.5a4.458,4.458,0,0,1,4.453,4.453V10.5A4.458,4.458,0,0,1,10.5,14.949ZM4.519,1.634A2.889,2.889,0,0,0,1.634,4.519V10.43a2.889,2.889,0,0,0,2.885,2.885H10.43a2.889,2.889,0,0,0,2.885-2.885V4.519A2.889,2.889,0,0,0,10.43,1.634Zm2.955,9.623a3.782,3.782,0,1,1,3.782-3.783A3.787,3.787,0,0,1,7.474,11.257Zm0-6.095a2.313,2.313,0,1,0,.884.177A2.3,2.3,0,0,0,7.475,5.162Zm3.789-.536a.906.906,0,1,1,.907-.907A.908.908,0,0,1,11.264,4.626Z" transform="translate(0.5 0.5)" fill="#fff" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
								</svg>

							</a>

							<a href="#" target="_blank" class="footer__social-icon footer__social-icon--linkedin">
								<svg xmlns="http://www.w3.org/2000/svg" width="13.666" height="13.641" viewBox="0 0 13.666 13.641">
									<path id="Path_363" data-name="Path 363" d="M-429.539,1084.335h-2.835v-9.112h2.835Zm-1.417-10.357a1.641,1.641,0,0,1-1.643-1.642,1.641,1.641,0,0,1,1.643-1.642,1.642,1.642,0,0,1,1.641,1.642A1.642,1.642,0,0,1-430.955,1073.978Zm12.023,10.357h-2.831V1079.9c0-1.057-.018-2.416-1.472-2.416-1.473,0-1.7,1.151-1.7,2.34v4.507h-2.828v-9.112h2.714v1.246h.039A2.974,2.974,0,0,1-422.33,1075c2.867,0,3.4,1.887,3.4,4.341Z" transform="translate(432.598 -1070.694)" fill="#fff"/>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>

			<img class="footer__image"  data-aos="fade-up" data-aos-duration="1500" src="<?= get_template_directory_uri() . '/resources/img/drawing.png' ?>" alt="Scotts of Thrapston Sketch">
		</div>

		<div class="copyright container">
			<div class="copyright__content">
				<p>Copyright © Scotts of Thrapston 2021</p>
				<span class="seporator">|</span>
				<a href="#">Privacy Policy</a>
				<span class="seporator">|</span>
				<a href="#">Terms and Conditions</a>
			</div>

			<p class="copyright__brave">
				Website Design by&nbsp;<a href="https://www.brave.agency/" target="_blank">Brave Agency</a>
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
