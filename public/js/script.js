

$(document).ready(function () {
	
if($(window).width() <900){
        $('.menu').removeClass('menu-open');
    }else{
        $('.menu').addClass('menu-open');
    }
	
$(window).resize(function(){
    if($(window).width() <900){
        $('.menu').removeClass('menu-open');
    }else{
        $('.menu').addClass('menu-open');
    }
});	

$('.navbar-toggle').click(function(){
    if($('.menu').hasClass('menu-open')){
        $('.menu').removeClass('menu-open');
    }else{
        $('.menu').addClass('menu-open');
    }
 });

 $('.abrir-menu').click(function() {
 	if($(this).children('ul').hasClass('hide-menu')){
 		$(this).children('ul').addClass('show-menu');
 		$(this).children('ul').removeClass('hide-menu');
 		
 	}
 	else if($(this).children('ul').hasClass('show-menu')){
 		$(this).children('ul').addClass('hide-menu');
 		$(this).children('ul').removeClass('show-menu');
 	}

 	
 });


});