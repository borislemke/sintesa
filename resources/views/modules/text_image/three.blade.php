<!-- module: text_image.three -->
<div class="section-block bkg-grey-ultralight small-margins no-padding-bottom">
    <div class="row">
        <div class="column width-10 push-1">
            <div class="row content-grid-3">

                <?php $i = 0 ?>
                @foreach($module->data as $item)
                    <div class="grid-item{{ !$i ? ' grid-sizer' : '' }}">
                        <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <a href="{{ $item->link->url }}"><img src="images/{{ $item->image->src }}" width="500" height="400" alt="{{ $item->image->alt }}"/>

                        </div>
                        <div class="team-content-info">
                            <h4 class="mb-20"><a href="{{ $item->link->url }}">{{ $item->title->{locale()} }}</a></h4>
                            <p>{{ $item->subtitle->{locale()} }}</p>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- module: text_image.three -->
