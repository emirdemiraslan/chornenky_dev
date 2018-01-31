<?php 
/*
* Template Name: Contact
*/
get_header(); 
?>
<main class="contactus">

<section class="contact inherit_height">
    <div class="container-fluid inherit_height">
        <div class="row no-gutters inherit_height">
            <div class="col-md-6 col-sm-12 inherit_height">
                <div class="contact__wrapper inherit_height img-cover" style="background-image:url(<?php the_field('background'); ?>);">
                    <div class="contact__block">
                        <h1>CONTACT US</h1>
                        <p><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
                        <p><a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 inherit_height">
                <div class="map_wrapper inherit_height">
                    <div id="infoWindow" style="display:none">
                        <div class="map__info">
                            <h1><?php the_field('title');?></h1>
                            <p><?php the_field('address');?></p>
                        </div>
                    </div>
                    <div id="map" class="inherit_height"> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<script>
    var map_lat = <?php the_field('latitude'); ?>;
    var map_long = <?php the_field('longitude'); ?>;
    var center= {lat: map_lat, lng: map_long};
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: center
    });

    var image = '<?php the_field('marker_image'); ?>';
    var chrnkyMarker = new google.maps.Marker({
        position: center,
        map: map,
        icon: image
    });
    var infowindow = new google.maps.InfoWindow({
          content: document.getElementById('infoWindow').innerHTML,
          maxWidth: 260
        });
    google.maps.event.addListenerOnce(map, 'idle', function(){
        infowindow.open(map, chrnkyMarker);
    });
    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(center);
    });

    function map_recenter(map,latlng,offsetx,offsety) {
        var point1 = map.getProjection().fromLatLngToPoint(
            (latlng instanceof google.maps.LatLng) ? latlng : map.getCenter()
        );
        var point2 = new google.maps.Point(
            ( (typeof(offsetx) == 'number' ? offsetx : 0) / Math.pow(2, map.getZoom()) ) || 0,
            ( (typeof(offsety) == 'number' ? offsety : 0) / Math.pow(2, map.getZoom()) ) || 0
        );  
        map.setCenter(map.getProjection().fromPointToLatLng(new google.maps.Point(
            point1.x - point2.x,
            point1.y + point2.y
        )));
    }
    google.maps.event.addListenerOnce(map,"projection_changed", function() {
        map_recenter(map, center, 0, -100);
    });

    }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGMU0c_NLJ3l2qwcwLD1PiFrT7z_BVoPk&callback=initMap">
</script>
</main>
<?php get_footer();
