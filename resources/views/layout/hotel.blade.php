<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Your-Title-Here"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="Your-Image-Url"/>
    <meta property="og:description" content="Your-Page-Description"/>
    <title>The Sintesa Jimbaran</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/theme-mountain-favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRaleway:100,300,400,500,700'
          rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="css/core.min.css"/>
    <link rel="stylesheet" href="css/skin.css"/>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <base href="/">
</head>
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
                        <li class="current"><a href="#">Home</a></li>
                        <li><a href="#" class="contains-sub-menu">Accomodation</a>
                            <ul class="sub-menu">
                                <li><a href="#" class="contains-sub-menu">The Rooms</a></li>
                                <li class="contains-sub-menu"><a href="#">Suites Collection</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Food &amp; Beverage</a>
                            <ul class="sub-menu">
                                <li><a href="#">The Coffee Shop</a></li>
                                <li><a href="#">The BARber</a></li>
                                <li><a href="#">The Healthy Corner (Coming Soon)</a></li>
                                <li><a href="#">The Rooftop (Coming Soon)</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Wellness</a>
                            <ul class="sub-menu">
                                <li><a href="#">SPA Treatment</a></li>
                                <li><a href="#">Wellness Program</a></li>
                                <li><a href="#">Fitness Studio</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Facilities</a>
                            <ul class="sub-menu">
                                <li><a href="#">Kids Creative Room</a></li>
                                <li><a href="#">Swimming Pools</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">MICE</a>
                            <ul class="sub-menu">
                                <li><a href="#">Meeting Package</a></li>
                                <li><a href="#">Event</a></li>
                                <li><a href="#">The Wedding</a></li>
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
                                <a href="{{ route('home') }}"><img src="images/logo-dark.png" alt="The Sintesa Jimbaran Logo"/></a>
                                <a href="{{ route('home') }}"><img src="images/logo.png" alt="The Sintesa Jimbaran Logo"/></a>
                            </div>
                        </div>
                        <div class="dropdown pull-right">
                            <a class="button no-label-on-mobile small text-uppercase no-margin-bottom"><span>Reservations</span><span
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
                                        <li><a href="{{ route('page', ['url' => 'coffee-shop']) }}">The Coffee Shop</a></li>
                                        <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                        <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner (Coming Soon)</a></li>
                                        <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">The Wellness Center</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'spa-treatment']) }}">SPA Treatment</a></li>
                                        <li><a href="{{ route('page', ['url' => 'wellness-program']) }}">Wellness Program</a></li>
                                        <li><a href="{{ route('page', ['url' => 'fitness-studio']) }}">Fitness Studio</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Facilities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative Room</a></li>
                                        <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming Pools</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">MICE</a>
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

        @include('footers/' . $data->footer)

    </div>
</div>

<!-- Js -->
<script src="js/jquery-1.11.2.min.js"></script>
<script>
    $(function() {
        $('.datepicker').datepicker();
    });
</script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="js/timber.master.min.js"></script>
<script src="js/template-functions.js"></script>
</body>
</html>
