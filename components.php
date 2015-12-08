<head>
    <link rel="stylesheet" type="text/css" href="include/css/frame.css">
    <link rel="stylesheet" type="text/css" href="include/main.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">ZOEKEN SPOT</h2>
          </div>
          <div class="panel-body" id="onder">
            <div class="row">
                <div class="col-md-7">
                    <input type="text" id="zoek" class="form-control">  
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
                    <button type="button" class="btn btn-primary breed" href="#">
                        <i class="fa fa-search"></i>
                        Zoeken
                    </button>
                </div>
            </div>
          </div>
        </div>
        
        <div id="hippeDiv" class="panel panel-default">
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
                    <a type="button" class="btn btn-primary doorstuur" href="lijst.php?id='.$id.'" >
                        <i class="fa fa-arrow-right"></i>
                    </a> 
                </div>
            </div>
          </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 leftspad">
                <div onclick="location.href='http//:maps.google.com';" id="hippeDiv" class="panel panel-default ">
                  <div class="panel-body" id="alleen">
                    <div class="row">
                        <center>
                            <p>BEKIJKEN OP MAPS</p>
                        </center>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 rightpad">
                <div id="hippeDiv" class="panel panel-default">
                  <div class="panel-body" id="alleen">
                    <div class="row">
                        <center>
                            <p>DELEN MET VRIENDEN</p>
                        </center>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div id="hippeDiv" class="panel panel-default">
          <div class="panel-body" id="alleen">
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
                    <tr> 
                        <th scope="row">1</th> 
                        <td>Mark</td> 
                        <td>Otto</td> 
                        <td>@mdo</td> 
                    </tr> 
                </tbody> 
              </table>
          </div>
        </div>
        
    </div>
</body>