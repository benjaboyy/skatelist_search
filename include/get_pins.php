<?php

include 'connection.php';
$pin = '';    

$sql = "SELECT * FROM skatepark";
$result = $mysqli->query($sql);



while($row = $result->fetch_assoc()) {
    $city = $row['city'];
    $street = $row['street'];
    $number = $row['number'];
    $name = $row['name'];
    $id = $row['id'];
    $rate = $row['rate'];
    $category = $row['category'];
    $objects = $row['objects'];
    $location = $row['location'];
    
    $weatherApiKey = 'c10774db4cea8a44db9198264ba98f96';
    $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.',nl&appid='.$weatherApiKey.' ';
    $json_data = json_decode(file_get_contents($url), true);
    $icon = $json_data["weather"][0]["icon"];
    $kelvin = $json_data["main"]["temp"];
    $celsius = round($kelvin-273.15);  

    $pin .= 'var marker = L.marker(['.$location.'], {icon: '.$category.'}).addTo(mymap)
    marker.bindPopup("<b>'.$name.'</b> '.$celsius.'&#176; <br>Adres: '.$city.', '.$street.' '.$number.'<br><a href=\'http://skatelist.nl/data.php?id='.$id.'\'>Ga naar:</a> ");';
    
}
?>