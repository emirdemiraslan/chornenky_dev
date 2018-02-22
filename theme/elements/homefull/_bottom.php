<div class="container">
    <?php if(have_rows('quotes')): while(have_rows('quotes')): the_row(); ?>
    <div class="row quote lightbg">
        <div class="col-sm-12 col-md-8 offset-md-2 ">
            <div class="quote__wrapper">
                <blockquote><?php the_sub_field('quote'); ?></blockquote>
                <p class="quote__title">-<?php the_sub_field('quoter'); ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
    
    <div class="row cta justify-content-center align-items-center">
        <div class="col-auto">
            <a href="<?php echo get_permalink( get_page_by_path( 'work' ) ); ?>" class="button bordered">check out our work</a>
        </div>
    </div>
</div>