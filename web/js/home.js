 $(document).ready(function(){
    $('#mainNav').addClass('mainNav_home');
    $(window).scroll(function(){
	       if($(this).scrollTop()>1){
	           $('#mainNav').removeClass('mainNav_home');
	       }
	       else if ($(this).scrollTop()<1){
	           $('#mainNav').addClass('mainNav_home');
	       }
    });
});
