		<footer class="footer">
		<?php $common = get_field('common', 347); ?>  

			<!-- SECTION footer-blue -->
			<section class="footer-blue">
				<div class="footer-blue__container">
					<div class="footer-blue__texts">
						<div class="footer-blue__title">
							<?php echo wp_kses_post( $common['footer_text_1'] ); ?>
						</div>
						<div class="footer-blue__description">
							<?php echo wp_kses_post( $common['footer_text_2'] ); ?>
						</div>
					</div>

					<?php echo do_shortcode('[contact-form-7 id="30942a0" title="Footer Form"]'); ?>
					
				</div>
			</section>
			<!-- End of SECTION footer-blue -->


			<!-- SECTION footer-dark -->
			<section class="footer-dark">
				<div class="footer-dark__container">
					<div class="footer-dark__row-1">
						<div class="col col-1">
							<img src="<?php echo site_url('/wp-content/uploads/2025/02/logo.svg'); ?>" class="footer-logo" alt="Website logo">
							<?php echo wp_kses_post( $common['footer_text_3'] ); ?>
						</div>
						<div class="col col-2">
							<div class="footer-title">Quick links</div>
							<?php
							if (has_nav_menu('menu-footer')) {
									wp_nav_menu(array(
										'theme_location' => 'menu-footer', // location in functions.php
										'menu_class'     => false,
										'container'      => false,
									));
								}
							?>
						</div>
						<div class="col">
							<div class="footer-title">Contact info</div>
							<nav>
								<ul>
									<li>
										<a href="tel:<?php echo get_field('phone_number', 106); ?>">
											<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-phone-blue.svg" alt="Phone icon">
											<span><?php echo get_field('phone_text', 106); ?></span>
										</a>
									</li>
									<li>
										<a href="mailto:<?php echo get_field('email', 106); ?>">
											<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-mail-blue.svg" alt="Email icon">
											<span><?php echo get_field('email', 106); ?></span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="footer-dark__row-2">
						<?php echo esc_html( $common['copy'] ); ?>
					</div>
				</div>
			</section>
			<!-- End of SECTION footer-dark -->

		</footer>
	</div>












	<div id="popup" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-close-white.svg" alt="Close popup">
				</button>
				<div class="popup__text">
					<div class="popup-title">Get Started</div>
					<div class="popup-description"><?php echo wp_kses_post( $common['get_started_popup_text'] ); ?></div>
					<?php echo do_shortcode('[contact-form-7 id="68fd631" title="Get Started Popup Form"]'); ?>
				</div>
			</div>
		</div>
	</div>







	<div id="rbt-bt" aria-hidden="true" class="popup popup-opportunities">
		<div class="popup__wrapper">
			<button data-close type="button" class="popup__close">
				<img src="<?php echo site_url('/wp-content/uploads/2025/02/close-multicolor.svg'); ?>" alt="Close popup icon">
			</button>
			<div class="popup__content">

				<div class="popup__top-content top-content">
					<div class="popup-opportunities__container">
						<img src="<?php echo site_url('/wp-content/uploads/2025/02/logo.svg'); ?>" class="popup-logo" alt="Website logo">
						<div class="content-wrapper">
							<div class="top-content__title">
								<?php echo wp_kses_post( $common['rbtbt_popup']['title'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['rbtbt_popup']['subtitle_1'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['rbtbt_popup']['text_1'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['rbtbt_popup']['subtitle_2'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['rbtbt_popup']['text_2'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['rbtbt_popup']['subtitle_3'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['rbtbt_popup']['text_3'] ); ?>
							</div>
						</div>
						<div class="content-end">

						</div>
					</div>
				</div>

				<div class="popup__text">
					<div class="popup-opportunities__container">
						<div class="popup-title">How to Apply</div>
						<div class="popup-description">
							<?php echo wp_kses_post( $common['rbtbt_popup']['how_to_apply_1'] ); ?>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="e0b4f89" title="RBT/BT Popup Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>















	<div id="bcba-lba" aria-hidden="true" class="popup popup-opportunities">
		<div class="popup__wrapper">
			<button data-close type="button" class="popup__close">
				<img src="<?php echo site_url('/wp-content/uploads/2025/02/close-multicolor.svg'); ?>" alt="Close popup icon">
			</button>
			<div class="popup__content">

				<div class="popup__top-content top-content">
					<div class="popup-opportunities__container">
						<img src="<?php echo site_url('/wp-content/uploads/2025/02/logo.svg'); ?>" class="popup-logo" alt="Website logo">
						<div class="content-wrapper">
							<div class="top-content__title">
								<?php echo wp_kses_post( $common['bcbalba_popup']['title'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['bcbalba_popup']['subtitle_1'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['bcbalba_popup']['text_1'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['bcbalba_popup']['subtitle_2'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['bcbalba_popup']['text_2'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['bcbalba_popup']['subtitle_3'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['bcbalba_popup']['text_3'] ); ?>
							</div>
						</div>
						<div class="content-end">

						</div>
					</div>
				</div>

				<div class="popup__text">
					<div class="popup-opportunities__container">
						<div class="popup-title">How to Apply</div>
						<div class="popup-description">
							<?php echo wp_kses_post( $common['bcbalba_popup']['how_to_apply_2'] ); ?>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="a526462" title="BCBA/LBA Popup Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

















	<div id="fieldwork-opportunity" aria-hidden="true" class="popup popup-opportunities">
		<div class="popup__wrapper">
			<button data-close type="button" class="popup__close">
				<img src="<?php echo site_url('/wp-content/uploads/2025/02/close-multicolor.svg'); ?>" alt="Close popup icon">
			</button>
			<div class="popup__content">

				<div class="popup__top-content top-content">
					<div class="popup-opportunities__container">
						<img src="<?php echo site_url('/wp-content/uploads/2025/02/logo.svg'); ?>" class="popup-logo" alt="Website logo">
						<div class="content-wrapper">
							<div class="top-content__title">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['title'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['subtitle_1'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['text_1'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['subtitle_2'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['text_2'] ); ?>
							</div>
						</div>
						<div class="content-wrapper">
							<div class="top-content__subtitle">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['subtitle_3'] ); ?>
							</div>
							<div class="top-content__text">
								<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['text_3'] ); ?>
							</div>
						</div>
						<div class="content-end">

						</div>
					</div>
				</div>

				<div class="popup__text">
					<div class="popup-opportunities__container">
						<div class="popup-title">How to Apply</div>
						<div class="popup-description">
							<?php echo wp_kses_post( $common['fieldwork_opportunity_popup']['how_to_apply_3'] ); ?>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="e885770" title="Fieldwork Opportunity Popup Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
	<script src="https://cdn.userway.org/widget.js" data-account="QOQHWBuMmQ"></script>
</body>

</html>