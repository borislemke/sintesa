<!-- module: custom.booking_bar -->
<!--
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        //do work
        var inputWrapper = document.getElementById('b_availSubmit');
        inputWrapper.children[0].value = 'Check Our Promotion';
    });
</script>
-->
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
        margin-left: 5px;
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
                    <form id="b_availFrm" class="b_availForm"
                          action="http://www.booking.com/hotel/id/the-sintesa-jimbaran-bali-jimbaran.en.html"
                          method="get">
                        <div class="b_availFormInner">
                            <input type="hidden" name="aid" value="330843">
                            <input type="hidden" name="hotel_id" value="1476215">
                            <input type="hidden" name="lang" value="en">
                            <input type="hidden" name="pb" value="">
                            <input type="hidden" name="stage" value="0">
                            <input type="hidden" name="hostname" value="www.booking.com">
                            <div class="b_availDatesInner">
                                <h4>Check-in</h4>
                                <div id="b_availCheckIn">
                                    <select id="b_checkin_day" name="checkin_monthday">
                                        <?php
                                        for($day = 1; $day <= 31; $day++) {
                                            $today = $day == date('j');
                                            echo "<option value='$day' " . ($today ? " selected='selected'" : "") . "> $day</option>";
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
                                            echo "<option value=\"" . $month . ($start ? " selected=\"selected\"" : "") . "\"> $month_alt</option>";
                                            $start = false;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="b_availDatesInner">
                                <h4>Check-out</h4>
                                <div id="b_availCheckOut">
                                    <select id="b_checkout_day" name="checkout_monthday">
                                        <?php
                                        for($day = 1; $day <= 31; $day++) {
                                            $today = $day == date('j', strtotime(' +1 day'));
                                            echo "<option value='$day' " . ($today ? " selected='selected'" : "") . "> $day</option>";
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
                                            echo "<option value='$month' " . ($start ? " selected=\"selected\"" : "") . "> $month_alt</option>";
                                            $start = false;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="b_availPromo">
                                <h4>Promo Code</h4>
                                <div id="b_availPromo">
                                    <input type="text" name="AccessCode" id="promoCode">
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
