<div class="container-fluid" style="height:100%">
    <div class="row no-gutters quote lightbg col-sm-12 justify-content-center align-items-center" style="height:100%;padding:0">
        <div class="col-md-6 ">
    <?php if(have_rows('quotes')): while(have_rows('quotes')): the_row(); ?>
            <div class="quote__wrapper">
                <blockquote><?php the_sub_field('quote'); ?></blockquote>
                <p class="quote__title">-<?php the_sub_field('quoter'); ?></p>
            </div>
    <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6 col-sm-12" style="height:100%">
            <div class="cta gradient_cta darkbg justify-content-center align-items-left" style="height:100%">
            <h1>LET US JUMPSTART<br/>YOUR NEXT CAMPAIGN</h1>
            <div  style="width:auto; text-align:left">
                <a href="<?php echo get_permalink( get_page_by_path( 'work' ) ); ?>" class="button pink bordered">check out our work</a>
            </div>
            </div>
        </div>
    </div>
    
    
</div>