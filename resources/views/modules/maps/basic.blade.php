<!-- module: mixed.featurette -->
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('jimbaran-map'), {
            center: {
                lat: {{ $module->data->lat }},
                lng: {{ $module->data->long }}
            },
            scrollwheel: false,
            zoom: {{ $module->data->zoom }}
        });
    }
</script>
<section class="section-block bkg-white">
    <div class="row">
        <div class="width-10 offset-1">
            <div id="jimbaran-map" style="height: 540px"></div>
        </div>
    </div>
</section>
<!-- module_end: mixed.featurette -->
