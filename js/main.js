$(window).resize(function () {
	// if (window.innerWidth >= 1199.98) {
	// 	$("#knowledge").attr("href", "javascript:void(0)");
	// 	$("#workwithus").attr("href", "javascript:void(0)");
	// 	$(".dropdown").on("hide.bs.dropdown", function (e) {
	// 		$(this).find(".dropdown-menu").first().stop(true, true).slideUp();
	// 	});
	// } else {
	// 	$("#knowledge").attr("href", "knowledge.php");
	// 	$("#workwithus").attr("href", "work-with-us.php");

	// 	//FOR SMOTH SCROLL DROP DOWN ON MOBILE VIEW
	// 	$(".dropdown").on("show.bs.dropdown", function (e) {
	// 		$(this).find(".dropdown-menu").first().stop(true, true).slideDown();
	// 	});
	// 	$(".dropdown").on("hide.bs.dropdown", function (e) {
	// 		$(this).find(".dropdown-menu").first().stop(true, true).slideUp();
	// 	});
	// }

	const navLinkNoChild = $(
		".navbar-nav .nav-item .nav-link.dropdown-toggle.no-child"
	);

	if (window.innerWidth >= 1199.98) {
		$("#knowledge").attr("href", "javascript:void(0)");
		$("#workwithus").attr("href", "javascript:void(0)");
	} else {
		$("#knowledge").attr("href", "knowledge.php");
		$("#workwithus").attr("href", "work-with-us.php");
		navLinkNoChild.attr("data-toggle", "");
	}
});

$(document).ready(function () {
	//aos
	AOS.init();
	$("a[data-rel^=lightcase]").lightcase();
	//banner tab hover
	$(".navbar-tab a").on("mouseover", function (e) {
		e.preventDefault();
		$(this).tab("show");
	});

	// FOR REMOVE CLASS ACTIVE IF NOT HOVERED
	$(".navbar-tab a").on("shown.bs.tab", function (e) {
		var target = $(e.relatedTarget).data("target");
		$(target).removeClass("active");
	});

	// Remove Data-toggle-dropdown
	// const navLink = $(".navbar-nav .nav-item .nav-link.dropdown-toggle");
	const navLinkNoChild = $(
		".navbar-nav .nav-item .nav-link.dropdown-toggle.no-child"
	);

	if (window.innerWidth >= 1199.98) {
		//navLink.attr("data-toggle", "");
		$("#knowledge").attr("href", "javascript:void(0)");
		$("#workwithus").attr("href", "javascript:void(0)");

		// $(".dropdown").on("hide.bs.dropdown", function (e) {
		// 	$(this).find(".dropdown-menu").first().stop(true, true).slideUp();
		// });
	} else {
		$("#knowledge").attr("href", "knowledge.php");
		$("#workwithus").attr("href", "work-with-us.php");
		// navLink.attr("data-toggle", "dropdown");
		navLinkNoChild.attr("data-toggle", "");

		// //FOR SMOTH SCROLL DROP DOWN ON MOBILE VIEW
		// $(".dropdown").on("show.bs.dropdown", function (e) {
		// 	$(this).find(".dropdown-menu").first().stop(true, true).slideDown();
		// });
		// $(".dropdown").on("hide.bs.dropdown", function (e) {
		// 	$(this).find(".dropdown-menu").first().stop(true, true).slideUp();
		// });
	}
	//scrolltop
	$(window).scroll(function (event) {
		if (window.innerWidth <= 767) {
			var y = $(this).scrollTop();
			var windowHieght = $(window).height();
			var ctop = $("#containerCopyright").offset().top;
			var copyrightHight = $("#containerCopyright").height();
			var currentScroll = ctop - y;
			if (currentScroll <= windowHieght) {
				//console.log("horeeee fisnis");
				$("#whatapps").addClass("fixed");
			} else {
				//console.log("aq belum finish");
				$("#whatapps").removeClass("fixed");
			}
		} else {
			$("#whatapps").removeClass("fixed");
		}
	});
	//preloader
	$(".preloader").fadeOut(1000);

	//humberger menu
	$("#humbergermenu").on("click", function () {
		$(".offcanvas-collapse").toggleClass("open");
		$(".megamenu").slideUp(300);
	});
	//navigation
	$("#nav-search-button").click(function () {
		//searchAction();
		var $el = $(this);
		$el.find("span").toggleClass("fa-search fa-times");
		$(".nav-search-form").toggleClass("active");
		$("#nav-search-input").toggleClass("active");
	});

	//add some effect to navbar when window scrool more then 100px
	$(window).scroll(function () {
		var screenheight = window.innerHeight;
		if ($(".navbar").offset().top > 100) {
			$(".navbar").addClass("top-nav-collapse");
		} else {
			$(".navbar").removeClass("top-nav-collapse");
		}
	});
	//add efect to humberges menu and disable scroll
	$(".navbar-toggler").click(function () {
		$(".humberger-menu__line").toggleClass("close");
		$("body").toggleClass("stop-scrolling");
	});
	//add event when scolltop clicked and load funtion "scrollTop"
	window.addEventListener("scroll", scrollTop);
	$("a[href='#top']").click(function () {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});

	// var acc = document.getElementsByClassName("mobile-accourdion");
	// var i;

	// for (i = 0; i < acc.length; i++) {
	// 	acc[i].addEventListener("click", function () {
	// 		console.log("checkkk ");
	// 		this.classList.toggle("active");
	// 		var panel = this.nextElementSibling;
	// 		if (panel.style.maxHeight) {
	// 			panel.style.maxHeight = null;
	// 		} else {
	// 			panel.style.maxHeight = panel.scrollHeight + "px";
	// 		}
	// 	});
	// }
});

// var dropdownToggle = $(".dropdown-toggle");
// var dropdown = dropdownToggle.next(".dropdown-menu");
// $(function () {
// 	dropdown.slideUp(0);
// 	$(document).on("click", function (e) {
// 		var target = e.target;
// 		if (
// 			!$(target).is(".dropdown-toggle") &&
// 			!$(target).parents().is(".dropdown-toggle")
// 		) {
// 			if (dropdown.is(":visible")) {
// 				dropdown.stop(true).slideUp();
// 			}
// 		}
// 	});
// 	dropdownToggle.on("click", function () {
// 		dropdown.stop(true).slideToggle();
// 	});
// });

/*==================== SHOW SCROLL TOP ====================*/
function scrollTop() {
	const scrollTop = document.getElementById("scroll-top");
	if (this.scrollY >= 560) scrollTop.classList.add("show-scroll");
	else scrollTop.classList.remove("show-scroll");
}
