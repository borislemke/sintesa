<div class="dropdown pull-right">
    <a class="button no-label-on-mobile small text-uppercase no-margin-bottom"><span>Reservations</span><span
        class="icon-calendar"></span></a>
        <div class="dropdown-list custom-content">
            <h5>Make a Reservation</h5>
            <div class="login-form-container">
                <form id="quick-booking-form" class="login-form">

                <div class="row">
                    <div class="column width-12">
                        <select id="quick_checkin_day" name="checkin_monthday">
                            <?php
                            for($day = 1; $day <= 31; $day++) {
                                $today = $day == date('j');
                                echo "<option value='$day' " . ($today ? " selected='selected'" : "") . "> $day</option>";
                            }
                            ?>
                        </select>
                        <select id="quick_checkin_month" name="checkin_year_month">
                            <?php
                            $months = array();
                            $currentMonth = (int)date('m');
                            $start = true;

                            for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
                                $month = date('Y-n', mktime(0, 0, 0, $x, 1));
                                $month_alt = date('F\'y', mktime(0, 0, 0, $x, 1));
                                echo "<option value=\"" . $month . ($start ? " selected=\"selected\"" : "") . "\"> $month_alt</option>";
                                $start = false;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="column width-12">
                        <select id="quick_checkout_day" name="checkout_monthday">
                            <?php
                            for($day = 1; $day <= 31; $day++) {
                                $today = $day == date('j', strtotime(' +1 day'));
                                echo "<option value='$day' " . ($today ? " selected='selected'" : "") . "> $day</option>";
                            }
                            ?>
                        </select>
                        <select id="quick_checkout_month" name="checkout_year_month">
                            <?php
                            $months = array();
                            $currentMonth = (int)date('m');
                            $start = true;

                            for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
                                $month = date('Y-n', mktime(0, 0, 0, $x, 1));
                                $month_alt = date('F\'y', mktime(0, 0, 0, $x, 1));
                                echo "<option value='$month' " . ($start ? " selected=\"selected\"" : "") . "> $month_alt</option>";
                                $start = false;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="column width-6">
                        <select id="quick_adults" name="quick_adults">
                            <option value="1" selected="selected">1 adult</option>
                            <option value="2">2 adults</option>
                            <option value="3">3 adults</option>
                            <option value="4">4 adults</option>
                        </select>
                    </div>
                    <div class="column width-6">
                        <select id="quick_children" name="quick_children">
                            <option value="0" selected="selected">No Chidren</option>
                            <option value="1">1 child</option>
                            <option value="2">2 children</option>
                            <option value="3">3 children</option>
                            <option value="4">4 children</option>
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
    <script type="text/javascript">
        var quickBooking = document.getElementById('quick-booking-form');
        quickBooking.addEventListener('submit', function(event) {
            event.preventDefault();
            var checkinDay = document.getElementById('quick_checkin_day').value;
            var checkinMonth = document.getElementById('quick_checkin_month').value;
            var checkoutDay = document.getElementById('quick_checkout_day').value;
            var checkoutMonth = document.getElementById('quick_checkout_month').value;
            var numberAdults = document.getElementById('quick_adults').value;
            var numberChildren = document.getElementById('quick_children').value;
            var param = "&arrival=" + checkinMonth + '-' + checkinDay +
            "&departure=" + checkoutMonth + '-' + checkoutDay +
            "&adults1=" + numberAdults
            "&children1=" + numberChildren;
            var bookingUrl = "https://www.book-secure.com/index.php?s=results&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl" + param;
            window.location = bookingUrl;
        });
    </script>
</div>
