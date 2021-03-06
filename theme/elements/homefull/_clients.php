<!--<div class="container">
    <div class="row align-items-center justify-content-between clients__wrapper clients--first">
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/rskies-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/ubisoft-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/playboy-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/amazon-logo@2X.png" alt="rskies">
        </div>
    </div>


    <div class="row headline clients--headline">
        <div class="col-12">
            <h1>for clients like these</h1>
        </div>
    </div>

    <div class="row align-items-center justify-content-between clients__wrapper clients--second">
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/spacetime-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/aspen-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/adon-network-logo@2X.png" alt="rskies">
        </div>
        <div class="col clients__client">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/oconner-logo@2X.png" alt="rskies">
        </div>
        
    </div>    
</div>
-->

<div class="container-fluid clients--top">
    <div id ="first__client__row" class="marquee3k" data-speed="1">
        <div class="marquee__wrapper">
            <div class="row justify-content-around align-items-center clients__wrapper">
                <?php 
                $top_clients = get_field('top_row');
                //print_r($top_clients);
                foreach($top_clients as $client):?>
                <div class="clients__client ">
                    <img src="<?php echo $client['url']; ?>" alt="<?php echo $client['title']; ?>" />
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="container clients--headline">
    <div class="row headline">
        <div class="col">
            <h1><?php the_field('clients_headline'); ?></h1>
        </div>
    </div>
</div>
<div class="container-fluid clients--bottom">
    <div id ="second__client__row" class="marquee3k" data-speed="1" data-reverse=1>
        <div class="marquee__wrapper">
            <div class="row justify-content-around align-items-center clients__wrapper">
                
                
                <?php 
                $bottom_clients = get_field('bottom_row');
                foreach($bottom_clients as $client):?>
                <div class="clients__client">
                    <img src="<?php echo $client['url']; ?>" alt="<?php echo $client['title']; ?>" />
                </div>
                <?php endforeach;?>
                
            </div>
        </div>
    </div>
</div>