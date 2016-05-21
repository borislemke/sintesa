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

        var locations = [],
            focus = [];
        locations = {!! json_encode($module->data->markers) !!};
        focus = {!! json_encode($module->data->focus) !!};

        var marker, i;

        var image = new google.maps.MarkerImage("/media/marker.png", null, null, null, new google.maps.Size(20, 27));

        var vendor_logo = new google.maps.MarkerImage("media/" + focus["icon"], null, null, null, new google.maps.Size(20, 27));

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(focus['lat'], focus['long']),
            icon: vendor_logo,
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, items) {
            return function () {
                infowindow.setContent(
                    '<div class="map-popup">'+
                    '<div class="image-wrap"><img src="' + focus['image'] + '" /></div> <div class="popup-content">'+
                    '<h4>' + focus['text'] + '</h4>'+
                    '<p><strong>' + focus['dist'] + '</strong> | <strong>' + focus['time'] + '</strong></p>'+
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
<!-- module_end: map.half_content -->




