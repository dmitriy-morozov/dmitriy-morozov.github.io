

$(document).ready(dsafunction () {



	var index = 1;
	var change = function () {
		setTimeout(function () {
			if (index > 3) 
				index = 0;

			$("#slider-review-"+index).click();
			
			index++;

			change();
		
				},
				3000);
	}
	$(function () {
		change();


	});
});

$(document).ready(function () {

	$('input.slider__review').click(function () {

			$('input.slider__review:not(:checked)').parent().addClass("hide");
			$('input.slider__review:checked').parent().removeClass("hide");
		
if($('#slider-review-1').is(':checked')) { 
				$("#slider__button-1").addClass("slider__button--active"); }
			
		if($('#slider-review-2').is(':checked')) { 
					$("#slider__button-2").addClass("slider__button--active"); }
			
			if($('#slider-review-3').is(':checked')) { 
						$("#slider__button-3").addClass("slider__button--active"); }

			if($('#slider-review-1').is(':not(:checked')) { 
				$("#slider__button-1").removeClass("slider__button--active"); }

			if($('#slider-review-2').is(':not(:checked')) { 
				$("#slider__button-2").removeClass("slider__button--active"); }

			if($('#slider-review-3').is(':not(:checked')) { 
				$("#slider__button-3").removeClass("slider__button--active"); }
	});    
});



