<?php
    /*
    ** Define a couple of functions for
    ** starting and ending an HTML document
    */
    function startPage()
    {
        print("<html>\n");
        print("<head>\n");
        print("<title>Insturen</title>\n");
        print("</head>\n");
        print("<body>\n");
    }

    function endPage()
    {
        print("</body>\n");
        print("</html>\n");
    }
    /*
    ** test for username/password
    */
    if( ( isset($_SERVER['PHP_AUTH_USER'] ) && ( $_SERVER['PHP_AUTH_USER'] == "skate" ) ) AND
      ( isset($_SERVER['PHP_AUTH_PW'] ) && ( $_SERVER['PHP_AUTH_PW'] == "spots" )) )
    {
        startPage();

        print("<br>\n");

        endPage();
    }
    else
    {
        //Send headers to cause a browser to request
        //username and password from user
        header("WWW-Authenticate: " .
            "Basic realm=\"send data\"");
        header("HTTP/1.0 401 Unauthorized");

        //Show failure text, which browsers usually
        //show only after several failed attempts
        die("This page is protected by HTTP");
    }
    
    include 'include/head.php';
    include 'include/menu.php';

?>

<body>
    <video autoplay loop poster="MVI_5565.webm" id="bgvid">
        <source src="MVI_5565.webm" type="video/webm">
    </video>
   <div class="container">
      <div id="hippeDiv" class="panel panel-default" style="margin-top:50px;">
          <div class="panel-heading">
            <h2 class="panel-title">INSTUREN SPOT</h2>
          </div>
          <div class="panel-body" id="alleen">
              <div class="row">
                <form method="POST" action="include/send.php" id="form" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label class="radio-inline">
                      <input type="radio" name="category" id="category" value="Skatepark"> Skatepark
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="category" id="category2" value="Spot"> Spot
                    </label>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input name="city" type="text" class="form-control" id="city" placeholder="City">
                  </div>
                  <div class="form-group">
                    <label for="street">Street</label>
                    <input name="street" type="text" class="form-control" id="street" placeholder="Street">
                  </div>
                  <div class="form-group">
                    <label for="number">Number</label>
                    <input name="number" type="text" class="form-control" id="number" placeholder="Number">
                  </div>
                  <div class="form-group">
                    <label for="coordinates">Coordinates</label>
                    <input name="coordinates" type="text" class="form-control" id="coordinates" placeholder="Coordinates">
                    <p class="help-block">Example: 51.983336, 5.090009</p>
                  </div>
                  <div class="form-group">
                    <label for="rate">Score-rating 1/10</label>
                    <input name="rate" type="text" class="form-control" id="rate" placeholder="Rate">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" placeholder="Short description" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                        <label for="obstacles">Obstacles</label>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="e">
                            Ramp
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="d">
                            Rail
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="f">
                            Vert
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="g">
                            Spine
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="h">
                            Funbox
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="i">
                            Minicombi
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="n">
                            Stairs
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="objects[]" type="checkbox" value="s">
                            Miniramp
                          </label>
                        </div>
                  </div>
                    <div class="form-group">
                        <label for="allowed">Toegestaan (Indien park!)</label>
                        <div class="checkbox">
                          <label>
                            <input name="allowed[]" type="checkbox" value="u">
                            Skate
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="allowed[]" type="checkbox" value="v">
                            BMX
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="allowed[]" type="checkbox" value="w">
                            Step
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="allowed[]" type="checkbox" value="x">
                            Board
                          </label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="parkimage">Image spot</label>
                    <input name="image" type="file" id="image">
                    <p class="help-block">upload 500x500, only .png</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">Not active
                    </label>
                  </div>
                  <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
       </div>
    </div>
</body>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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