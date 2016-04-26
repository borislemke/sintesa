<!-- module: map.half_content -->
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
            zoom: {{ $module->data->zoom }}
        });


        infowindow = new google.maps.InfoWindow();

        var locations = [];
        locations = {!! json_encode($module->data->markers) !!};

        var marker, i;

        var image = new google.maps.MarkerImage("/media/marker.png", null, null, null, new google.maps.Size(20, 27));

    

	     

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
<section class="section-block no-padding-top no-padding-bottom" style="background-color:#d9d9d9">
	<div class="row collapse full-width">
		<div class="column width-6">
			<div id="jimbaran-map" style="height: 540px; width:100%;"></div>
		</div>
		<div class="column width-6 hide-on-mobile">
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
			<div class="content-grid-3 masonry-grid equalize">
				<?php $i = 0 ?>
				@foreach($module->data->markers as $marker)
					<?php if ($i < 9) { ?>
						<div class="grid-item{{ $i == 0 ? ' grid-sizer' : '' }}">
							<img src="{{ $marker->image }}" />
							<div class="bkg-grey-ultralight" style="padding:20px">
								<h4 class="mt-10">{{ $marker->text }}</h4>
								<p>{{ $marker->description }}</p>
							</div>
						</div>
					<?php $i++; } ?>
				@endforeach
	  	</div>
	  </div>
	</div>
</section>
<!-- module_end: map.half_content -->




