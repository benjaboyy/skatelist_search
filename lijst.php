<?php
    mysql_connect("localhost", "root", "usbw") or die ("Could not connect");
    mysql_select_db("skatelist") or die ("could not select database");
    
        
        $query = mysql_query("SELECT * FROM list") or die("coul not search");
        $count = mysql_num_rows($query);
        $output = "";
        while($row = mysql_fetch_array($query)) {
            $plaats = $row['plaats'];
            $park = $row['park'];
            $id = $row['id'];
            $straat = $row['straat'];
            $rate = $row['rate'];


            $output .= '<tr> 
                            <th scope="row">'.$id.'</th> 
                            <td>'.$park.'</td> 
                            <td>'.$straat.'</td> 
                            <td>'.$rate.'</td> 
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
                        <th>First Name</th> 
                        <th>Last Name</th> 
                        <th>Username</th> 
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