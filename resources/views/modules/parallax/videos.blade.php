<!-- module: parallax.video -->
<style>
    .three-videos {
        padding: 0;
        margin-top: 64px;
        margin-bottom: 64px;
    }
    .three-videos > .tmp-content {

    }
    .three-videos > .tmp-content > .tmp-content-inner {

    }
    .three-videos > .tmp-content > .tmp-content-inner > .video-item {
        height: 100%;
        padding: 16px 8px;
    }
    .three-videos > .tmp-content > .tmp-content-inner > .video-item > .video-item-background {
        height: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .three-videos > .tmp-content > .tmp-content-inner > .video-item > .video-item-background > a {}
</style>
<div class="section-block fixed-height three-videos bkg-white" style="height: 240px">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            {{--<div class="row">--}}
                @foreach($module->data as $video)
                    <div class="column width-4 center video-item">
                        <div class="video-item-background" style="background-image: url('/media/{{ $video->background }}')">
                            <a href="{{ $video->video }}"
                               class="lightbox-link icon-play icon-circled bkg-white bkg-hover-gold color-black color-hover-white no-margin-bottom left"></a>
                        </div>
                        <p class="mt-10">{{ $video->subtitle }}</p>
                    </div>
                @endforeach
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- module_end: parallax.video -->
