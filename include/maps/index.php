<link rel="stylesheet" href="leaflet.css" />
<style>#mapid { height: 780px; }</style>
<div id="mapid"></div>

<script src="leaflet.js"></script>
<script>
    var mymap = L.map('mapid').setView([52.117,5.142], 8);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox.streets'
    }).addTo(mymap);
    var marker = L.marker([52.14533, 4.69200]).addTo(mymap); 
    var marker = L.marker([52.12206, 4.65104]).addTo(mymap); 
    var marker = L.marker([52.15462, 4.64913]).addTo(mymap); 
    var marker = L.marker([51.90763, 4.51208]).addTo(mymap); 
    var marker = L.marker([51.44821, 5.45637]).addTo(mymap);
    var marker = L.marker([52.04983, 4.48895]).addTo(mymap);
</script>

