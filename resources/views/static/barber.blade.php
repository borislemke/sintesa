<html>
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Your-Title-Here"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="Your-Image-Url"/>
    <meta property="og:description" content="Your-Page-Description"/>
    <title>Sintesa | The BARber</title>
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

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) {
                z._.push(c)
            }, $ = z.s =
                    d.createElement(s), e = d.getElementsByTagName(s)[0];
            z.set = function (o) {
                z.set._.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "//v2.zopim.com/?3pm1UEq3e13BGXFUd8hVUY02SWZDQWT2";
            z.t = +new Date;
            $.type = "text/javascript";
            e.parentNode.insertBefore($, e)
        })(document, "script");
    </script>
    <!--End of Zopim Live Chat Script-->
</head>


<body class="home-page barber">

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
                                <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner
                                        (Coming Soon)</a></li>
                                <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}" class="contains-sub-menu">Wellness</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'chavana-spa']) }}">Chavana SPA</a></li>
                                <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a>
                                </li>
                                <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu">Facilities</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative
                                        Room</a></li>
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
                                <a href="{{ route('home') }}">
                                    <svg class="">
                                        <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa-alt"></use>
                                    </svg>
                                </a>
                                <a href="{{ route('home') }}">
                                    <svg class="">
                                        <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="dropdown pull-right">
                            <a class="button no-label-on-mobile small text-uppercase no-margin-bottom"><span>Reservations</span><span
                                        class="icon-calendar"></span></a>
                            <div class="dropdown-list custom-content">
                                <h5>Make a Reservation</h5>
                                <div class="login-form-container">
                                    <form class="login-form"
                                          action="http://www.booking.com/hotel/id/the-sintesa-jimbaran-bali-jimbaran.en.html"
                                          method="get" novalidate target="_blank">

                                        <input type="hidden" name="aid" value="330843">
                                        <input type="hidden" name="hotel_id" value="1476215">
                                        <input type="hidden" name="lang" value="en"> <input type="hidden" name="pb"
                                                                                            value="">
                                        <input type="hidden" name="stage" value="0">
                                        <input type="hidden" name="hostname" value="www.booking.com">

                                        <div class="row">
                                            <div class="column width-12">
                                                <select id="b_checkin_day" name="checkin_monthday">
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                    <option value="6"> 6</option>
                                                    <option value="7"> 7</option>
                                                    <option value="8"> 8</option>
                                                    <option value="9"> 9</option>
                                                    <option value="10"> 10</option>
                                                    <option value="11"> 11</option>
                                                    <option value="12"> 12</option>
                                                    <option value="13"> 13</option>
                                                    <option value="14"> 14</option>
                                                    <option value="15"> 15</option>
                                                    <option value="16"> 16</option>
                                                    <option value="17"> 17</option>
                                                    <option value="18"> 18</option>
                                                    <option value="19" selected="selected"> 19</option>
                                                    <option value="20"> 20</option>
                                                    <option value="21"> 21</option>
                                                    <option value="22"> 22</option>
                                                    <option value="23"> 23</option>
                                                    <option value="24"> 24</option>
                                                    <option value="25"> 25</option>
                                                    <option value="26"> 26</option>
                                                    <option value="27"> 27</option>
                                                    <option value="28"> 28</option>
                                                    <option value="29"> 29</option>
                                                    <option value="30"> 30</option>
                                                    <option value="31"> 31</option>
                                                </select>
                                                <select id="b_checkin_month" name="checkin_year_month">
                                                    <option value="2016-4" selected="selected"> April '16</option>
                                                    <option value="2016-5"> May '16</option>
                                                    <option value="2016-6"> June '16</option>
                                                    <option value="2016-7"> July '16</option>
                                                    <option value="2016-8"> August '16</option>
                                                    <option value="2016-9"> September '16</option>
                                                    <option value="2016-10"> October '16</option>
                                                    <option value="2016-11"> November '16</option>
                                                    <option value="2016-12"> December '16</option>
                                                    <option value="2017-1"> January '17</option>
                                                    <option value="2017-2"> February '17</option>
                                                    <option value="2017-3"> March '17</option>
                                                    <option value="2017-4"> April '17</option>
                                                </select>
                                            </div>
                                            <div class="column width-12">
                                                <select id="b_checkout_day" name="checkout_monthday">
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                    <option value="4"> 4</option>
                                                    <option value="5"> 5</option>
                                                    <option value="6"> 6</option>
                                                    <option value="7"> 7</option>
                                                    <option value="8"> 8</option>
                                                    <option value="9"> 9</option>
                                                    <option value="10"> 10</option>
                                                    <option value="11"> 11</option>
                                                    <option value="12"> 12</option>
                                                    <option value="13"> 13</option>
                                                    <option value="14"> 14</option>
                                                    <option value="15"> 15</option>
                                                    <option value="16"> 16</option>
                                                    <option value="17"> 17</option>
                                                    <option value="18"> 18</option>
                                                    <option value="19"> 19</option>
                                                    <option value="20" selected="selected"> 20</option>
                                                    <option value="21"> 21</option>
                                                    <option value="22"> 22</option>
                                                    <option value="23"> 23</option>
                                                    <option value="24"> 24</option>
                                                    <option value="25"> 25</option>
                                                    <option value="26"> 26</option>
                                                    <option value="27"> 27</option>
                                                    <option value="28"> 28</option>
                                                    <option value="29"> 29</option>
                                                    <option value="30"> 30</option>
                                                    <option value="31"> 31</option>
                                                </select>
                                                <select id="b_checkout_month" name="checkout_year_month">
                                                    <option value="2016-4" selected="selected"> April '16</option>
                                                    <option value="2016-5"> May '16</option>
                                                    <option value="2016-6"> June '16</option>
                                                    <option value="2016-7"> July '16</option>
                                                    <option value="2016-8"> August '16</option>
                                                    <option value="2016-9"> September '16</option>
                                                    <option value="2016-10"> October '16</option>
                                                    <option value="2016-11"> November '16</option>
                                                    <option value="2016-12"> December '16</option>
                                                    <option value="2017-1"> January '17</option>
                                                    <option value="2017-2"> February '17</option>
                                                    <option value="2017-3"> March '17</option>
                                                    <option value="2017-4"> April '17</option>
                                                </select>
                                            </div>
                                            <div class="column width-6">
                                                <input type="submit" value="Check Availability"
                                                       class="form-submit button small bkg-charcoal bkg-hover-pink color-white color-hover-white no-margin-bottom">
                                            </div>
                                            <div class="column width-6 right">
                                                <a class="recuperate-password pt-10" href="">Contact Us</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-response"></div>
                                </div>
                            </div>
                        </div>


                        <nav class="navigation">
                            <ul>
                                <li><a href="{{ route('page', ['url' => 'destination']) }}">Destination</a></li>
                                <li><a href="{{ route('page', ['url' => 'accommodation']) }}">Accomodation</a>
                                    <ul class="sub-menu">
                                        <li class="contains-sub-menu"><a href="#">The Rooms</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('page', ['url' => 'room-superior']) }}">Superior
                                                        Room</a></li>
                                                <li><a href="{{ route('page', ['url' => 'room-deluxe']) }}">Deluxe
                                                        Room</a></li>
                                                <li><a href="{{ route('page', ['url' => 'room-junior-suite']) }}">Junior
                                                        Suite Room</a></li>
                                            </ul>
                                        </li>
                                        <li class="contains-sub-menu"><a href="#">Suites Collection</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('page', ['url' => 'suite-executive']) }}">Executive
                                                        Suite</a></li>
                                                <li>
                                                    <a href="{{ route('page', ['url' => 'suite-sintesa-and-peninsula']) }}">Sintesa
                                                        and Peninsula Suite</a></li>
                                                <li><a href="{{ route('page', ['url' => 'suite-presidential']) }}">Presidential
                                                        Suite</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Food &amp; Beverage</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'angin-angin']) }}">Angin Angin</a></li>
                                        <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                        <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy
                                                Corner (Coming Soon)</a></li>
                                        <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming
                                                Soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}">The Wellness
                                        Center</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'chavana-spa']) }}">Chavana SPA</a></li>
                                        <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                                        <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness
                                                Activity</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Facilities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative
                                                Room</a></li>
                                        <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming
                                                Pools</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Events &amp; Wedding</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'meeting-package']) }}">Meeting
                                                Package</a></li>
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

            <!-- module: sliders.fullscreen -->
            <section class="section-block featured-media window-height tm-slider-parallax-container">
                <div class="tm-slider-container full-width-slider" data-featured-slider data-auto-advance="2000"
                     data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="960">
                    <ul class="tms-slides">
                        <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#131027"
                            data-overlay-bkg-opacity="0.6">
                            <div class="tms-content">
                                <div class="tms-content-inner left left-on-mobile v-align-center">
                                    <div class="row">
                                        <div class="column width-6 offset-3 barber-header-logo-wrapper">
                                            <svg class="barber-header-logo barber-header-logo-icon">
                                                <use xlink:href="{{ Request::path() }}#fleava-logo-barber-ornament"></use>
                                            </svg>
                                            <svg class="barber-header-logo barber-header-logo-text">
                                                <use xlink:href="{{ Request::path() }}#fleava-logo-barber"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img data-src="images/slider/slide-2.jpg" alt="The BARber"/>
                        </li>
                    </ul>
                </div>
            </section>


            <div class="section-block replicable-content bkg-black color-white">
                <div class="row">
                    <div class="three-column-text-wrapper">
                        <div class="column width-10 offset-1">
                            <div class="column width-4 pb-80">
                                <h2>Ut wisi enim ad minim veniam, quis nostru.</h2>
                            </div>
                            <div class="column width-4 pb-80">
                                <p>An authentic reminiscent full service bar and lounge built as an icon to the newly
                                    established ‘The
                                    Sintesa’ Jimbaran. Upon entering the hotel’s classic 1930s styled men’s Barbershop
                                    to furthest left
                                    corner of the room, inside the cloak room reveals a secret door to find the
                                    venue.</p>
                            </div>
                            <div class="column width-4 pb-80">
                                <p>Old reclaimed wooden panels in dark lacquer, antique light fixtures, warm leather
                                    sofas, a fine pool
                                    table in one corner, a baby grand piano on the other and of course a bar complete
                                    with the finest
                                    collection of Single Malts, Whiskeys, a range of premium Vodkas and Branded
                                    Liquors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Section 5 -->
            <section id="about" class="section-block bkg-white no-padding-top">
                <div class="row">
                    <div class="column width-8 offset-2 push-up">
                        <img src="images/generic/barber1.jpg" class="horizon"
                             data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                             data-threshold="0.5"/>
                    </div>
                    <div class="column width-6 offset-2">
                        <div class="horizon" data-animate-in="opacity:0;transX:50;duration:1000;easing:easeFastSlow;"
                             data-threshold="0.5">
                            <p class="pt-50">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincid unt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                ex ea commodo consequat. </p>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                dignissim qui blandit.</p>
                        </div>
                    </div>
                    <div class="column width-3 push-up">
                        <img src="images/generic/barber2.jpg" class="bordered horizon"
                             data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                             data-threshold="0.5"/>
                    </div>

                </div>
            </section>
            <!-- Hero Section 5 End -->


            <!-- module: parallax.image_text -->
            <div class="section-block parallax fixed-height bkg-black" data-src="images/slider/torasudiro.jpg"
                 style="height:500px">
                <div class="tmp-content">
                    <div class="tmp-content-inner left">
                        <div class="row">
                            <div class="column width-3 offset-1 left center-on-mobile color-white">
                                <h1 class="hominis title-xlarge">Happy Hours</h1>
                                <h3 class="title-medium">BUY 1 GET 1 FREE</h3>
                                <a href="#" class="button border-white color-white">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- module_end: parallax.image_text -->

            <div class="section-block replicable-content">
                <div class="row">
                    <div class="three-column-text-wrapper">
                        <div class="column width-10 offset-1">
                            <div class="column width-4">
                                <h2>Ut wisi enim ad minim veniam, quis nostru.</h2>
                            </div>
                            <div class="column width-4">
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse moles tie
                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                                    iusto odio dignissi</p>
                            </div>
                            <div class="column width-4">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                    adm.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->


        <!-- Portfolio Grid Section 5 -->
        <div class="section-block portfolio-5 small-margins no-padding-top">
            <div class="row">
                <div class="column width-12">
                    <div id="grid-1" class="row content-grid-4 masonry-grid fade-in-progressively" data-grid-ratio="1">
                        <div class="grid-item development wide">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-7" data-caption="Title Here"
                                   data-image-url="media/barber/project-2-landscape.jpg"
                                   href="media/barber/project-2-landscape.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-2-landscape.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item grid-sizer design">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-1" data-caption="Title Here"
                                   data-image-url="media/barber/project-1-square.jpg"
                                   href="media/barber/project-1-square.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-1-square.jpg" alt=""/>
										<span class="overlay-info center">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item illutration">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-2" data-caption="Title Here"
                                   data-image-url="media/barber/project-2-square.jpg"
                                   href="media/barber/project-2-square.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-2-square.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item design illustration">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-3" data-caption="Title Here"
                                   data-image-url="media/barber/project-3-square.jpg"
                                   href="media/barber/project-3-square.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-3-square.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item illustration">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-4" data-caption="Title Here"
                                   data-image-url="/media/barber/project-4-square.jpg"
                                   href="media/barber/project-4-square.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-4-square.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item design wide">
                            <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                                <a class="overlay-link lightbox-link" data-group="project-5" data-caption="Title Here"
                                   data-image-url="media/barber/project-3-landscape.jpg"
                                   href="media/barber/project-3-landscape.jpg" data-lightbox-animation="slideInBottom">
                                    <img src="media/barber/project-3-landscape.jpg" alt=""/>
										<span class="overlay-info">
											<span>
												<span>
													<span class="left inline">
														<span class="project-title">Title Here</span>
														<span class="project-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</span>
													</span>
												</span>
											</span>
										</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Grid Section 5 End -->

        <!-- Footer 1-->
        <footer class="footer-1 footer reveal-side-navigation bkg-gold color-white">
            <div class="footer-top">
                <div class="row">
                    <div class="column width-3">
                        <svg class=""><use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use></svg>
                    </div>
                    <div class="column width-3">
                        <div class="widget">
                            <h4 class="widget-title">The Sintesa Jimbaran</h4>
                            <p>Located just 10 km south of the Bali Airport (Denpasar). Hotel’s location is conveniently positioned, just a 15 minutes drive from Ngurah Rai International Airport and 20 minutes away from vibrant area of Kuta and Nusa Dua. </p>
                        </div>
                    </div>
                    <div class="column width-2 offset-1">
                        <div class="widget">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="#">Accommodation</a>
                                </li>
                                <li>
                                    <a href="#">Food &amp; Beverages</a>
                                </li>
                                <li>
                                    <a href="#">The Wellness Center</a>
                                </li>
                                <li>
                                    <a href="#">Awards</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column width-3">
                        <div class="widget">
                            <h4 class="widget-title">Come Visit Us</h4>
                            <address>
                                Jl. Kencana No. 1<br>
                                Jimbaran, Bali 80361 - Indonesia<br>
                                <a href="mailto:infotsj@sintesahotels.com">infotsj@sintesahotels.com</a>
                            </address>

                            <ul class="social-list list-horizontal no-margin-bottom">
                                <li><a href="#"><span class="icon-twitter small"></span></a></li>
                                <li><a href="#"><span class="icon-facebook small"></span></a></li>
                                <li><a href="#"><span class="icon-instagram small"></span></a></li>
                                <li><a href="#"><span class="icon-pinterest small"></span></a></li>
                                <li><a href="#"><span class="icon-google small"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin small"></span></a></li>
                                <li><a href="#"><span class="icon-youtube small"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="column width-9 push-3">
                        <p class="copyright pull-left">
                            &copy; The Sintesa Jimbaran. All Rights Reserved. Website by  <a href="http://fleava.com/" target="_blank">Fleava</a>.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer 1 End -->

    </div>
</div>

<!-- Js -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
<script src="js/timber.master.min.js"></script>
<script src="js/template-functions.js"></script>
</body>
</html>
