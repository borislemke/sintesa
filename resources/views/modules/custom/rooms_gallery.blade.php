<!-- module: custom.rooms_gallery -->
<div class="section-block portfolio-5 no-margins bkg-grey-ultralight" id="module__custom-rooms-gallery">
    <div class="row">
        <div class="column width-10 offset-1">
            <div id="grid-1" class="row content-grid-3 masonry-grid fade-in-progressively">

                <?php $i = 0 ?>
                @foreach($module->data as $item)
                    <div class="grid-item{{ $i == 0 ? ' grid-sizer' : ($i == 1 ? ' portrait' : '') }}">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#ffffff" data-hover-bkg-opacity=".8" style="padding:2px">
                            <?php $popup = isset($item->popup) ? $item->popup : $item->image->src ?>
                            <a class="overlay-link lightbox-link" data-toolbar="zoom" data-group="gallery-1"
                               data-caption="{{ $item->image->alt }}"
                               href="media/{{ $popup }}">
                                <img src="media/{{ $item->image->src }}" alt="{{ $item->image->alt }}"/>
                            </a>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach

                <div class="grid-item">
                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                         data-hover-bkg-color="#a39161" data-hover-bkg-opacity=".8" style="padding:2px">
                        <a class="overlay-link lightbox-link" data-group="gallery-1"
                           data-caption="Room floor plan" href="media/{{ $module->config->floorplan->src }}">
                            <img src="media/gallery-rooms/floorplan.jpg" alt="Room floor plan"/>
                            <span class="overlay-info">
                                <span>
                                    <span>
                                        <span class="project-title color-white">View Floorplan</span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: custom.rooms_gallery -->
