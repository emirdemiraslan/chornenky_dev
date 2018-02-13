<?php
/**
 * 404 Error page template
 *
 * @package @@name
 */

?>
<?php get_header(); ?>

<main class="error404">
<section class="inherit_height">
	<div class="container inherit_height">
		<div class="row justify-content-center align-items-center inherit_height">
			<div class="error404__wrapper">
				<div class="col-sm-12">
					<div class="icon-error"></div>
					<h1>WHOOPS!</h1>
					<h3>Something went wrong.</h3>
					<a href="<?php echo get_home_url(); ?>" class="button bordered">back to chornenky.com</a>
				</div>
			</div>
		</div>
	</div>
</section>
</main>

<?php get_footer();
