<!-- module: lightbox.gallery_column -->
<div class="section-block portfolio-5 small-margins">
    <div class="row">
        <div class="column width-3 offset-1">
            <h2 class="mb-20">Promotion</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="column width-7">
            <div id="grid-1" class="row content-grid-2 masonry-grid fade-in-progressively" data-grid-ratio="1">
                <?php $i = 0 ?>
                @foreach($module->data->gallery as $item)
                <div class="grid-item {{ $i == 0 ? ' grid-sizer' : '' }}">
                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                    data-hover-bkg-color="#e5e7e9" data-hover-bkg-opacity=".98">
                    <a data-toolbar="Promotion" data-group="project-1" data-caption="{{ $item->title }}"
                     data-image-url="media{{ $item->image }}"
                     href="{{ $item->promo_link }}" data-lightbox-animation="slideInBottom">
                     <img src="media/{{ $item->image }}" alt=""/>
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
