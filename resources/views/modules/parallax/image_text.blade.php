<!-- module: parallax.image_text -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->background->src }}">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-6 offset-1 left center-on-mobile color-white">
                    <h2 class="title-medium">{{ $module->data->title->{locale()} }}</h2>
                    <p class=" color-white">
                        {!! $module->data->description->{locale()} !!}
                    </p>
                    @if($module->data->button->link->type != '')
                        <?php $link = $module->data->button->link->type != "external" ? route($module->data->button->link->type, ['url' => $module->data->button->link->url]) : $module->data->button->link->url ?>
                        <a href="{{ $link }}"
                           class="button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30">{{ $module->data->button->text->{locale()} }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.image_text -->
