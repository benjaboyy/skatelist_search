<?php

$mysqli = new mysqli('localhost', 'skatelist_nl_skatelist', 'xQN3zWRU9azk', 'skatelist_nl_skatelist');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
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
    

    $pin .= 'var marker = L.marker(['.$location.'], {icon: '.$category.'}).addTo(mymap)
    marker.bindPopup("<b>'.$name.'</b><br>Adres: '.$city.', '.$street.' '.$number.'<br><a href=\'http://skatelist.nl/data.php?id='.$id.'\'>Ga naar:</a> ");';
    
}
?>