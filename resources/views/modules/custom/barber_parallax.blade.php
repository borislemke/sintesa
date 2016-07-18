<!-- module: parallax.custom_barber -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->background }}"
     style="height:500px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-3 offset-1 left center-on-mobile color-white">
                    <h1 class="hominis title-xlarge">{{ translate($module->data->title) }}</h1>
                    <h3 class="title-medium">{{ translate($module->data->description) }}</h3>
                    <a href="{{ $module->data->button->link->url }}" class="button border-white color-white">{{ translate($module->data->button->text) }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.custom_barber -->
