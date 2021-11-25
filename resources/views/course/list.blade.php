@extends('layouts.layout')
@section('contents')
<!---page Title --->
<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Our Courses List</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Our Courses List</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="bg-light p-10 d-lg-flex justify-content-between align-items-center mb-20 rounded">
								<p class="mb-lg-0 mb-20">Showing 1 to 12 of 36 entries</p>
								<div class="d-flex justify-lg-content-end align-items-center">
									<select class="form-select w-150">
										<option selected>Sort By...</option>
										<option value="1">New</option>
										<option value="2">Top Rated</option>
										<option value="3">Populer</option>
									</select>
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link b-0 fs-18" id="pills-grid-tab" data-bs-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">
											<i class="fa fa-th me-0"></i>
										  </a>
									  </li>
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link active b-0 fs-18" id="pills-list-tab" data-bs-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">
											<i class="fa fa-list me-0"></i>
										  </a>
									  </li>
									</ul>								
								</div>
							</div>
							<div class="tab-content" id="pills-tabContent">
							  <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/4.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">General</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/6.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">IT & Software</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/4.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">General</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/6.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">IT & Software</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/4.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">General</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/6.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">IT & Software</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="{{route('course-details')}}" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
                               
                              </div>
								<div class="tab-pane fade" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
									<div class="row">
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/1.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>	
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Manegement</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>	
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Networking</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-dark">Offline</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Security</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/2.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>	
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Language</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/10.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>	
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/5.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>	
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Photography</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/7.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-warning">Upcoming</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Manegement</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/8.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-warning">Upcoming</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Networking</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/9.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-dark">Offline</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Security</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/10.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-warning">Upcoming</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Language</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/11.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-success">Online</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">It &amp; software</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="card">
											  <img class="card-img-top" src="../images/front-end-img/courses/12.jpg" alt="Card image cap">
											  <div class="card-body">
													<span class="badge badge-dark">Offline</span>
													<span class="badge badge-primary-light">English</span>
													<span class="badge badge-primary-light">Spanish</span>													
												    <div class="cour-stac d-flex align-items-center text-fade mt-20">
													  <p>Start Date 4th Nov..</p>
													  <p class="lt-sp">|</p>
													  <p>Johen doe</p>
												    </div>
												<h4 class="card-title justify-content-between d-flex align-items-center">Photography</h4>
												<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
											  </div>
											  <div class="card-footer justify-content-between d-flex align-items-center">
												<div class="d-flex fs-18 fw-600"> <span class="text-dark me-10">$83</span> <del class="text-muted">$195</del> </div>
												<span>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star text-warning"></i>
													<i class="fa fa-star-half text-warning"></i>
													<span class="text-muted ms-2">(42)</span>
												</span>
											  </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div aria-label="Page navigation example">
							  <ul class="pagination mb-0">
								<li class="page-item"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							  </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12">
					<div class="side-block px-20 py-10 bg-white">
						<div class="widget courses-search-bx placeholdertx mb-10">
							<div class="form-group">
								<div class="input-group">
									<label class="form-label">Search Courses</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">All Courses</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="basic_checkbox_6" class="filled-in">
									<label for="basic_checkbox_6" class="d-flex justify-content-between align-items-center form-label">
										Backend
										<span class="badge badge-sm badge-primary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_7" class="filled-in">
									<label for="basic_checkbox_7" class="d-flex justify-content-between align-items-center form-label">
										Css
										<span class="badge badge-sm badge-primary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_8" class="filled-in">
									<label for="basic_checkbox_8" class="d-flex justify-content-between align-items-center form-label">
										Frontend
										<span class="badge badge-sm badge-primary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_1" class="filled-in">
									<label for="basic_checkbox_1" class="d-flex justify-content-between align-items-center form-label">
										General
										<span class="badge badge-sm badge-primary-light">10</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_2" class="filled-in">
									<label for="basic_checkbox_2" class="d-flex justify-content-between align-items-center form-label">
										IT &amp; Software
										<span class="badge badge-sm badge-secondary-light">08</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_3" class="filled-in">
									<label for="basic_checkbox_3" class="d-flex justify-content-between align-items-center form-label">
										Photography
										<span class="badge badge-sm badge-success-light">05</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_4" class="filled-in">
									<label for="basic_checkbox_4" class="d-flex justify-content-between align-items-center form-label">
										Programming Language
										<span class="badge badge-sm badge-danger-light">15</span>
									</label>
								</li>
								<li>
									<input type="checkbox" id="basic_checkbox_5" class="filled-in">
									<label for="basic_checkbox_5" class="d-flex justify-content-between align-items-center form-label">
										Technology
										<span class="badge badge-sm badge-info-light">02</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Courses Levels</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="levels_1" class="filled-in">
									<label for="levels_1" class="form-label">
										Starter 
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_2" class="filled-in">
									<label for="levels_2" class="form-label">
										Interpose 
									</label>
								</li>
								<li>
									<input type="checkbox" id="levels_3" class="filled-in">
									<label for="levels_3" class="form-label">
										Advance 
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Courses Classes Type</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="type_1" class="filled-in">
									<label for="type_1" class="form-label">
										Online 
									</label>
								</li>
								<li>
									<input type="checkbox" id="type_2" class="filled-in">
									<label for="type_2" class="form-label">
										Offline 
									</label>
								</li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Top Rated</h4>
							<ul class="list-unstyled">
								<li>
									<input type="checkbox" id="rated_1" class="filled-in">
									<label for="rated_1" class="d-flex justify-content-between align-items-center form-label">
										More then
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
										</ul> 
									</label>
								</li>
								<li>
									<input type="checkbox" id="rated_2" class="filled-in">
									<label for="rated_2" class="d-flex justify-content-between align-items-center form-label">
										More then
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul> 
									</label>
								</li>
								<li>
									<input type="checkbox" id="rated_3" class="filled-in">
									<label for="rated_3" class="d-flex justify-content-between align-items-center form-label">
										More then
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul> 
									</label>
								</li>
							</ul>
						</div>
						<div class="widget mb-20">
							<h4 class="pb-15 mb-25 bb-1">Recent Courses</h4>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid" src="../images/front-end-img/courses/cor-logo-1.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
									<span><i class="fa fa-calendar-o"></i> Oct 1, 2020</span>
								</div>
							</div>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid" src="../images/front-end-img/courses/cor-logo-2.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
									<span><i class="fa fa-calendar-o"></i> Oct 11, 2020</span>
								</div>
							</div>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid" src="../images/front-end-img/courses/cor-logo-3.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
									<span><i class="fa fa-calendar-o"></i> Oct 22, 2020</span>
								</div>
							</div>
						</div>
					</div>					
					<div class="widget">
						<h4 class="mt-40 mb-20">Testimonials</h4>
						<div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
							<div class="item">
								<div class="testimonial-widget">
									<div class="testimonial-content">
										<p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam viverra.</p>
									</div>
									<div class="testimonial-info mt-20">
										<div class="testimonial-avtar">
											<img class="img-fluid" src="../images/avatar/1.jpg" alt="">
										</div>
										<div class="testimonial-name">
											<strong>Johen Doe</strong>
											<span>Project Manager</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-widget">
									<div class="testimonial-content">
										<p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit, mattis convallis sapien efficitur non phasellus et erat sapien phasellus. </p>
									</div>
									<div class="testimonial-info mt-20">
										<div class="testimonial-avtar">
											<img class="img-fluid" src="../images/avatar/2.jpg" alt="">
										</div>
										<div class="testimonial-name">
											<strong>Johen Doe</strong>
											<span>Design</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-widget">
									<div class="testimonial-content">
										<p>In odio metus, porta vitae neque vitae, faucibus viverra orci. Quisque in lorem aliquam, ullamcorper turpis a, aliquam dui. In accumsan aliquam viverra.</p>
									</div>
									<div class="testimonial-info mt-20">
										<div class="testimonial-avtar">
											<img class="img-fluid" src="../images/avatar/3.jpg" alt="">
										</div>
										<div class="testimonial-name">
											<strong>Johen Doe</strong>
											<span>Project Manager</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-widget">
									<div class="testimonial-content">
										<p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit, mattis convallis sapien efficitur non phasellus et erat sapien phasellus. </p>
									</div>
									<div class="testimonial-info mt-20">
										<div class="testimonial-avtar">
											<img class="img-fluid" src="../images/avatar/4.jpg" alt="">
										</div>
										<div class="testimonial-name">
											<strong>Johen Doe</strong>
											<span>Design</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>				
			</div>
		</div>
	</section>
	
@endsection