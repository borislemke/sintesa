<!-- module: parallax.call_to_action -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->banner }}" style="height:300px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-3 center color-white">
                    <h3 class="">{{ $module->data->title }}</h3>
                    <p class="">{{ $module->data->text }}</p>
                    <?php $link = $module->data->button->link->type == "internal" ? route('page', ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                    <a href="{{ $link }}"
                       class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30">{{ $module->data->button->text }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.call_to_action -->
