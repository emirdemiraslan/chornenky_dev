/* eslint-disable */
import {TweenMax, TimelineLite} from 'gsap';

export function marquee(_dir, _dur, _div) {
    var _div = $(_div);
    var _wrapper = $(_div).find('.marquee__wrapper');
    console.log(_div);

    var _to = 0;

    $(window).on('resize', function(){
        updateScreen();
    });

    function updateScreen() {
        _div.css({'width': window.innerWidth*2});
        _wrapper.css({'display': 'inline-block', width: 1140});
    }

    function init() {
        _wrapper
        .clone()
        .appendTo(_div)
        .clone()
        .appendTo(_div);
        _div.css({'white-space': 'nowrap'});

        _to = -((_wrapper.width()) + 2);

        if(_dir === 'right'){
            TweenMax.to(_div, 0, {
                x: -(_wrapper.width()+2),
                ease: Linear.easeOut,
                repeat: 0
            });
            _to=0;
        }
        scrollStart(_to);
    }

    function scrollStart(_to) {
        TweenMax.to(_div, _dur, {
            x: _to,
            ease: Linear.easeOut,
            repeat: -1
        });
    }
    updateScreen();
    init();

}