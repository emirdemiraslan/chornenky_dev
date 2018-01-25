<?php 
/*
* Project
*/
get_header(); 
?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="project">

    <?php
    if( have_rows('sections') ):?>
    <?php while(have_rows('sections')): the_row(); ?>
        <section class="row no-gutters <?php echo get_row_layout();?>">
            <?php get_template_part( 'elements/project/_'.get_row_layout() ); ?>

        </section>

    <?php
        endwhile;
    endif;
    ?>
    </article>
<?php endif; ?>