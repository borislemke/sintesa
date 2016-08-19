<!-- module: map.half_content_gallery -->
<script>
    var map;
    var infowindow;
    var styles = [{stylers: [{ saturation: -100 }]}];

    function initMap() {
        map = new google.maps.Map(document.getElementById('jimbaran-map'), {
            center: {
                lat: {{ $module->data->lat }},
                lng: {{ $module->data->long }}
            },
            mapTypeControl: false,
            styles: styles,
            scrollwheel: false,
            draggable: !("ontouchend" in document),
            zoom: {{ $module->data->zoom }}
        });

        infowindow = new google.maps.InfoWindow();

        var locations = [],
            focus = [];
        locations = {!! json_encode($module->data->markers) !!};
        focus = {!! json_encode($module->data->focus) !!};

        var marker, i;

        var vendor_logo = new google.maps.MarkerImage("media/logo-full.png" /* + focus["icon"] */, null, null, null, new google.maps.Size(64, 64));

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(focus['lat'], focus['long']),
            icon: vendor_logo,
            map: map
        });

        var image = new google.maps.MarkerImage("/media/marker.png", null, null, null, new google.maps.Size(20, 27));

        google.maps.event.addListener(marker, 'click', (function (marker, items) {
            return function () {
                infowindow.setContent(
                    '<div class="map-popup">'+
                    '<div class="image-wrap"><img src="' + focus['image'] + '" /></div> <div class="popup-content">'+
                    '<h4>' + focus['text'] + '</h4>'+
                    '<p>' + focus['description'] + '</p>'+
                    '</div><div class="clear"></div></div>'
                    );
                infowindow.open(map, marker);
            }
        })(marker, item));

        for (var item in locations) {
            if (locations.hasOwnProperty(item)) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[item]['lat'], locations[item]['long']),
                    icon: image,
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, items) {
                    return function () {
                        infowindow.setContent(
                        	'<div class="map-popup">'+
									        '<div class="image-wrap"><img src="' + locations[items]['image'] + '" /></div> <div class="popup-content">'+
									        '<h4>' + locations[items]['text'] + '</h4>'+
									        '<p><strong>' + locations[items]['dist'] + '</strong> | <strong>' + locations[items]['time'] + '</strong></p>'+
									        '<p>' + locations[items]['description'] + '</p>'+
									        '</div><div class="clear"></div></div>'
                        	);
                        infowindow.open(map, marker);
                    }
                })(marker, item));
            }
        }
    }
</script>

<section class="section-block no-padding-top no-padding-bottom bkg-white">
	<div class="row">
		<div class="column width-10 push-1 pb-40 center">
			<h3>Get Closer with cultural destination from Hotel</h3>
		</div>
	</div>
</section>

<section class="section-block no-padding-top no-padding-bottom" style="background-color:#d9d9d9">
	<div class="row collapse full-width">
		<div class="column width-6 mobile-width-12">
			<div id="jimbaran-map" style="height: 540px; width:100%;"></div>
		</div>
		<div class="column width-6 mobile-width-12">
			<table class="distances">
				@foreach($module->data->markers as $marker)
				<tr>
					<td><strong class="color-gold">{{ $marker->text }}</strong></td>
					<td>{{ $marker->dist }}</td>
					<td>a {{ $marker->time }} drive</td>
				</tr>
				@endforeach
			</table>
		</div>
    </div>
</section>

<section class="section-block blog-masonry bkg-white small-margins">
	<div class="row">
		<div class="column width-10 offset-1">
			<div class="content-grid-3 equalize">
				<?php $i = 0 ?>
				@foreach($module->data->markers as $marker)
					<?php if ($i < 9) { ?>
						<div class="grid-item{{ $i == 0 ? ' grid-sizer' : '' }} bkg-grey-ultralight" style="border:5px solid #fff;">
							<img src="{{ $marker->image }}" />
							<div style="padding:20px;">
								<h4 class="mt-10">{{ $marker->text }}</h4>
								{!! translate($marker->description) !!}
							</div>
						</div>
					<?php $i++; } ?>
				@endforeach
            </div>
        </div>
    </div>
</section>
<!-- module_end: map.half_content_gallery -->




