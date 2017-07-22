 $(document).ready(function(){
    $("#scroll-up").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
     
    
    $(window).scroll(function(){
	       if($(this).scrollTop()>1){
	           $('#scroll-up').addClass('scroll-up_show');
	       }
	       else if ($(this).scrollTop()<1){
               $('#scroll-up').removeClass('scroll-up_show');
	       }
    });
    $("#menu").changeActiveNav();
});


function shown(selector) {
    if ($(selector).hasClass('hidden')) {
        $(selector).removeClass('hidden');
    }
    else {
        $(selector).addClass('hidden');
    }
}