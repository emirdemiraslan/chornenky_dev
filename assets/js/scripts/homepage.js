/* eslint-disable */

import 'jquery.scrollto';
import { marquee } from '../utils/marquee';
import { TweenMax, TimelineMax, Elastic } from 'gsap';
import 'animation.gsap';
import 'debug.addIndicators';
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

    //slideTop the clients
    var clientTweens = new TimelineMax()
    .to('#clients',0.1,{
        alpha : 1,
        onStart : function () {
            $(window).scrollTo($('#clients'), 500, {offset: -60});
        }
    })
    
    var sceneClients = new ScrollMagic.Scene({
        triggerHook:'onLeave',
        offset:1,
        duration:100

    })
    .addIndicators({name: "clientsIn"})
    .setTween(clientTweens)
    .addTo(controller);
    
    var clientOutTweens = new TimelineMax({
        onComplete : function () {
            $(window).scrollTo($('#brands'), 100, {offset: -60});

        }
    })
    .to('.clients--first', 0.7, {
        x: "+=1000px",
        filter: "blur(2px)",
        ease: Elastic.easeInOut,
        alpha: 0
    }, 0.1).to('.clients--headline', 0.7, {
        y: "+=100px",
        filter: "blur(1px)",
        ease: Elastic.easeInOut,
        alpha: 0

    }, 1).to('.clients--second', 0.7, {
        x: "-=1000px",
        filter: "blur(2px)",
        ease: Elastic.easeInOut,
        alpha : 0

    }, 0.7);

    
    

    var scenePinClients = new ScrollMagic.Scene({
        triggerElement:'#clients',
        triggerHook:'onLeave',
        offset:-60
    
    })
    .setPin('#clients')
    .addTo(controller);

    var sceneOutClients = new ScrollMagic.Scene({
        triggerElement:'#clients',
        triggerHook: 'onLeave',
        offset: -40
    })
    .addIndicators({name: 'outClients'})
    .setTween(clientOutTweens)
    .addTo(controller);



    var brandsInTween = new TimelineMax()
    .from('#brands .brands--top',0.5, {
        x: "-=1000px",
        filter: "blur(2px)",
        ease: Elastic.easeOut,
        alpha:0
    },0.5)
    .from('#brands .brands--headline', 0.5, {
        y: "+=100px",
        filter: "blur(2px)",
        ease: Elastic.easeOut,
        alpha: 0
    },0.7)
    .from('#brands .brands--bottom', 0.5, {
        x: "+=1000px",
        filter: "blur(2px)",
        ease: Elastic.easeOut,
        alpha: 0
    },1)

    var sceneInBrands = new ScrollMagic.Scene({
        triggerElement : '#brands',
        triggerHook : .1,
        offset:0
    })
    .on("leave", function (e) {
        setTimeout(function(){
            $(window).scrollTo($('#clients'), 500, {offset: -60});
        },1000);
        console.log(e.scrollDirection);
    })
    .addIndicators({name:'inBrands'})
    .setTween(brandsInTween)
    .addTo(controller)
    





});
