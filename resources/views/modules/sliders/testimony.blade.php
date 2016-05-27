<!-- module: sliders.testimony -->
<div class="section-block testimonial-5 testimonials-5-about-1 bkg-grey-ultralight">
    <div class="row">
        <div class="column width-8 offset-2 center">
            <h2 class="mb-30">{{ $module->config->title }}</h2>
        </div>
    </div>
    <div id="testimonial-slider-1" class="testimonial-slider tm-slider-container">
        <ul class="tms-slides">

            @foreach($module->data as $testimony)
                <li class="tms-slide" data-image>
                    <div class="tms-content-scalable">
                        <div class="row">
                            <div class="column width-8 offset-2">
                                <blockquote class="center large">
                                    <p>{{ $testimony->text }}</p>
                                    <cite>{{ $testimony->source }}</cite>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</div>
<!-- module_end: sliders.testimony -->
