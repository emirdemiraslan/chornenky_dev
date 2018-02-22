/* eslint-disable */

import 'fullpage.js';
import { marquee } from '../utils/marquee';
import { SlowMo, TimelineLite } from 'gsap';

var default_ease = SlowMo.easeOut;
var headline_ease = SlowMo.easeInOut;
var running = 0;
    $(document).ready(function(e){

        //set marquees for brand logos
        marquee('right', 20, $('#first__brand__row')[0]);
        marquee('left', 10, $('#second__brand__row')[0]);
        marquee('left', 20, $('#first__client__row')[0]);
        marquee('right', 10, $('#second__client__row')[0]);
        

        //resize sections
        function resizeSections(){
            var scale = $('.brands .fp-tableCell').height() / 700;
            if(scale > 1) scale = 1;
            $('.scalable .fp-tableCell').css({
                transform: 'scale(' + scale + ')'
                
            })
            $('.scalable.brands .fp-tableCell .container-fluid, .scalable.clients .fp-tableCell .container-fluid').css({
                width:100/scale+'%',
                position:'relative',
                left: (100-100/scale)/2+'%'
            })
        }

        //set fullpage

        $('#home_main').fullpage({
            paddingTop:'60px',
            paddingBottom:'124px',
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
        })
            .to('.clients--top', 0.5, {
                x: "+=1000px",
                filter: "blur(2px)",
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
                filter: "blur(2px)",
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
        })
        .from('#brands .brands--top', 0.5, {
            x: "-=1000px",
            filter: "blur(2px)",
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
            filter: "blur(2px)",
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
