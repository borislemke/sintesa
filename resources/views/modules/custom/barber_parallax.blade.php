<!-- module: parallax.custom_barber -->
<div class="section-block parallax fixed-height bkg-black" data-src="media/{{ $module->data->background }}"
     style="height:500px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-3 offset-1 left center-on-mobile color-white">
                    <h1 class="hominis title-xlarge">{{ $module->data->title->{locale()} }}</h1>
                    <h3 class="title-medium">{{ $module->data->description->{locale()} }}</h3>
                    <a href="{{ $module->data->button->link->url }}" class="button border-white color-white">{{ $module->data->button->text->{locale()} }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.custom_barber -->
