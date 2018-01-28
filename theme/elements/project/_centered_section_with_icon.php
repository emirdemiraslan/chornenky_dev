<section class="project_section <?php echo get_row_layout();?>">
   <div class="container">
        <div class="row no-gutters content_block justify-content-center align-items-center">
            <div class="col-sm-12 ">
                <img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('title');?>">
                <h1 class="title"><?php the_sub_field('title');?></h1>
                <div class="wysiwyg">
                    <?php the_sub_field('description');?>
                </div>
            </div>
        </div>
    </div>
</section>