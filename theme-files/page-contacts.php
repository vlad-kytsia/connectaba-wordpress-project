<?php
/* Template Name: Contacts Page Template. Post Type: page */

get_header();
?>


<main class="page">

	<!-- SECTION hero -->
	<section class="hero contacts-page">

		<picture>
			<source media="(min-width: 320px) and (max-width: 768px)" srcset="<?php echo esc_url( get_field('main_image_mobile') ); ?>" />
			<source media="(min-width: 769px) and (max-width: 1024px)" srcset="<?php echo esc_url( get_field('main_image_tablet') ); ?>" />
			<img src="<?php echo esc_url( get_field('main_image_pc') ); ?>" class="bg-hero" alt="<?php echo esc_html( get_field('main_image_alt') ); ?>">
		</picture>

		<div class="hero__container">

			<div class="breadcrumps">
				<a href="<?php echo site_url('/'); ?>">Home</a>
				<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-arrow-right.svg" alt="Right arrow icon">
				<span class="gradient">Contacts</span>
			</div>

			<div class="hero__content">
				<div class="hero__title gradient">
					<?php echo  wp_kses_post( get_field('title') ); ?>
				</div>
				<div class="hero__description">
					<?php echo wp_kses_post( get_field('description') ); ?>
				</div>

				<div class="contacts-hero-block">
					<div class="contacts-hero-block__row">
						<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-phone-blue.svg" alt="Phone icon">
						<span>Call Us</span>
					</div>
					<div class="contacts-hero-block__row">
						<a href="tel:<?php echo esc_html( get_field('phone_number') ); ?>"><?php echo esc_html( get_field('phone_text') ); ?></a>
					</div>
				</div>


				<div class="contacts-hero-block">
					<div class="contacts-hero-block__row">
						<img src="<?php echo esc_url(bloginfo('template_url')); ?>/assets/img/icon-mail-blue.svg" alt="Mail icon">
						<span>Mail Us</span>
					</div>
					<div class="contacts-hero-block__row">
						<a href="mailto:<?php echo esc_html( get_field('email') ); ?>">office@connectaba.org<?php echo esc_html( get_field('section_1')['email'] ); ?></a>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End of SECTION hero -->

</main>


<?php get_footer(); ?>
