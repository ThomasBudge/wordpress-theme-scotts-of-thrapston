<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scotts_of_Thrapston
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'scotts-of-thrapston' ); ?></a>

	<header id="masthead" class="header" data-header>
		<div class="topbar">
			<div class="topbar__container container">
				<p class="topbar__tagline"><?php echo get_bloginfo( 'description' ); ?></p>

				<?php 
				$args = array(
					'menu' => 3,
					'menu_class' => 'topbar__menu',
					'container' => false
				);

				wp_nav_menu( $args );
				?>
			</div>
		</div>

		<div class="navbar">
			<a href="<?= get_home_url(); ?>" class="navbar__logo">
				<?php 
				$logo_id = get_field('logo_light', 'option');
				$logo_src = wp_get_attachment_image_src($logo_id)[0];
				$logo_alt = get_post_meta( $logo_id, '_wp_attachment_image_alt', true );
				?>
				<img src="<?= $logo_src; ?>" alt="<?= $logo_alt; ?>">
			</a>

			<div class="navbar__wrapper">
				<?php 
				$args = array(
					'menu' => 2,
					'menu_class' => 'navbar__menu',
					'container' => false
				);

				wp_nav_menu( $args );
				?>

				<button class="navbar__more">
					<div class="ellipsis">
						<div class="ellipsis__item"></div>
						<div class="ellipsis__item"></div>
						<div class="ellipsis__item"></div>
					</div>
					<span>MORE</span>
				</button>
			</div>
		</div>
	</header><!-- #masthead -->
