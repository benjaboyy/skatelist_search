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

    $sql = "SELECT * FROM skatepark";
    $result = $mysqli->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $city = $row['city'];
		$street = $row['street'];
		$number = $row['number'];
		$name = $row['name'];
		$id = $row['id'];
		$rate = $row['rate'];


        $output .= '<tr> 
                        <th scope="row">'.$id.'</th> 
                        <td>'.$name.'</td> 
                        <td>'.$city.'</td> 
                        <td>'.$street.' '.$number.'</td> 
                        <td><a class="to-right arrow" ><i class="fa fa-arrow-right primary-color" aria-hidden="true"></i></a></td> 
                    </tr>';
    }
        
   
    include 'include/head.php';
?>


<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
   <div class="container">
       <?php 
           include 'include/search.php';
       ?>
       <div id="hippeDiv" class="panel panel-default">
            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>#</th> 
                        <th>Naam</th> 
                        <th>plaats</th> 
                        <th>Rating</th>
                        <th></th>
                    </tr> 
                </thead> 
                <tbody>
                    <?php print("$output"); ?>
                </tbody> 
              </table>
        </div>
    </div>
    <?php
        include 'include/menu.php';
    ?>
    
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