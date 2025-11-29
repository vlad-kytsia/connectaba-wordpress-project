<?php
/* Template Name: Home Page Template. Post Type: page */

get_header();
?>


<main class="page">

	<!-- SECTION hero -->
	<section class="hero main-page">

		<picture>
			<source media="(min-width: 320px) and (max-width: 1024px)" srcset="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-mob-home-section-1.webp" />
			<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-pc-home-section-1.webp" class="bg-hero" alt="Section background">
		</picture>
		<picture>
			<source media="(min-width: 320px) and (max-width: 768px)" srcset="<?php echo esc_url( get_field('section_1')['main_image_mobile'] ); ?>" />
			<source media="(min-width: 769px) and (max-width: 1024px)" srcset="<?php echo esc_url( get_field('section_1')['main_image_tablet'] ); ?>" />
			<img src="<?php echo esc_url( get_field('section_1')['main_image_pc'] ); ?>" class="image-hero" alt="<?php echo esc_html( get_field('section_1')['main_image_alt'] ); ?>">
		</picture>

		<div class="hero__container">
			<div class="hero__content">
				<div class="hero__title gradient">
					<?php echo  wp_kses_post( get_field('section_1')['title'] ); ?>
				</div>
				<div class="hero__subtitle">
					<?php echo  wp_kses_post( get_field('section_1')['subtitle'] ); ?>
				</div>
				<div class="hero__description">
					<?php echo wp_kses_post( get_field('section_1')['description'] ); ?>
				</div>

				<div class="hero-row">
					<div class="hero-row__col-1">
						<div class="col-1-text">
							<div class="line-1">
								<?php echo wp_kses_post( get_field('section_1')['text_1'] ); ?>
							</div>
							<div class="line-2 gradient-1">
								<?php echo wp_kses_post( get_field('section_1')['text_2'] ); ?>
							</div>
						</div>
						<picture>
							<source media="(min-width: 320px) and (max-width: 1024px)" srcset="<?php echo esc_url( get_field('section_1')['image_1_mobile'] ); ?>" />
							<img src="<?php echo esc_url( get_field('section_1')['image_1_pc'] ); ?>" alt="<?php echo esc_url( get_field('section_1')['image_1_alt'] ); ?>">
						</picture>
					</div>
					<div class="hero-row__col-2">
						<div data-popup="#popup" class="get-started__item get-started__item--button no-border">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-diagonal-arrow.svg" alt="Open popup icon">
							<button type="submit" class="button">
								<div class="button-text-1">
									<?php echo wp_kses_post( get_field('section_1')['button_text_1'] ); ?>
								</div>
								<div class="button-text-2">
									<?php echo wp_kses_post( get_field('section_1')['button_text_2'] ); ?>
								</div>
							</button>
						</div>
					</div>
					<div class="hero-row__col-3">
						<video class="started-video__bg-video" autoplay muted loop playsinline aria-label="<?php echo esc_html( get_field('section_1')['video_1_alt'] ); ?>">
							<source src="<?php echo esc_url( get_field('section_1')['video_1'] ); ?>" type="video/mp4">
						</video>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End of SECTION hero -->


	<!-- SECTION only-text -->
	<section class="only-text">
		<div class="only-text__container">
			<div class="only-text__row">
				<div class="only-text__col-big">
					<?php echo wp_kses_post( get_field('section_2')['text_1'] ); ?>
				</div>
				<div class="only-text__col-small">
					<ul>
						<li>
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-heart.svg" alt="Heart icon">
							<span><?php echo esc_html( get_field('section_2')['text_2'] ); ?></span>
						</li>
						<li>
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-bulb.svg" alt="ABA therapy icon">
							<span><?php echo esc_html( get_field('section_2')['text_3'] ); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End of SECTION only-text -->


	<!-- SECTION services -->
	<section class="services">
		<div class="services__container">
			<div class="services__title">
				<?php echo wp_kses_post( get_field('section_3')['title'] ); ?>
			</div>
			<div class="services__items">
				<div class="services__item services__item--1">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-person.svg" alt="Person icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_1'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_1'] ); ?>
					</div>
				</div>
				<div class="services__item services__item--2">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-home.svg" alt="Home icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_2'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_2'] ); ?>
					</div>
				</div>
				<div class="services__item services__item--3">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-management.svg" alt="Puzzle icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_3'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_3'] ); ?>
					</div>
				</div>
				<div class="services__item services__item--4">
					<picture>
						<source media="(min-width: 320px) and (max-width: 700px)" srcset="<?php echo esc_url( get_field('section_3')['image_1_mobile'] ); ?>" />
						<img src="<?php echo esc_url( get_field('section_3')['image_1_pc'] ); ?>" class="services-bg" alt="<?php echo esc_url( get_field('section_1')['image_1_alt'] ); ?>" loading="lazy">
					</picture>
				</div>
				<div class="services__item services__item--5">
					<picture>
						<source media="(min-width: 320px) and (max-width: 600px)" srcset="<?php echo esc_url( get_field('section_3')['image_2_mobile'] ); ?>" />
						<img src="<?php echo esc_url( get_field('section_3')['image_2_pc'] ); ?>" class="services-bg" alt="<?php echo esc_url( get_field('section_3')['image_2_alt'] ); ?>" loading="lazy">
					</picture>
				</div>
				<div class="services__item services__item--6">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-skill.svg" alt="Skill icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_4'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_4'] ); ?>
					</div>
				</div>
				<div class="services__item services__item--7">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-training.svg" alt="Training icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_5'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_5'] ); ?>
					</div>
				</div>
				<div class="services__item services__item--8">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-community.svg" alt="Community icon" class="services-icon">
					<div class="services__subtitle">
						<?php echo wp_kses_post( get_field('section_3')['subtitle_6'] ); ?>
					</div>
					<div class="services__text">
						<?php echo wp_kses_post( get_field('section_3')['text_6'] ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of SECTION services -->


	<!-- SECTION why -->
	<section class="why">
		<div class="why__container">
			<div class="why__row">
				<div class="why__title gradient-1">
					<?php echo wp_kses_post( get_field('section_4')['title'] ); ?>
				</div>
				<div class="why__description">
					<?php echo wp_kses_post( get_field('section_4')['description'] ); ?>
				</div>
			</div>
			<div class="why__items">
				<div class="why__item why__item--1">
					<div class="why__number">
						1
					</div>
					<div class="why__wrapper">
						<div class="why__subtitle">
							<?php echo wp_kses_post( get_field('section_4')['subtitle_1'] ); ?>
						</div>
						<div class="why__text">
							<?php echo wp_kses_post( get_field('section_4')['text_1'] ); ?>
						</div>
					</div>
				</div>
				<div class="why__item why__item--2">
					<div class="why__number">
						2
					</div>
					<div class="why__wrapper">
						<div class="why__subtitle">
							<?php echo wp_kses_post( get_field('section_4')['subtitle_2'] ); ?>
						</div>
						<div class="why__text">
							<?php echo wp_kses_post( get_field('section_4')['text_2'] ); ?>
						</div>
					</div>
				</div>
				<div class="why__item why__item--3">
					<div class="why__number">
						3
					</div>
					<div class="why__wrapper">
						<div class="why__subtitle">
							<?php echo wp_kses_post( get_field('section_4')['subtitle_3'] ); ?>
						</div>
						<div class="why__text">
							<?php echo wp_kses_post( get_field('section_4')['text_3'] ); ?>
						</div>
					</div>
				</div>
				<div class="why__item why__item--4">
					<div class="why__number">
						4
					</div>
					<div class="why__wrapper">
						<div class="why__subtitle">
							<?php echo wp_kses_post( get_field('section_4')['subtitle_4'] ); ?>
						</div>
						<div class="why__text">
							<?php echo wp_kses_post( get_field('section_4')['text_4'] ); ?>
						</div>
					</div>
				</div>
				<div class="why__item why__item--5">
					<div class="why__number">
						5
					</div>
					<div class="why__wrapper">
						<div class="why__subtitle">
							<?php echo wp_kses_post( get_field('section_4')['subtitle_5'] ); ?>
						</div>
						<div class="why__text">
							<?php echo wp_kses_post( get_field('section_4')['text_5'] ); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End of SECTION why -->


	<!-- SECTION started-video -->
	<section class="started-video">
		<video class="started-video__bg-video" autoplay muted loop playsinline aria-label="<?php echo esc_html( get_field('section_5')['video_2_alt'] ); ?>">
			<source src="<?php echo esc_url( get_field('section_5')['video_2'] ); ?>" type="video/mp4">
		</video>

		<div class="video-bg"></div>
		<div class="started-video__container">
			<div class="started-video__title">
				<?php echo wp_kses_post( get_field('section_5')['title'] ); ?>
			</div>
			<div class="started-video__wrapper">
				<div class="started-video__description">
					<?php echo wp_kses_post( get_field('section_5')['description'] ); ?>
				</div>
				<div class="get-started__item get-started__item--button no-border">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-diagonal-arrow.svg" alt="Contact button icon">
					<button data-popup="#popup" class="button">
						<div class="button-text-1"><?php echo esc_html( get_field('section_5')['button_text_1'] ); ?></div>
						<div class="button-text-2"><?php echo esc_html( get_field('section_5')['button_text_2'] ); ?></div>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- End of SECTION started-video -->


	<!-- SECTION how -->
	<section class="how">
		<picture>
			<source media="(min-width: 320px) and (max-width: 768px)" srcset="<?php echo esc_url( get_field('section_6')['image_mobile'] ); ?>" />
			<source media="(min-width: 769px) and (max-width: 1024px)" srcset="<?php echo esc_url( get_field('section_6')['image_tablet'] ); ?>" />
			<img src="<?php echo esc_url( get_field('section_6')['image_pc'] ); ?>" class="how__bg" alt="Happy boy<?php echo esc_html( get_field('section_6')['image_alt'] ); ?>" loading="lazy">
		</picture>
		<div class="how__container">
			<div class="how__row">
				<div class="how__col">
					<div class="how__title gradient-1">
						<?php echo wp_kses_post( get_field('section_6')['title'] ); ?>
					</div>
					<div class="how__description">
						<?php echo wp_kses_post( get_field('section_6')['description'] ); ?>
					</div>
				</div>
				<div class="how__col">
					<!-- Spoilers: -->
					<div data-spollers data-one-spoller class="spollers">
						<details data-open class="spollers__item">
							<summary class="spollers__title">
								<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-1.svg" alt="Number 1">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_title_1'] ); ?>
							</summary>
							<div class="spollers__body">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_content_1'] ); ?>
							</div>
						</details>
						<details class="spollers__item">
							<summary class="spollers__title">
								<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-2.svg" alt="Number 2">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_title_2'] ); ?>
							</summary>
							<div class="spollers__body">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_content_2'] ); ?>
							</div>
						</details>

						<details class="spollers__item">
							<summary class="spollers__title">
								<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-3.svg" alt="Number 3">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_title_3'] ); ?>
							</summary>
							<div class="spollers__body">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_content_3'] ); ?>
							</div>
						</details>

						<details class="spollers__item">
							<summary class="spollers__title">
								<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-4.svg" alt="Number 4">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_title_4'] ); ?>
							</summary>
							<div class="spollers__body">
								<?php echo wp_kses_post( get_field('section_6')['spoiler_content_4'] ); ?>
							</div>
						</details>
					</div><!-- Spoilers end -->
				</div>
			</div>

		</div>
	</section>
	<!-- End of SECTION how -->


	<!-- SECTION testimonials -->
	<section class="testimonials">
		<div class="testimonials__container">
			<div class="testimonials__title">
				<?php echo wp_kses_post( get_field('section_7')['title'] ); ?>
			</div>
			<!-- Slider wrapper -->
			<div class="testimonials__slider swiper">
				<!-- The moving part of the slider -->
				<div class="testimonials__wrapper swiper-wrapper">
					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_1'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_1'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_1'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_1'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_1'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_2'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_2'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_2'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_2'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_2'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_3'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_3'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_3'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_3'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_3'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_4'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_4'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_4'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_4'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_2'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
					if(get_field('section_7')['text_5'] ) {
					?>
					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_5'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_5'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_5'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_5'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_5'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					} 
					?>

					<?php
					if(get_field('section_7')['text_6'] ) {
					?>
					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_6'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_6'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_6'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_6'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_6'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					} 
					?>

					<?php
					if(get_field('section_7')['text_7'] ) {
					?>
					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_7'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_7'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_7'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_7'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_7'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					} 
					?>

					<?php
					if(get_field('section_7')['text_8'] ) {
					?>
					<!-- Slide -->
					<div class="testimonials__slide swiper-slide">
						<div class="review">
							<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-review.svg" class="review-decor" alt="Review icon">
							<div class="review__text">
								<?php echo wp_kses_post( get_field('section_7')['text_8'] ); ?>
							</div>
							<div class="review__footer">
								<img src="<?php echo esc_url( get_field('section_7')['reviewer_photo_8'] ); ?>" alt="<?php echo esc_html( get_field('section_7')['reviewer_name_8'] ); ?> photo" loading="lazy">
								<div class="review__wrapper">
									<div class="review__name">
										<?php echo esc_html( get_field('section_7')['reviewer_name_8'] ); ?>
									</div>
									<div class="review__info">
										<?php echo wp_kses_post( get_field('section_7')['reviewer_info_8'] ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					} 
					?>

				</div>

				<div class="swiper-pagination" <?php if(get_field('section_7')['text_5'] ) {echo " style=\"display: flex;\""; }?>></div>
			</div>
		</div>
	</section>
	<!-- End of SECTION testimonials -->

</main>



<?php get_footer(); ?>
