$(document).ready(function () {
	var articlesSwiper = new Swiper(".articles-swiper__slide-container", {
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

	$(".articles-swiper__slide-container").hover(
		function () {
			articlesSwiper.autoplay.stop();
		},
		function () {
			articlesSwiper.autoplay.start();
		}
	);

	window.addEventListener("scroll", function () {
		const parallax = document.querySelector(".parallax");
		let scrollPosition = window.pageYOffset;
		parallax.style.transform = "translateY(" + scrollPosition * 0.7 + "px)";
	});
});
