<section class="project_section <?php echo get_row_layout();?>">
        <img class="callout_img <?php if(get_sub_field('image_top_position')<0) echo 'negative'; ?>" src="<?php the_sub_field('image');?>" alt="" style="top:<?php the_sub_field('image_top_position');?>px;">
    <div class="container">
        <div class="row no-gutters mobile-reverse">
            <div class="col-md-6 col-sm-12 callout_text">
                <p><?php the_sub_field('text'); ?></p>
            </div>

            <div class="col-md-6 hidden-sm-down">
            </div>

        </div>
    </div>

</section>