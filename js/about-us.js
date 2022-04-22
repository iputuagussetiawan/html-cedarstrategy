window.addEventListener("scroll", function () {
	const parallax = document.querySelector(".parallax");
	let scrollPosition = window.pageYOffset;
	parallax.style.transform = "translateY(" + scrollPosition * 0.7 + "px)";
});

$(document).ready(function () {
	// $("#player")[0].src += "";
	// // VIDEO EMBED
	// $("#play").on("click", function (e) {
	// 	e.preventDefault();
	// 	$("#player")[0].src += "?autoplay=1";
	// 	$("#player").show();
	// 	$("#video-cover").removeClass("video-cover");
	// 	$("#play").hide();
	// });

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

function play() {
	const video = document.getElementById("video");
	const videoThumnail = document.getElementById("videoThumnail");
	if (video.paused) {
		document.getElementById("iconplayvideo").src =
			"images/pause-button.png";
		video.play();
		videoThumnail.style.visibility = "hidden";
	} else {
		document.getElementById("iconplayvideo").src = "images/play-button.png";
		video.pause();
		videoThumnail.style.visibility = "visible";
	}

	//get current time
	setInterval(function () {
		document.getElementById("time").innerHTML =
			video.currentTime.toFixed(2) + " / " + video.duration.toFixed(2);
	}, 100);
}
