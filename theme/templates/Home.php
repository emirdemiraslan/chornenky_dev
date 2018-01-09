<?php 
/*
* Template Name: Homepage
*/
get_header(); 
?>
<main>
    <section id="hero" class="hero fixed">
        <?php get_template_part( 'elements/home/_hero' ); ?>
    </section>

    <section id="clients" class="clients">
        <?php get_template_part( 'elements/home/_clients' ); ?>
    </section>
    <section id="brands" class="brands">
        <?php get_template_part( 'elements/home/_brands' ); ?>
    </section>
    <section class="cta">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                    <a href="#" class="button bordered">check out our work</a>
                </div>
            </div>
        </div>

    </section>
</main>
<?php get_footer();
