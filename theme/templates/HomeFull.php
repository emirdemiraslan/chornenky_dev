<?php 
/*
* Template Name: Homepage Full Section
*/
get_header(); 
?>
<div id="home_main" class="home">
    <div id="hero" class="section hero fixed">
        <?php get_template_part( 'elements/homefull/_hero' ); ?>
    </div>

    <div id="clients" class="section clients">
        <?php get_template_part( 'elements/homefull/_clients' ); ?>
    </div>

    <div id="brands" class="section brands">
        <?php get_template_part( 'elements/home/_brands' ); ?>
    </div>

    <div class="section cta testimonials">
        <?php get_template_part( 'elements/home/_bottom' ); ?>
    </div>
</div>
<?php get_footer();
