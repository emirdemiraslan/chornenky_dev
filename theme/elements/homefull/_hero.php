<div class="hero__partial container-fluid">
    <div class="row no-gutters">
        <div class="col-lg-6 col-md-12">
            <div class="gradient_cta darkbg">
                <div class="slogan">
                    <h3><?php the_field('hero_headline'); ?></h3>
                    <hr>
                    <h1><?php the_field('tagline'); ?></h1>
                </div>
                <div class="quote">
                    <div class="quote__wrapper">
                        <blockquote><?php the_field('quote'); ?></blockquote>
                        <p class="quote__title">-<?php the_field('quoter'); ?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 hidden-md-down">
            <div class="img-cover" style="background-image:url(<?php the_field('hero_image'); ?>);"></div>
        </div>
    </div>
    
    <script>

    </script>
</div>

