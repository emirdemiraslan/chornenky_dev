<section class="project_section <?php echo get_row_layout();?>" >
    <div class="container">
        <div class="row no-gutters mobile-reverse">
            <div class="col-lg-6 col-md-12 callout_text">
                <p><?php the_sub_field('text'); ?></p>
            </div>

            <div class="col-lg-6 ">
                <img class="callout_img " src="<?php the_sub_field('image');?>" alt="" >
            </div>

        </div>
    </div>
</section>