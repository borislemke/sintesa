<!-- module: text_image.two_alt -->
<div class="section-block full-width no-margins blog-masonry masonry-set-dimensions color-white bkg-white no-padding-top">
    <div class="row">
        <div class="column width-12">
            <div class="row content-grid-4 masonry-grid fade-in-progressively" data-grid-ratio="1">
                <?php $i = 0 ?>
                @foreach($module->data as $item)
                    <a href="{{ $item->link->url }}" class="text-white grid-item wide img-move-left grid-item{{ !$i ? ' grid-sizer' : '' }}">
                        <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="media/{{ $item->background->src }}" alt="{{ $item->background->alt }}"/>
                        </div>
                        <div class="content-overlay"></div>
                        <div class="content-outer">
                            <span class="content-inner center">
                                <h2 class="post-title">{{ $item->title->{locale()} }}</h2>
                                <span class="post-info hide-on-mobile">
                                    <span class="">{!! $item->description->{locale()} !!}</span>
                                </span>
                            </span>
                        </div>
                    </a>
                    <?php $i++ ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- module_end: text_image.two_alt -->


