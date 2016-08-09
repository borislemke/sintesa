<!-- module: custom.booking_bar -->
<style>
    #b_editDates > h3 {
        margin-top: 0;
        padding-top: 1em;
        display: none
    }

    #b_editDates > form {
        border: 0
    }

    #b_editDates > form > div {
        border-radius: 0
    }

    #b_availSubmit {
        margin-top: 21px;
        width: 20%;
        float: left;
    }

    #b_availCheckIn, #b_availCheckOut {
        margin-left: 0;
        padding-right: 0;
    }

    #b_availSubmit > input {
        color: #161616;
        border: 0;
        border-radius: 0;
        background: #fff;
        padding: 1rem 0;
        width: 100%;
        margin-top: 6px;
    }

    #b_availSubmit > input:hover {
        background-color: #86754d
    }

    .b_availFormInner {
        background-color: transparent;
        padding: 0;
    }

    .b_availDatesInner select {
        background: rgba(255, 255, 255, .2);
        color: #fff;
        border: none;
        border-radius: 0;
        -webkit-appearance: none;
        outline: none;
        padding: 1rem 1.5rem;
        font-size: 1.1rem;
    }

    .b_availDatesInner {
        width: 34.5%;
        float: left;
    }

    .b_availPromo {
        width: 10%;
        float: left;
        margin-right: 8px;
    }

    .b_availPromo input {
        background: rgba(255, 255, 255, .2);
        color: #fff;
        border: none;
        border-radius: 0;
        -webkit-appearance: none;
        outline: none;
        padding: 1rem 1.5rem;
        font-size: 1.1rem;
    }

    .b_availDatesInner h4, .b_availPromo h4 {
        font-size: 90%;
        float: left;
        line-height: 2.2;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        font-weight: 700;
        text-transform: uppercase;
        color: #fff !important;
        margin-bottom: 0;
    }

    .b_availDatesInner select:first-child {
        width: 30%;
        float: left;
        margin-right: 2%;
    }

    .b_availDatesInner select:last-child {
        width: 66%;
        float: left;
        margin-right: 2%;
    }

    @media only screen and (max-width: 960px) {

        .b_availDatesInner h4 {
            width: 100%;
            text-align: left;
        }

        .b_availDatesInner {
            width: 38%;
        }

        .b_availDatesInner select:last-child {
            width: 70%;
        }

        #b_availSubmit > input {
            margin-top: 3rem;
        }
    }

    #booking-section {
        padding-top: 1.5rem;
        padding-bottom: 2rem;
        background: rgba(90, 95, 100, .5);
        margin-top: -110px;
        height: 110px;
        overflow: hidden;
    }
</style>

<section id="booking-section" class="section-block small-section left bkg-grey-ultralight hide-on-mobile">

    <div class="booking-form-container">
        <div class="row">
            <div class="column width-10 offset-1">
                {{--<script src="http://www.booking.com/general.html?tmpl=bookit;aid=330843;lang=en-us;hotel_id=1476215;cc1=id;hotel_page=the-sintesa-jimbaran-bali-jimbaran" type="text/javascript"></script>--}}
                <div id="b_editDates">
                    <h3>When would you like to stay?</h3>
                    <form id="b_availFrm" class="b_availForm">
                        <div class="b_availFormInner">
                            <div class="b_availPromo">
                                <h4>Promo Code</h4>
                                <div id="b_availPromo">
                                    <input type="text" name="AccessCode" id="promoCode">
                                </div>
                            </div>
                            <div class="b_availDatesInner">
                                <h4>Check-in</h4>
                                <div id="b_availCheckIn" style="padding-right: 8px;">

                                    <input id="b_checkin_day" type="text"
                                           style="background: rgba(255, 255, 255, .2); color: #fff; border: none; border-radius: 0; -webkit-appearance: none; outline: none; padding: 1rem 1.5rem; font-size: 1.1rem;">
                                    <input type="hidden" id="hidden_checkin">

                                    <?php if(FALSE): ?>
                                    <select id="b_checkin_day" name="checkin_monthday">
                                        <?php
                                        for ($day = 1; $day <= 31; $day++) {
                                            $today = $day == date('j');
                                            echo "<option value=\"$day\"" . ($today ? " selected=\"selected\"" : "") . "> $day</option>";
                                        }
                                        ?>
                                    </select>
                                    <select id="b_checkin_month" name="checkin_year_month">
                                        <?php
                                        $months = array();
                                        $currentMonth = (int)date('m');
                                        $start = true;

                                        for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
                                            $month = date('Y-n', mktime(0, 0, 0, $x, 1));
                                            $month_alt = date('F\'y', mktime(0, 0, 0, $x, 1));
                                            echo "<option value=\"$month\"" . ($start ? " selected=\"selected\"" : "") . "> $month_alt</option>";
                                            $start = false;
                                        }
                                        ?>
                                    </select>
                                    <?php endif ?>

                                </div>
                            </div>
                            <div class="b_availDatesInner">
                                <h4>Check-out</h4>
                                <div id="b_availCheckOut" style="padding-right: 8px;">

                                    <input id="b_checkout_day" type="text"
                                           style="background: rgba(255, 255, 255, .2); color: #fff; border: none; border-radius: 0; -webkit-appearance: none; outline: none; padding: 1rem 1.5rem; font-size: 1.1rem;">
                                    <input type="hidden" id="hidden_checkout">

                                    <?php if(FALSE): ?>
                                    <select id="b_checkout_day" name="checkout_monthday">
                                        <?php
                                        for ($day = 1; $day <= 31; $day++) {
                                            $today = $day == date('j', strtotime(' +1 day'));
                                            echo "<option value=\"$day\"" . ($today ? " selected=\"selected\"" : "") . "> $day</option>";
                                        }
                                        ?>
                                    </select>
                                    <select id="b_checkout_month" name="checkout_year_month">
                                        <?php
                                        $months = array();
                                        $currentMonth = (int)date('m');
                                        $start = true;

                                        for ($x = $currentMonth; $x < $currentMonth + 12; $x++) {
                                            $month = date('Y-n', mktime(0, 0, 0, $x, 1));
                                            $month_alt = date('F\'y', mktime(0, 0, 0, $x, 1));
                                            echo "<option value=\"$month\"" . ($start ? " selected=\"selected\"" : "") . "> $month_alt</option>";
                                            $start = false;
                                        }
                                        ?>
                                    </select>
                                    <?php endif ?>

                                </div>
                            </div>
                            <div id="b_availSubmit">
                                <input type="submit" value="Check Our Promotion">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#b_checkin_day").datepicker({
            minDate: 0,
            maxDate: "+1Y",
            dateFormat: 'DD, M dd yy',
            altFormat: 'yy-mm-dd',
            altField: '#hidden_checkin'
        });
        $("#b_checkout_day").datepicker({
            minDate: 1,
            maxDate: "+1Y",
            dateFormat: 'DD, M dd yy',
            altFormat: 'yy-mm-dd',
            altField: '#hidden_checkout'
        });
    });
</script>


<script type="text/javascript">
    window.onload = function () {
        var bookingForm = document.getElementById('b_availFrm');
        bookingForm.addEventListener('submit', function (event) {
            event.preventDefault();
            var checkinDate = document.getElementById('hidden_checkin').value;
            var checkoutDate = document.getElementById('hidden_checkout').value;
            var promoCode = document.getElementById('b_availPromo').value;
            var param = "&arrival=" + checkinDate +
                    "&departure=" + checkoutDate +
                    "&promo=" + promoCode +
                    "&adults1=1" +
                    "&children1=0";
            window.location = "https://www.book-secure.com/index.php?s=results&property=idbal28401&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl" + param;
        });
    }
</script>
<!--
https://www.book-secure.com/index.php?s=results&property=idbal28401&arrival=2016-05-24&departure=2016-05-25&code=qwerwqrwqr&adults1=1&children1=0&rooms=1&locale=en_GB&currency=IDR&stid=3gthgk0hl
-->
<!-- module: custom.booking_bar -->
