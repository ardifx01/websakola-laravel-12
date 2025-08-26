@extends('layouts.website.web-app')
@section('title')
    Sign In
@endsection
@section('css')
    <!-- CSS Implementing Plugins -->
@endsection
@section('content')
    <!-- Signin Form -->
    <div class="g-bg-img-hero g-bg-pos-top-center"
        style="background-image: url({{ URL::asset('build/assets/include/svg/svg-bg2.svg') }});">
        <div class="container g-pt-100 g-pb-100 g-pb-130--lg">
            <div class="g-pos-rel">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Heading -->
                        <div class="g-mb-40">
                            <h2 class="h1 mb-3">Sign in to Unify</h2>
                            <p>By signing in you will be authorized to access your applications and web sites that use the
                                Sign in Service. Use is subject to but not limited to the policies and guidelines listed
                                below in <a href="#">Policies and guidelines</a>.</p>
                        </div>
                        <!-- End Heading -->
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-5 order-md-2 g-pos-abs--md g-top-0 g-right-0">

                        @include('website.access-users-sign-in')

                        @include('website.access-users-sign-up')

                        @include('website.access-users-forgot-password')

                        <hr class="g-hidden-md-up g-my-60">
                    </div>

                    <div class="col-md-6 order-md-1">
                        <div class="g-max-width-400">
                            <!-- Media -->
                            <div class="media align-items-center g-mb-30">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">adb</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">Watch out for sites or emails that <a href="#">pretend to be
                                            legitimate</a> and ask for your NetLink ID and password.</p>
                                </div>
                            </div>
                            <!-- End Media -->

                            <!-- Media -->
                            <div class="media align-items-center g-mb-30">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">bug_report</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0"><a href="#">Report suspicious requests</a> for your NetLink ID
                                        and password.</p>
                                </div>
                            </div>
                            <!-- End Media -->

                            <!-- Media -->
                            <div class="media align-items-center">
                                <div class="d-flex mr-4">
                                    <span
                                        class="u-icon-v1 u-icon-size--lg u-shadow-v32 g-color-primary g-bg-secondary rounded-circle">
                                        <i class="material-icons">verified_user</i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">Learn more about <a href="#">how to protect your account and
                                            computer</a>.</p>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Signin Form -->
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

            // Signin Tab
            $('#signin-link, #go-back-link').on('click', function(e) {
                e.preventDefault();
                $('#signin, #go-back-link').show();
                $('#signup').hide();
                $('#forgot-password').hide();
            });

            $('#signup-link').on('click', function(e) {
                e.preventDefault();
                $('#signup').show();
                $('#signin, #go-back-link').hide();
                $('#forgot-password').hide();
            });

            $('#forgot-password-link').on('click', function(e) {
                e.preventDefault();
                $('#forgot-password').show();
                $('#signin').hide();
                $('#signup').hide();
            });
        });
    </script>
@endsection
