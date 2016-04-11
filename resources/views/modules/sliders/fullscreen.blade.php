<!-- module: sliders.fullscreen -->
<section class="section-block featured-media window-height include-booking tm-slider-parallax-container">
    <div class="tm-slider-container full-width-slider" data-featured-slider data-auto-advance="2000"
         data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="960">
        <ul class="tms-slides">

            @foreach($module->data as $slide)
                <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#15130f"
                    data-overlay-bkg-opacity="0.4">
                    <div class="tms-content">
                        <div class="tms-content-inner left left-on-mobile v-align-bottom">
                            <div class="row">
                                <div class="column width-12">
                                    <h1 class="tms-caption color-white title-large  no-margin-bottom"
                                        data-no-scale
                                    >
                                                <span class="tms-caption"
                                                      data-animate-in="opacity:0;transY:-30px;duration:800ms;easing:easeFastSlow;"
                                                      data-no-scale><strong>{{ $slide->title }}</strong></span><br>
                                                <span class="tms-caption"
                                                      data-animate-in="opacity:0;transX:-30px;duration:800ms;delay:700ms;easing:easeFastSlow;"
                                                      data-no-scale><small class="small">{{ $slide->subtitle }}
                                                    </small></span><br>
                                    </h1>
                                    <div class="clear"></div>
                                    @if(isset($module->button))
                                        <a href="{{ $slide->button->link }}"
                                           class="tms-caption button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30 mt-30"
                                           data-no-scale
                                           data-animate-in="opacity:0;transX:30px;duration:800ms;delay:900ms;easing:easeFastSlow;"
                                        >{{ $slide->button->text }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="images/{{ $slide->banner->src }}" src="images/blank.png"
                         alt="{{ $slide->banner->alt }}"/>
                </li>
            @endforeach

        </ul>
    </div>
</section>
<!-- module_end: sliders.fullscreen -->
