!function(t){t(window).load(function(){t("#status").fadeOut(),t("#preloader").delay(300).fadeOut("slow")}),t(document).ready(function(){t("a[href*=#]").bind("click",function(e){var o=t(this);t("html, body").stop().animate({scrollTop:t(o.attr("href")).offset().top},1e3),e.preventDefault()}),t(window).scroll(function(){t(this).scrollTop()>100?t(".scroll-up").fadeIn():t(".scroll-up").fadeOut()}),t(".header").sticky({topSpacing:0}),t("body").scrollspy({target:".navbar-custom",offset:70}),t(".skills").waypoint(function(){t(".chart").each(function(){t(this).easyPieChart({size:140,animate:2e3,lineCap:"butt",scaleColor:!1,barColor:"#FF5252",trackColor:"transparent",lineWidth:10})})},{offset:"80%"}),t(window).on("mousemove",function(e){var o=t(window).width(),a=t(window).height(),n=.9-e.pageX/o,i=.1-e.pageY/a;t(".holiday-face__item").each(function(e,o){var a=parseInt(t(o).data("offset")),r="translate3d("+Math.round(n*a)+"px,"+Math.round(i*a)+"px, 0px)";t(o).css({"-webkit-transform":r,transform:r,"moz-transform":r})})}),t(".screen-height").height(t(window).height()),t(window).resize(function(){t(".screen-height").height(t(window).height())}),/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)?t("#home").css({"background-attachment":"scroll"}):t("#home").parallax("50%",0),wow=new WOW({mobile:!1}),wow.init()})}(jQuery);