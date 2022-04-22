<?php include('layout/header.php') ?>
<link rel="stylesheet" href="css/pages/home.css" />
<main>
	<section class="banner">
		<div class="swiper-container banner__slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="row no-gutters banner__inner">
						<div class="col-md-12 col-lg-8 banner__image-wrapper">
							<img src="images/home/banner-slider.jpg" alt="banner slider" class="banner__slider-image" />
						</div>
						<div class="col-md-12 col-lg-4 banner__info-wrapper">
							<div class="banner__info">
								<h1 class="banner__title element">
									Powerful Rising Economy - Indonesia
								</h1>
								<p class="banner__description element">
									Our latest joint publication with Knight
									Frank and T&S Law Firm
								</p>
								<!-- <a class="btn btn-primary element mt-4" href="#download-modal" role="button" data-toggle="modal">DOWNLOAD HERE</a> -->

								<a href="file/file.pdf" class="btn btn-primary element mt-4" download>DOWNLOAD HERE</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="row no-gutters banner__inner">
						<div class="col-md-12 col-lg-8 banner__image-wrapper">
							<img src="images/home/banner-slider2.jpg" alt="banner slider" class="banner__slider-image" />
						</div>
						<div class="col-md-12 col-lg-4 banner__info-wrapper">
							<div class="banner__info">
								<h1 class="banner__title element">
									2020 IS A YEAR OF CHANGE AND REFLECTION
								</h1>
								<p class="banner__description element">
									a series of significant events have taken
									place around the world, eddecting reshuffle
									of card to prepare for the game of future.
									Here we enlist some of those milestone
									events in Indonesia and other ASEAN
									countries in 2020
								</p>
								<a href="#" class="btn btn-primary element mt-4">READ MORE</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="row no-gutters banner__inner">
						<div class="col-md-12 col-lg-8 banner__image-wrapper">
							<img src="images/home/banner-slider3.jpg" alt="banner slider" class="banner__slider-image" />
						</div>
						<div class="col-md-12 col-lg-4 banner__info-wrapper">
							<div class="banner__info">
								<h1 class="banner__title element">
									ERA OF DIGITAL REVOLUTION
								</h1>
								<p class="banner__description element">
									Landscape of Indonesian e-commerce and
									ventures
								</p>
								<a href="#" class="btn btn-primary element mt-4">RED MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner__button-wraper">
				<div class="swiper-button-prev">
					<i class="fas fa-chevron-left"></i>
				</div>
				<div class="swiper-button-next">
					<i class="fas fa-chevron-right"></i>
				</div>
			</div>

			<div class="banner__pagination-slider">
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<section class="feature section-padding">
		<div class="container">
			<div class="row feature__inner" data-aos="fade-up" data-aos-easing="ease">
				<div class="col-md-6 feature__left">
					<h2 class="section-title">
						Featured
						<span class="section-title__higlight">articles</span>
					</h2>

					<a href="#" class="feature__card">
						<div class="feature__card-images feature__image-container">
							<img src="images/home/batik.jpg" alt="Finest Batik Cloth in the World is still Made in Indonesia" class="feature__image feature__card-image" />
						</div>

						<div class="feature__card-info">
							<h3 class="feature__card-title">
								Finest Batik Cloth in the World is still Made in
								Indonesia
							</h3>
							<p class="feature__card-date">January 1, 2021</p>
						</div>
					</a>
					<div id="featureReadmoreDesktopHolder">
						<a href="#" class="feature__button">
							<div class="feature__button-inner">
								<div class="feature__button-icon">
									<i class="fas fa-arrow-right"></i>
								</div>
								<div class="feature__button-text">
									More Articles
								</div>
							</div>
						</a>

						<!-- untuk menangani div kosong -->
					</div>
				</div>
				<div class="col-md-6 feature__right">
					<div class="row feature__right-inner">
						<div class="col-md-12 col-xl-10">
							<a href="#" class="feature__card">
								<div class="feature__card-images feature__image-container">
									<img src="images/home/consultation.jpg" alt="How to Build a Successful Team - Business Guides" class="feature__image feature__card-image" />
								</div>
								<div class="feature__card-info">
									<h3 class="feature__card-title">
										How to Build a Successful Team -
										Business Guides
									</h3>
									<p class="feature__card-date">
										December 10, 2020
									</p>
								</div>
							</a>
						</div>

						<div class="col-md-12 col-xl-8">
							<a href="#" class="feature__card">
								<div class="feature__card-images feature__image-container">
									<img src="images/home/bali-traditioanal.jpg" alt="5 Most Potential Business and Industries in
                                        Bali" class="feature__image feature__card-image" />
								</div>
								<div class="feature__card-info">
									<h3 class="feature__card-title">
										5 Most Potential Business and Industries
										in Bali
									</h3>
									<p class="feature__card-date">
										December 20, 2020
									</p>
								</div>
							</a>
						</div>
						<div id="featureReadmoreMobileHolder" class="feature__readmore-holder"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="people-story section-padding">
		<div class="container people-story__container">
			<h2 class="people-story__title" data-aos="fade-up" data-aos-easing="ease">
				People Story
			</h2>

			<div class="swiper-container people-story__slide-container" data-aos="fade-up" data-aos-easing="ease">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="#" class="card people-story__card">
							<div class="people-story__image-container">
								<img src="images/home/people-story-1.jpg" class="card-img-top people-story__image" alt="From Cedar Strategi Intern to Executive" />
							</div>

							<div class="card-body">
								<h5 class="card-title">
									From Cedar Strategi Intern to Executive
								</h5>

								<div class="people-story__category">
									Cedar Strategi Life
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card people-story__card">
							<div class="people-story__image-container">
								<img src="images/home/people-story-2.jpg" class="card-img-top people-story__image" alt="Meet the Women in Data Science" />
							</div>
							<div class="card-body">
								<h5 class="card-title">
									Meet the Women in Data Science: Haejin
								</h5>

								<div class="people-story__category">
									People Profile
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card people-story__card">
							<div class="people-story__image-container">
								<img src="images/home/people-story-3.jpg" class="card-img-top people-story__image" alt="Advance Artificial Intelligence at Cedar
									Strategi" />
							</div>
							<div class="card-body">
								<h5 class="card-title">
									Advance Artificial Intelligence at Cedar
									Strategi
								</h5>

								<div class="people-story__category">
									Capabilities
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card people-story__card">
							<div class="people-story__image-container">
								<img src="images/home/people-story-4.jpg" class="card-img-top people-story__image" alt="Courtney Endress: Unlocking a Creer Path in Tech" />
							</div>
							<div class="card-body">
								<h5 class="card-title">
									Courtney Endress: Unlocking a Creer Path in
									Tech
								</h5>

								<div class="people-story__category">
									Cedar Strategi Life
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="swiper-button-prev">
				<i class="fas fa-chevron-left"></i>
			</div>
			<div class="swiper-button-next">
				<i class="fas fa-chevron-right"></i>
			</div>
		</div>
	</section>

	<section class="client section-padding">
		<div class="container client__container">
			<h2 class="section-title" data-aos="fade-right" data-aos-easing="ease">
				client
				<span class="section-title__higlight">impact</span>
			</h2>

			<div class="swiper-container client__slide-container" data-aos="fade-up" data-aos-easing="ease">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="client__card">
							<div class="client__card-msg-wrapper">
								<p class="client__card-msg">
									Very responsive, understands the needs of a
									client, tries to find solutions rather than
									obstacles.
								</p>
							</div>
							<div class="client__card-info-wrapper">
								<div class="client__card-user-image">
									<img src="images/testimonial-3.jpg" alt="testimonial" class="img-fluid rounded-circle" />
								</div>
								<div class="client__card-user-info">
									<h4 class="client__card-user-name">
										Susan Jiang
									</h4>
									<p class="client__card-user-position">
										CFO of Bytedance Ltd
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="client__card">
							<div class="client__card-msg-wrapper">
								<p class="client__card-msg">
									It was a great pleasure to cooperate with
									Cedar Strategi – everything was perfectly
									professional and timely on your side which
									is a new experience for us on this market.
									We will definitely come back to in future if
									any other legal/tax issues emerge.
								</p>
							</div>
							<div class="client__card-info-wrapper">
								<div class="client__card-user-image">
									<img src="images/testimonial-4.jpg" alt="testimonial" class="img-fluid rounded-circle" />
								</div>
								<div class="client__card-user-info">
									<h4 class="client__card-user-name">
										Bartuzi Wojciech
									</h4>
									<p class="client__card-user-position">
										CFO of LOT Polish Airline
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="client__card">
							<div class="client__card-msg-wrapper">
								<p class="client__card-msg">
									Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem
									Ipsum has been the industry's standard dummy
									text ever since the 1500s.
								</p>
							</div>
							<div class="client__card-info-wrapper">
								<div class="client__card-user-image">
									<img src="images/testimonial-3.jpg" alt="testimonial" class="img-fluid rounded-circle" />
								</div>
								<div class="client__card-user-info">
									<h4 class="client__card-user-name">
										Nina Debora
									</h4>
									<p class="client__card-user-position">
										CFO of PT Timedoor Indonesia
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<section class="moaltest">
		<!-- <a
			href="#myModal"
			role="button"
			class="btn btn-primary"
			data-toggle="modal"
			>Launch modal</a
		> -->
		<div class="modal fade" id="download-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-download" role="document">
				<div class="modal-content">
					<div class="close" data-dismiss="modal" aria-label="Close">
						<img src="images/close-btn.png" alt="close btn" />
					</div>

					<div class="modal-body" id="result">
						<form action="">
							<div class="row no-gutters">
								<div class="col-md-6 modal-inner modal-download__left">
									<h2 class="modal-download__title box-shadow">
										Powerful Rising Economy - Indonesia
									</h2>
									<p class="modal-download__description box-shadow">
										Our latest joint publication with Knight
										Frank and T&S Law Firm
									</p>
								</div>
								<div class="col-md-6 modal-inner modal-download__right">
									<p class="modal-download__msg">
										Please fill the form below to download
										the document.
									</p>

									<div class="form-group">
										<label for="name">Name <span>*</span></label>
										<input type="text" class="form-control form-control-costum" id="name" name="name" />
									</div>
									<div class="form-group">
										<label for="email">Email<span>*</span></label>
										<input type="email" class="form-control form-control-costum" id="email" name="email" />
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control form-control-costum" id="phone" name="phone" />
									</div>
									<button type="submit" class="btn btn-primary float-right">
										DOWNLOAD
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<script src="js/home.js"></script>
<?php include('layout/footer.php'); ?>