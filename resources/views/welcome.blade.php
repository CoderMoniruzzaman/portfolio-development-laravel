@extends('layouts.fronted')

@section('content')

<!-- START: HOME -->
	<section class="section home section-light" style="background-image:url('{{ asset('fronted_assets/images/main_bg.png')}}')">
		<div class="container">
			@forelse($homepages as $homepage)
			<div class="row justify-content-center align-items-center">
				<div class="col-md-6 text-center order-md-2">

					<div class="hero-img-wrap "  id="scene">
						<img data-depth="0.4" class="hero-img img-fluid"  src="{{ asset('uploads/pro_photos') }}/{{ $homepage->profile_pic }}"  alt="About Picture">
					<div data-depth="0.7"></div>

					<div data-depth="1"></div>
					<div data-depth="1.3"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hero-right mt-5 mt-md-0 text-center text-md-left " data-wow-delay="300ms">
						<h5>Welcome to my portfolio !</h5>
						<h1 class="my-4">I'M <span class="typed" data-elements="Moniruzzaman.,A Web Developer.,A AI Developer."></span></h1>
						<ul class="about-desc-social my-4 list-unstyled list-inline">
              <li class="list-inline-item"><a class="facebook" href="{{ $homepage->facebook }}" target="_blank" ><i class='lni lni-facebook-filled'></i></a></li>
              <li class="list-inline-item"><a class="linked" href="{{ $homepage->linkedin }}" target="_blank"><i class='lni lni-linkedin'></i></a></li>
              <li class="list-inline-item"><a class="twitter" href="{{ $homepage->twitter }}" target="_blank"><i class='lni lni-twitter-filled'></i></a></li>
              <li class="list-inline-item"><a class="stackoverflow" href="{{ $homepage->stack }}" target="_blank"><i class='lni lni-stackoverflow'></i></a></li>
							<li class="list-inline-item"><a class="github" href="{{ $homepage->github }}" target="_blank"><i class="lni lni-github-original"></i></a></li>
          </ul>
					</div>
				</div>
			</div>
			@endforeach
			<div class="row justify-content-center align-items-center ht-5 b-box">
				<div class="col-lg-12">
					<div class="section-head a-h">
						<span>about me</span>
					</div>
				</div>
				<div class="col-lg-6">
					@forelse($homepages as $homepage)
					<div class="about-me ">
								<div class="block-title">
								</div>
								<p class="mb-2">{{ $homepage->description_one }}</p>
								<p>{{ $homepage->description_two }}</p>
					</div>
					@endforeach
				</div>
				<div class="col-lg-6">
					<div class="about-me">
						@forelse($homepages as $homepage)
						<ul class="info-list">
							<li><span class="title">Name</span><span class="value">{{ $homepage->name }}</span></li>
							<li><span class="title">Age</span><span class="value">{{ $homepage->age }}</span></li>
							<li><span class="title">Address</span><span class="value">{{ $homepage->address }}</span></li>
							<li><span class="title">Email</span><span class="value"><a href="mailto:monir.rubel191@gmail.com">{{ $homepage->email }}</a></span></li>
							<li><span class="title">Phone</span><span class="value"> <a href="tel:8801310548968" class="">{{ $homepage->phone }}</a></span></li>
							<li><span class="title">Skype</span><span class="value available">{{ $homepage->skype }}</span></li>
							<li><span class="title">Freelance</span><span class="value available">{{ $homepage->freelance }}</span></li>
						</ul>
						@endforeach
					</div>
				</div>
				<div class="col-lg-12 mb-a pb-5">
						@forelse($cvs as $cv)
					<div class=" text-center">
							<a href="{{ url('file/download') }}/{{ $cv->id }}" class="btn">Download CV</a>
					</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>

	<!-- END: HOME -->

    @endsection
