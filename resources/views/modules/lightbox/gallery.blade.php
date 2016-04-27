<!-- module: lightbox.gallery -->
<div class="row content-grid-3">
    @foreach($module->data as $item)
        <div class="grid-item">
            <div class="thumbnail">
                <a data-toolbar="" class="overlay-link tml-link" data-group="gallery-1" data-caption="This is a caption"
                   href="images/{{ $item->image->src }}" data-retina="">
                    <img src="images/{{ $item->image->src }}" alt="images/{{ $item->image->alt }}"
                         style="transition-duration: 400ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);">
                    @if(isset($item->overlay) && $item->overlay != '')
                        <span class="overlay-info animation-slide-in-left"
                              style="transition-duration: 400ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1); background-color: rgba(0, 0, 0, 0.498039);">
                            <span>
                                <span>
                                    {{ $item->overlay }}
                                </span>
                            </span>
                        </span>
                    @endif
                </a>
            </div>
        </div>
    @endforeach
</div>
<!-- module_end: lightbox.gallery -->
