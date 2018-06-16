/* eslint-disable */
(function($){
    var iPadVersion = false;
    function setHeight(){
        $.each($('.setHeightByContainer'), function (i) { 
            $(this).find('img').hide();
            
            $(this).find('.img-cover').height($(this).siblings('.col-lg-6').height());
        });
    }
    window.ondevicemotion = function (event) {
        if (!iPadVersion && navigator.platform.indexOf("iPad") != -1) {
            iPadVersion = 1;
            if (event.acceleration) iPadVersion = window.devicePixelRatio;
        }
        window.ondevicemotion = null;
    }
    if (iPadVersion < 2){

        window.addEventListener('imagesLoaded', function (e) { 
            setHeight();
        });
        window.onorientationchange = function (event){
            console.log(event);
            setHeight();
        }

    }
    
    
})(jQuery);