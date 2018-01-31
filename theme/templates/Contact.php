<?php 
/*
* Template Name: Contact
*/
get_header(); 
?>
<main class="contactus">

<section class="contact">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12">
                <div class="contact__wrapper">
                    <div class="contact__block">
                        <h1>CONTACT US</h1>
                        <p><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
                        <p><a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="map_wrapper">
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
</main>
<script>
    var map_lat = "<?php the_field('map_latitude'); ?>"
    var map_long = "<?php the_field('map_longtitude'); ?>"
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: {lat: map_lat, lng: map_long}
    });

    var image = '<?php the_field('marker_image'); ?>';
    var chrnkyMarker = new google.maps.Marker({
        position: {lat: map_lat , lng: map_long},
        map: map,
        icon: image
    });
    var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 300
        });
    }
    google.maps.event.addListenerOnce(map, 'idle', function(){
        infowindow.open(map, chrnkyMarker);
    });
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<?php get_footer();
