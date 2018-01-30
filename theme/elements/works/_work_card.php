<div class="col-md-6 col-sm-12">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
        <div class="work__card">
            <div class="cover_img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                <div class="work__card--hover">
                    <h2>View Project <span class="icon-arrow-circle-right"></span> </h2>
                </div>
            </div>
            <h3 class="work__card__title"><?php the_title();?></h3>
            <p class="work__card__client"><?php the_field('client'); ?></p>
            <p class="work__card__service"<?php the_field('project_type'); ?>></p>
        </div>
    </a>
</div>