<!-- Footer 1-->
<?php if(isset($dark)): ?>
<footer class="footer-1 footer reveal-side-navigation bkg-gold color-white"
        style="background-color: #161616; color: white;">
    <?php else: ?>
    <footer class="footer-1 footer reveal-side-navigation bkg-gold color-white">
        <?php endif ?>
        <div class="footer-top">
            <div class="row">
                <div class="column width-3">
                    <svg class="">
                        <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                    </svg>
                </div>
                <div class="column width-3">
                    <div class="widget">
                        <h4 class="widget-title">{{ $footer->data->longtext->title }}</h4>
                        <p>{{ $footer->data->longtext->text }}</p>
                    </div>
                </div>
                <div class="column width-2 offset-1">
                    <div class="widget">
                        <h4 class="widget-title">{{ $footer->data->navigation->title }}</h4>
                        <ul>
                            @foreach($footer->data->navigation->content as $nav)
                                <?php $link = $nav->type == 'internal' ? route('page', ['url' => $nav->url]) : $nav->url ?>
                                <li>
                                    <a href="{{ $link }}">{{ $nav->text }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="column width-3">
                    <div class="widget">
                        <h4 class="widget-title">{{ $footer->data->address->title }}</h4>
                        <address>
                            Jl. Kencana No. 1<br>
                            Jimbaran, Bali 80361 - Indonesia<br>
                            <a href="mailto:infotsj@sintesahotels.com">infotsj@sintesahotels.com</a>
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
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="column width-9 push-3">
                    <p class="copyright pull-left">
                        &copy; {{ $footer->data->copyright }} Website by <a href="http://fleava.com/" target="_blank">Fleava</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer 1 End -->
