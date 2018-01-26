<section 
class="project_section img-cover testimonials <?php echo get_row_layout();?>"
style="background-image:url(<?php the_sub_field('image');?>)"
>
   <div class="container-fluid">
        <div class="row no-gutters quote justify-content-center align-items-center">
            <div class="col-auto">
                <div class="quote_bg">
                    <div class="client_icon">
                        <img src="<?php the_sub_field('client_icon'); ?>" alt="">
                    </div>
                    
                    <div class="quote__wrapper">
                        <blockquote><?php the_sub_field('quote'); ?></blockquote>
                        <p class="quote__title"><?php the_sub_field('client'); ?></p>
                        <hr/>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>