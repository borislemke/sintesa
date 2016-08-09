<!-- module: parallax.call_to_action -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->background->src }}"
     style="height:300px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-3 center color-white">
                    <h3 class="">{{ translate($module->data->title) }}</h3>
                    <p class="">{{ translate($module->data->text) }}</p>
                    <?php $link = $module->data->button->link->type == "internal" ? route('page', ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                    <a data-toolbar="" data-modal-mode="" data-modal-width="80%" data-content="inline"
                       class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30 lightbox-link"
                       href="{{ $module->data->button->link->url }}">{{ translate($module->data->button->text) }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="enquire-popup-wrapper" id="modal-content" style="padding:30px;display:none;">
    <div class="enquiry-popup">
        <form class="reservation-form" id="enquire-form" method="POST" action="/api/ajax/meeting" novalidate>
            <div class="row small-margins">
                <div class="column width-12">
                    <h3>Enquire for Meeting Package</h3>
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
                    <h5>Reservation Options</h5>
                </div>
                <div class="column width-6">
                    <input type="text" name="event" class="form-event form-element" placeholder="Event Name"
                           tabindex="5">
                </div>
                <div class="column width-6">
                    <input type="text" name="company" class="form-company form-element" placeholder="Company"
                           tabindex="5">
                </div>
                <div class="column width-12 mt-5 mb-5">
                    Meeting Category
                </div>
                <div class="column width-2">
                    <input type="radio" name="category" value=""> Meeting
                </div>
                <div class="column width-2">
                    <input type="radio" name="category" value=""> Intensive
                </div>
                <div class="column width-2">
                    <input type="radio" name="category" value=""> Conference
                </div>
                <div class="column width-2">
                    <input type="radio" name="category" value=""> Others
                </div>
                <div class="column width-4">
                    <input type="text" name="" class="form-element" placeholder="Please Specify" tabindex="5">
                </div>

                <div class="column width-4">
                    <input type="text" name="attendance" class="form-attendance form-element"
                           placeholder="Number of Attendance" tabindex="1">
                </div>
                <div class="column width-4">
                    <input type="text" name="rooms" class="form-rooms form-element" placeholder="Number of Rooms"
                           tabindex="2">
                </div>
                <div class="column width-4">
                    <input type="text" name="budget" class="form-budget form-element" placeholder="Budget" tabindex="2">
                </div>

                <div class="column width-12 mt-5 mb-5">
                    Meeting Needs
                </div>
                <div class="column width-4">
                    <input type="radio" name="needs" value=""> Accommodation &amp; Meeting Room
                </div>
                <div class="column width-4">
                    <input type="radio" name="needs" value=""> Accommodation Only
                </div>
                <div class="column width-4">
                    <input type="radio" name="needs" value=""> Meeting Room Only
                </div>
                <div class="clear"></div>
                <div class="sep"></div>

                <div class="column width-4">
                    Extra Activity
                </div>
                <div class="column width-2">
                    <input type="radio" name="activity" value=""> Yes
                </div>
                <div class="column width-2">
                    <input type="radio" name="activity" value=""> No
                </div>

                <div class="column width-4">
                    <input type="text" name="" class="form-element" placeholder="Activity Type" tabindex="5">
                </div>
                <div class="clear"></div>
                <div class="sep"></div>
                <div class="column width-6">
                    <p class="mb-5">Request Date</p>
                    <input type="text" name="requeststart" class="form-element" placeholder="Start Date" tabindex="1">
                    <input type="text" name="requestend" class="form-element" placeholder="End Date" tabindex="1">
                </div>
                <div class="column width-6">
                    <p class="mb-5">Alternate Date</p>
                    <input type="text" name="alternatestart" class="form-element" placeholder="Start Date" tabindex="1">
                    <input type="text" name="alternateend" class="form-element" placeholder="End Date" tabindex="1">
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
                method: 'POST',
                url: '/api/ajax/meeting',
                data: $(this).serialize(),
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                error: function (err) {
                    alert("Could not connect to the registration server.");
                    console.log(err)
                },
                success: function (data) {
                    if (data.result != "success") {
                        // Something went wrong, parse data.msg string and display message
                    } else {
                        // It worked, so hide form and display thank-you message.
                    }
                }
            })
        });
    </script>
</div>
<!-- module_end: parallax.call_to_action -->
