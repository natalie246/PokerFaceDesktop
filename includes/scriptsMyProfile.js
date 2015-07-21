$(document).ready(function() {  
var stickyNavTop = $('.topMenu').offset().top;  
  
var stickyNav = function(){  
var scrollTop = $(window).scrollTop();  
       
if (scrollTop > stickyNavTop) {   
    $('.topMenu').addClass('sticky');  
} else {  
    $('.topMenu').removeClass('sticky');   
}  
};  
  
stickyNav();  
  
$(window).scroll(function() {  
    stickyNav();  
});  
}); 