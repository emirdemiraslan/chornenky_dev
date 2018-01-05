<?php 
/*
* Template Name: Homepage
*/
get_header(); 
?>
<section class="hero">
    <div class="container--fluid">
        <div class="container__row">
            <div class="container__col-12">
                <?php get_template_part( 'elements/home-hero' ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
