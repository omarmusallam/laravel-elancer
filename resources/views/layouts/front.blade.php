<!doctype html>
<html lang="{{ App::currentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>

    <!-- Basic Page Needs
================================================== -->
    <title>{{ config('app.name') }} | {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->

    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link rel="stylesheet" href="{{ asset('assets/front/css/style.rtl.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/front/css/colors/blue.css') }}">

</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header Container
================================================== -->
        <x-front-header />

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        {{ $slot }}

        <!-- Footer
================================================== -->
        <div id="footer">

            <!-- Footer Top Section -->
            <div class="footer-top-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">

                            <!-- Footer Rows Container -->
                            <div class="footer-rows-container">

                                <!-- Left Side -->
                                <div class="footer-rows-left">
                                    <div class="footer-row">
                                        <div class="footer-row-inner footer-logo">
                                            <img src="{{ asset('assets/front/images/logo2.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Side -->
                                <div class="footer-rows-right">

                                    <!-- Social Icons -->
                                    <div class="footer-row">
                                        <div class="footer-row-inner">
                                            <ul class="footer-social-links">
                                                <li>
                                                    <a href="#" title="Facebook" data-tippy-placement="bottom"
                                                        data-tippy-theme="light">
                                                        <i class="icon-brand-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Twitter" data-tippy-placement="bottom"
                                                        data-tippy-theme="light">
                                                        <i class="icon-brand-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Google Plus" data-tippy-placement="bottom"
                                                        data-tippy-theme="light">
                                                        <i class="icon-brand-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="LinkedIn" data-tippy-placement="bottom"
                                                        data-tippy-theme="light">
                                                        <i class="icon-brand-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Footer Rows Container / End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top Section / End -->

            <!-- Footer Middle Section -->
            <div class="footer-middle-section">
                <div class="container">
                    <div class="row">

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>For Candidates</h3>
                                <ul>
                                    <li><a href="#"><span>Browse Jobs</span></a></li>
                                    <li><a href="#"><span>Add Resume</span></a></li>
                                    <li><a href="#"><span>Job Alerts</span></a></li>
                                    <li><a href="#"><span>My Bookmarks</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>For Employers</h3>
                                <ul>
                                    <li><a href="#"><span>Browse Candidates</span></a></li>
                                    <li><a href="#"><span>Post a Job</span></a></li>
                                    <li><a href="#"><span>Post a Task</span></a></li>
                                    <li><a href="#"><span>Plans & Pricing</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Helpful Links</h3>
                                <ul>
                                    <li><a href="#"><span>Contact</span></a></li>
                                    <li><a href="#"><span>Privacy Policy</span></a></li>
                                    <li><a href="#"><span>Terms of Use</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Links -->
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="footer-links">
                                <h3>Account</h3>
                                <ul>
                                    <li><a href="#"><span>Log In</span></a></li>
                                    <li><a href="#"><span>My Account</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
                            <p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
                            <form action="#" method="get" class="newsletter">
                                <input type="text" name="fname" placeholder="Enter your email address">
                                <button type="submit"><i class="icon-feather-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Middle Section / End -->

            <!-- Footer Copyrights -->
            <div class="footer-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            © 2018 <strong>{{ config('app.name') }}</strong>. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyrights / End -->

        </div>
        <!-- Footer / End -->

    </div>
    <!-- Wrapper / End -->

    <!-- Scripts
================================================== -->
    <script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/tippy.all.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/snackbar.js') }}"></script>
    <script src="{{ asset('assets/front/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>

    <script>
        const userId = "{{ Auth::id() }}";
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>

</body>

</html>
