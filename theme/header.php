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
	<style>
	#loading_container{
		width:100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		position: absolute;
		z-index:101;
		background-color: #3B3E40;
		-webkit-transition: 1s cubic-bezier(0.190, 1.000, 0.220, 1.000);
		-moz-transition: 1s cubic-bezier(0.190, 1.000, 0.220, 1.000);
		transition: 1s cubic-bezier(0.190, 1.000, 0.220, 1.000);

	}
	#loading_container .icon-logo-white{
		position: absolute;
		top: 50%;
		left: 50%;
		font-size:31px;
		color:#fff;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	.loading{
		top:0;

	}
	.loaded{
		top:-100%;
	}
	#progress_circle{
				height: 100px !important;
				width: 100px !important;
                display: block;
	}
	@keyframes rotating {
		from {
		transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		}
		to {
		transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		}
	}
	@-webkit-keyframes rotating /* Safari and Chrome */ {
		from {
		transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		}
		to {
		transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		}
	}
	.rotating {
		-webkit-animation: rotating 2s linear infinite;
		-moz-animation: rotating 2s linear infinite;
		-ms-animation: rotating 2s linear infinite;
		-o-animation: rotating 2s linear infinite;
		animation: rotating 2s linear infinite;
		transform-origin: 50% 50%;
	}
	</style>
	<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
	
</head>
<body class="site__body">
<div id="top"><?php //include_once(get_template_directory().'/assets/svg/sprite.svg'); ?></div>
<div class="loading" id="loading_container">
	<div class="icon-logo-white"></div>
	<div class"rotating progress" id="progress_circle"></div>
</div>
<div id="mobilemenu" class="mobilemenu">
	<div class="mobilemenu__head">
		<h2>MENU</h2>
		<a class="close_btn" href="javascript:void(0);"><div class="icon-close-button-white"></div></a>
	</div>
	<div class="mobilemenu__body nav">
		<?php MOZ_Menu::nav_menu('primary'); ?>
	</div>
</div>

<header class="header sticky">
	<div class="container-fluid top">
		<div class="row">
			<div class="col-8">	
				<div class="brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="brand__logo">
						<?php MOZ_SVG::svg('brand_logo'); ?>
					</span>
					<span class="brand__text">
						<strong>Chornenky</strong>Creative
					</span>
					</a>
				</div>
			</div>
			<div class="col-4 nav">
				<div class="nav--desktop hidden-md-down">
					<?php MOZ_Menu::nav_menu('primary'); ?>
				</div>
				<div class="nav--mobile hidden-lg-up">
					<a class="mobile_open" href="javascript:void(0)">
						<div class="icon-menu-button"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>


<?php // Common header content goes here. ?>
