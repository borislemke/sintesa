<!-- module: custom.booking_bar -->
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        //do work
        var inputWrapper = document.getElementById('b_availSubmit');
        inputWrapper.children[0].value = 'Check Our Promotion';
    });
</script>
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
        margin-top: 0
    }

    #b_availCheckIn, #b_availCheckOut {
        margin-left: 0;
        padding-right: 0;
    }

    #b_availSubmit > input {
        background: #161616;
        color: #fff;
        border: 0;
        border-radius: 0;
        background: #161616;
        padding: .9rem 2rem;
    }

    #b_availSubmit > input:hover {
        background-color: #86754d
    }

    .b_availFormInner {
        background-color: transparent;
        padding: 0;
    }

    .b_availDatesInner select {
        background: rgba(10, 20, 40, .1);
        border: none;
        border-radius: 0;
        -webkit-appearance: none;
        outline: none;
        padding: 1rem 1.5rem;
        font-size: 1.1rem;
    }

    .b_availDatesInner {
        width: 40%;
    }

    .b_availDatesInner h4 {
        margin: 0.3em 0 0;
        font-size: 100%;
        float: left;
        margin-right: 10px;
        line-height: 2.2;
        font-family: Open Sans;
        width: 30%;
        text-align: right;
    }

    .b_availDatesInner select:first-child {
        width: 20%;
    }

    .b_availDatesInner select:last-child {
        width: 40%;
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
</style>

<section id="booking-section" class="section-block small-section left bkg-grey-ultralight hide-on-mobile">

    <div class="booking-form-container">
        <div class="row">
            <div class="column width-10 offset-1">
                <script src="http://www.booking.com/general.html?tmpl=bookit;aid=330843;lang=en-us;hotel_id=1476215;cc1=id;hotel_page=the-sintesa-jimbaran-bali-jimbaran"
                        type="text/javascript"></script>
            </div>
        </div>
    </div>
</section>
<!--
<section id="booking-section" class="section-block small-section left bkg-grey-ultralight hide-on-mobile">
    <div class="booking-form-container">
        <form class="login-form" action="#" method="post" novalidate>
            <div class="row">
                <div class="column width-2 offset-1">
                    <div class="field-wrapper">
                        <input type="text" name="email" class="form-name form-element small" placeholder="Check In" tabindex="1" required>
                    </div>
                </div>
                <div class="column width-2">
                    <div class="field-wrapper">
                        <input type="text" name="password" class="form-email form-element small" placeholder="Check Out" tabindex="2" required>
                    </div>
                </div>
                <div class="column width-2">
                    <div class="field-wrapper">
                        <input type="text" name="email" class="form-name form-element small" placeholder="Adults" tabindex="1" required>
                    </div>
                </div>
                <div class="column width-2">
                    <div class="field-wrapper">
                        <input type="text" name="email" class="form-name form-element small" placeholder="Children" tabindex="1" required>
                    </div>
                </div>
                <div class="column width-2">
                    <input type="submit" value="Check Availability" class="form-submit full-width button small bkg-charcoal bkg-hover-pink color-white color-hover-white no-margin-bottom">
                </div>


            </div>
            <input type="text" name="honeypot" class="form-honeypot form-element">
        </form>
        <div class="form-response"></div>
    </div>
</section>
-->
<!-- module_end: custom.booking_bar -->
