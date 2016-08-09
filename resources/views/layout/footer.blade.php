<!-- Footer 1-->
<footer class="footer-1 footer reveal-side-navigation bkg-gold color-white" {{ isset($dark) ? ' style="background-color: #161616; color: white;"' : '' }}>
    <div class="footer-top ">
        <div class="row pb-60">
            <div class="column width-3 mb-mobile-30">
                <svg class="">
                    <use xlink:href="{{ Request::path() }}#fleava-logo-sintesa"></use>
                </svg>

            </div>

            <div class="column width-3">
                <div class="widget">
                    <h4 class="widget-title">{{ $footer->data->address->title }}</h4>
                    <address>
                        Jl. Kencana No. 1<br>
                        Jimbaran, Bali 80361 - Indonesia<br>
                        <i class="icon-phone"></i> <strong>+62 361 472 5333</strong><br>
                        <i class="icon-mail"></i> <a href="mailto:infotsj@sintesahotels.com">infotsj@sintesahotels
                            .com</a><br>
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
                    <br>
                    <small style="display:block; line-height:1.3">&copy; {{ $footer->data->copyright }}<br> Website
                        by <a href="http://fleava.com/" target="_blank"
                              title="Fleava - Bali Digital Advertising Agency">Fleava</a>.
                    </small>
                </div>
            </div>

            <div class="column width-3 contact-form">
                <div class="widget">

                    <h4 class="widget-title">Contact Us</h4>
                    <form id="footer-message-form">
                        <input id="contact-form-field-name" type="text" placeholder="Name" name="name"/>
                        <input id="contact-form-field-email" type="email" placeholder="Email" name="email"/>
                        <textarea id="contact-form-field-message" placeholder="Message" name="message"></textarea>
                        <button id="contact-submit-button" type="submit"
                                class="button bkg-white bkg-hover-black color-black color-hover-white text-uppercase">
                            Submit
                        </button>
                    </form>

                </div>
            </div>


            <div class="column width-2 award">
                <h4 class="widget-title">Awards</h4>
                <img src="media/bookingaward2.jpg" style="width:100%; height:auto; max-width: 196px;"/>
            </div>


        </div>
    </div>
    <script>
        var contactForm = document.getElementById('footer-message-form');

        contactForm.addEventListener('submit', function (e) {
            // TODO: translate into pure JavaScript, no need for jQuery
            e.preventDefault();
            document.getElementById('contact-submit-button').innerHTML = 'Sending, please wait';
            $.ajax({
                type: 'GET',
                url: 'http://thesintesajimbaran.us12.list-manage.com/subscribe/post-json?u=25bdf4cf5d3037c38bec830b1&amp;id=717e304936&c=?',
                data: 'EMAIL=' + document.getElementById('contact-form-field-email').value,
                cache: false,
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                error: function (err) {
                    console.log("Could not connect to the registration server. Please try again later.");
                },
                success: function (data) {
                    if (data.result != "success") {
                        // Something went wrong, do something to notify the user. maybe alert(data.msg);
                        console.log('Registration failed')
                    } else {
                        // It worked, carry on...
                        // register();
                        console.log('Registered')
                    }
                }
            });
        });

        function register() {
            var nameContact = document.getElementById('contact-form-field-name').value;
            var emailContact = document.getElementById('contact-form-field-email').value;
            var messageContact = document.getElementById('contact-form-field-message').value;
            if (nameContact === '') {
                alert('Please provide a name');
                return false;
            } else if (emailContact === '') {
                alert('Please provide an email address');
                return false;
            } else if (messageContact === '') {
                alert('Please provide a message');
                return false;
            }
            var fd = new FormData(contactForm);
            var request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                if (request.readyState === 4) {
                    alert('Thank you for contacting us, we will get back to you as soon as possible!');
                    contactForm.reset();
                    setTimeout(function () {
                        document.getElementById('contact-submit-button').innerHTML = 'Submit';
                    }, 300);
                }
            };
            request.open('POST', '/api/ajax/contact-form');
            request.send(fd);
        }
    </script>
</footer>
<!-- Footer 1 End -->
