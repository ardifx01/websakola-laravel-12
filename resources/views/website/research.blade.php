@extends('layouts.website.web-app')
@section('title')
    Research
@endsection
@section('css')
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ URL::asset('build/assets/vendor/fancybox/jquery.fancybox.css') }}">
@endsection
@section('content')
    <!-- Research Article -->
    <div class="g-bg-img-hero" style="background-image: url({{ URL::asset('build/assets/include/svg/svg-bg1.svg') }});">
        <div class="container g-py-100">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-md-6 g-mb-50 g-mb-0--md">
                    <img class="img-fluid u-shadow-v39 g-brd-around g-brd-10 g-brd-white rounded"
                        src="{{ URL::asset('build/assets/img-temp/900x600/img2.jpg') }}" alt="Image Description">
                </div>

                <div class="col-md-5">
                    <div class="mb-4">
                        <h1 class="mb-3">$28m Funding Investment for New University of Unify Research</h1>
                        <p>Food security, epigenetics, media ownership and space weather are among the topics that will be
                            investigated as part of a $28 million funding injection to Unify research from the Australian
                            Research Council (ARC).</p>
                    </div>
                    <a class="btn u-shadow-v39 g-color-white g-bg-main g-bg-primary--hover g-font-size-default g-rounded-30 g-px-35 g-py-11"
                        href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Research Article -->

    <!-- Research Articles -->
    <div class="container g-pt-100 g-pb-20">
        <div class="row">
            <div class="col-lg-9 g-mb-50">
                <div class="d-flex justify-content-lg-between align-items-lg-center g-mb-30">
                    <h2>Publications</h2>
                    <a class="u-link-v5 g-color-primary g-color-main--hover" href="#">See all Publications <i
                            class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                </div>

                <div class="row">
                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img16.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">Early-career researchers excel in
                                    NHMRC fellowships</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">Researchers at the University of Unify have
                                received almost $23 million from the National Health and Medical Research Council (NHMRC).
                            </p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>

                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img17.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">$2.3 million to support industry
                                    partnerships for 21 projects</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">Twenty-one projects have been awarded funding
                                under the University’s industry and community engagement seed fund.</p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>

                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img18.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">Government partnership to establish
                                    community languages institute</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">NSW Premier Gladys Berejiklian announces a state
                                government investment of $7.6m to create the Unify Insitute for Community Languages
                                Education (SICLE).</p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>

                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img19.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">From quantum physicist to CEO: how
                                    Michael Biercuk started Q-Ctrl</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">Quantum computers face roadblocks in development
                                due to qubit instability. With backing from CSIRO and venture capital, Q-Ctrl will develop
                                the firmware to stabilise the quantum revolution.</p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>

                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img22.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">Why so few Australians are using
                                    medicinal cannabis on prescription</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">What are the difficulties of using medicinal
                                cannabis in Australia? Professor Iain McGregor from the University's Lambert Initiative
                                explains in this article.</p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>

                    <div class="col-6 col-md-4 g-mb-40">
                        <!-- Research Article -->
                        <article>
                            <img class="img-fluid g-mb-20" src="{{ URL::asset('build/assets/img-temp/600x350/img23.jpg') }}"
                                alt="Image Description">
                            <h3 class="h4 mb-3"><a class="h4 u-link-v5" href="#">Nine University scholars named AAHMS
                                    Fellows</a></h3>
                            <p class="g-color-text-light-v1 g-font-size-15">Nine scholars from the University of Unify have
                                been inducted as fellows of the Australian Academy of Health and Medical Sciences.</p>
                            <a class="g-font-size-default" href="#">Read More <i
                                    class="g-font-size-13 g-pos-rel g-top-3 material-icons">arrow_forward</i></a>
                        </article>
                        <!-- End Research Article -->
                    </div>
                </div>
            </div>

            <div class="col-lg-3 g-mb-50">
                <!-- Search Researcher -->
                <div class="u-shadow-v32 g-bg-secondary g-pa-30 g-mb-30">
                    <h3>Find a Researcher</h3>
                    <p>Search by name, area of expertise or faculty</p>
                    <input
                        class="form-control g-brd-main g-brd-primary--focus g-bg-transparent rounded g-px-20 g-py-12 mb-3"
                        type="text" placeholder="Enter keywords">
                    <a class="btn u-shadow-v39 g-color-white g-bg-primary g-bg-main--hover g-font-size-default rounded g-px-35 g-py-9"
                        href="#">Search</a>
                </div>
                <!-- End Search Researcher -->

                <!-- Facts List -->
                <div class="u-shadow-v36 g-bg-main-light-v2 g-pa-30">
                    <ul class="list-unstyled mb-0">
                        <li class="g-brd-bottom g-brd-white-opacity-0_1 g-pb-20">
                            <h3 class="g-color-white g-font-primary mb-0">Our research facts and figures</h3>
                        </li>
                        <li class="g-brd-bottom g-brd-white-opacity-0_1 g-py-20">
                            <h3 class="g-color-white g-font-primary mb-0">Top 25</h3>
                            <p class="g-color-white-opacity-0_8 g-font-size-default mb-0">One of the world's top research
                                universities</p>
                        </li>
                        <li class="g-brd-bottom g-brd-white-opacity-0_1 g-py-20">
                            <h3 class="g-color-white g-font-primary mb-0">100%</h3>
                            <p class="g-color-white-opacity-0_8 g-font-size-default mb-0">of our research is ranked at
                                world standard or above</p>
                        </li>
                        <li class="g-brd-bottom g-brd-white-opacity-0_1 g-py-20">
                            <h3 class="g-color-white g-font-primary mb-0">70+</h3>
                            <p class="g-color-white-opacity-0_8 g-font-size-default mb-0">research centres</p>
                        </li>
                        <li class="g-pt-20">
                            <h3 class="g-color-white g-font-primary mb-0">Tripling</h3>
                            <p class="g-color-white-opacity-0_8 g-font-size-default mb-0">our investment in research</p>
                        </li>
                    </ul>
                </div>
                <!-- End Facts List -->
            </div>
        </div>
    </div>
    <!-- End Research Articles -->

    <!-- Research Articles -->
    <div class="g-bg-main-light-v2">
        <div class="container g-pt-100 g-pb-80">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-60">
                <h2 class="h1 g-color-white mb-3">Research Articles</h2>
                <p class="g-color-white-opacity-0_8">Our strategy is simple: to create a place where the best researchers
                    and most promising students can achieve their full potential.</p>
            </div>
            <!-- End Heading -->

            <div class="card-group d-block d-md-flex g-mx-minus-15">
                <div class="card u-shadow-v36 g-brd-none g-mx-15 g-mb-30">
                    <!-- Research Article -->
                    <article>
                        <div class="g-pos-rel">
                            <img class="img-fluid" src="{{ URL::asset('build/assets/img-temp/600x350/img20.jpg') }}"
                                alt="Image Description">
                            <a class="js-fancybox g-absolute-centered" href="javascript:;"
                                data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                                <span
                                    class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-25 rounded-circle">
                                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                            </a>
                        </div>
                        <div class="card-body g-bg-white text-center g-pa-20">
                            <h3 class="h4 mb-0">University moves up in latest global rankings</h3>
                        </div>
                    </article>
                    <!-- End Research Article -->
                </div>

                <div class="card u-shadow-v36 g-brd-none g-mx-15 g-mb-30">
                    <!-- Research Article -->
                    <article>
                        <div class="g-pos-rel">
                            <img class="img-fluid" src="{{ URL::asset('build/assets/img-temp/600x350/img10.jpg') }}"
                                alt="Image Description">
                            <a class="js-fancybox g-absolute-centered" href="javascript:;"
                                data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                                <span
                                    class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-25 rounded-circle">
                                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                            </a>
                        </div>
                        <div class="card-body g-bg-white text-center g-pa-20">
                            <h3 class="h4 mb-0">Qantas customers help shape future of inflight health and wellness</h3>
                        </div>
                    </article>
                    <!-- End Research Article -->
                </div>

                <div class="card u-shadow-v36 g-brd-none g-mx-15 g-mb-30">
                    <!-- Research Article -->
                    <article>
                        <div class="g-pos-rel">
                            <img class="img-fluid" src="{{ URL::asset('build/assets/img-temp/600x350/img21.jpg') }}"
                                alt="Image Description">
                            <a class="js-fancybox g-absolute-centered" href="javascript:;"
                                data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                                <span
                                    class="u-icon-v3 u-icon-size--lg u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-25 rounded-circle">
                                    <i class="g-pos-rel g-left-2 fa fa-play"></i>
                                </span>
                            </a>
                        </div>
                        <div class="card-body g-bg-white text-center g-pa-20">
                            <h3 class="h4 mb-0">Lambert Initiative for Cannabinoid Therapeutics</h3>
                        </div>
                    </article>
                    <!-- End Research Article -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Research Articles -->

    <!-- Research Articles -->
    <div class="container g-pt-100 g-pb-70">
        <div class="row">
            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article
                    class="u-block-hover g-min-height-250 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                    style="background-image: url({{ URL::asset('build/assets/img-temp/600x400/img1.jpg') }});">
                    <div class="u-block-hover__additional--partially-slide-up g-pos-abs g-bottom-0 g-left-0 g-z-index-1">
                        <div class="u-block-hover__visible g-pa-20">
                            <h3 class="h4 g-color-white mb-0">Professor Monica Reilly wins AFR Emerging Leader award</h3>
                        </div>
                        <div class="g-pa-5"></div>
                    </div>
                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article>
                    <div class="g-pos-rel">
                        <img class="img-fluid mb-3" src="{{ URL::asset('build/assets/img-temp/600x350/img2.jpg') }}"
                            alt="Image Description">
                        <a class="js-fancybox g-absolute-centered" href="javascript:;"
                            data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                            <span
                                class="u-icon-v3 u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-22 rounded-circle">
                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                    </div>
                    <span
                        class="d-block g-color-secondary-light-v1 g-font-weight-500 g-font-size-12 text-uppercase mb-2">Video</span>
                    <h4 class="h5">
                        <a class="js-fancybox h5 u-link-v5" href="javascript:;"
                            data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350"
                            data-caption="Video">University authors shortlisted for state’s top history awards</a>
                    </h4>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article>
                    <div class="g-pos-rel">
                        <img class="img-fluid mb-3" src="{{ URL::asset('build/assets/img-temp/600x350/img11.jpg') }}"
                            alt="Image Description">
                        <a class="js-fancybox g-absolute-centered" href="javascript:;"
                            data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">
                            <span
                                class="u-icon-v3 u-block-hover--scale g-color-main g-color-white--hover g-bg-white-opacity-0_5 g-bg-white-opacity-0_3--hover g-font-size-22 rounded-circle">
                                <i class="g-pos-rel g-left-2 fa fa-play"></i>
                            </span>
                        </a>
                    </div>
                    <span
                        class="d-block g-color-secondary-light-v1 g-font-weight-500 g-font-size-12 text-uppercase mb-2">Video</span>
                    <h4 class="h5">
                        <a class="js-fancybox h5 u-link-v5" href="javascript:;"
                            data-src="//www.youtube.com/watch?v=FxiskmF16gU" data-speed="350" data-caption="Video">Four
                            Unify finalists announced in Eureka science awards</a>
                    </h4>
                </article>
                <!-- End Research Articles -->
            </div>

            <div class="col-sm-6 col-lg-3 g-mb-30">
                <!-- Research Articles -->
                <article
                    class="u-block-hover g-min-height-250 g-bg-img-hero g-bg-cover g-bg-white-gradient-opacity-v1--after g-pos-rel"
                    style="background-image: url({{ URL::asset('build/assets/img-temp/600x400/img3.jpg') }});">
                    <div class="u-block-hover__additional--partially-slide-up g-pos-abs g-bottom-0 g-left-0 g-z-index-1">
                        <div class="u-block-hover__visible g-pa-20">
                            <h3 class="h4 g-color-white mb-0">Unify researchers recognised as Superstars of STEM</h3>
                        </div>
                        <div class="g-pa-5"></div>
                    </div>
                    <a class="u-link-v2 g-z-index-2" href="#"></a>
                </article>
                <!-- End Research Articles -->
            </div>
        </div>
    </div>
    <!-- End Research Articles -->
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="{{ URL::asset('build/assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ URL::asset('build/assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>

    <!-- JS Unify -->
    <script src="{{ URL::asset('build/assets/js/hs.core.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.header.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.dropdown.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.popup.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.go-to.js') }}"></script>

    <!-- JS Customization -->
    <script src="{{ URL::asset('build/assets/js/custom.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
