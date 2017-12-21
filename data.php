<?php

    $mysqli = new mysqli('localhost', 'skatelist_nl_skatelist', 'xQN3zWRU9azk', 'skatelist_nl_skatelist');
    if ($mysqli->connect_errno) {
        echo "Sorry, this website is experiencing problems.";
        echo "Error: Failed to make a connection, here is why: \n";
        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        exit;
    }
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
				
                require 'include/function/rating.php';
				
				$output .= '
				<div class="row">
				   <div class="col-sm-6 leftspad">
					   <div onclick="location.href="http//:maps.google.com"  ;" id="hippeDiv" class="panel panel-default ">
						 <div class="panel-body" id="alleen">
						   <div class="row">
							   <center>
								   <p style="text-transform:uppercase;">'.$name.'</p>
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
					   <div class="col-sm-4">
						   <strong>'.$name.'</strong>
						   <p>'.$city.'</p>
					   </div>  
					   <div class="col-sm-4 row-weg">
						   <br/><p>Waardering: '.$rate.'</p>
					   </div>
					   <div class="col-sm-3 row-weg">
						   <br/><p>Data Nummer: '.$id.'</p>
					   </div>  
					   <div class="col-md-1 row-hoog">

					   </div>
				   </div>
				 </div>
				</div>';
				}
        }
include 'include/head.php';
include 'include/menu.php';
?>


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
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="include/js/nav_js.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>
$(".addItem").click(function(){
  $(".listitems").fadeToggle("slow", "linear");
});
</script>