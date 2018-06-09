/* eslint-disable */
(function($){
    window.onscroll = function (ev) {
        if ((window.innerHeight + window.scrollY+160) >= document.body.scrollHeight) {
            // you're at the bottom of the page
            console.log("Bottom of page");
            $('.project_nav .project_link.next').addClass('blink');
        }
        else {
            $('.project_nav .project_link.next').removeClass('blink');

        }
    };
})(jQuery);