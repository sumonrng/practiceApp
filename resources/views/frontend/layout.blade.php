<!doctype html>
<html lang="en">

<head>
    <title>@yield('page_title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico')}}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/typography.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- apexchart CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/apexcharts.css') }}">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-customizer.css') }}" />
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('frontend/swiper/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/swiper/swiper.min.css') }}">
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <!-- gsap -->
   <!-- <script src="js/gsap.js"></script> -->
   <script src="{{ asset('frontend/gsap/gsap.min.js')}}"></script>
   <!-- gsap -->
    <!-- swiper  -->
    <script src="{{ asset('frontend/swiper/swiper.min.js') }}"></script>
    <!-- swiper
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113778816-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113778816-1');
</script>-->

</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="{{ asset('frontend/images/loader.gif')}}" alt="loder">
        </div>
    </div>
    @include('frontend.navber')
    @include('frontend.login')
    @include('frontend.registration')
    <!-- Header End -->
    <!-- Banner -->


      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide justify-content-around align-items-center">
                <div class="ban1-bgimg">
                    <img class="img-fluid banner-bg" src="{{ asset('frontend/images/banner/10.png')}}" alt="">
                </div>
                  <div class="banner-header">
                        <div class="iq-mb-20">
                            <h2 class="d-flex" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".7">Your Best Moves Now!</h2>
                            <h2 class="banner-title d-flex" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".7">Easy And Secure.</h2>
                        </div>
                        <small  data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".8" class="banner-dec my-5 iq-mt-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the<br>printing and typesetting industry. Lorem Ipsum has been the industry's standard.</small>
                        <div class="iq-mt-20 d-flex banner-button" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay="1.3">
                            <a href="javascript:void(0)" class="button  iq-mt-10"><span class="button-inner-box">
                                <span class="icon-one icon"><svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                                <span class="text-btn">View More</span>
                                <span class="icon-two icon"><svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                                </span>
                            </a>
                        </div>
                  </div>
                  <div class="banner-img-1">
                     <img data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1.2" data-iq-delay="1.5" src="{{asset('frontend/images/banner/03.png') }}" alt="image">
                  </div>
            </div>
            <div class="swiper-slide">
                <div class="ban1-bgimg">
                    <img class="img-fluid banner-bg" src="{{ asset('frontend/images/banner/10.png')}}" alt="">
                </div>
                <div class="banner-header-2">
                    <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".6" class="future">what are future</h2>
                    <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".9" class="my-4">Buy, Sell, Exchange Bitcoins with CoinEx ! </h2>
                    <div class="d-flex justify-content-center banner-img-3" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1.5" data-iq-delay="1.2">
                        <img class="img-fluid  me-4" src="{{ asset('frontend/images/banner/05.png')}}" alt="">
                        <img class="img-fluid  me-4" src="{{ asset('frontend/images/banner/06.png')}}" alt="">
                        <img class="img-fluid  me-4" src="{{ asset('frontend/images/banner/05.png')}}" alt="">
                        <img class="img-fluid " src="{{ asset('frontend/images/banner/05.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide d-flex justify-content-around align-items-center">
                <div class="ban1-bgimg">
                    <img class="img-fluid banner-bg" src="{{ asset('frontend/images/banner/10.png')}}" alt="">
                </div>
                <div class="banner-header-3">
                    <div class="banner-title-3 iq-mb-20">
                        <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".7" class="d-flex">Be Ready to fly with</h2>
                        <h2 data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay=".7" class="banner-title d-flex">COINEX.</h2>
                    </div>
                    <small class=" banner-dec" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1" data-iq-delay="1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the<br>printing and typesetting industry. Lorem Ipsum has been the industry's standard.</small>
                    <div class="d-flex iq-mt-20 banner-button" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="1.2" data-iq-delay="2">
                        <a href="javascript:void(0)" class="button">
                            <span class="button-inner-box">
                            <span class="icon-one icon"><svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                            <span class="text-btn">View More</span>
                            <span class="icon-two icon"><svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="banner-img-2">
                    <img data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="50" data-iq-duration="2" data-iq-delay="1"  src="{{ asset('frontend/images/banner/04.png')}}" alt="image">
                 </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    <!-- Banner End -->

<!-- Topbar Chart -->
        {{-- <div class="topbar-chart iq-chart">
            <div class="container-fluid">
                <div class="row">
                    <script>
                    baseUrl = "https://widgets.cryptocompare.com/";
                    var scripts = document.getElementsByTagName("script");
                    var embedder = scripts[scripts.length - 1];
                    var cccTheme = { "General": { "enableMarquee": true } };
                    (function() {
                        var appName = encodeURIComponent(window.location.hostname);
                        if (appName == "") { appName = "local"; }
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=BTC,USD,CNY,EUR';
                        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                    })();
                    </script>
                </div>
            </div>
        </div> --}}

 <!-- Topbar Chart End -->

    <!-- Main Content -->
    <div class="main-content">
         <!-- Easy Steps -->
    <section class="overview-block-ptb easy-step">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="subtitle d-flex align-items-center  justify-content-center iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            Get Started</small>
                   </div>
                    <div>
                        <h2 class="title iq-mb-25">3 Easy Steps to Get Started</h2>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 iq-mt-20">
                    <div class="iq-features1">
                        <div class="iq-bg" style="background-image: url({{ asset('frontend/images/feature/01.jpg')}})"></div>
                        <div class="iq-blog">
                            <div class="step">1</div>
                            <div class="icon mb-2"><img class="img-fluid" src="{{ asset('frontend/images/home/icon/03.png')}}" alt=""></div>
                            <h4 class="mt-4 mb-3"><a href="javascript:void(0)">Fill Up Your Form</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 iq-mt-20">
                    <div class="iq-features1">
                        <div class="iq-bg" style="background-image: url({{ asset('frontend/images/feature/01.jpg')}})"></div>
                        <div class="iq-blog">
                            <div class="step">2</div>
                            <div class="icon mb-2"><img class="img-fluid" src="{{ asset('frontend/images/home/icon/01.png')}}" alt=""></div>
                            <h4 class="mt-4 mb-3"><a href="javascript:void(0)">Payment</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>                                <a href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 iq-mt-20">
                    <div class="iq-features1">
                        <div class="iq-bg" style="background-image: url({{ asset('frontend/images/feature/01.jpg')}})"></div>
                        <div class="iq-blog">
                            <div class="step">3</div>
                            <div class="icon mb-2"><img class="img-fluid" src="{{ asset('frontend/images/home/icon/02.png')}}" alt=""></div>
                            <h4 class="mt-4 mb-3"><a href="javascript:void(0)">Buy or Sell Coin</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>                                <a href="javascript:void(0)">Read More <i aria-hidden="true" class="ion-ios-arrow-forward"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Easy Steps -->
    <!-- About Us -->
    <section class="overview-block-ptb iq-bg iq-over-black-80 jarallax iq-about-us" style="background-image: url('images/bg/bg-13.jpg'); background-position: left center;">
        <div class="container">
            <div class="row h-100">

                <div class="col-lg-8 col-md-12 iq-mb-80">
                    <div class="subtitle d-flex align-items-center  iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            About Us</small>
                   </div>
                    <h2 class="" >Everything <br>
                        <span class="iq-font-yellow">You Need To Know!</span>
                    </h2>
                    <p class="text-white iq-mt-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <ul class="listing-hand text-white">
                        <li class="iq-mt-20">Simply dummy text of the Lorem Ipsum is printing and type setting.</li>
                        <li class="iq-mt-20">Dummy text of the printing and typesetting industry.</li>
                        <li class="iq-mt-20">Text of the printing and typesetting industry Lorem Ipsum has been.</li>
                        <li class="iq-mt-20">Ipsum has been the industry's standard dummy since the 1500s,</li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <!-- Features -->
    <section class="overview-block-ptb iq-feature-aria">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subtitle d-flex align-items-center  justify-content-center iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            Features</small>
                   </div>
                    <div class="text-center">
                        <h2 class="title iq-mb-25">Bitcoin Features</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row h-100">
                <div class="col-lg-4 col-md-12 text-end">
                    <div class="d-flex align-items-center">
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3" ><a href="services-details.html"> Fast Transaction</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                            </div>
                            <div class="ms-3">
                                <img class="img-fluid" src="{{ asset('frontend/images/services/icon/01.png')}}" alt="">
                            </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3" ><a href="services-details.html"> Secure and Stable</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                            </div>
                            <div class="ms-3">
                                <img class="img-fluid" src="{{ asset('frontend/images/services/icon/02.png')}}" alt="">
                            </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3" ><a href="services-details.html"> Coin Exchange</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                            </div>
                            <div class="ms-3">
                                <img class="img-fluid" src="{{ asset('frontend/images/services/icon/03.png')}}" alt="">
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 align-self-center text-center">
                    <img class="img-fluid" src="{{ asset('frontend/images/feature/features-img1.png')}}" alt="">
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img class="img-fluid" src="{{ asset('frontend/images/services/icon/04.png')}}" alt="">
                        </div>
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3"><a href="services-details.html">Mobile Apps</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img class="img-fluid" src="{{ asset('frontend/images/services/icon/05.png')}}" alt="">
                        </div>
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3"><a href="services-details.html">24/7 Trading</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img class="img-fluid" src="{{ asset('frontend/images/services/icon/06.png')}}" alt="">
                        </div>
                        <div class="iq-feature2 iq-mtb-20">
                            <h4 class="mb-3"><a href="services-details.html">Free Consulting</a></h4>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                        </div>
                    </div>
                </div>
                <div class="particles text-center"><img class="img-fluid" src="{{ asset('frontend/images/particles.png')}}" alt=""></div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <!-- Bitcoin Charts -->
    <section class="overview-block-ptb text-white dark-bg coinex-charts">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="subtitle d-flex align-items-center  iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            Market</small>
                   </div>
                    <div >
                        <h2 class="title text-white iq-mb-25">Recent Market</h2>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a class="button" href="javascript:void(0)">
                        <span class="button-inner-box">
                            <span class="icon-one icon">
                            <svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                            <span class="text-btn">Read More</span>
                            <span class="icon-two icon">
                            <svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg></span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 chart-img">
                    <div class="btcwdgt-chart"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bitcoin Charts -->
    <!-- Why us -->
    <section class="overview-block-ptb iq-why-us">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 col-md-12 ">
                    <div >
                        <div class="subtitle d-flex align-items-center  iq-font-yellow">
                            <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="4" height="4" fill="currentColor"/>
                                <rect y="6" width="4" height="4" fill="currentColor"/>
                                <rect x="6" width="4" height="4" fill="currentColor"/>
                                <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                                </svg>

                            <small class="text text-uppercase fw-bold iq-font-yellow">
                                Why Choose</small>
                       </div>
                        <h2 class="title  mb-2">Why Choose Us</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="iq-feature3 iq-mt-60">
                        <div class="iq-icon yellow-bg">
                            01
                        </div>
                        <div class="fancy-content">
                            <h4 class=" mb-3">No Central Authority</h4>
                            <p>Lorem ipsum madolor sit, consectetur adipisicing elit, eiusmod tempor sicing elit, eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="iq-feature3 iq-mtb-40">
                        <div class="iq-icon yellow-bg">
                            02
                        </div>
                        <div class="fancy-content">
                            <h4 class=" mb-3">Completely Decentralized</h4>
                            <p>Lorem ipsum madolor sit, consectetur adipisicing elit, eiusmod tempor sicing elit, eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="iq-feature3 iq-mb-80">
                        <div class="iq-icon yellow-bg">
                            03
                        </div>
                        <div class="fancy-content">
                            <h4 class=" mb-3"> Peer-to-Peer Network</h4>
                            <p>Lorem ipsum madolor sit, consectetur adipisicing elit, eiusmod tempor sicing elit, eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 iq-bg">
                    <img src="{{ asset('frontend/images/about-us/about-img2.png')}}" class="img-fluid" alt="#">
                    <div class="iq-coin scrollme">
                        <span class="coin-01 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="0" data-translatey="-200" data-rotatez="180">
<img src="{{ asset('frontend/images/coin/01.png')}}" class="img-fluid" alt="#">
</span>
                        <span class="coin-02 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="0" data-translatey="-250" data-rotatey="180">
<img src="{{ asset('frontend/images/coin/02.png')}}" class="img-fluid" alt="#">
</span>
                        <span class="coin-03 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="50" data-translatey="-100">
<img src="{{ asset('frontend/images/coin/03.png')}}" class="img-fluid" alt="#">
</span>
                        <span class="coin-04 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="0" data-translatey="-300" data-rotatez="180">
<img src="{{ asset('frontend/images/coin/04.png')}}" class="img-fluid" alt="#">
</span>
                        <span class="coin-05 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="0" data-translatey="-100" data-rotatez="180">
<img src="{{ asset('frontend/images/coin/05.png')}}" class="img-fluid" alt="#">
</span>
                        <span class="coin-06 animateme" data-when="span" data-from="0.9" data-to="0.1" data-translatex="0" data-translatey="-100" data-rotatez="180">
<img src="images/coin/06.png" class="img-fluid" alt="#">
</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why us -->
    <!-- Contact Us -->
    <section class="overview-block-ptb iq-bg iq-over-black-80 jarallax" style="background-image: url('images/bg/bg-7.jpg'); background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center iq-need-help">
                    <img src="{{ asset('frontend/images/need-help.png')}}" alt="">
                    <h2 class="iq-font-yellow iq-mt-25">Any Query? Contact Us</h2>
                    <ul class="list-inline iq-mt-60 mb-4">
                        <li class="list-inline-item iq-font-yellow"><i class="fa fa-phone me-2" aria-hidden="true"></i> 0 123 456 789</li>
                        <li class="list-inline-item text-white ms-3"><i class="fa fa-envelope-open me-2" aria-hidden="true"></i>support@coinex.com</li>
                    </ul>
                    <div class="text-white iq-mt-10">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us -->
    <!-- Team -->
    <section class="overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="subtitle d-flex align-items-center  justify-content-center iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            Team</small>
                   </div>
                    <div >
                        <h2 class="title iq-mb-25">Our Investors</h2>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-team1 text-center iq-mtb-15">
                        <div class="team-blog">
                            <div class="team-images"> <img class="img-fluid" src="{{ asset('frontend/images/team/01.jpg')}}" alt=""> </div>
                            <div class="team-description">
                                <div class="mt-10">+0123 456 789</div>
                                <div class="text-white">support@bitcoin.com</div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-facebook-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-twitter-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-rss-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-googleplus-outline"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class=" iq-mt-10"><a href="team-details.html">Rinks Cooper</a></h5>
                        <small>CEO, CoinEx</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-team1 text-center iq-mtb-15">
                        <div class="team-blog">
                            <div class="team-images"> <img class="img-fluid" src="{{ asset('frontend/images/team/02.jpg')}}" alt=""> </div>
                            <div class="team-description">
                                <div class="mt-10">+0123 456 789</div>
                                <div class="text-white">support@bitcoin.com</div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-facebook-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-twitter-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-rss-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-googleplus-outline"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class=" iq-mt-10"><a href="team-details.html">JD Scot</a></h5>
                        <small>CEO, CoinEx</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-team1 text-center iq-mtb-15">
                        <div class="team-blog">
                            <div class="team-images"> <img class="img-fluid" src="{{ asset('frontend/images/team/03.jpg')}}" alt=""> </div>
                            <div class="team-description">
                                <div class="mt-10">+0123 456 789</div>
                                <div class="text-white">support@bitcoin.com</div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-facebook-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-twitter-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-rss-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-googleplus-outline"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class=" iq-mt-10"><a href="team-details.html">Haris Morgan</a></h5>
                        <small>CEO, CoinEx</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="iq-team1 text-center iq-mtb-15">
                        <div class="team-blog">
                            <div class="team-images"> <img class="img-fluid" src="{{ asset('frontend/images/team/04.jpg')}}" alt=""> </div>
                            <div class="team-description">
                                <div class="mt-10">+0123 456 789</div>
                                <div class="text-white">support@bitcoin.com</div>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-facebook-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-twitter-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-rss-outline"></i> </a> </li>
                                    <li> <a href="javascript:void(0)"> <i class="ion-social-googleplus-outline"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class=" iq-mt-10"><a href="team-details.html">Nik Jorden</a></h5>
                        <small>CEO, CoinEx</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <!-- Counter -->
    <section class="overview-block-ptb iq-bg iq-over-black-80 jarallax iq-we-happy" style="background-image: url('images/bg/bg-5.png'); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="text-white">Bitcoin is the <span class="iq-font-yellow">best choice</span> for you if:</h2>
                    <ul class="listing-hand iq-mt-30 text-white">
                        <li class="iq-mt-20">Simply dummy text of the Lorem Ipsum is printing and type setting.</li>
                        <li class="iq-mt-20">Dummy text of the printing and typesetting industry.</li>
                        <li class="iq-mt-20">Text of the printing and typesetting industry Lorem Ipsum has been.</li>
                        <li class="iq-mt-20">Ipsum has been the industry's standard dummy since the 1500s,</li>
                        <li class="iq-mt-20">Dummy text of the printing and typesetting industry.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 counter-blog">
                    <div class=" text-white">
                        <h3 class="title iq-mb-25 text-white">We're Fulfilled</h3>
                        <p>Here is 3 Easy Steps to Busy &amp; Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-6 iq-mt-50">
                            <div class="counter"><i class="ion-ios-folder-outline iq-font-yellow" aria-hidden="true"></i>
                                <div class="right text-start">
                                    <h3 class="timer text-white" data-to="1540" data-speed="10000">1540</h3>
                                    <small class="text-white">PROJECT</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-6 iq-mt-50">
                            <div class="counter"> <i class="ion-ios-paper-outline iq-font-yellow" aria-hidden="true"></i>
                                <div class="right text-start">
                                    <h3 class="timer text-white" data-to="2530" data-speed="10000">2530</h3>
                                    <small class="text-white">AWARDS</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-6 iq-mt-50">
                            <div class="counter"> <i class="ion-ios-person-outline iq-font-yellow" aria-hidden="true"></i>
                                <div class="right text-start">
                                    <h3 class="timer text-white" data-to="8120" data-speed="10000">8120</h3>
                                    <small class="text-white">CLIENTS</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-6 iq-mt-50">
                            <div class="counter"> <i class="ion-ios-star-outline iq-font-yellow" aria-hidden="true"></i>
                                <div class="right text-start">
                                    <h3 class="timer text-white" data-to="1620" data-speed="10000">1620</h3>
                                    <small class="text-white">RATES</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter -->
    <!-- Testimonial -->
    <div class="  iq-news overview-block-ptb iq-over-black-80 jarallax dark-bg" style="background-image: url('images/bg/bg-15.png'); background-position: center center;background-size: contain;background-repeat: no-repeat; ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 text-center">
                    <img src="{{ asset('frontend/images/speack.png')}}" alt="">
                    <div class="iq-testimonial text-center">
                        <div id="testimonial-slider" class="owl-carousel owl-theme owl-loaded" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="testimonial ">
                                <p class="description ">
                                    “Bitcoin has no physical form - it technically exists online as a complete digital asset. If you do see it, it is in the form of lines of code in an alphanumeric string. But the bottom line is, it is a store of value void of manipulation by government.”
                                </p>
                                <h5 class="fw-bold ">Rinks Cooper</h5>
                                <small>CEO, CoinEx</small>
                            </div>
                            <div class="testimonial ">
                                <p class="description ">
                                    “Bitcoin has no physical form - it technically exists online as a complete digital asset. If you do see it, it is in the form of lines of code in an alphanumeric string. But the bottom line is, it is a store of value void of manipulation by government.”
                                </p>
                                <h5 class=" fw-bold">JD Scot</h5>
                                <small>CEO, CoinEx</small>
                            </div>
                            <div class="testimonial ">
                                <p class="description ">
                                    “Bitcoin has no physical form - it technically exists online as a complete digital asset. If you do see it, it is in the form of lines of code in an alphanumeric string. But the bottom line is, it is a store of value void of manipulation by government.”
                                </p>
                                <h5 class=" fw-bold">Haris Morgan</h5>
                                <small>CEO, CoinEx</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial -->
    <!-- Latest News -->
    <div class="iq-news overview-block-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="subtitle d-flex align-items-center  justify-content-center iq-font-yellow">
                        <svg width="10" class="me-2" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="4" height="4" fill="currentColor"/>
                            <rect y="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" width="4" height="4" fill="currentColor"/>
                            <rect x="6" y="6" width="4" height="4" fill="currentColor"/>
                            </svg>

                        <small class="text text-uppercase fw-bold iq-font-yellow">
                            Blogs</small>
                   </div>
                    <div class="text-center">
                        <h2 class="title  iq-mb-25">Latest News</h2>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/01.jpg')}}" alt="#">
                            <div class="news-date"><small class="text-white"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug</small></div>
                        </div>
                        <div class="iq-news-detail iq-pall-30 dark-bg">
                            <div class="news-title mb-4 mt-3"> <a href="javascript:void(0)"><h5 class="">How One Fund Used the Carry Trade to Beat</h5> </a> </div>
                            <div class="d-flex align-items-center mt-2">
                                <small class="border-end pe-2 text-white">Power by:Michale Scott</small>
                                <small class="iq-font-yellow  ms-2 ">Business</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/02.jpg')}}" alt="#">
                            <div class="news-date"><small class="text-white"><i class="fa fa-calendar" aria-hidden="true"></i> 13 Aug </small></div>
                        </div>
                        <div class="iq-news-detail iq-pall-30 dark-bg">
                            <div class="news-title mb-4 mt-3"> <a href="javascript:void(0)"><h5 class="">The Best Set and Forget Strategies for Investing</h5> </a> </div>
                            <div class="d-flex align-items-center mt-2">
                                <small class="border-end pe-2 text-white">Power by:Michale Scott</small>
                                <small class="iq-font-yellow  ms-2 ">Business</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="iq-news-box">
                        <div class="iq-news-image clearfix">
                            <img class="img-fluid" src="{{ asset('frontend/images/blog/03.jpg')}}" alt="#">
                            <div class="news-date"><small class="text-white"><i class="fa fa-calendar" aria-hidden="true"></i> 14 Aug</small></div>
                        </div>
                        <div class="iq-news-detail iq-pall-30 dark-bg">
                            <div class="news-title mb-4 mt-2"> <a href="javascript:void(0)"><h5 class="">What is Central Bank Digital Currency (CBDC)?</h5> </a> </div>
                            <div class="d-flex align-items-center mt-2">
                                <small class="border-end pe-2 text-white">Power by:Michale Scott</small>
                                <small class="iq-font-yellow  ms-2 ">Business</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News -->
        <!-- Clients -->
        <div class="iq-our-clients particles-bg yellow-bg iq-ptb-40">
            <canvas id="canvas"></canvas>
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="5" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/01.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/02.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/03.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/04.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/05.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/06.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/01.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/02.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/03.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/04.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/05.png')}}" alt="#"></a></div>
                            <div class="item"> <a href="clients.html"><img class="img-fluid" src="{{ asset('frontend/images/clients/white/06.png')}}" alt="#"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients -->
    </div>
    <!-- Main Content End -->
    <!--=================================
Footer -->
    <footer class="iq-footer dark-bg iq-footer-2">
        <div class="footer-top iq-bg-fixed ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-90">
                        <div class="logo">
                            <img id="logo_img_2" class="img-fluid" src="images/logo-white.png" alt="# ">
                            <div class="text-white iq-mt-25 ">With coinex, you can buy, sell, trade, and earn cryptocurrencies and manage your Transaction most efficiently and securely.</div>
                            <ul class="iq-media-blog iq-mt-30 float-start">
                                <li><a href="javascript:void(0)" class="rounded" ><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)" class="rounded"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)" class="rounded"><i class="fa fa-google"></i></a></li>
                                <li><a href="javascript:void(0)" class="rounded"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 iq-contact iq-mtb-90  footer-menu-list">
                        <h5 class="small-title text-white widget-title">USE FULL LINK</h5>
                        <div class="d-flex align-items-center text-white flex-wrap">
                        <ul class="iq-pl-0 ">
                            <li><a href= "about-us.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>About Us</a></li>
                            <li><a href="services-1.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Services</a></li>
                            <li><a href="faqs-1.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Faqs</a></li>
                            <li><a href="team-1.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Team</a></li>
                            <li><a href="contact-1.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Contact Us</a></li>
                        </ul>
                        <ul class="ms-5">
                            <li><a href="history.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>History</a></li>
                            <li><a href="event.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Event</a></li>
                            <li><a href="clients.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Clients</a></li>
                            <li><a href="pricing-1.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Pricing</a></li>
                            <li><a href="blog-single.html"><i class="fa fa-angle-right me-2" aria-hidden="true"></i>Blog</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6   iq-mtb-90">
                        <h5 class="small-title text-white widget-title">RECENT POSTS</h5>
                        <ul class="iq-post">
                            <li>
                                <div class="post-img"> <img src="images/blog/01.jpg" alt="#"> </div>
                                <div class="iq-font-yellow iq-date"> Nov 10, 2016</div>
                                <div class="post-blog"> <a href="javascript:void(0)">How One Fund Used the Carry Trade to Beat Bitcoin.</a>

                                </div>
                            </li>
                            <li>
                                <div class="post-img"> <img src="images/blog/02.jpg" alt="#"> </div>
                                <div class="iq-font-yellow iq-date"> Nov 10, 2016</div>
                                <div class="post-blog"> <a href="javascript:void(0)">The Best Set and Forget Strategies for Investing in Bitcoin.</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-white iq-contact iq-mtb-90">
                        <h5 class="small-title widget-title">CONTACT</h5>
                        <div class="iq-mb-30 ">
                            <div class="blog"><i class="ion-ios-telephone-outline"></i>
                                <div class="content ">
                                    <div class=" title ">Phone</div> +0123 456 789</div>
                            </div>
                        </div>
                        <div class="iq-mb-30">
                            <div class="blog "><i class="ion-ios-email-outline"></i>
                                <div class="content ">
                                    <div class=" title ">Mail</div> mail@coinex.com</div>
                            </div>
                        </div>
                        <div class="blog"><i class="ion-ios-location-outline"></i>
                            <div class="content ">
                                <div class=" title ">Address</div> 1234 North Luke Lane, South Bend,IN 360001</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom iq-ptb-20 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iq-copyright iq-mt-10 text-white">Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="javascript:void(0)">CoinEx</a> All Rights Reserved </div>
                    </div>
                    <div class="col-md-6">
                        <ul  class="footer-nav-menu"><li  class=""><a class="text-white" href="about.html">About Us</a></li>
                            <li  class=""><a class="text-white" href="#">Privacy policy</a></li>
                            <li  class=""><a class="text-white" href="#/">Customer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
Footer -->
    <!--=================================
Login -->

    <!--=================================
Login -->
    <!--=================================
Register -->

    <!--=================================
Register -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!-- style-customizer -->
    <div class="iq-customizer closed">
        <div class="buy-button"> <a class="opener" href="javascript:void(0)"><i class="fa fa-spinner fa-spin"></i></a> </div>
        <div class="clearfix content-chooser">
            <h3 class="iq-font-yellow">CoinEX Awesome Color</h3>
            <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
            <ul class="iq-colorChange clearfix">
                <li class="color-1 selected" data-style="color-1"></li>
                <li class="color-2" data-style="color-2"></li>
                <li class="color-3" data-style="color-3"></li>
                <li class="color-4" data-style="color-4"></li>
                <li class="color-5" data-style="color-5"></li>
                <li class="color-6" data-style="color-6"></li>
                <li class="color-7" data-style="color-7"></li>
                <li class="color-8" data-style="color-8"></li>
                <li class="color-9" data-style="color-9"></li>
                <li class="color-10" data-style="color-10"></li>
            </ul>
        </div>
    </div>
    <!-- style-customizer END -->
    <!-- jquery-min JavaScript -->
    <script src="{{ asset('frontend/js/jquery-min.js')}}"></script>
    <!-- popper JavaScript -->
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Bitcoin widget JavaScript -->
    <script src="{{ asset('frontend/js/widget.js')}}"></script>
    <!-- carousel JavaScript -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
      <!-- apex chart JavaScript -->
      <script src="{{ asset('frontend/js/apexcharts.min.js')}}"></script>
    <!-- All-plugins JavaScript -->
    <script src="{{ asset('frontend/js/all-plugins.js')}}"></script>
    <!-- particles JavaScript -->
    <script src="{{ asset('frontend/js/particles.js')}}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('frontend/js/style-customizer.js')}}"></script>

    <!-- Custom JavaScript -->

    <!-- <script src="{{ asset('frontend/swiper/swiper.css')}}"></script> -->
    <script src="{{ asset('frontend/js/custom.js')}}"></script>

    <!-- Gsap animation -->

    <script>


        if (typeof ScrollTrigger !== typeof undefined) {
            gsap.registerPlugin(ScrollTrigger);
        }

        const gsapAnimate = {
            getData: (elem) => {
                const option = {
                    opacity: 0,
                    scale: 1,
                    position: {
                        x: 0,
                        y:0,
                    },
                    ease: "",
                    duration: 1,
                    delay: .4,
                    rotate: 0
                }
                if(elem !== undefined) {
                    option.position.x = gsapAnimate.validValue(elem.dataset.iqPositionX, 0)

                    option.position.y = gsapAnimate.validValue(elem.dataset.iqPositionY, 0)

                    option.rotate = gsapAnimate.validValue(elem.dataset.iqRotate, 0)

                    option.scale = gsapAnimate.validValue(elem.dataset.iqScale, 1)

                    option.opacity = gsapAnimate.validValue(elem.dataset.iqOpacity, 0)

                    option.delay = gsapAnimate.validValue(elem.dataset.iqDelay, .4)

                    option.duration = gsapAnimate.validValue(elem.dataset.iqDuration, 1.5)

                    option.ease = gsapAnimate.validValue(elem.dataset.iqEase, '')

                    const setOption = {opacity: option.opacity, scale: option.scale, x: option.position.x, y: option.position.y, ease: option.ease, rotate: option.rotate, duration: option.duration, delay: option.delay}

                    if (typeof ScrollTrigger !== typeof undefined) {
                        if (elem.dataset.iqTrigger == 'scroll') {
                            const scrub = elem.dataset.iqScrollScrub === 'true' ? true : false

                            setOption.scrollTrigger = {
                            trigger: elem,
                            start: () => "top 90%",
                            end: () => "bottom 10%",
                            scrub: scrub,
                            markers: false
                            }
                        }
                    }

                    return setOption
                } else {
                    return {opacity: 0}
                }
            },
            onStart : (elem) => {

                const setOption = gsapAnimate.getData(elem)

                gsap.from(elem, setOption)

            },

            onEnd : (elem) => {

                const setOption = gsapAnimate.getData(elem)

                gsap.to(elem, setOption)

            },

            onStartEnd : (elem) => {

                const setOption = gsapAnimate.getData(elem)

                const setEndOption = gsapAnimate.getData(elem)

                setEndOption.opacity = 1

                setEndOption.x = 0

                setEndOption.y = 0

                setEndOption.rotate = 0

                setEndOption.scale = 1

                gsap.fromTo(elem, setOption, setEndOption)
            },
            validValue: (attr, defaultVal) => {
                if (attr !== undefined && attr !== null) {
                    return Number(attr)
                }
                return Number(defaultVal)
            }
        }


        function animationInit() {

            const gsapElem = document.querySelector('.swiper .swiper-slide-active').querySelectorAll('[data-iq-gsap="onStart"]')

            Array.from(gsapElem, (elem) => {
                gsapAnimate.onStartEnd(elem)
            })
        }

        // Init Code

    </script>

  <!-- Initialize Swiper -->
  <script src="{{ asset('frontend/swiper/swiper.js') }}"></script>

</body>

</html>
