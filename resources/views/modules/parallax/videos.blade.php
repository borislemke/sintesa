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
        height: 200px;
        padding: 16px 8px;
        margin-bottom:20px;
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
<div class="section-block three-videos bkg-white">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            {{--<div class="row">--}}
                @foreach($module->data as $video)
                    <?php $link = $video->video->type != "external" ? route($video->video->type, ['url' => $video->video->url]) : $video->video->url ?>
                    <div class="column width-4 center video-item">
                        <div class="video-item-background" style="background-image: url('/media/{{ $video->background->src }}')">
                            <a href="{{ $link }}"
                               class="lightbox-link icon-play icon-circled bkg-white bkg-hover-gold color-black color-hover-white no-margin-bottom left"
                               alt="{{ $video->background->alt }}"></a>
                        </div>
                        <p class="mt-10">{{ $video->title }}</p>
                    </div>
                @endforeach
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- module_end: parallax.video -->
