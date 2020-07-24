@extends('layouts.fronted')

@section('content')

		<!-- START: BLOG -->
    	<section class="section section-dark" id="blog">
    		<div class="container">
				<div class="section-head">
					<span>BLOG</span>
					<h2>My Articles</h2>
				</div>

				<div class="row">
					<div class="col-md-4">
						<a href="#" class="blog-list d-block mb-5 " >
							<div class="blog-list--img">
								<img src="{{ asset('fronted_assets//images/blog-1.jpg')}}" alt="Blog Image" class="img-fluid">
								<div class="blog-list--details d-flex justify-content-center align-items-center">
									<div class="blog-list--details-in">
										<p class="blog-date text-white">02 Jan, 2020</p>
										<span class="blog-by">- Alice Joe</span>
									</div>
								</div>
							</div>
							<div class="blog-list--desc p-4">
								<span class="blog-cat badge badge-primary">Passion</span>
								<h3>10 tips for drawing with coloured pencils</h3>
							</div>
						</a>
					</div>

					<div class="col-md-4">
						<a href="#" class="blog-list d-block mb-5 " >
							<div class="blog-list--img">
								<img src="{{ asset('fronted_assets/images/blog-2.jpg')}}" alt="Blog Image" class="img-fluid">
								<div class="blog-list--details d-flex justify-content-center align-items-center">
									<div class="blog-list--details-in">
										<p class="blog-date text-white">02 Jan, 2020</p>
										<span class="blog-by">- Alice Joe</span>
									</div>
								</div>
							</div>
							<div class="blog-list--desc p-4">
								<span class="blog-cat badge badge-success">Design</span>
								<h3>10 tips for drawing with coloured pencils</h3>
							</div>
						</a>
					</div>

						<div class="col-md-4">
						<a href="#" class="blog-list d-block mb-5 " >
							<div class="blog-list--img">
								<img src="{{ asset('fronted_assets/images/blog-3.jpg')}}" alt="Blog Image" class="img-fluid">
								<div class="blog-list--details d-flex justify-content-center align-items-center">
									<div class="blog-list--details-in">
										<p class="blog-date text-white">02 Jan, 2020</p>
										<span class="blog-by">- Alice Joe</span>
									</div>
								</div>
							</div>
							<div class="blog-list--desc p-4">
								<span class="blog-cat badge badge-danger">Design</span>
								<h3>10 tips for drawing with coloured pencils</h3>
							</div>
						</a>
					</div>

          <div class="col-md-4">
          <a href="#" class="blog-list d-block mb-5 " >
            <div class="blog-list--img">
              <img src="{{ asset('fronted_assets/images/blog-3.jpg')}}" alt="Blog Image" class="img-fluid">
              <div class="blog-list--details d-flex justify-content-center align-items-center">
                <div class="blog-list--details-in">
                  <p class="blog-date text-white">02 Jan, 2020</p>
                  <span class="blog-by">- Alice Joe</span>
                </div>
              </div>
            </div>
            <div class="blog-list--desc p-4">
              <span class="blog-cat badge badge-danger">Design</span>
              <h3>10 tips for drawing with coloured pencils</h3>
            </div>
          </a>
        </div>


        <div class="col-md-4">
        <a href="#" class="blog-list d-block mb-5 " >
          <div class="blog-list--img">
            <img src="{{ asset('fronted_assets/images/blog-3.jpg')}}" alt="Blog Image" class="img-fluid">
            <div class="blog-list--details d-flex justify-content-center align-items-center">
              <div class="blog-list--details-in">
                <p class="blog-date text-white">02 Jan, 2020</p>
                <span class="blog-by">- Alice Joe</span>
              </div>
            </div>
          </div>
          <div class="blog-list--desc p-4">
            <span class="blog-cat badge badge-danger">Design</span>
            <h3>10 tips for drawing with coloured pencils</h3>
          </div>
        </a>
      </div>


      <div class="col-md-4">
      <a href="#" class="blog-list d-block mb-5 " >
        <div class="blog-list--img">
          <img src="{{ asset('fronted_assets/images/blog-3.jpg')}}" alt="Blog Image" class="img-fluid">
          <div class="blog-list--details d-flex justify-content-center align-items-center">
            <div class="blog-list--details-in">
              <p class="blog-date text-white">02 Jan, 2020</p>
              <span class="blog-by">- Alice Joe</span>
            </div>
          </div>
        </div>
        <div class="blog-list--desc p-4">
          <span class="blog-cat badge badge-danger">Design</span>
          <h3>10 tips for drawing with coloured pencils</h3>
        </div>
      </a>
    </div>



				</div>

			</div>
    	</section>
    	<!-- END: BLOG -->
@endsection
