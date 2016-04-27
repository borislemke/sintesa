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
        margin-top: 0;
        width: 20%;
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
        padding: .9rem 0;
        width: 100%;
        margin-top:27px;
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
        width: 40%;
    }

    .b_availDatesInner h4 {
        font-size: 90%;
        float: left;
        line-height: 2.2;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        font-weight: 700;
        text-transform: uppercase;
        color:#fff !important;
    }

    .b_availDatesInner select:first-child {
        width: 30%;
        float: left;
        margin-right:2%;
    }

    .b_availDatesInner select:last-child {
        width: 66%;
        float: left;
        margin-right:2%;
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
        background: rgba(90,95,100,.5);
        margin-top:-110px;
        height:110px;
        overflow: hidden;
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
