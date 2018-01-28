<section class="project_section testimonials <?php echo get_row_layout();?>">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-12" style="height:<?php the_sub_field('image_rectangle_height');?>px">
                <img class="overflow_img" src="<?php the_sub_field('image');?>" alt="">
            </div>
            
            <div class="col-lg-6 col-md-12 quote align-items-center justify-content-center darkbg" style="height:<?php the_sub_field('image_rectangle_height');?>px">
                <div class="quote__wrapper">
                    <blockquote><?php the_sub_field('quote'); ?></blockquote>
                    <p class="quote__title"><?php the_sub_field('client'); ?></p>
                    <hr/>
                </div>
            </div>
        </div>
    </div>

</section>