<!-- module: lightbox.gallery_column -->
<div class="section-block portfolio-5 small-margins no-padding-top">
    <div class="row">
        @if(isset($module->data->title) AND $module->data->title != '')
            <h3 style="margin: 40px 12px;">{{ $module->data->title }}</h3>
        @endif
        <div class="column width-12">
            <div id="grid-1" class="row content-grid-4 masonry-grid fade-in-progressively" data-grid-ratio="1">
                <?php $i = 0 ?>
                @foreach($module->data->gallery as $item)
                    <div class="grid-item {{ $i == 0 ? ' grid-sizer' : '' }} portrait">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                            <a class="overlay-link lightbox-link" data-group="project-1"
                               data-caption="{{ $item->title }}"
                               data-image-url="media{{ $item->image }}"
                               href="media/{{ $item->image }}" data-lightbox-animation="slideInBottom">
                                <img src="media/{{ $item->image }}" alt=""/>
							<span class="overlay-info center">
								<span>
									<span>
										<span class="left inline">
											<span class="project-title">{{ $item->title }}</span>
										</span>
									</span>
								</span>
							</span>
                            </a>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- module_end: lightbox.gallery_column -->
