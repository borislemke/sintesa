<!-- module: text.title_subtitle -->
<section id="about" class="section-block center bkg-white {{ $module->config->pattern ? 'bkg-pattern' : '' }}">
    <div class="row">
        <div class="column width-8 offset-2">
            <div class="horizon" data-animate-in="opacity:0;transX:50;duration:1000;easing:easeFastSlow;" data-threshold="0.5">
                <h2 class="mb-40">{{ $module->data->title->{locale()} }}</h2>
                <p class="sublead">{{ $module->data->subtitle->{locale()} }}</p>
                {!! $module->data->text->{locale()} !!}
            </div>
        </div>
        <div class="column width-5">

        </div>
    </div>
</section>
<!-- module_end: text.title_subtitle -->
