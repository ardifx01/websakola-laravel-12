@extends('layouts.website.web-app')
@section('title')
    Education Apply Page
@endsection
@section('css')
    <!-- CSS Implementing Plugins -->
@endsection
@section('content')
    <!-- Contacts -->
    <div class="g-bg-img-hero g-bg-pos-top-center"
        style="background-image: url({{ URL::asset('build/assets/include/svg/svg-bg2.svg') }});">
        <div class="container g-pt-100 g-pb-20">
            <!-- Heading -->
            <div class="g-max-width-645 text-center mx-auto g-mb-40">
                <h1 class="g-font-size-40--md mb-4">Contact Us</h1>
                <p>Our team is happy to answer your sales questions. Fill out the form and we’ll be in touch as soon as
                    possible.</p>
            </div>
            <!-- End Heading -->

            <div class="row justify-content-lg-center align-items-center">
                <div class="col-md-8 col-lg-7 g-mb-50">
                    <!-- Contact Form -->
                    <form class="u-shadow-v35 g-bg-white rounded g-px-40 g-py-50">
                        <!-- Name Input -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-4">
                                <label class="g-font-weight-500 g-font-size-16">Your full name</label>
                            </div>
                            <div class="col-lg-8">
                                <input
                                    class="form-control g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                    type="text" placeholder="John Doe">
                            </div>
                        </div>
                        <!-- End Name Input -->

                        <!-- Name Input -->
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-4">
                                <label class="g-font-weight-500 g-font-size-16">Your email address</label>
                            </div>
                            <div class="col-lg-8">
                                <input
                                    class="form-control g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                    type="email" placeholder="john@gmail.com">
                            </div>
                        </div>
                        <!-- End Name Input -->

                        <!-- Name Input -->
                        <div class="row mb-4">
                            <div class="col-lg-4">
                                <label class="g-font-weight-500 g-font-size-16">Your question</label>
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control g-brd-none g-bg-secondary g-bg-secondary-dark-v1--focus rounded g-px-20 g-py-12"
                                    rows="5" placeholder="Hi there, I would like to ..."></textarea>
                            </div>
                        </div>
                        <!-- End Name Input -->

                        <div class="text-right">
                            <button type="submit"
                                class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-10">Submit</button>
                        </div>
                    </form>
                    <!-- End Contact Form -->
                </div>

                <div class="col-md-4 col-lg-3 g-mb-50">
                    <div class="g-pl-15--lg">
                        <h2 class="h3 mb-4">Address Details:</h2>

                        <!-- Contact Info -->
                        <div class="media align-items-center mb-4">
                            <div class="d-flex mr-3">
                                <span
                                    class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                    <i class="fa fa-map-marker"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <span>61 Oxford str., Kingston, Ontario, Canada</span>
                            </div>
                        </div>
                        <!-- End Contact Info -->

                        <!-- Contact Info -->
                        <div class="media align-items-center mb-4">
                            <div class="d-flex mr-3">
                                <span
                                    class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                    <i class="fa fa-envelope-open"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <span>support@unify.com</span>
                            </div>
                        </div>
                        <!-- End Contact Info -->

                        <!-- Contact Info -->
                        <div class="media align-items-center">
                            <div class="d-flex mr-3">
                                <span
                                    class="u-icon-v3 u-icon-size--xs g-color-primary g-bg-primary-opacity-0_1 rounded-circle">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <span>1-800-643-4500</span>
                            </div>
                        </div>
                        <!-- End Contact Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contacts -->

    <!-- Contacts Info -->
    <div class="container g-pt-50 g-pb-20">
        <div class="row justify-content-lg-center">
            <div class="col-md-6 col-lg-5 g-mb-30">
                <!-- Additional Contact Info -->
                <div class="media g-pr-10--lg">
                    <div class="d-flex mr-3">
                        <span class="u-icon-v1 u-icon-size--lg g-color-primary">
                            <i class="fa fa-comments-o"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h4">General communication</h3>
                        <p class="g-color-text-light-v1">For general queries, including partnership opportunities, please
                            email <a href="#">info@unify.com</a>.</p>
                    </div>
                </div>
                <!-- End Additional Contact Info -->
            </div>

            <div class="col-md-6 col-lg-5 g-mb-30">
                <!-- Additional Contact Info -->
                <div class="media g-pl-10--lg">
                    <div class="d-flex mr-3">
                        <span class="u-icon-v1 u-icon-size--lg g-color-primary">
                            <i class="fa fa-support"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h4">Technical or account support</h3>
                        <p class="g-color-text-light-v1">We’re here to help! If you have technical issues, <a
                                href="#">contact support</a></p>
                    </div>
                </div>
                <!-- End Additional Contact Info -->
            </div>
        </div>
    </div>
    <!-- End Contacts Info -->
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
