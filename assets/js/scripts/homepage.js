/* eslint-disable */

import 'jquery.scrollto';
import { marquee } from '../utils/marquee';
import { TweenMax, TimelineMax, Elastic } from 'gsap';
import 'animation.gsap';
import * as ScrollMagic from 'scrollmagic';

$(document).ready(function(){
    $('[data-target^="#"]').click(function(e){
        e.preventDefault();
        var target = $(e.currentTarget).data('target');
        $(window).scrollTo($(target), 500, {offset:-60});

    });

    marquee('right', 20, $('#first__brand__row')[0]);
    marquee('left', 10, $('#second__brand__row')[0]);

    var controller = new ScrollMagic.Controller();

    var clientTweens = new TimelineMax()
    .from('.clients--first',0.5,{
        x: "-=1000px",
        filter : "blur(2px)",
        ease : Elastic.easeInOut,
        alpha:0

    })
    .from('.clients--headline', 0.5, {
        y: "-=100px",
        filter: "blur(2px)",
        ease: Elastic.easeInOut,
        alpha: 0

    })
    .from('.clients--second', 0.5, {
        x: "+=1000px",
        filter: "blur(2px)",
        ease: Elastic.easeInOut,
        alpha: 0

    })
    

    var scene = new ScrollMagic.Scene({
        triggerElement: '#clients'
    })
    .setTween(clientTweens)
    .addTo(controller);



});
