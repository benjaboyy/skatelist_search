<?php

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

$mysqli = new mysqli('localhost', 'skatelist_nl_skatelist', 'xQN3zWRU9azk', 'skatelist_nl_skatelist');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
$output = '';    

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

    $output .= '<marker id="'.$id.'" name="'.$name.'" street="'.$street.'" number="'.$number.'" rate="'.$rate.'" category="'.$category.'" objects="'.$objects.'" />';
}

header("Content-type: text/xml");
echo "<?xml version='1.0' ?>";
echo '<markers>';
print("$output");
echo '</markers>';


?>