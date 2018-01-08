<?php
/**
 * Header file common to all
 * templates
 *
 * @package @@name
 */

?>
<!doctype html>
<html class="site no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php get_template_part( 'assets/favicons/favicons' ); ?>
	<?php wp_head(); ?>
</head>
<body class="site__body">
<div id="top"><?php //include_once(get_template_directory().'/assets/svg/sprite.svg'); ?></div>


<header class="header sticky">
	<div class="container-fluid top">
		<div class="row">
			<div class="col-sm-4">	
				<div class="brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="brand__logo">
						<?php MOZ_SVG::svg('brand_logo'); ?>
					</span>
					<span class="brand__text hidden-sm-down">
						<strong>Chornenky</strong>Creative
					</span>
					</a>
				</div>
			</div>
			<div class="col-sm-8 nav">
				<div class="nav--desktop hidden-sm-down">
					<?php MOZ_Menu::nav_menu('primary'); ?>
				</div>
				<div class="nav--mobile hidden-sm-up">
					<?php MOZ_Menu::nav_menu('primary'); ?>
				</div>
			</div>
		</div>
	</div>
</header>


<?php // Common header content goes here. ?>
