<?php
	
include 'include/head.php';
include 'include/menu.php';
?>

<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
    <div class="container">
        <div class="child panel panel-default">
          <div class="panel-body" id="onder">
            <div class="row">
                <div class="col-sm-6"><h1>Riders</h1></div>  
                <div class="col-sm-6">
                    <form style="float:right!important;" class="navbar-form navbar-left" method="post" action="index.php" id="searchform">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button style="min-height: 52px;" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>  
            </div>
            <div class="row">
                <div style="margin-bottom:15px;" class="col-sm-6">
                    <a href="#">
                      <img width="100%" class="media-object" src="include/img/benjamin-rider.jpg">
                    </a><br/><h4>Benjamin Vitters</h4>
                </div>
                <div style="margin-bottom:15px;" class="col-sm-6">
                    <a href="#">
                      <img width="100%" class="media-object" src="include/img/cas-rider.jpg">
                    </a><br/><h4>Cas Kooreman</h4>
                </div>
            </div>
          </div>
        </div>
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