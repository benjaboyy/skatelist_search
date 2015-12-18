<?php
    mysql_connect("localhost", "root", "usbw") or die ("Could not connect");
    mysql_select_db("skatelist") or die ("could not select database");
    $output = '';
    //collect
    if(isset($_POST['search'])) {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        
        $query = mysql_query("SELECT * FROM list WHERE plaats LIKE '%$searchq%' OR park LIKE '%$searchq%'") or die("coul not search");
        $count = mysql_num_rows($query);
        if($count == 0){
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
        else {
            while($row = mysql_fetch_array($query)) {
                $plaats = $row['plaats'];
                $park = $row['park'];
                $id = $row['id'];
//                $rate = $row['rate'];
                
                if($row['rate'] == 1){
				$rate = '<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';	
                }
                else if ($row['rate'] == 2){
                    $rate = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
                }
                else if ($row['rate'] == 3){
                    $rate = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
                }
                else if ($row['rate'] == 4){
                    $rate = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>';
                }
                else if ($row['rate'] == 5){
                    $rate = '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                }
                
                $output .= '<div id="hippeDiv" class="panel panel-default">
                              <div class="panel-body" id="alleen">
                                <div class="row row-onder">
                                    <div class="col-sm-4">
                                        <strong>'.$park.'</strong>
                                        <p>'.$plaats.'</p>
                                    </div>  
                                    <div class="col-sm-4 row-weg">
                                        <br/><p>Waardering: '.$rate.'</p>
                                    </div>
                                    <div class="col-sm-3 row-weg">
                                        <br/><p>Data Nummer: '.$id.'</p>
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
           include 'include/search.php';
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