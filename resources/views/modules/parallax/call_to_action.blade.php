<!-- module: parallax.call_to_action -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->banner }}" style="height:300px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-3 center color-white">
                    <h3 class="">{{ $module->data->title }}</h3>
                    <p class="">{{ $module->data->text }}</p>
                    <?php $link = $module->data->button->link->type == "internal" ? route('page', ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                    @if(FALSE)
                    <a href="{{ $link }}" class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30">{{ $module->data->button->text }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@if(FALSE)
<div class="enquire-popup-wrapper" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, .5); z-index: 99999">
    <div class="enquiry-popup" style="position: absolute; top: 32px; left: 32px; right: 32px; bottom: 32px; margin: auto; max-width: 640px; background-color: white; padding: 16px;">
        <h3>Enquire for Meeting Package</h3>
        <form class="contact-form" id="enquire-form" method="post" novalidate>
            <div class="row">
                <div class="column width-6">
                    <input type="text" name="title" class="form-fname form-element large rounded" placeholder="Title" tabindex="1">
                </div>
                <div class="column width-6">
                    <input type="text" name="name" class="form-name form-element large rounded" placeholder="Name*" tabindex="2">
                </div>
                <div class="column width-6">
                    <input type="email" name="email" class="form-email form-element large rounded" placeholder="Email Address*" tabindex="3" required>
                </div>
                <div class="column width-6">
                    <input type="text" name="telephone" class="form-telephone form-element large rounded" placeholder="Telephone number" tabindex="4">
                </div>
                <div class="column width-6">
                    <input type="text" name="honeypot" class="form-honeypot form-element large rounded">
                </div>
                <div class="column width-6">
                    <input type="text" name="nationality" class="form-nationality form-element large rounded" placeholder="Nationality" tabindex="5">
                </div>
                <div class="column width-6">
                    <input type="text" name="nationality" class="form-nationality form-element large rounded" placeholder="Nationality" tabindex="5">
                </div>
            </div>
            <div class="row">
                <div class="column width-12">
                    <textarea name="message" class="form-message form-element large rounded" placeholder="Informasi Tambahan*" tabindex="5"></textarea>
                    <div class="clear"></div>
                    <input type="submit" value="Send Email" class="form-submit large button rounded bkg-blue-light bkg-hover-navy color-white color-hover-white">
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).on('submit', '#enquire-form', function (e) {
        e.preventDefault();
    });
</script>
@endif
<!-- module_end: parallax.call_to_action -->
