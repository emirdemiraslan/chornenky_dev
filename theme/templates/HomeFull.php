<?php 
/*
* Template Name: Homepage Full Section
*/
get_header(); 
?>
<main class="home">
    <section id="hero" class="hero fixed">
        <?php get_template_part( 'elements/homefull/_hero' ); ?>
    </section>

    <section id="clients" class="clients">
        <?php get_template_part( 'elements/home/_clients' ); ?>
    </section>

    <section id="brands" class="brands">
        <?php get_template_part( 'elements/home/_brands' ); ?>
    </section>

    <section class="cta testimonials">
        <?php get_template_part( 'elements/home/_bottom' ); ?>
    </section>
</main>
<?php get_footer();
