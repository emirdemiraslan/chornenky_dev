<?php
/**
 * Footer file common to all
 * templates
 *
 * @package @@name
 */

?>
<footer class="darkbg footer">
    <div class="container-fluid footer__top">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-5 col-sm-12 ">
                            <div class="copyright">
                                Copyright © Chornenky Creative 2017-18. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 footer-logo">
                            
                                <span class="brand__logo">
                                    <?php MOZ_SVG::svg('logo-white'); ?>
                                </span>
                            
                        </div>
                        <div class="col-md-5 col-sm-12 nav">
                            <div class="nav--footer nav--desktop">
                                <?php MOZ_Menu::nav_menu('primary'); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="container-fluid footer__bottom">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-12 col-lg-4 ">
                            <div class="nav nav--social">
                                <span>Connect With Us</span>
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
</footer>



<?php wp_footer(); ?>

<?php // </body> opens in header.php ?>
<script>
		(function(){
            
//			window.onload = function onLoad() {
				var circle = new ProgressBar.Circle('#progress_circle', {
					color: '#57A900',
					trailColor: '#686D71',
					strokeWidth: 3,
					duration: 2500,
					easing: 'easeInOut'
				});
			
			circle.set(0.05);
			function id(v){ return document.getElementById(v); }
			function loadbar() {
				var img = document.images,
					container = id('loading_container'),
					c = 0,
					tot = img.length;
                if(tot == 0) return doneLoading();

				function imgLoaded(){
					c += 1;
					var perc = (1/tot*c);
					circle.animate(perc);
					//stat.innerHTML = "Loading "+ perc;

					if(c===tot) return doneLoading();
				}
				function doneLoading(){
                    console.log('done loading');
					container.classList.remove('loading');
					container.classList.add('loaded');
				
				}
				for(var i=0; i<tot; i++) {
					var tImg     = new Image();
					tImg.onload  = imgLoaded;
					tImg.onerror = imgLoaded;
					tImg.src     = img[i].src;
				}    
			}
            document.addEventListener('DOMContentLoaded', loadbar, false);
//        }
		}());
		
	
	</script>
</body>
</html>
<?php
