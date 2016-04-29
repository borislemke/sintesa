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
                        @foreach($navigation->children as $nav)
                            <li>
                                <a href="{{ $nav->url_type == 'internal' ? route('page', ['url' => $nav->url]) : $nav->url }}">{{  $nav->title }}</a>
                                @if(isset($nav->children))
                                    <ul class="sub-menu">
                                        @foreach($nav->children as $child)
                                            <li class="contains-sub-menu"><a href="{{ $child->url_type == 'internal' ? route('page', ['url' => $child->url]) : $child->url }}">{{ $child->title }}</a>
                                                @if(isset($child->children))
                                                    <ul class="sub-menu">
                                                        @foreach($child->children as $_child)
                                                            <li>
                                                                <a href="{{ $_child->url_type == 'internal' ? route('page', ['url' => $_child->url]) : $_child->url }}">{{ $_child->title }}</a>
                                                            </li>
                                                            @endif
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
