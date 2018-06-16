<?php 
/*
* Project
*/
get_header(); 

//$query = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => -1 ) );
?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <?php
 $projects = get_posts( array( 'post_type' => 'project', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => -1 ) );
 $firstPost =  $projects[count($projects)-1];// first post
 $lastPost  = $projects[0]; // Last post

 ?>
    <article class="project">
        <header class="project_header" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
            <nav class="project_nav" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                <div class="semi_trans_bg">

                    <a href="<?php echo get_permalink( get_page_by_path( 'work' ) ); ?>" class="all_projects">
                        <span class="icon-projects"></span>
                        <span class="hidden-lg-down">All Projects</span>
                    </a>
                    <!--<h1 class="nav_title"><?php the_title(); ?></h1>-->
                    <?php $next_post = empty(get_previous_post()) ? $lastPost : get_previous_post();
                    ?>
                    <a class="project_link next" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                            <span class="hidden-lg-down">Next Project</span>
                            <span class="icon-small-arrow-right"></span>
                    </a>
                    
                    <?php $prev_post = empty(get_next_post()) ? $firstPost : get_next_post() ; 
                     ?>
                    <a class="project_link prev" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
                            <span class="icon-small-arrow-left"></span>
                            <span class="hidden-lg-down">Previous Project</span>
                        </a>
                    
                </div>
            </nav>
            <div class="header_meta <?php if(get_field('dark_text_color')) echo 'dark';?>">
                <h1 class="title">
                    <?php the_title();?>
                </h1>
                <p class="client">
                    <?php the_field('client');?>
                </p>
                <p class="type">
                    <?php the_field('project_type');?>
                </p>
            </div>
        </header>

    <?php
    if( have_rows('sections') ): while(have_rows('sections')): the_row(); ?>
        
            <?php get_template_part( 'elements/project/_'.get_row_layout() ); ?>

    <?php endwhile; endif;?>

    <section class="cta project_section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                    <h1 class="title">Like What You See?</h1>
                    <h3>Let's get started!</h3>
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="button bordered">Reach Out</a>
                </div>
            </div>
        </div>

    </section>
    </article>
<?php endwhile; endif;?>
<?php get_footer(); ?>