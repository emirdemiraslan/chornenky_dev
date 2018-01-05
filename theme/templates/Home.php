<?php 
/*
* Template Name: Homepage
*/
get_header(); 
?>
<section class="hero">
    <?php get_template_part( 'elements/home/_hero' ); ?>
</section>

<section class="clients">
    <?php get_template_part( 'elements/home/_clients' ); ?>
</section>

<?php get_footer();
