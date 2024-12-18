$(function ($) {
	$(".ham").on("click", function (e) {
		e.preventDefault();

		$(".overlay").toggleClass("active");
		$("body").toggleClass("overflow-hidden");
		$(".primary-menu-wrapper").toggleClass("active");
		$(this).toggleClass("active");
	});

	$(".overlay").on("click", function (e) {
		e.preventDefault();

		$(".overlay").removeClass("active");
		$("body").removeClass("overflow-hidden");
		$(".primary-menu-wrapper").removeClass("active");
		$(".ham").removeClass("active");
	});

	$(".client-slider").slick({
		mobileFirst: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		dots: true,
		appendDots: $(".client-slider-dots"),
		arrows: false,
		responsive: [
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 6,
				},
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 7,
				},
			},
		],
	});
});
