<div class="enquiry-popup">
    <form class="reservation-form" id="enquire-form" method="POST" action="/api/ajax/fitness" novalidate>
        <div class="row small-margins">
            <div class="column width-12">
                <h3>Enquire for Gym Membership</h3>
            </div>

            <div class="clear"></div>
            <div class="sep"></div>
            <div class="column width-12">
                <h5>Contact Details</h5>
            </div>
            <div class="column width-4">
                <input type="text" name="title" class="form-fname form-element" placeholder="Title" tabindex="1">
            </div>
            <div class="column width-4">
                <input type="text" name="name" class="form-name form-element" placeholder="Name*" tabindex="2">
            </div>
            <div class="column width-4">
                <input type="email" name="email" class="form-email form-element" placeholder="Email Address*"
                       tabindex="3" required>
            </div>
            <div class="column width-4">
                <input type="text" name="telephone" class="form-telephone form-element"
                       placeholder="Telephone number" tabindex="4">
            </div>

            <div class="column width-4">
                <input type="text" name="nationality" class="form-nationality form-element"
                       placeholder="Nationality" tabindex="5">
            </div>
            <div class="column width-4">
                <input type="text" name="country" class="form-country form-element" placeholder="Country"
                       tabindex="5">
            </div>

            <div class="column width-12">
                <input type="text" name="address" class="form-address form-element" placeholder="Address"
                       tabindex="5">
            </div>
            <div class="column width-6">
                <input type="text" name="city" class="form-city form-element" placeholder="City" tabindex="5">
            </div>
            <div class="column width-6">
                <input type="text" name="province" class="form-province form-element" placeholder="Province"
                       tabindex="5">
            </div>

            <div class="clear"></div>
            <div class="sep"></div>


            <div class="column width-12">
                    <textarea name="message" class="form-message form-element" placeholder="Additional Information"
                              tabindex="5"></textarea>
                <div class="clear"></div>
                <input type="submit" value="Send Email"
                       class="form-submit  button  bkg-gold bkg-hover-black color-white color-hover-white">
            </div>

        </div>
        <div class="row">
        </div>
    </form>
</div>

<script>
    $(document).on('submit', '#enquire-form', function (e) {
        e.preventDefault();

        $.ajax({
            data: $(this).serialize(),
            method: 'POST',
            url: '/api/ajax/fitness',
            // contentType: "application/json; charset=utf-8",
            error: function (err) {
                alert("Could not connect to the registration server.");
                console.log(err)
            },
            success: function (data) {
                if (data.result != "success") {
                    // Something went wrong, parse data.msg string and display message

                } else {
                    // It worked, so hide form and display thank-you message.
                    alert("Your message has been submitted. We will get back to you as soon as possible.");
                }
            }
        })
    });
</script>
