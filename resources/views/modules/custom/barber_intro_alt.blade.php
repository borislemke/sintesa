<!-- module: mixed.page_intro_alt -->
<section class="section-block bkg-gold color-white no-padding-bottom">
    <div class="row">
        <div class="three-column-text-wrapper">
            <div class="column width-10 offset-1">
                @foreach($module->data->columns as $column)
                    <div class="column width-{{ (12 / count($module->data->columns)) }} pb-120">
                        {!! $column !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-block bkg-white no-padding-top">
    <div class="row">
        <div class="column width-8 offset-2 push-up">
            <img src="media/{{ $module->data->image_wide->src }}" class="horizon"
                 data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5" alt="{{ $module->data->image_wide->alt }}"/>
        </div>
        <div class="column width-6 offset-2">
            <div class="horizon" data-animate-in="opacity:0;transX:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5">
                <p class="pt-50">{!! $module->data->intro !!}</p>
            </div>
        </div>
        <div class="column width-3 push-up">
            <img src="media/{{ $module->data->image_square->src }}" class="bordered horizon"
                 data-animate-in="opacity:0;transY:50;duration:1000;easing:easeFastSlow;"
                 data-threshold="0.5" alt="{{ $module->data->image_square->src }}"/>
        </div>

    </div>
</section>
<!-- module_end: mixed.page_intro_alt -->
