jQuery( document ).ready(function( $ ) {


var
nav = $(".navbar ");
hm = "hidenone";
pg = $(".pgwrapper");
pp1 = "pgpadding1";
pp2 = "pgpadding2";
logosm =$(".logosm");
   menu = $(".menu2");


$(document).ready(function() {
$("#menu-button").click(function() {

           if (!(nav).hasClass(hm)) {
               nav.addClass(hm);
               pg.removeClass(pp1);
               pg.addClass(pp2);
              menu.css({"position":"fixed", "top":"0"});
//               ('#menu-button').css("background-color","yellow");


              } else {
                  nav.removeClass(hm);
                  pg.removeClass(pp2);
                  pg.addClass(pp1);
                 menu.css({"position":"relative", "top":"0"});
//                  ('#menu-button').css("background-color","initial");
                      }

});

});

//refresh page on browser resize
if ($(window).width() >= 768) {


$(window).bind('resize', function(e){
    if (window.RT) clearTimeout(window.RT);
    window.RT = setTimeout(function()
                           {
        this.location.reload(false); /* false to get page from cache */
    }, 200);

});
}

});







