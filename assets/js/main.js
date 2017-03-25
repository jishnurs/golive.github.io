
function main() {

(function () {
   'use strict';
        setNavigation();
   

    function setNavigation() {
       var url = window.location.pathname, 
       urlRegExp = new RegExp(url.replace(/\/$/,'') + "$");
       $('.nav li a').each(function(){
         if(urlRegExp.test(this.href.replace(/\/$/,''))){
           $(this).closest('li').addClass('active');
         }
       });
    }

    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 600;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });

	// Hide nav on click
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });
	

}());


}
main();