$(document).ready(function () {



	var index = 1;
	var change = function () {
		setTimeout(function () {
			if (index > 3) 
				index = 0;

			$("#slider-review-"+index).click();
		index++;

			change();
			$('input.slider__review:not(:checked)').parent().addClass("hide");
			$('input.slider__review:checked').parent().removeClass("hide");

		},
		5000);
	}
	$(function () {
		change();
	});
});


setInterval(function(){
   $(':radio').eq( ( $('input:checked').index() + 1 ) % 3 ).prop('checked', true);
},2000);





$(document).ready(function () {
	$('input.slider__review').click(function () {
		$('input.slider__review:not(:checked)').parent().addClass("hide");
		$('input.slider__review:checked').parent().removeClass("hide");
		$("#slider__button-1").addClass("slider__button--active");
	});    
});
