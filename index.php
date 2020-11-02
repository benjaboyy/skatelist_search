<?php
    
    include 'include/connection.php';
    $output = '';
	$space = 1;
    
    //collect
    if(isset($_POST['search'])) {
        
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        if ($_POST['select-filter'] == 'park') {
            $sql = "SELECT * FROM skatepark WHERE (city LIKE '%$searchq%' OR name LIKE '%$searchq%') AND category = 'Skatepark'";
        } elseif ($_POST['select-filter'] == 'spot') {
            $sql = "SELECT * FROM skatepark WHERE (city LIKE '%$searchq%' OR name LIKE '%$searchq%') AND category = 'Spot'";
        } else {
            $sql = "SELECT * FROM skatepark WHERE city LIKE '%$searchq%' OR name LIKE '%$searchq%'";
        }
        $result = $mysqli->query($sql);
        $space = 0;
		
        if ($result->num_rows === 0){
            $output = '<div id="hippeDiv" class="panel panel-default">
                          <div class="panel-body" id="alleen">
                            <div class="row">
                                <center>
                                    <p>Er zijn geen spots gevonden</p>
                                </center>
                            </div>
                          </div>
                        </div>';
        }
        elseif ($searchq == null){
            $output = '<div id="hippeDiv" class="panel panel-default">
                          <div class="panel-body" id="alleen">
                            <div class="row">
                                <center>
                                    <p>Zoek op naam of adres... </p>
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
                $objects = $row['objects'];
                
				require 'include/function/rating.php';
				
                
                
                $output .= '<div style="background-image: url(\'https://skatelist.nl/include/img/parks/'.$id.'.png\'); background-size: cover; background-position: center;" id="hippeDiv" class="panel panel-default">
                              <div class="panel-body" id="alleen">
                                <div class="row row-onder resultaat">
                                    <div class="col-sm-4">
                                        <strong>'.$name.'</strong>
                                        <p>'.$city.'</p>
                                    </div>  
                                    <div class="col-sm-4 row-weg">
                                        <br/>
                                        <p style="margin: 0 0 1 0;">Rating: '.$rate.'</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="hidden-sm">Bevat:</span> <span class="iconfont hidden-sm" style="font-size:14px; color:#262626;">'.$objects.'</span>
                                        <p>SpotID: '.$id.'</p>
                                    </div>  
                                    <div class="col-md-1 row-hoog">
                                        <a type="button" class="btn btn-primary doorstuur" href="data.php?id='.$id.'" >
                                            <center>
                                                <i class="fa fa-arrow-right"></i>
                                            </center>
                                        </a> 
                                    </div>
                                </div>
                              </div>
                            </div>';
            }
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
           require 'include/search.php';
           print("$output");
       ?>
    </div>
</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>
    $(".addItem").click(function(){
      $(".listitems").fadeToggle("slow", "linear");
    });
</script>
<script>
    $("a#toggle").on('click', function(e) {
      $('body').toggleClass('js-open');
      $('nav').toggleClass('js-open');
      e.preventDefault();
    });

    $(".nav-background").on('click', function() {
      $('body, nav').removeClass('js-open');
    });
</script>