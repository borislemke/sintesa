@if(FALSE)
    @if(!isset($_COOKIE['hide_popup']))
        <!-- module: plugins.popup -->
        <div class="mt-module mt-module__plugins-popup active" id="popup-module">
            <div class="popup-module-window">
                <div class="popup-module-img-wrapper"
                     style="background-image: url('http://sintesa.dev/media/page-banners/destination.jpg');"></div>
                <div class="popup-module-info-wrapper">
                    <svg>
                        <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                    </svg>
                    <span class="separator"></span>
                    <div class="module-popup-text-wrapper">
                        <h3>How to vote: </h3>
                        <ol id="intro-list">
                            <li>
                                Join the Bali Tourism Award group by clicking the link below
                            </li>
                            <li>
                                After your request has been approved by the group admin(24 hours max), choose The
                                Sintesa
                                Jimbaran for:
                            </li>
                        </ol>
                        <h3>Bali Leading Resort in Jimbaran</h3>

                        <a href="https://www.facebook.com/groups/668296123314831" target="_blank"
                           class="button popup-module-button">JOIN FACEBOOK GROUP</a>
                    </div>
                </div>

                <button id="modal-popup-close">x</button>
            </div>
        </div>
        <script>
            var popClose = document.getElementById('modal-popup-close');
            var popModule = document.getElementById('popup-module');
            popClose.addEventListener('click', function () {
                popModule.classList.remove('active');
                document.cookie = "hide_popup=true";
            });
        </script>
        <!-- module_end: plugins.popup -->
    @endif
@endif
