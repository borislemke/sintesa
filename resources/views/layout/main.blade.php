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
                        <ul>

                            @foreach($navigation->children as $nav)
                            <li class="">
                                <a href="{{ $nav->no_link ? Request::path() . '#' : ($nav->url_type != 'external' ? route($nav->url_type, ['url' => $nav->url]) : $nav->url) }}" class="{{ count($nav->children) ? 'contains-sub-menu' : '' }}">{{  $nav->title }}</a>
                                @if(isset($nav->children) AND $nav->children)
                                <ul class="sub-menu">
                                    @foreach($nav->children as $child)
                                    <li class="{{ count($child->children) ? 'contains-sub-menu' : '' }}">
                                        <a href="{{ $child->no_link ? Request::path() . '#' : ($child->url_type != 'external' ? route($child->url_type, ['url' => $child->url]) : $child->url) }}" class="{{ $child->no_link ? 'disable-linkeffect' : '' }}">{{  $child->title }}</a>

                                        @if(isset($child->children) AND $child->children)
                                        <ul class="sub-menu">
                                            @foreach($child->children as $_child)
                                            <li>
                                                <a href="{{ $_child->no_link ? Request::path() . '#' : ($_child->url_type != 'external' ? route($_child->url_type, ['url' => $_child->url]) : $_child->url) }}" class="{{ $_child->no_link ? 'disable-linkeffect' : '' }}">{{  $_child->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            <!--
                            <li class="current"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('page', ['url' => 'accomodation']) }}">Accommodation</a></li>
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
                                    <li><a href="{{ route('page', ['url' => 'wellness-activity']) }}">Wellness Activity</a>
                                    </li>
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
                            -->
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="overlay-navigation-footer row full-width">
                <div class="column width-12 no-padding">
                    <p class="copyright no-margin-bottom">&copy; 2016 The Sintesa Jimbaran. All Rights Reserved. Website by
                    <a href="http://fleava.com" target="_blank">Fleava</a>.</p>
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

                            @include('includes.booking-bar')

                       
                            <nav class="navigation">
                                <ul>
                                    @foreach($navigation->children as $nav)
                                    <li>
                                        <a href="{{ $nav->no_link ? Request::path() . '#' : ($nav->url_type != 'external' ? route($nav->url_type, ['url' => $nav->url]) : $nav->url) }}" class="{{ $nav->no_link ? 'disable-linkeffect' : '' }}">{{  $nav->title }}</a>
                                        @if(isset($nav->children) AND $nav->children)
                                        <ul class="sub-menu">
                                            @foreach($nav->children as $child)
                                            <li class="{{ count($child->children) ? 'contains-sub-menu' : '' }}">
                                                <a href="{{ $child->no_link ? Request::path() . '#' : ($child->url_type != 'external' ? route($child->url_type, ['url' => $child->url]) : $child->url) }}" class="{{ $child->no_link ? 'disable-linkeffect' : '' }}">{{  $child->title }}</a>

                                                @if(isset($child->children) AND $child->children)
                                                <ul class="sub-menu">
                                                    @foreach($child->children as $_child)
                                                    <li>
                                                        <a href="{{ $_child->no_link ? Request::path() . '#' : ($_child->url_type != 'external' ? route($_child->url_type, ['url' => $_child->url]) : $_child->url) }}" class="{{ $_child->no_link ? 'disable-linkeffect' : '' }}">{{  $_child->title }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
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
                                        <p>Stay cool and creative with our latest creative news. And don't worry, we do not spam!</p>
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
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvbZed0XBhy8tgs-2OgoZoO8tHqO33SUw&callback=initMap" async
 defer></script>
 <script src="js/timber.master.min.js"></script>
 <script src="js/template-functions.js"></script>
</body>
</html>
