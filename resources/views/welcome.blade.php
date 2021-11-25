
 @extends('layouts.layout')


	
	@section('contents')
    
    <section class="bg-img pt-130 pb-50" data-overlay-light="3" style="background-image: url(../../../../public/assets/images/front-end-img/banners/banner-4.jpg); background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center mt-80">
						<h1 class="box-title text-dark mb-30">Find Your Online Course</h1>	
					</div>
					<div class="form row g-0 align-items-center cours-search max-w-950 mb-30 bg-black-60"> 
						<div class="form-group col-xl-4 col-lg-3 col-12 mb-lg-0 mb-5 bg-white"> 
							<input type="text" class="form-control input-lg b-0 be-1 border-light rounded-0" value="Search Course">
						</div>
						<div class="form-group col-xl-3 col-lg-3 col-12 mb-lg-0 mb-5 bg-white position-relative">
							<input type="text" class="form-control input-lg b-0 be-1 border-light rounded-0" value="Location">
							<span class="position-absolute r-16 t-16"><i class="fa fa-map-marker"></i> </span> 
						</div>
						<div class="form-group col-xl-3 col-lg-3 col-12 mb-lg-0 mb-5 bg-white ser-slt">
							<select class="form-control select2" style="width: 100%;">
							  <option selected="selected">Alabama</option>
							  <option>Alaska</option>
							  <option>California</option>
							  <option>Delaware</option>
							  <option>Tennessee</option>
							  <option>Texas</option>
							  <option>Washington</option>
							</select> 
						</div>
						<div class="col-xl-2 col-lg-3 col-12 mb-0"> 
							<a href="#" class="btn w-p100 btn-info rounded-0">Search</a> 
						</div>
					</div>			
					<div class="text-center">
						<a href="courses_list.html" class="btn btn-dark">Browse Courses List</a>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Our top University Partners.</h1>					
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-12">
					<div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="false" data-nav-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-1.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-2.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-3.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-4.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-5.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-6.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-7.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-8.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-9.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-10.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-11.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
						<div class="item"><img src="{{asset('assets/images/front-end-img/unilogo/uni-12.jpg')}}" class="img-fluid my-15 rounded box-shadowed pull-up" alt="" ></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Explore our Courses</h1>
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-12">
					<ul class="nav nav-tabs justify-content-center bb-0 mb-10" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">All</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab1" role="tab">Finance</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab">Operations</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3" role="tab">Strategy & Leadership</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab">Marketing</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab5" role="tab">Analytics</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab6" role="tab">HR</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab7" role="tab">Management</a> </li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="all" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/4.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">General</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/6.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">IT & Software</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/5.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Photography</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/2.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Programming Language</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/9.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/10.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Computer Basic</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab1" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/5.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Photography</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/2.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Programming Language</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab2" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/9.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/10.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Computer Basic</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab3" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/5.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Photography</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/2.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Programming Language</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab4" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/9.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/10.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Computer Basic</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab5" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/5.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Photography</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/2.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Programming Language</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab6" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/7.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Business Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/8.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">UI Design</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/9.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/10.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Computer Basic</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab7" role="tabpanel">
							<div class="px-15 pt-15">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/4.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">General</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/6.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">IT & Software</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/9.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Manegement</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<div class="box">
											<a href="#">
												<img class="card-img-top" src="{{asset('assets/images/front-end-img/courses/10.jpg')}}" alt="Card image cap">
											</a>
											<div class="box-body"> 
												<div class="text-start">
													<h4 class="box-title">Computer Basic</h4>
													<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
													<p class="box-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													<a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
												</div>
											</div>
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
	
	<section class="py-xl-100 py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-12">
					<div class="box box-body p-xl-50 p-30">
						<div class="row align-items-center">
							<div class="col-lg-6 col-12">
								<p class="badge badge-warning badge-lg">FREE</p>
								<h1 class="mb-15">Free Classes</h1>
								<h4 class="fw-400">It is a long established fact that a reade.</h4>
								<p class="fs-22">Experience Plus for free and start<br> learning from the best</p>
								<a href="#" class="btn btn-outline btn-primary">See all</a>
							</div>
							<div class="col-lg-6 col-12 position-relative">
								<div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30">
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="{{asset('assets/images/front-end-img/avatar/1.jpg')}}" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="{{asset('assets/images/front-end-img/avatar/2.jpg')}}" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
									  <img class="w-80 rounded ms-0" src="{{asset('assets/images/front-end-img/avatar/3.jpg')}}" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
									<a class="media media-single box-shadowed bg-white pull-up mb-0" href="#">
									  <img class="w-80 rounded ms-0" src="{{asset('assets/images/front-end-img/avatar/4.jpg')}}" alt="...">
									  <div class="media-body fw-500">
										<h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/ IBPS PO/IBPS Clerk exams | 5 PM</h5>
										<small class="text-fade">Today, 5:00 PM</small>
										<p><small class="text-fade mt-10">Johen doe</small></p>
									  </div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>						
		</div>
	</section>
	
	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Reviews & Ratings</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">				
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/1.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Kothari</a>
										<span class="text-fade fs-12">Software Engineer</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">A great aspect of this course is the student mentors. These people are always there to help, support, and motivate the student to complete modules...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/2.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen doe</a>
										<span class="text-fade fs-12">Vice President</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">This course actually helped me move from being a general manager to vice president. The content was exciting. I actually implemented what I learnt through case...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/3.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Anshu Srivastav</a>
										<span class="text-fade fs-12">Research Assistant</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">Group case studies really give a sense of teamwork, as it happens in regular classroom studies. It teaches us coordination and right attitude as a team...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/4.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Mical Doe</a>
										<span class="text-fade fs-12">Analyst</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">It doesn’t matter what your previous working background is, as everything is taught from the basics.</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/5.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Paton don</a>
										<span class="text-fade fs-12">Data Analyst</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">They will prepare you how to face Data Science job interviews along with this upGrad will also provide mock interviews and mock MCQ tests to check...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/6.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Doe</a>
										<span class="text-fade fs-12">Samsung</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">Many of the basic concepts are being taught to build good intuition of Machine Learning models. Most of the basic math required for developing an intuition...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/7.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Moriss Kothari</a>
										<span class="text-fade fs-12">Software Engineer</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">You will be notified of any interview opportunities in ML and they will share your profile with the recruiters. This really helps to kick start your...</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-12">
					<div class="box pull-up">
						<div class="box-body">
							<div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="{{asset('assets/images/front-end-img/avatar/8.jpg')}}" class="avatar avatar-lg rounded10" alt="">
									</div>
									<div class="d-flex flex-column fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Johens Kothari</a>
										<span class="text-fade fs-12">Software Engineer</span>
									</div>
								</div>
								<p class="mb-25 min-h-120">The course justifies every penny charged and is an investment that reaps benefits once we enter the market after course completion.</p>
								<div class="d-flex align-items-center">
									<a href="#">
										<i class="me-15 fa fa-linkedin-square"></i>
										<span>Detailed Review</span>									
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<section class="py-50 bg-img countnm-bx" style="background-image: url('assets/images/front-end-img/background/bg-3.jpg')" data-overlay="5" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300">5428</h1>
						<div class="text-uppercase text-white">Teachers</div>
					</div>
				</div>	
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Book"></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300">120</h1>
						<div class="text-uppercase text-white">Courses</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300">7485</h1>
						<div class="text-uppercase text-white">Student</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="text-center">
						<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
							<span class="text-white fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
						</div>
						<h1 class="countnm my-10 text-white fw-300">10</h1>
						<div class="text-uppercase text-white">Districts</div>
					</div>
				</div>			
			</div>
		</div>
	</section>
	
	<section class="py-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Latest Blog</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="{{asset('assets/images/front-end-img/courses/1f.jpg')}}" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blog Post With Image</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
								<div class="social">
									<strong>Share : </strong>
									<ul class="list-unstyled">
										<li>
											<a href="#"> <i class="fa fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-pinterest-p"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="{{asset('assets/images/front-end-img/courses/1f.jpg')}}" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blog Post With Image</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
								<div class="social">
									<strong>Share : </strong>
									<ul class="list-unstyled">
										<li>
											<a href="#"> <i class="fa fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-pinterest-p"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="{{asset('assets/images/front-end-img/courses/1f.jpg')}}" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blog Post With Image</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
								<div class="social">
									<strong>Share : </strong>
									<ul class="list-unstyled">
										<li>
											<a href="#"> <i class="fa fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-pinterest-p"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fa fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection

