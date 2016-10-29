$(document).ready(function(){
  
   $(".main-nav__button").click(function(event){
    
   	$(".main-nav__list").slideToggle(500);
      $(".main-nav__button").toggleClass("main-nav__button--close");
      $(".main-nav__header").toggleClass("main-nav__header--open");
   });

});