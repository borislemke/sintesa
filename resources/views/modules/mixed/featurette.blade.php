<!-- module: mixed.featurette -->
<div class="section-block replicable-content bkg-grey-ultralight bkg-pattern">
    <div class="row">
        <div class="column width-6 offset-1">
            <h2 class="mb-20">{{ translate($module->config->header->title) }}</h2>
            <p class="mb-40">{!! translate($module->config->header->description) !!}</p>
        </div>
        <div class="column width-4">
            <div class="slider-aux-nav mb-30 left weight-bold v-align-bottom right">
                <div>
                    <a href="#" class="previous-team-slider">Prev</a>
                    <span>/</span>
                    <a href="#" class="next-team-slider">Next</a>
                </div>
            </div>
        </div>
        <div class="column width-10 offset-1 slider-column no-padding">
            <div id="team-slider-1" class="tm-slider-container team-slider team-slider-1"
                 data-carousel-visible-slides="3" data-height="500">
                <ul class="tms-slides">
                    @foreach($module->data as $slide)
                        <?php $link = $slide->link->type != 'external' ? route($slide->link->type, ['url' => $slide->link->url]) : $slide->link->url ?>
                        <li class="tms-slide">
                            <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a href="{{ $link }}"><img data-src="images/{{ $slide->image->src }}"
                                                           src="images/{{ $slide->image->src }}" width="760"
                                                           height="500"
                                                           alt="{{ $slide->image->alt }}"/></a>
                            </div>
                            <div class="team-content-info">
                                <h3 class="{{ isset($slide->subtitle) && translate($slide->subtitle) != '' ? 'mb-10' : 'mb-30' }}">
                                    <a href="{{ $link }}">{{ translate($slide->title) }}</a>
                                </h3>
                                @if(isset($slide->subtitle) && translate($slide->subtitle) != '')
                                    <h4 class="occupation">{{ translate($slide->subtitle) }}</h4>
                                @endif
                                {!! translate($slide->description) !!}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- module_end: mixed.featurette -->
