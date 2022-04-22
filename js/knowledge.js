$(document).ready(function () {
	var swiper_moreArticles = new Swiper(".more-articles__slide-container", {
		slidesPerView: 1,
		spaceBetween: 30,
		dynamicBullets: true,
		loop: true,
		breakpoints: {
			1024: {
				slidesPerView: 4,
			},
			991.98: {
				slidesPerView: 2,
			},
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	$(".more-articles__slide-container").hover(
		function () {
			swiper_moreArticles.autoplay.stop();
		},
		function () {
			swiper_moreArticles.autoplay.start();
		}
	);
});
