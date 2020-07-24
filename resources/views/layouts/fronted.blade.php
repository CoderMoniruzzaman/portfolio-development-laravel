<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anj - Creative Portfolio Template</title>
	<meta name="description" content="Anj - Creative Portfolio Template" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="beingeorge" />
	<meta name="theme-color" content="#000">

	<!-- Vendor Css-->
	<link rel="stylesheet" href="{{ asset('fronted_assets/css/vendor.css')}}" />
	<link rel="stylesheet" href="{{ asset('fronted_assets/css/LineIcons.min.css')}}" />
	<link rel="stylesheet" href="{{ asset('fronted_assets/css/jquery.fancybox-1.3.4.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('fronted_assets/css/photoswipe.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('fronted_assets/css/default-skin.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('fronted_assets/css/venobox.css')}}" />

	<!-- Settings style Css -->
	<link href="{{ asset('fronted_assets/css/settings.css')}}" rel="stylesheet">

	<!-- AnjTemplate style Css -->
	<link href="{{ asset('fronted_assets/css/theme-darkblue.css')}}" rel="stylesheet">
	<!-- Custom style Css -->
	<link href="{{ asset('fronted_assets/css/work.css')}}" rel="stylesheet">
	<!-- Custom style Css -->
	<link href="{{ asset('fronted_assets/css/custom.css')}}" rel="stylesheet">
	<link href="{{ asset('fronted_assets/css/404.css')}}" rel="stylesheet">
</head>

<body>

	<!-- START: Preloader -->
	<div id="preloader" class="preloader">
		<div class="spinner">
			<div class="spinner-grow" role="status">
		</div>
			<span class="sr-only">Loading...</span>
		</div>
		<div class="preloader-screens">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- END: Preloader -->

	<!-- START: Aside -->
	<aside class="aside">
		<!-- START: NAVBAR -->

		<div class="nav-wrapper">

			<div class="navbar-toggler">
				<svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
				  <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
				  <path class="line middle" d="m 30,50 h 40" />
				  <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
				</svg>
			</div>

			<nav class="navbar text-center align-items-center justify-content-center">



                <div class="collapse navbar-collapse show">
                	<div class="about-avatar mb-5">
						<div class="about-avatar-details">
							<h1>MR</h1>
						</div>
					</div>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link ripple active js-scroll-trigger" href="{{url('/')}}">
                            	<i class="lni-home"></i>
                            	<span>Home</span>
                            </a>
                        </li>

												<li class="nav-item">
                            <a class="nav-link ripple js-scroll-trigger" href="{{url('resume')}}">
                            	<i class="lni-briefcase"></i>
                            	<span>resume</span>
                            </a>
                        </li>

												<li class="nav-item">
                            <a class="nav-link ripple js-scroll-trigger" href="{{url('service')}}">
                            	<i class="lni-offer"></i>
                            	<span>Services</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link ripple js-scroll-trigger" href="{{url('work')}}">
                            	<i class="lni-graduation"></i>
                            	<span>Portfolio</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link ripple js-scroll-trigger" href="{{url('maintainance')}}">
                            	<i class="lni-pencil"></i>
                            	<span>Blog</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ripple js-scroll-trigger" href="{{url('contact')}}">
                            	<i class="lni-phone-handset"></i>
                            	<span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="aside-scroll">
                	<i class='lni lni-arrow-down'></i>
                	<span>Scroll Down</span>
                </div>
	        </nav>
        </div>
        <!-- END: NAVBAR -->
    </aside>
    <!-- START: Aside -->

  <div class="page-wrapper section-light">

        @yield('content')
		<!--START: FOOTER-->
		<footer class="footer section section-dark">
			<div class="container">
				<p class="copyright text-center mb-0">&copy; Moniruzzaman 2020 | All Right Reserved</p>
			</div>
		</footer>
		<!--END: FOOTER-->
	</div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

	<!-- JAVASCRIPTS -->
	<script src="{{ asset('fronted_assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('fronted_assets/js/vendor.js')}}"></script>

	<script src="{{ asset('fronted_assets/js/popper.min.js')}}"></script>

	<script src="{{ asset('fronted_assets/js/parallax.min.js')}}"></script>

	<!-- Custom Js -->
	<!-- <script src="{{ asset('fronted_assets/js/isotope.pkgd.min.js')}}"></script> -->

	<script src="{{ asset('fronted_assets/js/isotope.js')}}"></script>
	<script src="{{ asset('fronted_assets/js/portfolio-filter.js')}}"></script>

	<script src="{{ asset('fronted_assets/js/Carousel.js')}}"></script>
	<script src="{{ asset('fronted_assets/js/work.js')}}"></script>

	<script src="{{ asset('fronted_assets/js/venobox.js')}}"></script>

	<script src="{{ asset('fronted_assets/js/custom.js')}}"></script>
</body>
</html>
