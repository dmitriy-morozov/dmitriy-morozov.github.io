$(function() { 

	$(".header-menu-wrap").removeClass("header-menu-wrap--no-js");

	if ($(window).width() < 699) {
		$(".header-logo").click(function(event){
			$(".header-menu-wrap").toggleClass("header-menu-wrap--close", 2000);
		});
	}
});