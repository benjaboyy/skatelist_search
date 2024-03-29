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
	$space = 1;
    
    //collect
    if(isset($_POST['search'])) {
        
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        if ($_POST['select-filter'] == 'park')) {
            $sql = "SELECT * FROM skatepark WHERE city LIKE '%$searchq%' OR name LIKE '%$searchq%' AND category IS park";
        } elseif ($_POST['select-filter'] == 'spot')) {
            $sql = "SELECT * FROM skatepark WHERE city LIKE '%$searchq%' OR name LIKE '%$searchq%' AND category IS spot";
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
                                    <p>We kunnen niet gaan zoeken op lege woorden... </p>
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
				
                
                
                $output .= '<div id="hippeDiv" class="panel panel-default">
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
                                        Bevat: <span class="iconfont hidden-sm" style="font-size:14px; color:#4d4d4d;">'.$objects.'</span>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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