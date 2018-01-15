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

    var default_ease = SlowMo.easeOut;

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
        offset:25,
        duration:620

    })
    .setTween(clientTweens)
    .addTo(controller)
    //.addIndicators({name: "clientsIn"})
    
    var clientOutTweens = new TimelineMax({
        onComplete : function () {
            $(window).scrollTo($('#brands'), 100, {offset: -60});

        }
    })
    .to('.clients--first', 0.5, {
        x: "+=1000px",
        filter: "blur(2px)",
        ease: default_ease,
        alpha: 0
    }, 0.1).to('.clients--headline', 0.3, {
        y: "+=50px",
        filter: "blur(1px)",
        ease: default_ease,
        alpha: 0

    }, 0).to('.clients--second', 0.5, {
        x: "-=1000px",
        filter: "blur(2px)",
        ease: default_ease,
        alpha : 0

    }, 0.2);

    
    

    var scenePinClients = new ScrollMagic.Scene({
        triggerElement:'#clients',
        triggerHook:'onLeave',
        offset:-60
    
    })
    .setPin('#clients')
    .addTo(controller);
    //.addIndicators({name:'ClientsPin'})

    var sceneOutClients = new ScrollMagic.Scene({
        triggerElement:'#clients',
        triggerHook: 'onLeave',
        offset: 0
    })
    .setTween(clientOutTweens)
    .addTo(controller);
    //.addIndicators({name: 'outClients'})



    var brandsInTween = new TimelineMax()
    .from('#brands .brands--top',0.5, {
        x: "-=1000px",
        filter: "blur(2px)",
        ease: default_ease,
        alpha:0
    },0.1)
    .from('#brands .brands--headline', 0.3, {
        y: "+=50px",
        filter: "blur(1px)",
        ease: default_ease,
        alpha: 0
    },0)
    .from('#brands .brands--bottom', 0.5, {
        x: "+=1000px",
        filter: "blur(2px)",
        ease: default_ease,
        alpha: 0
    },0.2)

    var sceneInBrands = new ScrollMagic.Scene({
        triggerElement : '#brands',
        triggerHook : .1,
        offset:0
    })
    .on("leave", function (e) {
        if(e.scrollDirection === "REVERSE"){
            setTimeout(function(){
                
                $(window).scrollTo({ left: 0, top: 625 }, 500, {offset: -60});
            },1000);

        }
    })
    .setTween(brandsInTween)
    .addTo(controller)
    //.addIndicators({name:'inBrands'})

    
    


//insert icons to list

    $("div[class*='list-icon']").each(function(i){
        var icon_name = $(this).attr('class').split(' ').pop();
        var icon_to_prepend = icon_name.substring(5,icon_name.length);
        $(this).find('ul li').prepend("<span class='"+icon_to_prepend+"'></span>");
    });


});
