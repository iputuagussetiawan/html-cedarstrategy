<?php include('layout/header.php')?>
<link rel="stylesheet" href="css/pages/locate-us.css" />
<main>
	<section class="locate-us page-header--locate-us section-padding">
		<div class="container">
			<div class="row">
				<div
					class="col-md-12 col-lg-8 locate-us__map-container"
					data-aos="fade-up"
					data-aos-anchor-placement="top-bottom"
					data-aos-duration="1000"
					data-aos-offset="0"
				>
					<div id="map" class="map"></div>
					<a
						class="btn btn-primary btn-map"
						href=" https://goo.gl/maps/mqNKKCihJ2pEHZMy9"
						>VIEW ON GOOGLE MAP
					</a>
				</div>
				<div
					class="col-md-12 col-lg-4"
					data-aos="fade-up"
					data-aos-anchor-placement="top-bottom"
					data-aos-duration="2000"
					data-aos-offset="0"
				>
					<div class="row">
						<div class="col-md-6 col-lg-12">
							<h1
								class="section-title"
								data-aos="fade-up"
								data-aos-anchor-placement="top-bottom"
								data-aos-duration="1500"
								data-aos-offset="0"
							>
								Our
								<span class="section-title__higlight"
									>Location</span
								>
							</h1>

							<div
								class="page-header--locate-us__image-container"
							>
								<img
									src="images/locate-us/locateus-banner.jpg"
									alt="locateus banner"
									class="page-header--locate-us__image"
								/>
							</div>
						</div>
						<div class="col-md-6 col-lg-12">
							<div
								class="location"
								data-aos="fade-up"
								data-aos-anchor-placement="top-bottom"
								data-aos-duration="2000"
								data-aos-offset="0"
							>
								<h3 class="location__title">
									Jakarta - Indonesia
								</h3>

								<div class="location__item">
									<i
										class="location__icon fa-fw fas fa-map-marker-alt"
									></i>
									SopoDel Tower B, 22nd floor Jl. Mega
									Kuningan Barat III, Lot 10. 1-6 Kawasan Mega
									Kuningan, Jakarta Selatan 12950
								</div>
								<div class="location__item">
									<i
										class="location__icon fa-fw far fa-envelope"
									></i>
									<a
										class="location__link"
										href="mailto:hello@cedarstrategi.com"
										>hello@cedarstrategi.com</a
									>
								</div>

								<div class="location__item">
									<i
										class="location__icon fas fa-phone-alt"
									></i>
									<a
										class="location__link"
										href="tel:02150928963"
										>+62 21 5092 8963</a
									>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <?php include('component/getintouch.php');?> -->
	<section class="map"></section>
</main>
<script
	async
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPzLG_CZgtzhJa6xNLne7wemsB3RAwGZg&callback=initMap"
></script>
<script src="js/locate-us.js"></script>
<?php include('layout/footer.php');?>
