<!-- module: sliders.fullscreen -->
<section class="section-block featured-media include-booking  {{ $module->config->short ? 'page-intro' : ' window-height'  }}">
    <div class="tm-slider-container full-width-slider" data-featured-slider data-auto-advance="2000" data-animation="slide" data-scale-under="960">
         <div class="slide-overlay-gradient"></div>
        <ul class="tms-slides">

            @foreach($module->data as $slide)
                <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#15130f"
                    data-overlay-bkg-opacity="0.5">
                    <div class="tms-content">

                        <div class="tms-content-inner {{ $module->config->short ? 'center v-align-center' : 'left v-align-bottom' }}">
                            <div class="row">
                                <div class="{{ $module->config->short ? 'width-12' : 'column width-6 offset-1' }}">
                                    <h1 class="tms-caption color-white {{ $module->config->short ? 'no-margin-bottom' : '' }} title-medium" data-no-scale>
                                        <span class="tms-caption"
                                              data-animate-in="opacity:0;transY:-30px;duration:800ms;easing:easeFastSlow;"
                                              data-no-scale>{{ $slide->title }}</span><br>
                                    </h1>
                                    <div class="clear"></div>

                                    @if(!$module->config->short AND isset($slide->subtitle) AND $slide->subtitle != "")
                                    <p class="tms-caption color-white sublead"
                                       data-animate-in="opacity:0;transX:-30px;duration:800ms;delay:700ms;easing:easeFastSlow;" data-no-scale>{!! $slide->subtitle !!}</p>
                                    <div class="clear"></div>
                                    @endif

                                    @if(isset($slide->button) AND $slide->button->link->type != '')
                                        <?php $link = $slide->button->link->type != "external" ? route($slide->button->link->type, ['url' => $slide->button->link->url]) : $slide->button->link->url ?>
                                        <a href="{{ $link }}"
                                           class="tms-caption button text-uppercase border-white bkg-hover-gold color-white color-hover-white mb-mobile-30" data-no-scale data-animate-in="opacity:0;transX:30px;duration:800ms;delay:900ms;easing:easeFastSlow;">{{ $slide->button->text }}</a>
                                    @endif

                                    @if($module->config->short)
                                      <div class="social-share tms-caption" data-animate-in="opacity:0;duration:1000ms;delay:600;easing:easeFastSlow;" data-no-scale>
                                        <p class="">Share:</p>
                                        <ul class="social-list list-horizontal">
                                          <li><a href="#"><i class="icon-facebook"></i></a></li>
                                          <li><a href="#"><i class="icon-twitter"></i></a></li>
                                          <li><a href="#"><i class="icon-google"></i></a></li>
                                        </ul>
                                      </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <img data-src="media/{{ $slide->banner->src }}" src="media/blank.png" alt="{{ $slide->banner->alt }}"/>
                    <div class="blur-effect">
                      <div style="background-image:url(media/{{ $slide->banner->src }})"></div>
                    </div>
                </li>
            @endforeach

        </ul>


    </div>
</section>

<!-- module_end: sliders.fullscreen -->

