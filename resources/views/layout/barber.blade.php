<!DOCTYPE html>
<html lang="en">

@include('layout.head', compact('data'))

<body class="home-page">

<!-- Overlay Navigation Menu -->
<div class="overlay-navigation-wrapper">
    <div class="overlay-navigation-inner">
        <div class="overlay-navigation-header row collapse full-width">
            <div class="column width-12">
                <div id="overlay-nav-hide" class="navigation-hide">
                    <a href="#">
                        <span class="icon-cancel"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row collapse full-width">
            <div class="column width-12">
                <nav class="overlay-navigation pull-left clear-float-on-mobile">
                    <h4 class="menu-title">Menu</h4>
                    <ul>
                        <li class="current"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('page', ['url' => 'accomodation']) }}" class="contains-sub-menu">Accomodation</a>
                            <ul class="sub-menu">
                                <li><a href="#" class="contains-sub-menu">The Rooms</a></li>
                                <li class="contains-sub-menu"><a href="#">Suites Collection</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Food &amp; Beverage</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'angin-angin']) }}">Angin Angin</a></li>
                                <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner (Coming Soon)</a></li>
                                <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}" class="contains-sub-menu">Wellness</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'chavana-spa']) }}">Chavana SPA</a></li>
                                <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                                <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Facilities</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative Room</a></li>
                                <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming Pools</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Events &amp; Wedding</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'meeting-package']) }}">Meeting Package</a></li>
                                <li><a href="{{ route('page', ['url' => 'events']) }}">Events</a></li>
                                <li><a href="{{ route('page', ['url' => 'the-wedding']) }}">The Wedding</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="overlay-navigation-footer row full-width">
            <div class="column width-12 no-padding">
                <p class="copyright no-margin-bottom">&copy; 2014 THEMEMOUNTAIN. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Overlay Navigation Menu End -->

<div class="wrapper">
    <div class="wrapper-inner">
        <style>
            .fill-white {
                fill: white !important;
            }
            .fill-black {
                fill: #161616 !important;
            }
        </style>
        <!-- Header -->
        <header class="header-1 header header-fixed-on-mobile" data-bkg-threshold="100" data-compact-threshold="100">
            <div class="header-inner">
                <div class="row nav-bar reveal-side-navigation">
                    <div class="column width-12 nav-bar-inner">
                        <div id="overlay-nav-show" class="navigation-show hide">
                            <a href="#">
                                <span class="icon-menu medium"></span>
                            </a>
                        </div>
                        <div class="logo">
                            <div class="logo-inner">
                                <a href="{{ route('home') }}"><svg class="fill-black"><use xlink:href="{{ Request::path() }}#fleava-logo-sintesa-alt"></use></svg></a>
                                <a href="{{ route('home') }}"><svg class="fill-white"><use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use></svg></a>
                            </div>
                        </div>
                        <!--
                        <div class="dropdown pull-right">
                            <a class="button no-label-on-mobile small text-uppercase no-margin-bottom" style="background-color: #161616"><span>Reservations</span><span
                                        class="icon-calendar"></span></a>
                            <div class="dropdown-list custom-content">
                                <h5>Make a Reservation</h5>
                                <div class="login-form-container">
                                    <form class="login-form" action="#" method="post" novalidate>
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="text" name="email" class="form-name form-element small"
                                                           placeholder="Check In" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="text" name="password"
                                                           class="form-email form-element small" placeholder="Check Out"
                                                           tabindex="2" required>
                                                </div>
                                            </div>
                                            <div class="column width-6">
                                                <input type="submit" value="Check Availability"
                                                       class="form-submit button small bkg-charcoal bkg-hover-pink color-white color-hover-white no-margin-bottom">
                                            </div>
                                            <div class="column width-6 right">
                                                <a class="recuperate-password pt-10" href="">Contact Us</a>
                                            </div>
                                        </div>
                                        <input type="text" name="honeypot" class="form-honeypot form-element">
                                    </form>
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </div>
                        -->
                        <nav class="navigation">
                            <ul>
                                <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('page', ['url' => 'destination']) }}">Destination</a></li>
                                <li><a href="{{ route('page', ['url' => 'accommodation']) }}">Accomodation</a>
                                    <ul class="sub-menu">
                                        <li class="contains-sub-menu"><a href="#">The Rooms</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('page', ['url' => 'room-superior']) }}">Superior Room</a></li>
                                                <li><a href="{{ route('page', ['url' => 'room-deluxe']) }}">Deluxe Room</a></li>
                                                <li><a href="{{ route('page', ['url' => 'room-junior-suite']) }}">Junior Suite Room</a></li>
                                            </ul>
                                        </li>
                                        <li class="contains-sub-menu"><a href="#">Suites Collection</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('page', ['url' => 'suite-executive']) }}">Executive Suite</a></li>
                                                <li><a href="{{ route('page', ['url' => 'suite-sintesa-and-peninsula']) }}">Sintesa and Peninsula Suite</a></li>
                                                <li><a href="{{ route('page', ['url' => 'suite-presidential']) }}">Presidential Suite</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Food &amp; Beverage</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'angin-angin']) }}">Angin Angin</a></li>
                                        <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                        <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner (Coming Soon)</a></li>
                                        <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}">The Wellness Center</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'chavana-spa']) }}">Chavana SPA</a></li>
                                        <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                                        <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Facilities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative Room</a></li>
                                        <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming Pools</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Events &amp; Wedding</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'meeting-package']) }}">Meeting Package</a></li>
                                        <li><a href="{{ route('page', ['url' => 'events']) }}">Events</a></li>
                                        <li><a href="{{ route('page', ['url' => 'the-wedding']) }}">The Wedding</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        @include('sprites')

                <!-- Content -->
        <div class="content clearfix reveal-side-navigation">

            @yield('content', '')

            @if(false)
                    <!-- Signup Modal End -->
            <div id="signup-lightbox" class="signup-1 pt-70 pb-50 hide">
                <div class="row">
                    <div class="column width-12 left">
                        <div class="signup-form-container">
                            <div class="row">
                                <div class="column width-5">
                                    <h2 class="mb-30">Get The Latest From Sartre</h2>
                                    <p>Stay cool and creative with our latest creative news. And don't worry, we do not
                                        spam!</p>
                                </div>
                                <div class="column width-6 offset-1">
                                    <form class="signup-form" action="php/subscribe.php" method="post" novalidate>
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="text" name="fname" class="form-name form-element large"
                                                           placeholder="First Name" tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="column width-12">
                                                <div class="field-wrapper">
                                                    <input type="email" name="email"
                                                           class="form-email form-element large"
                                                           placeholder="Email address" tabindex="2" required>
                                                </div>
                                            </div>
                                            <div class="column width-12">
                                                <input type="submit" value="Signup"
                                                       class="form-submit button text-uppercase bkg-charcoal bkg-hover-pink color-white color-hover-white">
                                            </div>
                                        </div>
                                        <input type="text" name="honeypot" class="form-honeypot form-element">
                                    </form>
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Signup Modal End -->
            @endif

        </div>
        <!-- Content End -->

        @include('footers/' . $data->footer, ['dark' => true])

    </div>
</div>

<!-- Js -->
<script src="js/jquery-1.11.2.min.js"></script>
<script>
    /*
     $(function() {
     $('.datepicker').datepicker();
     });
     */
</script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="js/timber.master.min.js"></script>
<script src="js/template-functions.js"></script>
</body>
</html>
