$(window).resize(function () {
	if (window.innerWidth <= 767) {
		$("#featureReadmoreMobileHolder").append($(".feature__button"));
	} else {
		$("#featureReadmoreDesktopHolder").append($(".feature__button"));
	}
});

$(document).ready(function () {
	//move feature readmore button on mobile
	if (window.innerWidth <= 767) {
		$("#featureReadmoreMobileHolder").append($(".feature__button"));
	} else {
		$("#featureReadmoreDesktopHolder").append($(".feature__button"));
	}
	var swiperBanner = new Swiper(".banner__slider", {
		loop: true,
		effect: "fade",
		speed: 700,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	// swiperBanner.autoplay.start();
	$(".banner__slider").hover(
		function () {
			swiperBanner.autoplay.stop();
		},
		function () {
			swiperBanner.autoplay.start();
		}
	);

	swiperBanner.on("slideChangeTransitionStart", function () {
		anime({
			targets: ".swiper-slide-active .banner__image img",
			scale: [1.2, 1],
			opacity: [0, 1],
			easing: "easeInOutQuart",
		});

		anime({
			targets: ".swiper-slide-active .banner__info .element",
			translateY: [50, 0],
			opacity: [0, 1],
			delay: anime.stagger(100, { start: 100 }),
			easing: "easeInOutQuart",
		});
	});

	var swiper_peopleStory = new Swiper(".people-story__slide-container", {
		slidesPerView: 1,
		spaceBetween: 30,
		dynamicBullets: true,
		loop: true,
		breakpoints: {
			1024: {
				slidesPerView: 4,
			},
			768: {
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
	// swiper_peopleStory.autoplay.start();
	$(".people-story__slide-container").hover(
		function () {
			swiper_peopleStory.autoplay.stop();
		},
		function () {
			swiper_peopleStory.autoplay.start();
		}
	);

	var swiper_testimonial = new Swiper(".client__slide-container", {
		slidesPerView: 1,
		spaceBetween: 30,
		dynamicBullets: true,
		loop: true,
		breakpoints: {
			1024: {
				slidesPerView: 3,
			},

			768: {
				slidesPerView: 2,
			},
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
	// swiper_testimonial.autoplay.start();
	$(".client__slide-container").hover(
		function () {
			swiper_testimonial.autoplay.stop();
		},
		function () {
			swiper_testimonial.autoplay.start();
		}
	);
});
