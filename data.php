<?php

    include 'include/connection.php';
    $output = '';

    //collect
    $ids = $_GET['id'];
    
        
        $sql = "SELECT * FROM skatepark WHERE id='$ids'";
        $result = $mysqli->query($sql);
        if ($result->num_rows === 0){
            $output = '<div id="hippeDiv" class="panel panel-default">
                          <div class="panel-body" id="alleen">
                            <div class="row">
                                <center>
                                    <p>Klopt dit ID wel?</p>
                                </center>
                            </div>
                          </div>
                        </div>';
        }
        else {
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
                $description = $row['description'];
                $last_change = $row['last_change'];
                $available = $row['available'];
                $allowed = $row['allowed'];
				
                require 'include/function/rating.php';
                
                $weatherApiKey = 'c10774db4cea8a44db9198264ba98f96';
                $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.',nl&appid='.$weatherApiKey.' ';
                $json_data = json_decode(file_get_contents($url), true);
                $kelvin = $json_data["main"]["temp"];
                $icon = $json_data["weather"][0]["icon"];
                $celsius = round($kelvin-273.15);
                $wind = $json_data["wind"]["speed"];
                
                if($wind < 12){
                    $windPower = "zwak";
                }elseif($wind < 25){
                    $windPower = "matig";                    
                }elseif($wind < 50){
                    $windPower = "zwaar";                    
                }else {
                    $windPower = "storm";                    
                }
				                
				$output .= '
				<div class="row">
                    <div class="col-sm-6 leftspad">
                       <div onclick="location.href="https//:maps.google.com"  ;" id="hippeDiv" class="panel panel-default ">
                         <div class="panel-body" id="alleen">
                           <div class="row">
                               <center>
                                   <p style="text-transform:uppercase;"><img style="width: 50px; margin-top: -17px; margin-bottom: -10px;" src="https://openweathermap.org/img/wn/'.$icon.'.png"/>'.$celsius.'&#176;</p>
                               </center>
                           </div>
                         </div>
                       </div>
                   </div>
				   <div class="col-sm-6 rightpad">
					   <div id="hippeDiv" class="panel panel-warning">
						 <div class="panel-body" id="alleen">
						   <div class="row">
							   <center>
								   <p style="text-transform:uppercase;">'.$category.'</p>
							   </center>
						   </div>
						 </div>
					   </div>
				   </div>
				</div>
                    <div id="hippeDiv" class="panel panel-default">
                     <div class="panel-body" id="alleen">
                       <div class="row row-onder">
                           <div class="col-sm-6">
                                <p>
                                    <a class="btn btn-primary" role="button" href="https://www.google.com/maps/dir//'.$street.',+'.$city.'/"><i class="fa fa-car"></i> Route in maps</a>
                               </p>
                               <h3 style="margin-top: 0;"><strong>'.$name.' ';
                                if ($available == 1) {
                                    $output .= '<small style="color:red;">Gesloten</small>';
                                }
                                $output .= '</strong></h3>
                                
                               <p>'.$city.' <br/> '.$street.' '.$number.'</p>
                                ';
                                if ($description == null) {
                                    $output .= '<br><p>"Geen beschrijving bij deze locatie"</p>';
                                }else {
                                    $output .= '<h3 style="font-size:16px;"><strong>Beschrijving</strong></h3><p>'.$description.'</p>';
                                }
                                $output .= '
                           </div>  
                           <div class="col-sm-6">
                                <table width="100%">
                                    <tr>
                                        <td width="50%">ID</td><td>: '.$id.'</td>
                                    </tr>
                                    <tr>
                                        <td>Waardering</td><td>: '.$rate.'</td>
                                    </tr>
                                    <tr>
                                        <td>Ondelen</td><td class="iconfont"><strong>:</strong> '.$objects.'</td>
                                    </tr>';
                                    if ($category == 'Skatepark'){
                                        $output .= '
                                        <tr>
                                            <td>Toegang</td><td class="iconfont"><strong>:</strong> '.$allowed.'</td>
                                        </tr>';
                                    }
                                    $output .= '
                                    <tr>
                                        <td>Weer</td><td>: '.$celsius.'&#176; <img style="width: 30px; margin-top: -5px; margin-bottom: -5px;" src="https://openweathermap.org/img/wn/'.$icon.'.png"/></td>
                                    </tr>
                                    <tr>
                                        <td>Wind</td><td>: '.$wind.' m/s <small>('.$windPower.')</small></td>
                                    </tr>
                                    <tr>
                                        <td>Laatste update</td><td>: '.$last_change.'</td>
                                    </tr>
                                </table>                               
                           </div>
                       </div>
                     </div>
                    </div>
                    <div class="col-sm-6 leftspad">
					   <div id="hippeDiv" class="panel panel-warning">
						 <div class="panel-body" id="alleen">
				            <img src="https://skatelist.nl/include/img/parks/'.$id.'.png" style="width:100%;">
						 </div>
					   </div>
				   </div>
				   <div class="col-sm-6 rightpad">
					   <div id="hippeDiv" class="panel panel-warning">
						 <div class="panel-body" id="alleen">
				            <div id="mapid"></div>
						 </div>
					   </div>
				   </div>
                <div style="margin-left: -15px; margin-right: -15px;" class="row hidden-xs">
                ';
                $pos = strpos($objects, 'f');
                if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#CC3286 !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Vertical ramp</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'g');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#6d32cc !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Spine</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'h');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#3285cc !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Fun box</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'n');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#32ccae !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Stairs</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'e');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#61c136 !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Ramp</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'i');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#cca332 !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Mimicombi</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 'd');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#cc6132 !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Rail</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $pos = strpos($objects, 's');
                 if ($pos !== false) {
                    $output .= '
                        <div class="col-sm-4 col-md-3">
                          <div id="hippeDiv" class="panel panel-default ">
                             <div class="panel-body" style="background-color:#cc3232 !important;" id="alleen">
                               <div class="row">
                                    <p style="color:white; text-transform:uppercase;">Mini ramp</p>
                               </div>
                             </div>
                           </div>
                        </div>';
                 }
                 $output  .='
                 </div>
                 <div class="row">
				   
				</div>';
				}
        }
include 'include/head.php';
include 'include/menu.php';
?>
<link rel="stylesheet" href="include/maps/leaflet.css" />
<style>#mapid { height: 350px; }</style>

<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
   <div class="container">
       <?php 
           include 'include/search.php';
           print("$output");
       ?>
    </div>
    
</body>
<script src="include/maps/leaflet.js"></script>
<script>
    var mymap = L.map('mapid').setView([<?php print("$location"); ?>], 15);
    
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
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
    
    
    var marker = L.marker([<?php print("$location"); ?>], {icon: <?php print("$category"); ?>}).addTo(mymap)
    marker.bindPopup("<p>TEST</p>");
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="include/js/nav_js.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>
$(".addItem").click(function(){
  $(".listitems").fadeToggle("slow", "linear");
});
</script>