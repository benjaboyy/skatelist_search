<?php    
    $json = file_get_contents($jsonurl);

    $weathers = json_decode($json);
    $kelvin = $weathers->main->temp;
    $celcius = $kelvin - 273.15;
    $weer = $weathers->weather[0]->icon;

    if ($celcius > 20) {
        $termo = "fa-thermometer-full";
    } elseif ($celcius > 10) {
        $termo = "fa-thermometer-three-quarters";
    } elseif ($celcius > 0) {
        $termo = "fa-thermometer-half";
    } else {
        $termo = "fa-thermometer-quarter";
    }


    if ($weer == "01d") {
        $weericon = "fa-sun-o";
        $weertext = "Zonnig";
    } elseif ($weer == "02d") {
        $weericon = "fa-cloud";
        $Weertext = "Licht bewolkt";
    } elseif ($weer == "03d") {
        $weericon = "fa-cloud";
        $Weertext = "Bewolkt";
    } elseif ($weer == "04d") {
        $weericon = "fa-cloud";
        $Weertext = "Zwaar bewolkt";
    } elseif ($weer == "09d") {
        $weericon = "fa-tint";
        $Weertext = "Zware regen";
    } elseif ($weer == "10d") {
        $weericon = "fa-tint";
        $Weertext = "Regen";
    } elseif ($weer == "11d") {
        $weericon = "fa-bolt";
        $Weertext = "Bilksem";
    } elseif ($weer == "13d") {
        $weericon = "fa-snowflake-o";
        $Weertext = "Sneeuw";
    } elseif ($weer == "50d") {
        $weericon = "fa-bars";
        $Weertext = "Mist";
    } elseif ($weer == "01n") {
        $weericon = "fa-sun-o";
        $weertext = "Zonnig";
    } elseif ($weer == "02n") {
        $weericon = "fa-cloud";
        $Weertext = "Licht bewolkt";
    } elseif ($weer == "03n") {
        $weericon = "fa-cloud";
        $Weertext = "Bewolkt";
    } elseif ($weer == "04n") {
        $weericon = "fa-cloud";
        $Weertext = "Zwaar bewolkt";
    } elseif ($weer == "09n") {
        $weericon = "fa-tint";
        $Weertext = "Zware regen";
    } elseif ($weer == "10n") {
        $weericon = "fa-tint";
        $Weertext = "Regen";
    } elseif ($weer == "11n") {
        $weericon = "fa-bolt";
        $Weertext = "Bilksem";
    } elseif ($weer == "13n") {
        $weericon = "fa-snowflake-o";
        $Weertext = "Sneeuw";
    } elseif ($weer == "50n") {
        $weericon = "fa-bars";
        $Weertext = "Mist";
    } 
?>