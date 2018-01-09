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
                        <div class="col-md-auto col-sm-12 ">
                            <div class="copyright">
                                Copyright © Chornenky Creative 2017-18. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-auto col-sm-12 footer-logo">
                            
                                <span class="brand__logo">
                                    <?php MOZ_SVG::svg('logo-white'); ?>
                                </span>
                            
                        </div>
                        <div class="col-md-auto col-sm-12 nav">
                            <div class="nav--footer nav--desktop">
                                <?php MOZ_Menu::nav_menu('primary'); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
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
</footer>



<?php wp_footer(); ?>

<?php // </body> opens in header.php ?>
</body>
</html>
<?php
