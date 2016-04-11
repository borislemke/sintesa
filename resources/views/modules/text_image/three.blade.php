<!-- module: text_image.three -->
<div class="section-block replicable-content team-2 bkg-grey-ultralight no-padding-top">
    <div class="row">

        <div class="column width-12">
            <div class="row content-grid-3">

                <?php $i = 0 ?>
                @foreach($module->data as $item)
                    <div class="grid-item{{ !$i ? ' grid-sizer' : '' }}">
                        <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                            <img src="images/{{ $item->image->src }}" width="500" height="400" alt="{{ $item->image->alt }}"/>
                            <div class="caption-over-outer">
                                <div class="caption-over-inner v-align-bottom color-white">
                                </div>
                            </div>
                        </div>
                        <div class="team-content-info center">
                            <h3 class="mb-20">{{ $item->title }}</h3>
                            <p>{{ $item->subtitle }}</p>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- module: text_image.three -->
