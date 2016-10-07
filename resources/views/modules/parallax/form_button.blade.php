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
                       href="{{ $module->data->button->link->url }}">
                        {{ translate($module->data->button->text) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="enquire-popup-wrapper" id="modal-content" style="padding:30px;display:none;">

    @include('modules.parallax.forms.meeting', compact('module'))

</div>
<!-- module_end: parallax.call_to_action -->
