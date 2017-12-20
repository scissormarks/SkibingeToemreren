$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 80) {
      console.log(scroll);
        $("nav").addClass("scrolled");
    } else {
        $("nav").removeClass("scrolled");
    }
});