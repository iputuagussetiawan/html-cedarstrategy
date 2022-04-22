<?php include('layout/header.php') ?>
<link rel="stylesheet" href="css/pages/rfp.css" />
<main>
	<section class="page-header--parallax d-flex align-items-end justify-content-center">
		<img src="images/rfp/rfp-banner.jpg" alt="banner work" class="parallax">
		<div class="container">
			<div class="row ">
				<div class="col-md-10">
					<h1 class="page-header__title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-offset="0">
						RFP (Request for Proposal) Submission
					</h1>

					<p class="page-header__description" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200" data-aos-delay="1000" data-aos-offset="0">
						Do you have a request for proposal (RFP) that you would like to forward?
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="rfp-form section-padding">
		<div class="container">
			<div class="rfp-form__title-container">
				<h3 class="rfp-form__title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="100">
					Please Fill in the Following RFP Form
				</h3>
				<p class="rfp-form__description" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="200">
					Submit this RFP Form and Cedar Strategi team will reach to you.
				</p>
			</div>
			<div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="300">
				<div class="col-md-4">
					<div class="rfp-form__left">
						<h4 class="rfp-form__left-title">Contact Information</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="name">Name <span>*</span></label>
								<input type="text" class="form-control form-control-costum" id="name" name="name" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="email">Email <span>*</span></label>
								<input type="email" class="form-control form-control-costum" id="email" name="email" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="phone">Phone <span>*</span></label>
								<input type="text" class="form-control form-control-costum" id="phone" name="phone" />
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="company">Agency / Company </label>
								<input type="text" class="form-control form-control-costum" id="company" name="company" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="rfp-form__right">
						<h4 class="rfp-form__right-title">About the Project</h4>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="subject">Describe the Effort </label>
									<select id="subject" name="subject" class="form-control form-control-costum selectpicker">
										<option value="" selected="selected">select...</option>
										<option value="">
											Select One
										</option>
										<option value="Our Capabilities">
											Our Capabilities
										</option>
										<option value="Career Inquiries">
											Career or Internship Inquiries
										</option>
										<option value="Doing Business with Cedar Strategi">
											Doing Business with Cedar Strategi
										</option>
										<option value="Corporate Philanthropy Inquiries">
											Corporate Philanthropy Inquiries
										</option>
										<option value="Alumni Inquiries">
											Alumni Inquiries
										</option>
										<option value="Media Inquiries">
											Media Inquiries
										</option>
										<option value="Comments about our website">
											Comments about Cedar Strategi
										</option>
										<option value="Cyber Concern">
											Cyber Security Concern Reporting
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<label for="solution">What is the solicitation due date?</label>
									<input type="text" class="form-control form-control-costum" id="solution" name="solution" />
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label for="subject">Additional Information
										<span>*</span></label>
									<textarea name="information" id="information" cols="30" rows="11" class="form-control form-control-costum"></textarea>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group clearfix">
									<div class="icheck-success d-inline">
										<input type="checkbox" id="checkboxSuccess3" />
										<label for="checkboxSuccess3">
											Join Cedar Strategi mailing list and
											receive the latest insights.
										</label>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<button type="submit" class="btn btn-primary float-right">
									SUBMIT
								</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="articles-swiper section-padding">
		<div class="container articles-swiper__container">
			<h2 class="articles-swiper__title " data-aos="fade-up" data-aos-duration="1000">
				Related Content
			</h2>

			<div class="swiper-container articles-swiper__slide-container" data-aos="fade-up" data-aos-duration="1700">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="#" class="card articles-swiper__card">
							<div class="articles-swiper__image-container">
								<img src="images/knowledge/knowledge-1.jpg" class="card-img-top articles-swiper__image" alt="From Cedar Strategi Intern to Executive" />
							</div>

							<div class="card-body">
								<h5 class="card-title">
									The Impact of COVID-19 on Cyber Workforce
									Strategy
								</h5>

								<div class="articles-swiper__category">
									Perspectives
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card articles-swiper__card">
							<div class="articles-swiper__image-container">
								<img src="images/knowledge/knowledge-2.jpg" class="card-img-top articles-swiper__image" alt="From Cedar Strategi Intern to Executive" />
							</div>

							<div class="card-body">
								<h5 class="card-title">
									A New Approach for Federal Cyber Talent
								</h5>

								<div class="articles-swiper__category">
									Publication
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card articles-swiper__card">
							<div class="articles-swiper__image-container">
								<img src="images/knowledge/knowledge-3.jpg" class="card-img-top articles-swiper__image" alt="From Cedar Strategi Intern to Executive" />
							</div>

							<div class="card-body">
								<h5 class="card-title">
									3 Advantages of a Remote Cyber Workforce
								</h5>

								<div class="articles-swiper__category">
									Perspectives
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#" class="card articles-swiper__card">
							<div class="articles-swiper__image-container">
								<img src="images/knowledge/knowledge-4.jpg" class="card-img-top articles-swiper__image" alt="From Cedar Strategi Intern to Executive" />
							</div>

							<div class="card-body">
								<h5 class="card-title">
									How to Design Successful Social Marketing
									Campaigns
								</h5>

								<div class="articles-swiper__category">
									Publication
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

</main>
<script src="js/rfp.js"></script>
<?php include('layout/footer.php'); ?>