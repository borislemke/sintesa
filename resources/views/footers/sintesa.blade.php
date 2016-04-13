<!-- Footer 1-->
@if(isset($dark))
    <footer class="footer-1 footer reveal-side-navigation bkg-gold color-white" style="background-color: #161616; color: white;">
        @else
            <footer class="footer-1 footer reveal-side-navigation bkg-gold color-white">
                @endif
                <div class="footer-top">
                    <div class="row">
                        <div class="column width-3">
                            <svg class="">
                                <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                            </svg>
                        </div>
                        <div class="column width-3">
                            <div class="widget">
                                <h4 class="widget-title">The Sintesa Jimbaran</h4>
                                <p>Located just 10 km south of the Bali Airport (Denpasar). Hotel’s location is
                                    conveniently positioned, just a 15 minutes drive from Ngurah Rai International
                                    Airport and 20 minutes away from vibrant area of Kuta and Nusa Dua. </p>
                            </div>
                        </div>
                        <div class="column width-2 offset-1">
                            <div class="widget">
                                <h4 class="widget-title">Explore</h4>
                                <ul>
                                    <li>
                                        <a href="{{ route('page', ['url' => 'accommodation']) }}">Accommodation</a>
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
                                    <li><a href="https://twitter.com/SintesaJimbaran"><span
                                                    class="icon-twitter small"></span></a></li>
                                    <li>
                                        <a href="https://www.facebook.com/The-Sintesa-Jimbaran-Bali-1590874997861251/"><span
                                                    class="icon-facebook small"></span></a></li>
                                    <li><a href="https://www.instagram.com/thesintesajimbaran/"><span
                                                    class="icon-instagram small"></span></a></li>
                                    <li><a href="https://id.pinterest.com/sintesajimbaran/"><span
                                                    class="icon-pinterest small"></span></a></li>
                                    <li><a href="https://plus.google.com/106742365410489660521/about"><span
                                                    class="icon-google small"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/the-sintesa-jimbaran-b6095a100"><span
                                                    class="icon-linkedin small"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UClt1s81tGD_sSFQ0TsYV7ew"><span
                                                    class="icon-youtube small"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="column width-9 push-3">
                            <p class="copyright pull-left">
                                &copy; The Sintesa Jimbaran. All Rights Reserved. Website by <a
                                        href="http://fleava.com/" target="_blank">Fleava</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer 1 End -->
