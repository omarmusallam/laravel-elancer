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
        <header id="header-container" class="fullwidth">

            <!-- Header -->
            <div id="header">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="{{ asset('assets/front/images/logo.png') }}"
                                    alt=""></a>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation">
                            <ul id="responsive">

                                <li><a href="{{ route('home') }}">{{ __('Home') }}</a>
                                    {{-- {{ route('home') }} --}}
                                    <ul class="dropdown-nav">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">{{ trans('Find Work') }}</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#">@lang('Browse Jobs')</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="jobs-list-layout-full-page-map.html">Full Page List +
                                                        Map</a></li>
                                                <li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid +
                                                        Map</a></li>
                                                <li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
                                                <li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
                                                <li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
                                                <li><a href="jobs-grid-layout.html">Grid Layout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">{{ Lang::get('Browse Tasks') }}</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
                                                <li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
                                                <li><a href="tasks-grid-layout.html">Grid Layout</a></li>
                                                <li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="browse-companies.html">Browse Companies</a></li>
                                        <li><a href="single-job-page.html">Job Page</a></li>
                                        <li><a href="single-task-page.html">Task Page</a></li>
                                        <li><a href="single-company-profile.html">Company Profile</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">{{ __('For Employers') }}</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#">{{ __('Find a Freelancer') }}</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a>
                                                </li>
                                                <li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
                                                <li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
                                                <li><a href="freelancers-list-layout-2.html">List Layout 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('freelancer.profile.edit') }}">Freelancer Profile</a>
                                        </li>
                                        <li><a href="{{ route('client.projects.create') }}">Post a Job</a></li>
                                        <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">{{ __('Dashboard') }}</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="dashboard-messages.html">Messages</a></li>
                                        <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                        <li><a href="dashboard-reviews.html">Reviews</a></li>
                                        <li><a href="dashboard-manage-jobs.html">Jobs</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
                                                <li><a href="dashboard-manage-candidates.html">Manage Candidates</a>
                                                </li>
                                                <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="dashboard-manage-tasks.html">{{ __('Tasks') }}</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>
                                                <li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
                                                <li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
                                                <li><a href="dashboard-post-a-task.html">Post a Task</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="dashboard-settings.html">Settings</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" class="current">{{ __('Pages') }}</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="pages-blog.html">Blog</a></li>
                                        <li><a href="pages-pricing-plans.html">Pricing Plans</a></li>
                                        <li><a href="pages-checkout-page.html">Checkout Page</a></li>
                                        <li><a href="pages-invoice-template.html">Invoice Template</a></li>
                                        <li><a href="pages-user-interface-elements.html">User Interface Elements</a>
                                        </li>
                                        <li><a href="pages-icons-cheatsheet.html">Icons Cheatsheet</a></li>
                                        <li><a href="pages-login.html">Login & Register</a></li>
                                        <li><a href="pages-404.html">404 Page</a></li>
                                        <li><a href="pages-contact.html">Contact</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" class="current">{{ __('Language') }}</a>
                                    <ul class="dropdown-nav">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->

                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Right Side Content / End -->
                    <div class="right-side">

                        @auth
                            <x-notification-menu />
                        @endauth

                        <!-- User Menu -->
                        <div class="header-widget">

                            <!-- Messages -->
                            <div class="header-notifications user-menu">
                                @auth
                                    <div class="header-notifications-trigger">
                                        <a href="#">
                                            <div class=""><img src="{{ Auth::user()->profile_photo_url }}"
                                                    alt=""
                                                    style="border: 2px solid #2a41e8;
                                            padding: 2px;
                                            border-radius: 50%;
                                            border-top-color: #47bb67;
                                            border-left-color: #47bb67;
                                            width: 60px;
                                            height: 60px;">
                                            </div>
                                        </a>
                                    </div>
                                @else
                                    <a class="header-notifications-trigger"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endauth

                                <!-- Dropdown -->
                                @auth
                                    <div class="header-notifications-dropdown">

                                        <!-- User Status -->
                                        <div class="user-status">

                                            <!-- User Name / Avatar -->
                                            <div class="user-details">
                                                <div class=""><a href="{{ route('freelancer.profile.edit') }}"><img
                                                            src="{{ Auth::user()->profile_photo_url }}" alt=""
                                                            style="border: 2px solid #2a41e8;
                                                    padding: 2px;
                                                    border-radius: 50%;
                                                    border-top-color: #47bb67;
                                                    border-left-color: #47bb67;
                                                    width: 60px;
                                                    height: 60px;"></a>
                                                </div>
                                                <div class="user-name">
                                                    <a
                                                        href="{{ route('freelancer.profile.edit') }}">{{ Auth::user()->name }}</a><span>{{ __('Freelancer') }}</span>
                                                </div>
                                            </div>

                                            <!-- User Status Switcher -->
                                            <div class="status-switch" id="snackbar-user-status">
                                                <label class="user-online current-status">{{ __('Online') }}</label>
                                                <label class="user-invisible">{{ __('Invisible') }}</label>
                                                <!-- Status Indicator -->
                                                <span class="status-indicator" aria-hidden="true"></span>
                                            </div>
                                        </div>

                                        <ul class="user-menu-small-nav">
                                            <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i>
                                                    {{ __('Dashboard') }}</a></li>
                                            <li><a href="dashboard-settings.html"><i
                                                        class="icon-material-outline-settings"></i>
                                                    {{ __('Settings') }}</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout').submit();"><i
                                                        class="icon-material-outline-power-settings-new"></i>
                                                    {{ __('Logout') }}</a>
                                            </li>
                                        </ul>
                                        <form action="{{ route('logout') }}" method="post" style="display: none;"
                                            id="logout">
                                            @csrf
                                        </form>

                                    </div>
                                @endauth
                            </div>

                        </div>
                        <!-- User Menu / End -->

                        <!-- Mobile Navigation Button -->
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
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
                                                    <a href="#" title="Google Plus"
                                                        data-tippy-placement="bottom" data-tippy-theme="light">
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

                                    <!-- Language Switcher -->
                                    <div class="footer-row">
                                        <div class="footer-row-inner">
                                            <select class="selectpicker language-switcher"
                                                data-selected-text-format="count" data-size="5">
                                                <option selected>English</option>
                                                <option>Français</option>
                                                <option>Español</option>
                                                <option>Deutsch</option>
                                            </select>
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
