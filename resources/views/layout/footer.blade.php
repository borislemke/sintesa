<!-- Footer 1-->
<?php if(isset($dark)): ?>
<footer class="footer-1 footer reveal-side-navigation bkg-gold color-white"
        style="background-color: #161616; color: white;">
    <?php else: ?>
    <footer class="footer-1 footer reveal-side-navigation bkg-gold color-white">
        <?php endif ?>
        <div class="footer-top ">
            <div class="row pb-60">
                 <div class="column width-3">
                    <svg class="">
                        <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                    </svg>
                </div>

                <div class="column width-3">
                    <div class="widget">

                        <h4 class="widget-title">{{ $footer->data->longtext->title }}</h4>
                        <p>{{ $footer->data->longtext->text }}</p>
                        <small style="display:block; line-height:1.3">&copy; {{ $footer->data->copyright }}<br> Website by <a href="http://fleava.com/" target="_blank" title="Fleava - Bali Digital Advertising Agency">Fleava</a>.</small>
                    </div>
                </div>
                <div class="column width-3">
                    <div class="widget">
                        <h4 class="widget-title">{{ $footer->data->address->title }}</h4>
                        <address>
                            Jl. Kencana No. 1<br>
                            Jimbaran, Bali 80361 - Indonesia<br>
                            <i class="icon-phone"></i> <strong>+62 361 472 5333</strong><br>
                            <i class="icon-mail"></i> <a href="mailto:infotsj@sintesahotels.com">infotsj@sintesahotels.com</a>
                        </address>

                        <ul class="social-list list-horizontal no-margin-bottom">
                            <li>
                                <a href="https://twitter.com/SintesaJimbaran">
                                    <span class="icon-twitter small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/The-Sintesa-Jimbaran-Bali-1590874997861251/">
                                    <span class="icon-facebook small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/thesintesajimbaran/">
                                    <span class="icon-instagram small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://id.pinterest.com/sintesajimbaran/">
                                    <span class="icon-pinterest small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/106742365410489660521/about">
                                    <span class="icon-google small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/the-sintesa-jimbaran-b6095a100">
                                    <span class="icon-linkedin small"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UClt1s81tGD_sSFQ0TsYV7ew">
                                    <span class="icon-youtube small"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="column width-2">
                    <img src="media/bookingaward.jpg" style="width:100%; height:auto" />
                </div>


            </div>
        </div>

    </footer>
    <!-- Footer 1 End -->
