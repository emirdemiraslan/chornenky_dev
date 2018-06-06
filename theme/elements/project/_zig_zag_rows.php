<section class="project_section <?php echo get_row_layout();?>">
   <div class="container">
        <div class="row no-gutters quote justify-content-center align-items-center">
            <div class="col-sm-12 col-md-auto centered_section_with_icon">
                <?php if(get_sub_field('icon')):?>
                <img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('title');?>">
                <?php endif; ?>
                <h1 class="title"><?php the_sub_field('title');?></h1>
            </div>
        </div>
        <?php if(have_rows('rows')): while(have_rows('rows')): the_row(); ?>
        <div class="row zig_zag_row content_block">
            <div class="col-sm-12 col-md-6">
                <div class="desc">
                    <h2 class="title"><?php the_sub_field('title');?></h2>
                    <div class="wysiwyg"><?php the_sub_field('description');?></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>">
            </div>
        </div>
        <?php endwhile; endif;?>

    </div>

</section>