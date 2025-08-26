@extends('layouts.website.web-app')
@section('title')
    Education Apply Page
@endsection
@section('css')
    <!-- CSS Implementing Plugins -->
@endsection
@section('content')
    <!-- Help Center -->
    <div class="g-bg-img-hero" style="background-image: url({{ URL::asset('build/assets/include/svg/svg-bg1.svg') }});">
        <div class="container g-pt-100 g-pb-150">
            <div class="g-max-width-645 mx-auto">
                <!-- Heading -->
                <div class="g-max-width-645 text-center mx-auto g-mb-40">
                    <h1 class="g-font-size-40--md mb-3">Hi, how can we help you?</h1>
                    <p>Search our help center for quick answers.</p>
                </div>
                <!-- End Heading -->

                <!-- Help Form -->
                <form class="input-group">
                    <input class="form-control u-shadow-v35 g-brd-secondary-light-v2 g-rounded-left-30 g-px-30 g-py-12"
                        type="text" placeholder="Start typing to see suggestions">
                    <div class="input-group-btn">
                        <button type="submit"
                            class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-right-30 g-px-25 g-py-10">Search
                            <i class="ml-3 fa fa-search"></i></button>
                    </div>
                </form>
                <!-- End Help Form -->
            </div>
        </div>
    </div>
    <!-- End Help Center -->

    <!-- Help Promo Topics -->
    <div class="container g-pb-50">
        <div class="g-max-width-840 g-mt-minus-70 mx-auto">
            <div class="card-group d-block d-md-flex justify-content-lg-center g-mx-minus-15">
                <div class="card g-brd-none g-mx-15 g-mb-30">
                    <!-- Help Promo Topics -->
                    <div
                        class="card-body u-block-hover u-shadow-v35 g-color-teal g-color-white--hover g-bg-teal-opacity-0_1 g-bg-teal--hover text-center rounded g-pa-30">
                        <span class="u-icon-v1 u-icon-size--lg g-transition-0 mb-3">
                            <i class="icon-education-172 u-line-icon-pro"></i>
                        </span>
                        <h2 class="h4">Frequently Asked Questions</h2>
                        <a class="u-link-v2" href="#"></a>
                    </div>
                    <!-- End Help Promo Topics -->
                </div>

                <div class="card g-brd-none g-mx-15 g-mb-30">
                    <!-- Help Promo Topics -->
                    <div
                        class="card-body u-block-hover u-shadow-v35 g-color-purple g-color-white--hover g-bg-purple-opacity-0_1 g-bg-purple--hover text-center rounded g-pa-30">
                        <span class="u-icon-v1 u-icon-size--lg g-transition-0 mb-3">
                            <i class="icon-education-007 u-line-icon-pro"></i>
                        </span>
                        <h2 class="h4">Information &amp; Resources</h2>
                        <a class="u-link-v2" href="#"></a>
                    </div>
                    <!-- End Help Promo Topics -->
                </div>

                <div class="card g-brd-none g-mx-15 g-mb-30">
                    <!-- Help Promo Topics -->
                    <div
                        class="card-body u-block-hover u-shadow-v35 g-color-blue g-color-white--hover g-bg-blue-opacity-0_1 g-bg-blue--hover text-center rounded g-pa-30">
                        <span class="u-icon-v1 u-icon-size--lg g-transition-0 mb-3">
                            <i class="icon-education-103 u-line-icon-pro"></i>
                        </span>
                        <h2 class="h4">University Systems Services</h2>
                        <a class="u-link-v2" href="#"></a>
                    </div>
                    <!-- End Help Promo Topics -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Help Promo Topics -->

    <!-- Help Content Topics -->
    <div class="container">
        <div class="g-max-width-840 mx-auto">
            <!-- Help Content Topics -->
            <div
                class="u-block-hover u-shadow-v35 u-shadow-v37--hover g-brd-around g-brd-secondary-light-v2 rounded g-pos-rel g-pa-30 g-mb-30">
                <div class="row align-items-center">
                    <div class="col-md-2 g-pr-0--md">
                        <span class="u-icon-v1 u-icon-size--xl d-flex mx-auto">
                            <i class="icon-education-059 u-line-icon-pro"></i>
                        </span>
                    </div>
                    <div class="col-md-9 g-pl-0--md">
                        <h2 class="g-color-primary--hover h4">Registration Help</h2>
                        <p class="g-color-text-light-v1">Congratulations on your admission to the University of Unify.
                            You're about to become part of a fantastic campus community and rewarding academic environment,
                            and we can't wait for you to start.</p>
                    </div>
                    <div class="col-md-1">
                        <i
                            class="d-flex float-md-right g-hidden-sm-down g-color-text-light-v1 g-color-primary--hover g-font-size-16 material-icons">arrow_forward</i>
                    </div>
                </div>
                <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Help Content Topics -->

            <!-- Help Content Topics -->
            <div
                class="u-block-hover u-shadow-v35 u-shadow-v37--hover g-brd-around g-brd-secondary-light-v2 rounded g-pos-rel g-pa-30 g-mb-30">
                <div class="row align-items-center">
                    <div class="col-md-2 g-pr-0--md">
                        <span class="u-icon-v1 u-icon-size--xl d-flex mx-auto">
                            <i class="icon-education-001 u-line-icon-pro"></i>
                        </span>
                    </div>
                    <div class="col-md-9 g-pl-0--md">
                        <h2 class="g-color-primary--hover h4">Future Student Information</h2>
                        <p class="g-color-text-light-v1">The world is interconnected and ever-evolving. Learning should be
                            too. That's why our undergraduate students are immersed in hands-on learning opportunities.</p>
                    </div>
                    <div class="col-md-1">
                        <i
                            class="d-flex float-md-right g-hidden-sm-down g-color-text-light-v1 g-color-primary--hover g-font-size-16 material-icons">arrow_forward</i>
                    </div>
                </div>
                <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Help Content Topics -->

            <!-- Help Content Topics -->
            <div
                class="u-block-hover u-shadow-v35 u-shadow-v37--hover g-brd-around g-brd-secondary-light-v2 rounded g-pos-rel g-pa-30 g-mb-30">
                <div class="row align-items-center">
                    <div class="col-md-2 g-pr-0--md">
                        <span class="u-icon-v1 u-icon-size--xl d-flex mx-auto">
                            <i class="icon-finance-051 u-line-icon-pro"></i>
                        </span>
                    </div>
                    <div class="col-md-9 g-pl-0--md">
                        <h2 class="g-color-primary--hover h4">Status of Systems Services</h2>
                        <p class="g-color-text-light-v1">University Systems makes every effort to inform the university
                            community of any issues affecting the services that we offer.</p>
                    </div>
                    <div class="col-md-1">
                        <i
                            class="d-flex float-md-right g-hidden-sm-down g-color-text-light-v1 g-color-primary--hover g-font-size-16 material-icons">arrow_forward</i>
                    </div>
                </div>
                <a class="u-link-v2" href="#"></a>
            </div>
            <!-- End Help Content Topics -->
        </div>
    </div>
    <!-- End Help Content Topics -->
@endsection
@section('script')
    <!-- JS Implementing Plugins -->
    <script src="{{ URL::asset('build/assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>

    <!-- JS Unify -->
    <script src="{{ URL::asset('build/assets/js/hs.core.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.header.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/helpers/hs.hamburgers.js') }}"></script>
    <script src="{{ URL::asset('build/assets/js/components/hs.dropdown.js') }}"></script>
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

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
@endsection
