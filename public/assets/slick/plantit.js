    $(document).ready(function(){
	   $('.plantit-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.plantit-slider-nav'
});
$('.plantit-slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.plantit-slider',
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
		
	});

