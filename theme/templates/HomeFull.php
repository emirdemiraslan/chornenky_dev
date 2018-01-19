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

    <div id="clients" class="section clients scalable">
        <?php get_template_part( 'elements/homefull/_clients' ); ?>
    </div>
    <div class="section empty">

    </div>

    <div id="brands" class="section brands scalable">
        <?php get_template_part( 'elements/homefull/_brands' ); ?>
    </div>

    <div class="section cta testimonials scalable">
        <?php get_template_part( 'elements/homefull/_bottom' ); ?>
    </div>
</div>
<?php get_footer();
