
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta name="description" content="Anj - Creative Portfolio Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="beingeorge" />

	<!-- Vendor Css-->
	<link rel="stylesheet" href="{{ asset('fronted_assets/css/vendor.css')}}" />
	<link rel="stylesheet" href="{{ asset('fronted_assets/css/LineIcons.min.css')}}" />

  <link rel="stylesheet" href="{{ asset('fronted_assets/css/slick.css')}}" />


	<link href="{{ asset('fronted_assets/css/work.css')}}" rel="stylesheet">
	<link href="{{ asset('fronted_assets/css/theme-darkblue.css')}}" rel="stylesheet">
</head>

<body>

<section class="workview">
  <div class="container">

<div class="row mt-5">

  <div class="col-lg-8">
    <div class="row work-slider">
      <!-- client item 1 -->
      <div class="col-lg-12">
          <div class="work-item text-center">
                <div class="img-wok">
                   <img src="{{ asset('/uploads/product_photos')}}/{{ $products_info->product_image }}" class="figure-img rounded" alt="">

                </div>
          </div>
      </div>
			 @foreach ($multiple_photos as $multiple_photo)
			<div class="col-lg-12">
				<div class="work-item text-center">
					<div class="img-wok">
							<img src="{{ asset('/uploads/product_photos/sliders')}}/{{ $multiple_photo }}" class="figure-img rounded" alt="">
					</div>
				</div>
			</div>
			@endforeach
  </div>

  </div>
      <div class="col-lg-4">
        <div class="pro-text">
        	<h2>Project name</h2>
					<span>{{ $products_info->name }}</span>
					<h2 class="mt-4">Project Description</h2>
					<p>{!! $products_info->product_description !!}</p>
					
					<div class="mt-4">
							<a href="{{ $products_info->product_link }}" class="btn mt-3 mr-2">Preview</a>
							<a href="{{ $products_info->product_link }}" class="btn mt-3">Buy Now</a>
					</div>
        </div>
      </div>

      <div class="col-lg-8 mt-5 mb-5">
        <div class="embed-responsive embed-responsive-16by9">
        	{!! $products_info->product_video_link !!}
        </div>
      </div>
    </div>
  </div>
</section>

	<!-- JAVASCRIPTS -->
	<script src="{{ asset('fronted_assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ asset('fronted_assets/js/vendor.js')}}"></script>
	<script src="{{ asset('fronted_assets/js/popper.min.js')}}"></script>

  <script src="{{ asset('fronted_assets/js/slick.min.js')}}"></script>


	<script src="{{ asset('fronted_assets/js/work.js')}}"></script>

</body>
</html>
