@extends('layouts.fronted')

@section('content')

    <section id="banner_full" >
      <div class="container" >
        <div class="row " >
          <div class="col-lg-12 bgw" style="background-image:url('{{ asset('fronted_assets/images/main_bg.png')}}')">
            <div class="text-center">
              <div class="section_title">
                  <p>
                      Welcome to my Portfolio.Have a look around and discover its features.
                  </p>
                  <div class="mia pt-2">
                    <span class="mainbtn mr-3 pt-1">Go to home page</span>
                      <a href="http://moniruzzamaninfo.com/" class="main_btn"><i class="lni lni-arrow-right"></i></a>
                  </div>
              </div>
            </div>
          </div>
         <div class="col-md-12 hidden-sm hidden-xs">
             <div class="rotate_slider" id="container">
                 <ul>
                   	@forelse($sliders as $slider)
                     <li>
                         <img src="{{ asset('uploads/slider') }}/{{ $slider->slider_image }}" class="img-responsive" alt="slid1">
                     </li>
                     @endforeach
                 </ul>
             </div>
         </div>
       </div>
     </div>
    </section>

  <section class="section bg-white" id="projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="titles">
                        <h4 class="title title-line text-uppercase mb-4">My Latest Work</h4>
                        <span></span>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="container">
        <div class="row mt-4 pt-2">
            <div class="col-lg-12">
                <ul class="portfolioFilter text-center mb-0 list-unstyled">
                    <li class="list-inline-item mb-3"><a href="#" data-filter="*" class="active text-dark mr-2 py-2 px-3 rounded">All</a></li>
                    @foreach ($categoreies as $category)
                    <li class="list-inline-item mb-3"><a href="#" data-filter=".filter{{$category->id}}" class="text-dark mr-2 py-2 px-3 rounded">{{$category->category_name}}</a></li>
                    @endforeach
                </ul>
            </div><!--end col-->
        </div><!--end row-->

        <div class="portfolioContainer row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mt-4 pt-2 filter{{ $product->category_id }}">
                <div class="portfolio-box rounded position-relative overflow-hidden">
                    <div class="portfolio-box-img position-relative overflow-hidden">
                        <img src="{{ asset('uploads/product_photos') }}/{{ $product->product_image }}" class="img-fluid" alt="member-image">
                        <div class="overlay-work">
                            <div class="work-content text-center">
                                <a data-vbtype="ajax" href="{{ url('workview')}}/{{$product->id}}" class="venobox text-light work-icon bg-dark d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="lni lni-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary-title py-4 text-center">
                        <h5><a data-vbtype="ajax" href="{{ url('workview')}}" class="venobox title text-dark"> {{ $product->name }} </a></h5>
                        <span>{{ $product->ralationcategory->category_name }}</span>
                    </div>
                </div>
            </div><!--end col-->

            @endforeach
        </div><!-- End row -->
    </div><!--end container-->
  </section><!--end section-->
	@endsection
