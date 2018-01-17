/* eslint-disable */

import 'fullpage.js';
import { marquee } from '../utils/marquee';
import { TweenMax, TimelineMax, Elastic } from 'gsap';

var default_ease = SlowMo.easeOut;
var running = 0;
    $(document).ready(function(e){

        //set fullpage

        $('#home_main').fullpage({
            onLeave: function (index, nextIndex, direction) {
                /*
                console.log("next section : "+nextIndex);


                //after leaving section 2
                if (index == 2 && nextIndex == 3) {
                    //alert("Going to section 3!");
                    if(running<1){
                        clientOutTweens.play();
                        brandsInTween.play();
                    }
                    return false;

                }

                else if (index == 3 && direction == 2) {
                    clientOutTweens.reverse();
                    brandsInTween.reverse();
                    return false;
                }
                */
            }
        });



        //Tweens
        /*
        var clientOutTweens = new TimelineMax({
            paused:true,
            repeat:0,
            onStart: function() {
                running = 1;

            },
            onComplete: function () {
                running=0;
                $.fn.fullpage.silentMoveTo(3, 0);
                brandsInTween.play();
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
                alpha: 0

            }, 0.2);
        
        var brandsInTween = new TimelineMax({
            paused:true
        })
            .from('#brands .brands--top', 0.5, {
                x: "-=1000px",
                filter: "blur(2px)",
                ease: default_ease,
                alpha: 0
            }, 0.1)
            .from('#brands .brands--headline', 0.3, {
                y: "+=50px",
                filter: "blur(1px)",
                ease: default_ease,
                alpha: 0
            }, 0)
            .from('#brands .brands--bottom', 0.5, {
                x: "+=1000px",
                filter: "blur(2px)",
                ease: default_ease,
                alpha: 0
            }, 0.2)
            */
    });
