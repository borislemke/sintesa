<!DOCTYPE html>
<html lang="en">

@include('layout.head', compact('data'))

<body class="home-page {{ $data->bodyclass }}">

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
                        <li><a href="{{ route('page', ['url' => 'accomodation']) }}">Accomodation</a></li>
                        <li><a href="#" class="contains-sub-menu disabled">Food &amp; Beverage</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'angin-angin']) }}">Angin Angin</a></li>
                                <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner (Coming Soon)</a></li>
                                <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}" class="contains-sub-menu">Wellness</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'spa-treatment']) }}">Spa Treatment</a></li>
                                <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a></li>
                                <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu disabled">Facilities</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative Room</a></li>
                                <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming Pools</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="contains-sub-menu disabled">Events &amp; Wedding</a>
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
                <p class="copyright no-margin-bottom">&copy; 2016 The Sintesa Jimbaran. All Rights Reserved. Website by <a href="http://fleava.com" target="_blank">Fleava</a>.</p>
            </div>
        </div>
    </div>
</div>
<!-- Overlay Navigation Menu End -->

<div class="wrapper">
    <div class="wrapper-inner">

        @include('sprites')

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
                                <a href="{{ route('home') }}"><svg class=""><use xlink:href="{{ Request::path() }}#fleava-logo-sintesa-alt"></use></svg></a>
                                <a href="{{ route('home') }}"><svg class=""><use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use></svg></a>
                            </div>
                        </div>


                        <div class="dropdown pull-right">
                            <a class="button no-label-on-mobile small text-uppercase no-margin-bottom"><span>Reservations</span><span
                                        class="icon-calendar"></span></a>
                            <div class="dropdown-list custom-content">
                                <h5>Make a Reservation</h5>
                                <div class="login-form-container">
                                    <form class="login-form" action="http://www.booking.com/hotel/id/the-sintesa-jimbaran-bali-jimbaran.en.html" method="get" novalidate target="_blank">

                                        <input type="hidden" name="aid" value="330843">
                                        <input type="hidden" name="hotel_id" value="1476215">
                                        <input type="hidden" name="lang" value="en"> <input type="hidden" name="pb" value="">
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
                                <li><a href="#" class="disabled">Food &amp; Beverage</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'angin-angin']) }}">Angin Angin</a></li>
                                        <li><a href="{{ route('page', ['url' => 'barber']) }}">The BARber</a></li>
                                        <li><a href="{{ route('page', ['url' => 'healthy-corner']) }}">The Healthy Corner (Coming Soon)</a></li>
                                        <li><a href="{{ route('page', ['url' => 'rooftop']) }}">The Rooftop (Coming Soon)</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('page', ['url' => 'the-wellness-center']) }}">The Wellness Center</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'spa-treatment']) }}">Spa Treatment</a></li>
                                        <li><a href="{{ route('page', ['url' => 'the-gym']) }}">The Gym</a></li>
                                        <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="disabled">Facilities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('page', ['url' => 'kids-creative-room']) }}">Kids Creative Room</a></li>
                                        <li><a href="{{ route('page', ['url' => 'swimming-pools']) }}">Swimming Pools</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="disabled">Events &amp; Wedding</a>
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

        @include ('layout.footer')

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
{{--<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvbZed0XBhy8tgs-2OgoZoO8tHqO33SUw&callback=initMap" async defer></script>
<script src="js/timber.master.min.js"></script>
<script src="js/template-functions.js"></script>
</body>
</html>
