
jQuery( document ).ready(function( $ ) {

var  
mns = "main-nav-scrolled";
mn = $("nav");
hdr = $('.header-container').height();


$(window).scroll(function() {
    
  if( $(this).scrollTop() > hdr -90 ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});
//responsive
var
bn = $(".bignavmain");
mainnav = $(".menunav");


$(document).ready(function() {
if ($(window).width() >= 768) {
    mainnav.css("display","none");
}else{
     bn.css("display","none");
}
});


//scroll
var

scroll = $(".scrolljs");
sc = "scroll";

$(document).ready(function() {
    
    $(".scrolljs a").addClass(sc);
});


});









