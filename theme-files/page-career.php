<?php
/* Template Name: Career Page Template. Post Type: page */

get_header();
?>


<main class="page">

	<!-- SECTION hero -->
	<section class="hero career">

		<picture>
			<source media="(min-width: 320px) and (max-width: 1024px)" srcset="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-mob-career-section-1.webp" />
			<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/bg-pc-career-section-1.webp" class="bg-hero" alt="Section background">
		</picture>
		<picture>
			<source media="(min-width: 320px) and (max-width: 767px)" srcset="<?php echo esc_url( get_field('section_1')['main_image_mobile'] ); ?>" />
			<img src="<?php echo esc_url( get_field('section_1')['main_image_pc'] ); ?>" class="image-hero" alt="Smiling couple<?php echo esc_html( get_field('section_1')['main_image_alt'] ); ?>">
		</picture>

		<div class="hero__container">

			<div class="breadcrumps">
				<a href="<?php echo site_url('/'); ?>">Home</a>
				<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-arrow-right.svg" alt="Right arrow icon">
				<span class="gradient">Career</span>
			</div>

			<div class="hero__content">
				<div class="hero__title gradient-1">
					<?php echo  wp_kses_post( get_field('section_1')['title'] ); ?>
				</div>
				<div class="hero__description">
					<?php echo  wp_kses_post( get_field('section_1')['description'] ); ?>
				</div>

				<div class="career-row">
					<div class="career-row__col career-row__col--1">
						<picture>
							<source media="(min-width: 320px) and (max-width: 1200px)" srcset="<?php echo esc_url( get_field('section_1')['image_1_mobile'] ); ?>" />
							<img src="<?php echo esc_url( get_field('section_1')['image_1_pc'] ); ?>" alt="Teacher helping girl<?php echo esc_html( get_field('section_1')['image_1_alt'] ); ?>">
						</picture>
						<picture>
							<source media="(min-width: 320px) and (max-width: 1200px)" srcset="<?php echo esc_url( get_field('section_1')['image_2_mobile'] ); ?>" />
							<img src="<?php echo esc_url( get_field('section_1')['image_2_pc'] ); ?>" alt="Teacher helping boy<?php echo esc_html( get_field('section_1')['image_2_alt'] ); ?>">
						</picture>
						<div class="career-row__text career-row__text--1">
							<?php echo esc_html( get_field('section_1')['text_1'] ); ?>
						</div>
					</div>
					<div class="career-row__col career-row__col--2">
						<div class="career-row__text career-row__text--2">
							<?php echo esc_html( get_field('section_1')['text_2'] ); ?>
						</div>
						<div class="video-button">
							<video class="started-video__bg-video" autoplay muted loop playsinline aria-label="<?php echo esc_html( get_field('section_1')['video_alt'] ); ?>">
								<source src="<?php echo esc_url( get_field('section_1')['video'] ); ?>" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- End of SECTION hero -->


	<!-- SECTION opportunities -->
	<section class="opportunities">
		<div class="opportunities__container">

			<div class="opportunities__title">
				<?php echo  wp_kses_post( get_field('section_2')['title'] ); ?>
			</div>
			<div class="items">
				<div class="item">
					<div class="item__content">
						<div class="item__title">
							<?php echo  wp_kses_post( get_field('section_2')['subtitle_1'] ); ?>
						</div>
						<div class="item__text">
							<?php echo  wp_kses_post( get_field('section_2')['text_1'] ); ?>
						</div>
					</div>
					<div class="item__bottom">
						<a href="#" data-popup="#rbt-bt" class="item__link">Read More</a>
					</div>
				</div>

				<div class="item">
					<div class="item__content">
						<div class="item__title">
							<?php echo  wp_kses_post( get_field('section_2')['subtitle_2'] ); ?>
						</div>
						<div class="item__text">
							<?php echo  wp_kses_post( get_field('section_2')['text_2'] ); ?>
						</div>
					</div>
					<div class="item__bottom">
						<a href="#" data-popup="#bcba-lba" class="item__link">Read More</a>
					</div>
				</div>

				<div class="item">
					<div class="item__content">
						<div class="item__title">
							<?php echo  wp_kses_post( get_field('section_2')['subtitle_3'] ); ?>
						</div>
						<div class="item__text">
							<?php echo  wp_kses_post( get_field('section_2')['text_3'] ); ?>
						</div>
					</div>
					<div class="item__bottom">
						<a href="#" data-popup="#fieldwork-opportunity" class="item__link">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of SECTION opportunities -->

</main>


<?php get_footer(); ?>
