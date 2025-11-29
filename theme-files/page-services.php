<?php
/* Template Name: Services Page Template. Post Type: page */

get_header();
?>


<main class="page">

	<!-- SECTION hero -->
	<section class="hero services-page">

		<picture>
			<source media="(min-width: 320px) and (max-width: 1024px)" srcset="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-mob-services-section-1.webp" />
			<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-pc-services-section-1.webp" class="bg-hero" alt="background">
		</picture>
		<picture>
			<source media="(min-width: 320px) and (max-width: 769px)" srcset="<?php echo esc_url( get_field('section_1')['main_image_mobile'] ); ?>" />
			<img src="<?php echo esc_url( get_field('section_1')['main_image_pc'] ); ?>" class="image-hero" alt="<?php echo esc_html( get_field('section_1')['main_image_alt'] ); ?>">
		</picture>

		<div class="hero__container">

			<div class="breadcrumps">
				<a href="<?php echo site_url('/'); ?>">Home</a>
				<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-arrow-right.svg" alt="Right arrow icon">
				<span class="gradient">Our Services</span>
			</div>

			<div class="hero__content">
				<div class="hero__title gradient-1">
					<?php echo  wp_kses_post( get_field('section_1')['title'] ); ?>
				</div>
				<div class="hero__description hero__description--services">
					<?php echo  wp_kses_post( get_field('section_1')['description'] ); ?>
				</div>

				<div class="hero-row-bottom">
					<div class="hero-row-bottom__item-1">
						<div class="items-title gradient">
							<?php echo  wp_kses_post( get_field('section_1')['subtitle_1'] ); ?>
						</div>
						<div class="items-text">
							<?php echo  wp_kses_post( get_field('section_1')['text_1'] ); ?>
						</div>
					</div>
					<div class="hero-row-bottom__item-2">
						<div class="items-title gradient">
							<?php echo  wp_kses_post( get_field('section_1')['subtitle_2'] ); ?>
						</div>
						<div class="items-text">
							<?php echo  wp_kses_post( get_field('section_1')['text_2'] ); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End of SECTION hero -->


	<section class="started-video started-video-services">
		<video class="started-video__bg-video" autoplay muted loop playsinline aria-label="<?php echo esc_html( get_field('section_2')['video_alt'] ); ?>">
			<source src="<?php echo esc_url( get_field('section_2')['video'] ); ?>" type="video/mp4">
		</video>
		<div class="video-bg"></div>
		<div class="started-video__container">
			<div class="started-video-text">
				<?php echo  wp_kses_post( get_field('section_2')['text'] ); ?>
			</div>
		</div>
	</section>


	<!-- SECTION features -->
	<section class="features">
		<div class="features__container">

		</div>
		<div class="features__row color-1">
			<div class="features__container">
				<div class="features__number">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-1.svg" alt="">
				</div>
				<div class="features__content">
					<div class="features__title">
						<?php echo  wp_kses_post( get_field('section_3')['title_1'] ); ?>
					</div>
					<div class="features__wrapper">
						<div class="features__subtitle">
							<?php echo  wp_kses_post( get_field('section_3')['subtitle_1'] ); ?>
						</div>
						<div class="features__text">
							<?php echo  wp_kses_post( get_field('section_3')['text_1'] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="features__row color-2">
			<div class="features__container">
				<div class="features__number">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-2.svg" alt="">
				</div>
				<div class="features__content">
					<div class="features__title">
						<?php echo  wp_kses_post( get_field('section_3')['title_2'] ); ?>
					</div>
					<div class="features__wrapper">
						<div class="features__subtitle">
							<?php echo  wp_kses_post( get_field('section_3')['subtitle_2'] ); ?>
						</div>
						<div class="features__text">
							<?php echo  wp_kses_post( get_field('section_3')['text_2'] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="features__row color-3">
			<div class="features__container">
				<div class="features__number">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-3.svg" alt="">
				</div>
				<div class="features__content">
					<div class="features__title">
						<?php echo  wp_kses_post( get_field('section_3')['title_3'] ); ?>
					</div>
					<div class="features__wrapper">
						<div class="features__subtitle">
							<?php echo  wp_kses_post( get_field('section_3')['subtitle_3'] ); ?>
						</div>
						<div class="features__text">
							<?php echo  wp_kses_post( get_field('section_3')['text_3'] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="features__row color-4">
			<div class="features__container">
				<div class="features__number">
					<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-faq-4.svg" alt="">
				</div>
				<div class="features__content">
					<div class="features__title">
						<?php echo  wp_kses_post( get_field('section_3')['title_4'] ); ?>
					</div>
					<div class="features__wrapper">
						<div class="features__subtitle">
							<?php echo  wp_kses_post( get_field('section_3')['subtitle_4'] ); ?>
						</div>
						<div class="features__text">
							<?php echo  wp_kses_post( get_field('section_3')['text_4'] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of SECTION features -->

</main>


<?php get_footer(); ?>
