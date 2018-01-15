<?php 
/*
* Template Name: Services
*/
get_header(); 
?>
<main class="services">

<?php
if( have_rows('services') ):?>
   <?php while(have_rows('services')): the_row(); ?>
<section class="<?php the_sub_field('custom_class'); ?><?php if(get_sub_field('type')=='Single') echo ' single-col'; ?><?php if(get_sub_field('dark_background')) echo ' darkbg'; ?>">
    <div class="container<?php if(get_sub_field('type')=='Hero') echo '-fluid'; ?>">
        <div class="row <?php if(get_sub_field('type')=='Hero') echo 'no-gutters imgpos-'.get_sub_field('image_position'); ?>">
            <div class="<?php if(get_sub_field('type')=='Hero') echo 'col-lg-6'; ?> col-md-12">
                <div class="content_block">
                    <div class="title iconned">
                        <h1><span class="<?php the_sub_field('icon'); ?>"></span><?php the_sub_field('title'); ?></h1>
                    </div>
                    <?php if(have_rows('content_rows')): ?>
                    <div class="container">
                        <?php while(have_rows('content_rows')): the_row(); ?>
                        <div class="row no-gutters <?php echo get_row_layout();?>">
                            <?php get_template_part( 'elements/services/_'.get_row_layout() ); ?>

                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(get_sub_field('type')=='Hero'): ?>
            <div class="col-lg-6 col-md-12">
                <div class="img-cover" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>

                <img src="<?php the_sub_field('image'); ?>" class="hidden-lg-up img-fluid"/>
            
                
            </div>
            <?php endif; ?>
        </div>
    </div>

</section>
    <?php endwhile; ?>
<?php endif; ?>
 
</main>
<?php get_footer();
