/* eslint-disable */

import 'jquery.scrollto';
import {TweenMax, TimelineLite} from 'gsap';

$(document).ready(function(){
    $('[data-target^="#"]').click(function(e){
        e.preventDefault();
        var target = $(e.currentTarget).data('target');
        $(window).scrollTo($(target), 500, {offset:-60});

    });
})