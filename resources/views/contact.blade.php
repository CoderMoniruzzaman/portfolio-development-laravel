@extends('layouts.fronted')

@section('content')


    	<!-- START: CONTACT -->
		<section class="section section-contact section-light" id="contact">
			<div class="container">
				<div class="section-head">
					<span>say Hello</span>
					<h2>Contact </h2>
				</div>

				<div class="contact-Otherdetails ">
					<div class="contact-details">
						<h5 class="section-subHead mb-4"> Get in Touch</h5>
						<div class="row">
							<div class="col-sm-6 col-lg-6">
								<div class="contact-details--panel p-4 b-box text-center  " >
									<div class="mb-3 list-icon list-icon-1">
										<i class="lni-mobile"></i>
									</div>
									<div class="mt-2">
										<a href="tel:+8801310548968" class="">+8801310548968</a>
										<p class="mt-2">Call Us</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6">
								<div class="contact-details--panel p-4 b-box text-center  "  >
									<div class="mb-3 list-icon list-icon-5">
										<i class="lni-envelope"></i>
									</div>
									<div class="mt-2">
										<a href="mailto:moniruzzaman.freelancer@gmail.com">moniruzzaman.freelancer@gmail.com</a>
										<p class="mt-2">Email Us</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="contact-form mt-5">
						<form action="{{ url('contact/insert')}}" method="post">
							@csrf
							<h5 class="section-subHead mb-2"> Contact Form</h5>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mt-3 " >
										<input name="name" id="name" type="text" class="form-control b-box" placeholder="Your Name*" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mt-3 "  >
										<input name="email" id="email" type="email" class="form-control b-box" placeholder="Your Email*" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-3 "  >
										<input name="Subject" type="text" class="form-control b-box" id="subject" placeholder="Your Subject.." required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-3 "  >
										<textarea name="message" id="comments" rows="4" class="form-control b-box" placeholder="Your message..."></textarea>
									</div>
								</div>
							</div>

							<div class="row ">
					      <div class="col-lg-6">
					        @if ($message = Session::get('status'))
					           <div class="alert alert-success alert-block">

					               <button type="button" class="close" data-dismiss="alert">×</button>

					               <strong>{{ $message }}</strong>
					           </div>
					       @endif
					      </div>
					    </div>

							<div class="row">
								<div class="col-lg-12 text-center mt-4">
									<button type="submit" class="btn ">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- END: CONTACT -->
@endsection
