<!-- module: parallax.simple_short -->
<section class="section-block include-booking featured-media page-intro tm-slider-parallax-container">
    <div class="tm-slider-container full-width-slider" data-featured-slider data-auto-advance="2000" data-parallax data-parallax-fade-out data-animation="slide" data-scale-under="960">
        <ul class="tms-slides">
            <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#15130f" data-overlay-bkg-opacity="0.6">
                <div class="tms-content">
                    <div class="tms-content-inner center v-align-center">
                        <div class="row">
                            <div class="width-12">
                                <h1 class="tms-caption color-white no-margin-bottom title-medium"data-no-scale>
                                    <span class="tms-caption" data-animate-in="opacity:0;transY:-30px;duration:800ms;easing:easeFastSlow;" data-no-scale>{{ $module->data->title }}</span><br>
                                </h1>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <img data-src="images/{{ $module->data->image->src }}" src="images/blank.png" alt="{{ $module->data->image->alt }}"/>
            </li>
        </ul>
    </div>
</section>
<!-- module_end: parallax.simple_short -->
