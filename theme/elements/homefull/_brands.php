<div class="container-fluid brands--top">
        <?php
        $top_brands = get_field('brands_top_row');
        $bottom_brands = get_field('brands_bottom_row');
        $top_1 = array_slice($top_brands, 0, floor(count($top_brands) / 2));
        $top_2 = array_slice($top_brands, floor(count($top_brands) / 2));
        $bottom_1 = array_slice($bottom_brands, 0, floor(count($bottom_brands) / 2));
        $bottom_2 = array_slice($bottom_brands, floor(count($bottom_brands) / 2));
        ?>
    <div id ="first__brand__row" class="marquee">
        <div class="marquee__wrapper">
            <div class="row justify-content-around align-items-center brands__wrapper">
                <?php foreach($top_1 as $brand):?>
                <div class="brands__brand">
                    <img src="<?php echo $brand['url']; ?>" alt="<?php echo $brand['title']; ?>" />
                </div>
                <?php endforeach;?>
            </div>
            <div class="row justify-content-around align-items-center brands__wrapper">
                <?php foreach($top_2 as $brand):?>
                <div class="brands__brand">
                    <img src="<?php echo $brand['url']; ?>" alt="<?php echo $brand['title']; ?>" />
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<div class="container brands--headline">
    <div class="row headline">
        <div class="col">
            <h1><?php the_field('brands_headline'); ?></h1>
        </div>
    </div>
</div>
<div class="container-fluid brands--bottom">
    <div id ="second__brand__row" class="marquee">
        <div class="marquee__wrapper">
            <div class="row justify-content-around align-items-center brands__wrapper">
                <?php foreach($bottom_1 as $brand):?>
                <div class="brands__brand">
                    <img src="<?php echo $brand['url']; ?>" alt="<?php echo $brand['title']; ?>" />
                </div>
                <?php endforeach;?>
            </div>
            <div class="row justify-content-around align-items-center brands__wrapper">
                <?php foreach($bottom_2 as $brand):?>
                <div class="brands__brand">
                    <img src="<?php echo $brand['url']; ?>" alt="<?php echo $brand['title']; ?>" />
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>