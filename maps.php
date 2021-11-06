

<?php
    include 'include/head.php';
    include 'include/menu.php';
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<style>#mapid { height: 80%; }</style>

<!--
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYmVuamFib3l5IiwiYSI6ImNqcjliZGNxYjBlYWg0OXFrenZqZnlzMGoifQ.VkeYKMDR5cF8jNyDBX5uEg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script>
-->
<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
    <div class="container ">
        <div style="margin-top:60px;" id="hippeDiv" class="panel panel-default">
		   <div class="hidden-xs panel-heading">
				<h2 class="panel-title">Alle spots</h2>
		   </div>
            <div id="mapid"></div>
        </div>
    </div>
</body>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([52.117,5.142], 8);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYmVuamFib3l5IiwiYSI6ImNrdHZ3aG5tdzIxcTQzMm5xcXF2NXd5YW0ifQ.fF6u39qCe24aOIUdaq5a9A', {
        attribution: '© <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYmVuamFib3l5IiwiYSI6ImNrdHZ3aG5tdzIxcTQzMm5xcXF2NXd5YW0ifQ.fF6u39qCe24aOIUdaq5a9A'
}).addTo(mymap);
    var Skatepark = L.icon({
        iconUrl: 'https://skatelist.nl/include/maps/images/Skatepark-2x.png',
        iconSize: [19, 34],
        iconAnchor: [9, 30],
        popupAnchor: [-3, -30],
        shadowSize: [68, 95],
        shadowAnchor: [22, 60]
    });
    var Spot = L.icon({
        iconUrl: 'https://skatelist.nl/include/maps/images/Spot-2x.png',
        iconSize: [19, 34],
        iconAnchor: [9, 30],
        popupAnchor: [-3, -30],
        shadowSize: [68, 95],
        shadowAnchor: [22, 60]
    });
    <?php
        include 'include/get_pins.php';
        print("$pin");
    ?>
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="include/js/nav_js.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>

