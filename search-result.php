<?php include('layout/header.php')?>
<link rel="stylesheet" href="css/pages/searchresult.css" />
<main>
	<section class="page-header--search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header__title" 
						data-aos="fade-up"
						data-aos-anchor-placement="top-bottom"
						data-aos-duration="1000"
						data-aos-offset="0">Search Result</h1>
				</div>
				<div class="col-md-12 col-xl-10 mt-4" 
						data-aos="fade-up"
						data-aos-anchor-placement="top-bottom"
						data-aos-duration="1200"
						data-aos-delay="1000"
						data-aos-offset="0">
					<form action="search-result.php">
						<div class="input-group search-form">
							<input type="search" class="form-control search-form__input" placeholder="Search">
							<div class="input-group-append">
							<button
								class="btn search-form__btn"
								type="submit"
								id="btn-search"
							>
								<i class="fa fa-search"></i>
							</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="search-result section-padding--bottom">
		<div class="container">
			<div class="row" 
			data-aos="fade-up"
			data-aos-duration="1200"
			data-aos-delay="1500">
				<div class="col-md-12 col-xl-10">
					<a href="#" class="search-result__card">
						<div class="search-result__card-image-container search-result__image-container">
							<img src="images/knowledge/knowledge-1.jpg" alt="knowledge 1" class="search-result__image">
						</div>
						<div class="search-result__card-info-container">
							<h3 class="search-result__card-title">Tax Treaty</h3>
							<p class="search-result__card-description">This Agreement shall apply to taxes on income and on capital imposed on behalf of one of the Contracting State, of its political sub divisions or local authorities, irrespective of the manner in which they are levied...</p>
						</div>
					</a>
				</div>

				<div class="col-md-12 col-xl-10">
					<a href="#" class="search-result__card">
						<div class="search-result__card-image-container search-result__image-container">
							<img src="images/tax-treaty/Flag-Algeria.jpg" alt="knowledge 1" class="search-result__image">
						</div>
						<div class="search-result__card-info-container">
							<h3 class="search-result__card-title">Algeria (Aljazair)</h3>
							<p class="search-result__card-description">This Agreement shall apply to taxes on income and on capital imposed on behalf of one of the Contracting State, of its political sub divisions or local authorities, irrespective of the manner in which they are levied...</p>
							<span class="search-result__card-category">Tax Treaty</span>
						</div>
					</a>
				</div>
				<div class="col-md-12 col-xl-10">
					<a href="#" class="search-result__card">
						<div class="search-result__card-image-container search-result__image-container">
							<img src="images/knowledge/knowledge-3.jpg" alt="knowledge 1" class="search-result__image">
						</div>
						<div class="search-result__card-info-container">
							<h3 class="search-result__card-title">From Cedar Strategi Intern to Executive</h3>
							<p class="search-result__card-description">This Agreement shall apply to taxes on income and on capital imposed on behalf of one of the Contracting State, of its political sub divisions or local authorities, irrespective of the manner in which they are levied...</p>
							<span class="search-result__card-category">Knowledge</span><span class="search-result__card-category">Cedar Strategi Life</span>
						</div>
					</a>
				</div>
				<div class="col-md-12 col-xl-10">
					<a href="#" class="search-result__card">
						<div class="search-result__card-image-container search-result__image-container">
							<img src="images/image-default.jpg" alt="knowledge 1" class="search-result__image">
						</div>
						<div class="search-result__card-info-container">
							<h3 class="search-result__card-title">Accounts Payable (A/P)</h3>
							<p class="search-result__card-description">This Agreement shall apply to taxes on income and on capital imposed on behalf of one of the Contracting State, of its political sub divisions or local authorities, irrespective of the manner in which they are levied...</p>
							<span class="search-result__card-category">Business Tax Vocabulary</span>
						</div>
					</a>
				</div>


				<!-- PAGINATION -->
				<div class="pagination__container col-md-12 mt-5">
					<ul class="pagination--left">
						<li class="page-item ">
							<a class="page-link" href="#">Prev</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">...</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">5</a>
						</li>
						<li class="page-item disabled">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</section>
	
	
</main>

<?php include('layout/footer.php');?>
