

<?php
    include 'include/head.php';
    include 'include/menu.php';
?>
<link rel="stylesheet" href="include/maps/leaflet.css" />
<style>#mapid { height: 80%; }</style>
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

<script src="include/maps/leaflet.js"></script>
<script>
    var mymap = L.map('mapid').setView([52.117,5.142], 8);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox.streets'
    }).addTo(mymap);
    var Skatepark = L.icon({
        iconUrl: 'https://skatelist.nl/include/maps/images/Skatepark-2x.png',
        iconSize: [38, 67],
        iconAnchor: [18, 60],
        popupAnchor: [-3, -60],
        shadowSize: [68, 95],
        shadowAnchor: [22, 60]
    });
    var Spot = L.icon({
        iconUrl: 'https://skatelist.nl/include/maps/images/Spot-2x.png',
        iconSize: [38, 67],
        iconAnchor: [18, 60],
        popupAnchor: [-3, -60],
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

