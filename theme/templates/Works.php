<?php 
/*
* Template Name: Works
*/
get_header(); 

// args
$args = array(
	'numberposts'	=> -1,
    'post_type'		=> 'project',
    'orderby'       => 'date',
    'order'         => 'DESC'
);


// query
$the_query = new WP_Query( $args );
?>
<main class="works">

<section class="works__title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content_block">
                    <div class="page_title">
                        <h1>OUR WORK</h1>
                    </div>
                    <!--
                    <div class="works__filter">
                        <a href="#">Most Recent <span class="icon-triangle-down"></span> </a>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="works__container">
    <div class="container">
        <div class="row">
        <?php if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();?>
        <?php get_template_part( 'elements/works/_work_card'); ?>
        <?php endwhile; endif;?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
        </div>
    </div>
</section>
 
</main>
<?php get_footer();
