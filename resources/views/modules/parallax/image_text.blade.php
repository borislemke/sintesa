<!-- module: parallax.image_text -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->background }}">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-1 left center-on-mobile color-white">
                    <h2 class="title-medium">{{ $module->data->title }}</h2>
                    <p class=" color-white">
                        {{ $module->data->description }}
                    </p>
                    <?php $link = $module->data->button->link->type == "internal" ? route('page', ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                    <a href="{{ $link }}"
                       class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30">{{ $module->data->button->text }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.image_text -->
