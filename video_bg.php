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
                $straat = $row['park'];
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
                                        <strong>'.$straat.'</strong>
                                        <p>'.$plaats.'</p>
                                    </div>  
                                    <div class="col-sm-4 row-weg">
                                        <br/><p>Waardering: '.$rate.'</p>
                                    </div>
                                    <div class="col-sm-3 row-weg">
                                        <br/><p>Data Nummer: '.$id.'</p>
                                    </div>  
                                    <div class="col-md-1 row-hoog">
                                        <button type="button" class="btn doorstuur" href="#">
                                            <i class="fa fa-arrow-right"></i>
                                        </button> 
                                    </div>
                                </div>
                              </div>
                            </div>';
            }
        }
    }
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" type="text/css" href="include/css/frame.css">
    <link rel="stylesheet" type="text/css" href="include/main.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
        <script>
            document.createElement('video');
        </script>
    <![endif]-->
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
   <div class="container">
        <div class="child panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">ZOEKEN SPOT</h2>
          </div>
          <div class="panel-body" id="onder">
            <div class="row">
              <form  method="post" action="video_bg.php"  id="searchform">
                <div class="col-md-7">
                    <input type="text" name="search" class="form-control">  
                </div>  
                <div class="col-md-3 col-xs-6">
                    <select id="select-filter" palceholder="Filter" class="form-control">
                        <option value="">Geen filter</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                    </select>
                </div>
                <div class="col-md-2 col-xs-6">
                
                    <button  type="submit" value="Search" class="btn btn-primary breed">
                        <i class="fa fa-search"></i>
                        Zoeken
                    </button>
                </div>
               </form>       
            </div>
          </div>
            
        </div>
       <?php print("$output");?>
    </div>


    
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script>
$(".addItem").click(function(){
  $(".listitems").fadeToggle("slow", "linear");
});
</script>