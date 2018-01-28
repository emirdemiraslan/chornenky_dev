<section class="project_section single-col <?php echo get_row_layout();?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content_block">
                    <h1 class="title"><?php the_sub_field('title');?></h1>
                    <div class="wysiwyg">
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>