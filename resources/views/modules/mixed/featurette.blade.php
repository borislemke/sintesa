<?php

$data = json_decode('{
                    "header": {
                        "title": "Discover",
                        "description": "The Sintesa Jimbaran design embody the finest attributes of contemporary Balinese and Javanese design with modern life style concept and ultimately anticipate the needs of all our local and international travelers."
                    },
                    "caroussel": [
                        {
                            "title": "The BARber",
                            "description": "An authentic reminiscent full service bar and lounge built as an icon to the newly established ‘The Sintesa’ Jimbaran. Upon entering the hotel’s classic 1930s styled men’s Barbershop",
                            "link": {
                                "type": "internal",
                                "url": "barber"
                            },
                            "image": {
                                "src": "generic/facility1.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "The Rooftop",
                            "subtitle": "Coming Soon",
                            "description": "An authentic reminiscent full service bar and lounge built as an icon to the newly established ‘The Sintesa’ Jimbaran. Upon entering the hotel’s classic 1930s styled men’s Barbershop",
                            "link": {
                                "type": "internal",
                                "url": "rooftop"
                            },
                            "image": {
                                "src": "generic/facility2.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "Spa Treatment",
                            "subtitle": "",
                            "description": "Sintesa Wellness SPA offers a complete range of therapies experiences, luxurious, organic & authentic. Designed and fully facilitated by the purest natural products, enter a world of harmony",
                            "link": {
                                "type": "internal",
                                "url": "spa-treatment"
                            },
                            "image": {
                                "src": "generic/facility3.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "The Healthy Corner",
                            "subtitle": "",
                            "description": "To accomplish your healthy lifestyle we provide a healthy juice bar near the pool. If you really want to kick-start your health resolutions this year, making fresh juice",
                            "link": {
                                "type": "internal",
                                "url": "healthy-corner"
                            },
                            "image": {
                                "src": "generic/facility4.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "Angin Angin",
                            "subtitle": "",
                            "description": "The exotic aromas, the stunning views... The Coffee Shop overlooks colorful gardens a perfect setting for family and friends to eat, or and just chill out. Sipping",
                            "link": {
                                "type": "internal",
                                "url": "angin-angin"
                            },
                            "image": {
                                "src": "generic/facility5.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "The Wedding",
                            "subtitle": "",
                            "description": "Exchange vows here... a dream venue for any Wedding Couple. The Sintesa Jimbaran Rooftop overlooks & Jimbaran Bay lush tropical fields, and the quaint architectural landscape of Bali.",
                            "link": {
                                "type": "internal",
                                "url": "the-wedding"
                            },
                            "image": {
                                "src": "generic/facility6.jpg",
                                "alt": ""
                            }
                        },
                        {
                            "title": "The Gym",
                            "subtitle": "",
                            "description": "Fancy a refreshing workout instead? Your daily fitness regimes can be maintained at our state-of-the-art Fitness Centre, with the latest Gym equipment, featuring treadmills, cross trainers, rowing machines",
                            "link": {
                                "type": "internal",
                                "url": "the-gym"
                            },
                            "image": {
                                "src": "generic/facility7.jpg",
                                "alt": ""
                            }
                        }
                    ]
                }');

?>

<!-- module: mixed.featurette -->
<div class="section-block replicable-content bkg-grey-ultralight bkg-pattern">
    <div class="row">
        <div class="column width-6 offset-1">
            <h2 class="mb-20">{{ $data->header->title }}</h2>
            <p class="mb-40">{{ $data->header->description }}</p>
            <div class="slider-aux-nav mb-30 left weight-bold">
                <a href="#" class="previous-team-slider">Prev</a>
                <span>/</span>
                <a href="#" class="next-team-slider">Next</a>
            </div>
        </div>
        <div class="column width-10 offset-1 slider-column no-padding">
            <div id="team-slider-1" class="tm-slider-container team-slider team-slider-1"
                 data-carousel-visible-slides="3" data-height="500">

                <ul class="tms-slides">

                    @foreach($data->caroussel as $slide)
                        <?php $link = $slide->link->type == 'internal' ? route('page', ['url' => $slide->link->url]) : $slide->link->url ?>
                        <li class="tms-slide">
                            <div class="thumbnail" data-hover-easing="easeInOut" data-hover-speed="500"
                                 data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                <a href="{{ $link }}"><img data-src="images/{{ $slide->image->src }}"
                                                                  src="images/{{ $slide->image->src }}" width="760"
                                                                  height="500"
                                                                  alt="{{ $slide->image->alt }}"/></a>
                            </div>
                            <div class="team-content-info">
                                <h3 class="{{ isset($slide->subtitle) && $slide->subtitle != '' ? 'mb-10' : 'mb-30' }}" >
                                    <a href="{{ $link }}">{{ $slide->title }}</a>
                                </h3>
                                @if(isset($slide->subtitle) && $slide->subtitle != '')
                                    <h4 class="occupation">{{ $slide->subtitle }}</h4>
                                @endif
                                <p>{{ $slide->description }}</p>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>
</div>
<!-- module_end: mixed.featurette -->
