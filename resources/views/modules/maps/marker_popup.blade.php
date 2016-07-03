<!-- module: maps.marker_popup -->
<script>
    var map;
    var infowindow;

    function initMap() {
        map = new google.maps.Map(document.getElementById('jimbaran-map'), {
            center: {
                lat: {{ $module->data->lat }},
                lng: {{ $module->data->long }}
            },
            scrollwheel: false,
            zoom: {{ $module->data->zoom }}
        });

        infowindow = new google.maps.InfoWindow();

        var locations = [];
        locations = {!! json_encode($module->data->markers) !!};

        var marker, i;

        for (var item in locations) {
            if (locations.hasOwnProperty(item)) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[item]['lat'], locations[item]['long']),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, items) {
                    return function () {
                        infowindow.setContent('<p style="margin: 0; text-align: center">' + locations[items]['text'] + '<br>' + locations[items]['dist'] + '<br>' + locations[items]['time'] + '</p>');
                        infowindow.open(map, marker);
                    }
                })(marker, item));
            }
        }
    }
</script>
<section class="section-block bkg-white">
    <div id="jimbaran-map" style="height: 540px"></div>
</section>
<!-- module_end: maps.marker_popup -->
