$(window).on("mousemove",function(a){var o=$(window).width(),t=$(window).height(),n=(.5-a.pageX/o,.5-a.pageY/t);$(".holiday-face__item").each(function(a,o){var t=parseInt($(o).data("offset")),e="translate3d(0px,"+Math.round(n*t)+"px, 0px)";$(o).css({"-webkit-transform":e,transform:e,"moz-transform":e})})});