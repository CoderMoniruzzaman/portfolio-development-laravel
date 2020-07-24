@extends('layouts.fronted')

@section('content')

		<!-- START: SERVICES -->
		<section class="section section-dark section-services" id="services">
			<div class="container">
				<div class="section-head">
					<span>WHAT I DO</span>
					<h2>My Services</h2>
				</div>

				<div class="row">
					<div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "  >
							<div class="list-icon list-icon-1">
								<i class="lni-color-pallet"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Graphic Design</h5>
								<p class=" mt-3">I offer professional graphic designing services such as logo design services, banner design services, template design and publication design services.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "   >
							<div class="list-icon list-icon-2">
								<i class="lni-laptop-phone"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Web Development</h5>
								<p class=" mt-3">I am provide custom website design, wordpress development, e-commerce website development and website maintaince sevice</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "   >
							<div class="list-icon list-icon-3">
								<i class="lni-video"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Domain & Host</h5>
								<p class=" mt-3">We provide domain registration service and web hosting service both.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "   >
							<div class="list-icon list-icon-4">
								<i class="lni-network"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Marketing</h5>
								<p class=" mt-3">If you're in need of a successful digital marketing strategy, you've come to the right place. I offer SEO, PPC, CRO, Paid Social services and more.</p>
							</div>
						</div>
					</div>
					<!-- <div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "   >
							<div class="list-icon list-icon-5">
								<i class="lni-game"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Game Development</h5>
								<p class=" mt-3">Modern and mobile-ready website that will help of your marketing. Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="services-list b-box p-4 mt-4 "   >
							<div class="list-icon list-icon-6">
								<i class="lni-bar-chart"></i>
							</div>
							<div class="mt-4">
								<h5 class="mb-0">Analytics</h5>
								<p class=" mt-3">Modern and mobile-ready website that will help of your marketing. Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec.</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- END: SERVICES -->



        	<!-- START: TESTIMONY -->
    		<section class="section section-dark section-testimony" id="testimony">
    			<div class="container">
    				<div class="section-head text-center">
    					<span>Kind Words</span>
    					<h2>testimonial</h2>
    				</div>
    				<div class="section-testimony--content p-3 p-md-5">
    					<div class="row">
    						<div class="col-lg-12">
    							<div class="swiper-container swiper-testimony "  >
    								<div class="swiper-wrapper">
    									<div class="swiper-slide single-testimonials ">
    										<div class="single-testimonials-in mx-auto text-center">
    											<div class="single-testimonials-head pt-4 pb-5">
    												<p>"Moniruzzaman was fast and responsive, the final product looks Great! Highly recommend!"</p>
    											</div>
    											<div class="single-testimonials-foot mx-auto">
    												<img src="{{asset('fronted_assets/images/client1.jpg')}}" alt="" class="mx-auto b-box">
    												<h4 class="mt-3 font-weight-bold">Willy</h4>
    												<span class="mt-1 d-block">Web Developer</span>
    											</div>
    										</div>
    									</div>

    									<div class="swiper-slide single-testimonials ">
    										<div class="single-testimonials-in mx-auto text-center">
    											<div class="single-testimonials-head pt-4 pb-5">
    												<p>"Moniruzzaman has gone extra mile to finish work. Quality of work is fantastic and I will highly recommend him."</p>
    											</div>
    											<div class="single-testimonials-foot mx-auto">
    												<img src="{{asset('fronted_assets/images/client2.jpg')}}" alt="" class="mx-auto b-box">
    												<h4 class="mt-3 font-weight-bold">Anj Joseph</h4>
    												<span class="mt-1 d-block">Web Developer</span>
    											</div>
    										</div>
    									</div>

    									<div class="swiper-slide single-testimonials ">
    										<div class="single-testimonials-in mx-auto text-center">
    											<div class="single-testimonials-head pt-4 pb-5">
    												<p>"Amazing developer. Very helpful and skillful freelancer. I really appreciate his support. Recommend!"</p>
    											</div>
    											<div class="single-testimonials-foot mx-auto">
    												<img src="{{asset('fronted_assets/images/client3.jpg')}}" alt="" class="mx-auto b-box">
    												<h4 class="mt-3 font-weight-bold">Alex smith</h4>
    												<span class="mt-1 d-block">Web Developer</span>
    											</div>
    										</div>
    									</div>

    									<div class="swiper-slide single-testimonials ">
    										<div class="single-testimonials-in mx-auto text-center">
    											<div class="single-testimonials-head pt-4 pb-5">
    												<p>"Moniruzzaman is a really great resource, we continually use him for his skill and flexibility."</p>
    											</div>
    											<div class="single-testimonials-foot mx-auto">
    												<img src="{{asset('fronted_assets/images/client4.jpg')}}" alt="" class="mx-auto b-box">
    												<h4 class="mt-3 font-weight-bold">Dmitrii D</h4>
    												<span class="mt-1 d-block">Web Developer</span>
    											</div>
    										</div>
    									</div>

    									<div class="swiper-slide single-testimonials ">
    										<div class="single-testimonials-in mx-auto text-center">
    											<div class="single-testimonials-head pt-4 pb-5">
    												<p>"Moniruzzaman did an outstanding job, he understood the task and took ownership. I look forward to working with him again soon."</p>
    											</div>
    											<div class="single-testimonials-foot mx-auto">
    												<img src="{{asset('fronted_assets/images/client5.jpg')}}" alt="" class="mx-auto b-box">
    												<h4 class="mt-3 font-weight-bold">kelly</h4>
    												<span class="mt-1 d-block">Web Developer</span>
    											</div>
    										</div>
    									</div>

    								</div>
    								<div class="swiper-pagination"></div>
    							</div>

    							<div class="testimony-nav">
    								<a href="#" class="swiper-button-next"></a>
    								<a href="#" class="swiper-button-prev"></a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</section>
    		<!-- END: TESTIMONY -->


@endsection
