/* eslint-disable */

import 'fullpage.js';
//import { marquee } from '../utils/marquee';
import { TimelineLite, Sine, Circ } from 'gsap';
import { Marquee3k } from '../vendor/marquee3k';

var default_ease = Circ.easeInOut;
var headline_ease = Sine.easeInOut;
var running = 0;

function set_div_width(parent){
    $(parent).each(function(i){
        var _width = 0;
        $(this).children('div').each(function(j){
            _width += $(this).outerWidth(true) + 80;
        })
        $(this).css({width: _width +'px'});
    });

}
function start_marque(){
    //set width of clients row
    set_div_width('.clients__wrapper');
    set_div_width('.brands__wrapper');
    
    //set marquees for brand logos
   /* marquee('right', 10, $('#first__brand__row')[0]);
    marquee('left', 10, $('#second__brand__row')[0]);
    marquee('right', 20, $('#first__client__row')[0]);
    marquee('left', 20, $('#second__client__row')[0]);
    */
   Marquee3k.init();

}
    $(document).ready(function(e){

        
        window.addEventListener('imagesLoaded',function(e){start_marque()});

        //resize sections

        function resizeSections(){
            
            var scale = $('.brands .fp-tableCell').height() / 700;
            if(scale > 1) scale = 1;
            //console.log("scale : "+ scale);

            

            $('.scalable .fp-tableCell').css({
                transform: 'scale(' + scale + ')'
                
            });
            $('.scalable.brands .fp-tableCell .container-fluid, .scalable.clients .fp-tableCell .container-fluid').css({
                width:100/scale+'%',
                position:'relative',
                left: (100-100/scale)/2+'%'
            });
            
        }

        //set fullpage
        //var footerHeight = ($(window).width() > 768 ) ? '124px' : '0px';
        //console.log('footer: '+ footerHeight);
        $('#home_main').fullpage({
            paddingTop:'60px',
            paddingBottom:0,//footerHeight,
            afterRender:resizeSections,
            afterResize: resizeSections,
            scrollOverflow: true,
            onLeave: function (index, nextIndex, direction) {
                
                

                //after leaving section 2
                
                if (index == 2 && nextIndex == 3) {
                    //alert("Going to section 3!");
                    if(running<1){
                        console.log("next section : "+nextIndex);
                        clientOutTweens.play();
                        //brandsInTween.play();
                    }
                    return false;

                }

                else if (index == 4 && nextIndex == 3) {
                    if(running<1){

                        //clientOutTweens.reverse();
                        brandsInTween.reverse();
                       

                    }
                    return false;
                }
                if (nextIndex == 5){
                    $('#toDown').fadeOut();
                }
                else {
                    $('#toDown').fadeIn();
                }
                
            }
        });



        //Tweens
        
        var clientOutTweens = new TimelineLite({
            paused:true,
            repeat:0,
            onStart: function() {
                running = 1;

            },
            onComplete: function () {
                running=0;
                $.fn.fullpage.silentMoveTo(4, 0);
                brandsInTween.play();
            }
        })/*
        .to('#clients', 0.7, {
            x: "+=1100px",
            //filter : "blur(1px)",
            ease : default_ease,
            alpha : 0
        })*/
            .to('.clients--top', 0.5, {
                x: "+=1000px",
                ease: default_ease,
                alpha: 0
            }, 0.1)
            .to('.clients--headline', 0.5, {
                y: "+=50px",
                filter: "blur(1px)",
                ease: headline_ease,
                alpha: 0

            }, 0.3)
            .to('.clients--bottom', 0.5, {
                x: "-=1000px",
                ease: default_ease,
                alpha: 0

            }, 0.2);
        

        var brandsInTween = new TimelineLite({
            paused:true,
            onReverseComplete:function(){
                running=0;
                $.fn.fullpage.silentMoveTo(2, 0);
                clientOutTweens.reverse();

            },
            onComplete: function () {
                running = 0;
                
            }
        })/*
        .from('#brands', 0.7, {
            x : "-=1100px",
            //filter : "blur(1px)",
            ease : default_ease,
            alpha : 0
        })*/
        
        .from('#brands .brands--top', 0.5, {
            x: "-=1000px",
            ease: default_ease,
            alpha: 0
        }, 0.1)
        .from('#brands .brands--headline', 0.5, {
            y: "+=50px",
            filter: "blur(1px)",
            ease: headline_ease,
            alpha: 0
        }, 0)
        .from('#brands .brands--bottom', 0.5, {
            x: "+=1000px",
            ease: default_ease,
            alpha: 0
        }, 0.2);

        //set down button in hero section
        $('#toDown').click(function (e) {
            e.preventDefault();
            //var target = $(e.currentTarget).data('target');
            $.fn.fullpage.moveSectionDown()
            //$.fn.fullpage.moveTo(target);
            //$(window).scrollTo($(target), 500, { offset: -60 });

        });


        //insert icons to list

        $("div[class*='list-icon']").each(function (i) {
            var icon_name = $(this).attr('class').split(' ').pop();
            var icon_to_prepend = icon_name.substring(5, icon_name.length);
            $(this).find('ul li').prepend("<span class='" + icon_to_prepend + "'></span>");
        });
            
    });
