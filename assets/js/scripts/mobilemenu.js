/* eslint-disable */

$(document).ready(function(e){
   $('.mobile_open').click(function(e){
       $('#mobilemenu').toggleClass('opened');
   });
   
   $('#mobilemenu .close_btn').click(function(e){
        $('#mobilemenu').toggleClass('opened');
   })
});