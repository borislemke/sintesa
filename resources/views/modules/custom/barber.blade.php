<link rel="stylesheet" href="css/barber.css">
<!-- module: custom.barber -->

<!-- section: baber_featurette -->
<div class="section-block replicable-content" style="background-color: #161616; color: white;">
    <div class="row">
        <div class="three-column-text-wrapper">
            <div class="column width-3 offset-1">
                <h2 style="color: white;">The BARber</h2>
            </div>
            <div class="column width-4">
                <p>An authentic reminiscent full service bar and lounge built as an icon to the newly established ‘The
                    Sintesa’ Jimbaran. Upon entering the hotel’s classic 1930s styled men’s Barbershop to furthest left
                    corner of the room, inside the cloak room reveals a secret door to find the venue.</p>
            </div>
            <div class="column width-4">
                <p>Old reclaimed wooden panels in dark lacquer, antique light fixtures, warm leather sofas, a fine pool
                    table in one corner, a baby grand piano on the other and of course a bar complete with the finest
                    collection of Single Malts, Whiskeys, a range of premium Vodkas and Branded Liquors. Our expert
                    mixologist concocts a series of original cocktails as well as classic favorite. Opening hours 9am -
                    1am.</p>
            </div>
        </div>
    </div>
</div>
<!-- section_end: baber_featurette -->


<!-- section: two_column_text -->
<div class="section-block replicable-content">
    <div class="row">
        <div class="column width-4 offset-2">
            <h3 class="mb-50">Feature and facilities</h3>
            <ul class="circle">
                <li>Live Entertainment Venue</li>
                <li>Baby Grand Piano</li>
                <li>DJ booth</li>
                <li>Billiard area</li>
                <li>Cigar Lounge</li>
                <li>The Barbershop</li>
            </ul>
        </div>
        <div class="column width-4">
            <h3 class="mb-50">Events to host</h3>
            <ul class="circle">
                <li>Music Event</li>
                <li>Social Event</li>
                <li>Pre and post wedding parties</li>
                <li>Private party and many more...</li>
            </ul>
        </div>
    </div>
</div>
<!-- section_end: two_column_text -->


<!-- module: parallax.image_text -->
<div class="section-block parallax fixed-height bkg-black" data-src="images/slider/tora-sudiro.jpg" style="height: 400px;">
    <div class="tmp-content">
        <div class="tmp-content-inner left">
            <div class="row">
                <div class="column width-5 offset-1 left center-on-mobile color-white">
                    <h2 class="title-medium">Happy Hours</h2>
                    <p class=" color-white">
                        BUY 1 GET 1 FOR FREE<br>Everyday from 3pm to 6pm
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- module_end: parallax.image_text -->


<!-- section: baber_featurette -->
<div class="section-block replicable-content">
    <div class="row">
        <div class="three-column-text-wrapper width-10 offset-1">
            <div class="column width-4">
                <h2>Lorem ipsum dolor sit amet</h2>
            </div>
            <div class="column width-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur delectus in labore molestias perferendis, perspiciatis quas suscipit? Dignissimos ducimus, esse impedit modi non perspiciatis?</p>
            </div>
            <div class="column width-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet animi assumenda atq onsequuntur cum cumque, debitis deserunt earum esse ex facilis fugiat id incidunt inventore ipsa.</p>
            </div>
        </div>
    </div>
</div>
<!-- section_end: baber_featurette -->

<!-- module: custom.rooms_gallery -->
<style>
    .barber-gallery-wrapper .grid-item {
        border: 4px solid white;
    }
</style>
<div class="section-block portfolio-5 no-margins no-padding-top barber-gallery-wrapper">
    <div class="row">
        <div class="column width-10 offset-1">
            <div id="grid-1" class="row content-grid-3 masonry-grid fade-in-progressively">

                <?php $gallery_items = [
                        [
                                "description" => "Bunker - Berlin, Germany",
                                "image" => [
                                        "src" => "generic/facility1.jpg",
                                        "alt" => "Some image description"
                                ]
                        ]
                ];
                $gallery_items = json_encode($gallery_items);
                $gallery_items = json_decode($gallery_items);
                $i = 0;
                ?>
                @foreach($gallery_items as $item)
                    <div class="grid-item{{ $i == 0 ? " grid-sizer" : ($i == 1 ? " portrait" : "") }}">
                        <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500"
                             data-hover-bkg-color="#ffffff" data-hover-bkg-opacity=".6">
                            <a class="overlay-link lightbox-link" data-toolbar="zoom" data-group="gallery-1" data-caption="{{ $item->description }}" href="images/{{ $item->image->src }}">
                                <img src="images/{{ $item->image->src }}" alt="{{ $item->image->alt }}"/>
                            </a>
                        </div>
                    </div>
                    <?php $i++ ?>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- module_end: custom.rooms_gallery -->


<!-- module_end: custom.barber -->
