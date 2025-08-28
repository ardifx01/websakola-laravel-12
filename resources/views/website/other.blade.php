@extends('layouts.website.web-app')
@section('title')
    Team
@endsection
@section('css')
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-line/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-etlinefont/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-line-pro/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/icon-hs/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/dzsparallaxer/dzsscroller/scroller.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/dzsparallaxer/advancedscroller/plugin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('build/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/hs-bg-video/hs-bg-video.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/hamburgers/hamburgers.min.css') }}">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{ URL::asset('build/assets/css/unify-core.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/css/unify-components.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/assets/css/unify-globals.css') }}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ URL::asset('build/assets/css/custom.css') }}">
@endsection
@section('content')
    <div class="g-bg-img-hero" style="background-image: url({{ URL::asset('build/assets/include/svg/svg-bg1.svg') }});">
        <!-- Cube Portfolio Blocks -->
        <section class="container g-py-100">
            <div class="g-mb-50">
                <div class="d-flex justify-content-start g-brd-bottom g-brd-gray-light-v4 pb-5">
                    <div class="d-block">
                        <h2 class="h1 g-color-black">Work in progress</h2>
                        <span class="d-block g-font-weight-300 g-font-size-22 mr-4 g-mb-6">See our latest News &amp; Works
                            on</span>
                    </div>

                    <!-- Social Icons -->
                    <ul class="list-inline align-self-end mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-slide-up--hover g-color-red g-bg-red-opacity-0_1 g-color-red--hover rounded-circle"
                                href="#!">
                                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-slide-up--hover g-color-teal g-bg-teal-opacity-0_1 g-color-teal--hover rounded-circle"
                                href="#!">
                                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-slide-up--hover g-color-cyan g-bg-cyan-opacity-0_1 g-color-cyan--hover rounded-circle"
                                href="#!">
                                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-slide-up--hover g-color-purple g-bg-purple-opacity-0_1 g-color-purple--hover rounded-circle"
                                href="#!">
                                <i class="g-font-size-15 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                                <i class="g-font-size-15 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Social Icons -->
                </div>
            </div>

            <!-- Cube Portfolio Blocks - Filter -->
            <ul id="filterControls1" class="d-block list-inline g-mb-50">
                <li class="list-inline-item cbp-filter-item g-color-black g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase pr-2 mb-2"
                    role="button" data-filter="*">
                    Show All
                </li>
                <li class="list-inline-item cbp-filter-item g-color-black g-color-primary--hover g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase px-2 mb-2"
                    role="button" data-filter=".identity">
                    Identity
                </li>
                <li class="list-inline-item cbp-filter-item g-color-black g-color-primary--hover g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase px-2 mb-2"
                    role="button" data-filter=".design">
                    Design
                </li>
                <li class="list-inline-item cbp-filter-item g-color-black g-color-primary--hover g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase px-2 mb-2"
                    role="button" data-filter=".graphic">
                    Graphic
                </li>
                <li class="list-inline-item cbp-filter-item g-color-black g-color-primary--hover g-color-gray-dark-v5--active g-font-weight-600 g-font-size-13 text-uppercase g-letter-spacing-0_5 px-2 mb-2"
                    role="button" data-filter=".graphic, .identity">
                    Design &amp; Identity
                </li>
            </ul>
            <!-- End Cube Portfolio Blocks - Filter -->

            <!-- Cube Portfolio Blocks - Content -->
            <div class="cbp" data-controls="#filterControls1" data-animation="quicksand" data-x-gap="30" data-y-gap="30"
                data-media-queries='[{"width": 1500, "cols": 3}, {"width": 1100, "cols": 3}, {"width": 800, "cols": 3}, {"width": 480, "cols": 2}, {"width": 300, "cols": 1}]'>
                <!-- Cube Portfolio Blocks - Item -->
                <div id="shortcode" class="cbp-item identity design">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img8.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img8.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Branding work</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Identity, Design</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->

                <!-- Cube Portfolio Blocks - Item -->
                <div class="cbp-item design">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img9.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img9.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Development</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Design</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->

                <!-- Cube Portfolio Blocks - Item -->
                <div class="cbp-item graphic identity">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img2.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img2.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Project planner</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Graphic, Identity</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->

                <!-- Cube Portfolio Blocks - Item -->
                <div class="cbp-item graphic">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img11.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img11.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Design</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->

                <!-- Cube Portfolio Blocks - Item -->
                <div class="cbp-item identity">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img12.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img12.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Creative agency</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Identity</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->

                <!-- Cube Portfolio Blocks - Item -->
                <div class="cbp-item graphic">
                    <div class="u-block-hover g-parent">
                        <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out"
                            src="{{ URL::asset('build/assets/img-temp/400x270/img10.jpg') }}" alt="Image description">
                        <div
                            class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                            <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="#!">
                                        <i class="icon-communication-095 u-line-icon-pro"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle"
                                        href="{{ URL::asset('build/assets/img-temp/400x270/img10.jpg') }}">
                                        <i class="icon-communication-017 u-line-icon-pro"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center g-pa-25">
                        <h3 class="h5 g-color-black mb-1">Production</h3>
                        <p class="g-color-gray-dark-v4 mb-0">Graphic</p>
                    </div>
                </div>
                <!-- End Cube Portfolio Blocks - Item -->
            </div>
            <!-- End Cube Portfolio Blocks - Content -->
        </section>
        <!-- End Cube Portfolio Blocks -->
    </div>
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="{{ URL::asset('build/assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/dzsparallaxer/dzsscroller/scroller.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/dzsparallaxer/advancedscroller/plugin.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js') }}">
    </script>
    <script src="{{ URL::asset('build/assets/vendor/hs-bg-video/hs-bg-video.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/hs-bg-video/vendor/player.min.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>

    <!-- JS Unify -->
    <script src="{{ URL::asset('build/assets/js/hs.core.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.header.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.tabs.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.go-to.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.carousel.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.cubeportfolio.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/helpers/hs.bg-video.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.popup.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.go-to.js') }}"></script>

    <!-- JS Customization -->
    <script src="{{ URL::asset('build/assets/js/custom.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of video on background
            $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');
        });

        $(window).on('load', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');
        });

        $(window).on('resize', function() {
            setTimeout(function() {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>
@endsection
