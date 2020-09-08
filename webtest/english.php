<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>
            Keysafemanager
        </title>
        <!--favicon-->
        <link rel="icon" href="img/logo2.png" type="image/gif" sizes="16x16" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--stylesheet connections-->
        <link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/aos.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body data-spy="scroll" id="style-1" data-offset="10">
		<?php
			require 'php/form.php';
		?>
		<!--
			* =================================	
			* page header						                            
			* =================================	
		-->
        <div class="parallax jumbotron" id="section1">
            <div class="scrolldown">
                <a href="#home">
                    <i class="glyphicon glyphicon-menu-down" id="buttondown"></i>
                </a>
            </div>
        </div><!--end page header-->
		<!--
			* =================================	
			* navbar                                                            
			* =================================	
		-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
		<!--
			* =================================	
			* navbar header						                        
			* =================================
		-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#section1">
                        <img src="img/logo3.png" alt="navbar logo" class="navbarlogo" />
                        Keysafemanager
                    </a>
                </div><!--end navbar header-->
		<!--
			* =================================
			* navbar body						                            
			* =================================	
		-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    		<li>
                            <a href="#home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#binnenunit"> 
                                Inside unit
                            </a>
                        </li>
                        <li>
                            <a href="#buitenunit"> 
                                Outside unit
                            </a>
                        </li>
                        <li>
                            <a href="#demo"> 
                                Demo
                            </a>
                        </li>
                        <li>
                            <a href="#behuizing"> 
                                Housing
                            </a>
                        </li>
                        <li>
                            <a href="#dealers"> 
                                Dealers
                            </a>
                        </li>
                        <li>
                            <a href="#contact">
                                Contact
                            </a>
                        </li>
                        <li class="nav-lang">
                            <a href="#" class="short">
								<i class="glyphicon glyphicon-globe"></i>
							</a>
                        </li>
                        <li>
                            <a href="index.php" class="short">
								NL
							</a>
                        </li>
                        <li>
                            <a href="#" class="short">
								EN
							</a>
                        </li>
                    </ul>
                </div><!--end navbar body-->

            </div><!--end container fluid-->
        </nav><!--end navbar-->
		<!--
			* =================================	
			* page body							                           
			* =================================	
		-->
        <div class="container-fluid bordertop" id="section1">
            <div class="col-sm-0 col-md-2 col-lg-2"></div>
	            <div class="card col-sm-12 col-md-8 col-lg-8">
	            <div id="home" style="width:0;"></div>
		<!--
			* =================================	
			* home								                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12 home" data-aos="fade-in">
                        <div class="page-header">
                            <h1>
								Keysafemanager
							</h1>
                        </div>
                        <h3>
							<b class="col-sm-12 col-md-12 col-lg-12">
								Manage the intake and distribution of your and your customers keys digitally through Keysafemanager
							</b>
						</h3><br />
						<br />
                        <p class="col-sm-8 col-md-8 col-lg-8">	
                            Keysafemanager is a patented system for the intake and distribution of keys<br />
	                        	<br />
	                        	Through a 7-digit code, which is provided to your customer in advance, it is possible to distribute and take in keys without intervention
	                        	of one of your employees.<br />
	                        	<br />
	                        	Keysafemanager is particularly suitable for rental companies, garage companies, hotels, B&B’s, holiday accommodations, offices and schools.
	                        	In short Keysafemanager is suitable at all places where
	                        	u want to take in and distribute keys.
                        </p>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                				<img src="img/sleutelgevenhoog.png" style="position: relative; left: 60px; bottom: 20px; width: 80%; float: right;" class="homeimg" />
               			</div>
                    </div><!--end home-->
                </div><!--end row-->
                <div id="binnenunit" style="bottom: 0;"></div>
		<!--
			* =================================	
			* binnenunit						                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12" data-aos="fade-in">
                        <div class="page-header">
                            <h1>
								Inside unit
							</h1>
                        </div>
                        <h3>
							<b class="col-sm-12 col-md-12 col-lg-12">
								Keysafemanager inside unit for distribution, take in and management of keys
							</b>
						</h3><br />
						<br />
                        <div class="col-sm-12 col-md-6 col-lg-4 imgside1">
                        		<img src="img/Keysafemanager-Binnenunit.png" height="600px" />
                        </div>
                        <p class="col-sm-12 col-md-6 col-lg-8">
                            <b>
								Management
							</b><br />
                            The inside unit has 8 electronic locks which can suspended and locked.<br />
							For the input of the information associated with the key you can use the input screen of the touch monitor, but an API is also available
                            to connect Keysafemanager to your own management software.<br />
                            <br />
							<b>
								Distribution of keys
							</b><br />
                            Keysafemanager generates a 7-digit code which enables your customer to receive the corresponding key.<br />
							Your customer can use this code only once. The date and time within which the code has to be used is adjustable.<br />
							In case of power breakdown the code will be stored in the memory.<br />
                            <br />
                            <b>
								Take in of keys
							</b><br />
                            Before returning or leaving a key your customer again receives a 7-digit code with which the key can be placed in Keysafemanager.<br />
							To be sure that the right key(s) are returned the take in of keys is recorded by HD camera.<br />
                            <br />
							For installation of the inside unit a montage kit is supplied. It is also possible to have the installation done by us.
                        </p>
						<div class="panel-group">
						    <div class="panel panel-default">
						    	<div class="panel-heading">
							        <h4 class="panel-title">
										<a data-toggle="collapse" data-target="#collapse1">
											Specificaties 
											<i class="glyphicon glyphicon-triangle-bottom"></i>
										</a>
							    	</h4>
						    	</div>
								<div id="collapse1" class="panel-collapse collapse">
									<ul class="list-group">
										<li class="list-group-item">
											<span class="col-sm-12 col-md-4 col-lg-4">Height: 740 mm</span>
											<span class="col-xs-12 col-sm-12 col-md-4 col-lg-4">Width: 410 mm</span>
											<span>Depth: 210 mm</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
                    </div><!--end binnenunit-->
                </div><!--end row-->
                <div id="buitenunit" style="bottom: 0;"></div>
		<!--
			* =================================	
			* buitenunit						                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12" data-aos="fade-in">
                        <div class="page-header">
                            <h1>
								Outside unit
							</h1>
                        </div>
                        <h3>
							<b class="col-sm-12 col-md-12 col-lg-12">
								Keysafemanager outside unit for receipt and return of keys
							</b>
						</h3><br />
						<br />
                        <div class="col-sm-12 col-md-6 col-lg-4 imgside1">
                        		<img src="img/Keysafemanager-Buitenunit-kleuren.gif" height="500px" />
                        </div>
                        <p class="col-sm-12 col-md-6 col-lg-8">	
                        		The outside unit is waterproof and consists of solid, high quality, brushed stainless steel and is
                            also equipped with LED light so even in the evening and night the outside unit is visible at your building.<br />
                            <br />
                            The outside unit is divided into three parts:<br />
                        </p>
                        <div class="col-sm-12 col-md-6 col-lg-8 indent">
                            <b>The upper part</b> is equipped with an illuminated keypad or, optionally, a touchscreen for the input of distribution and take in codes.<br />
                            <br />
                            <b>The middle part</b> is equipped with a drawer in which the customer can return his or her key.
                            Once the 7-digit code is entered the drawer will open automatically, the customer places the key in the drawer and close the drawer.
                            The key will be forwarded automatically to the inside unit.<br />
                            <br />
                            <b>The lower part</b> is the distribution box which has a glass-like seal flap.
                            Once the 7-digit distribution code is entered and verified the inside unit will release the key which will be dropped into the distribution box.
                            Thereafter the customer can open the seal flap and take out the key.<br />
                            <br />
                            For installation of the outside unit a montage kit is supplied. It is also possible to have the installation done by us.
                        </div>
						<div class="panel-group">
						    <div class="panel panel-default">
						    	<div class="panel-heading">
							        <h4 class="panel-title">
							        		<a data-toggle="collapse" data-target="#collapse2">Specifications <i class="glyphicon glyphicon-triangle-bottom"></i></a>
							    	</h4>
						    	</div>
						    	<div id="collapse2" class="panel-collapse collapse">
									<ul class="list-group">
										<li class="list-group-item">
											<span class="col-sm-12 col-md-4 col-lg-4">Height: 500 mm</span>
											<span class="col-xs-12 col-sm-12 col-md-4 col-lg-4">Width: 284 mm</span>
											<span>Depth: 331,5 mm</span>
										</li>
									</ul>
						      </div>
						    </div>
						</div>
                    </div><!--end buitenunit-->
                </div><!--end row-->
                <div id="demo" style="bottom: 0;"></div>
		<!--
			* =================================
			* demo								                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h1>Demo</h1>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                           <iframe width="1120" height="630" src="https://www.youtube.com/embed/LTVZM0y63eo?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div><!--end demo-->
                </div><!--end row-->
                <div id="behuizing" style="bottom: 0;"></div>
		<!--
			* =================================	
			* vrijstaande betonnen behuizing              	
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h1>Freestanding concrete housing</h1>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                            <iframe width="1120" height="630" src="https://www.youtube.com/embed/eNBVpqrLdec?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div><!--end behuizing-->
                </div><!--end row-->
                <div id="dealers" style="bottom: 0;"></div>
		<!--
			* =================================	
			* dealers							                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h1>Dealers</h1>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" data-target="#dealer1">Netherlands</a>
                                    </h4>
                                  </div>
                                  <div id="dealer1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    	<div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul class="col-sm-6 col-md-6 col-lg-6">
                                                <li><b>BK Brandkasten</b></li>
                                                <li>Staalweg 14 4104 AT</li>
                                                <li>Culemborg Netherlands</li>
                                            </ul>
                                            <ul class="col-sm-6 col-md-6 col-lg-6">
                                                <li><i class="glyphicon glyphicon-earphone"></i> 0345 – 523 229</li>
                                                <li><i class="glyphicon glyphicon-envelope"></i> info@bkbrandkasten.nl</li>
                                                <li><i class="glyphicon glyphicon-globe"></i> <a href="http://www.bkbrandkasten.nl/" target="_blank">http://www.bkbrandkasten.nl/</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" data-target="#dealer2">Belgium / Luxemburg</a>
                                    </h4>
                                  </div>
                                  <div id="dealer2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    	<div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul class="col-sm-6 col-md-6 col-lg-6">
                                                <li><b>Cleverlocker</b></li>
                                                <li>Dikberd 34 5C2 2200</li>
                                                <li>Herentals Belgium</li>
                                            </ul>
                                            <ul class="col-sm-6 col-md-6 col-lg-6">
                                            	<li><i class="glyphicon glyphicon-earphone"></i> +32 (0) 14 70 50 51</li>
                                                <li><i class="glyphicon glyphicon-envelope"></i> info@cleverlocker.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div><!--end dealers-->
                </div><!--end row-->
                <div id="contact" style="bottom: 0;"></div>
		<!--
			* =================================	
			* contact							                                
			* =================================	
		-->
                <div class="row">
                    <div class="article col-sm-12 col-md-12 col-lg-12 contact">
                        <div class="page-header">
                            <h1>Contact</h1>
                        </div>
                        <div class="contact1 col-sm-12 col-md-6 col-lg-6">
                            <h2>
                            	Correspondence address
                            </h2><br />
                            <p>
                            	P.O. box 333<br />
                                2740 AH Waddinxveen<br />
                                info@24rental.com<br />
                            	085 732 55 24<br />
                                <br />
                               We invite you to visit our office and showroom.
                            </p><br />
                            <h2>
                                Visiting address
                            </h2><br />
                           	<p>Hanzeweg 12A<br />
                            2803MC Gouda<br />
                            <br />
                            Monday - Friday 8:30 a.m. to 5:00 p.m.<br />
                            <br />
                            <br />
                            Keysafemanager&copy; is a product of 24Rental B.V.
                        </div>
                        <div class="contact2 col-sm-12 col-md-6 col-lg-6">
                            <h2>Send us a message:</h2>
                              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                              
                                <div class="form-group">
                                  <input type="text" class="form-control" id="name" placeholder="Your name (required)" name="name" value="<?php echo $name;?>"><span class="error"><?php echo $nameErr; ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <input type="text" class="form-control" id="company" placeholder="Company" name="company" value="<?php echo $company;?>">
                                </div>
                                
                                <div class="form-group">
                                  <input type="text" class="form-control" id="phone" placeholder="phone number" name="phone" value="<?php echo $phone;?>">
                                </div>
                                
                                <div class="form-group">
                                  <input type="text" class="form-control" id="email" placeholder="Your e-mail (required)" name="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr; ?></span>
                                </div>
                                
                                <div class="form-group">
                                  <input type="onderwerp" class="form-control" id="subject" placeholder="Subject (required)" name="subject" value="<?php echo $subject;?>"><span class="error"><?php echo $subjectErr; ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" id="comment" placeholder="Message" style="resize:vertical;"><?php echo $comment;?></textarea>
                                </div>
                                
                                <input type="submit" value="Send" class="btn btn-default" />
                                
                              </form>
                              <?php 
							  	$to = "test@email.com";
								$subject = "$subject";
								$txt = "$comment";
								$headers = "From: $email" . "\r\n" .
								"CC:";

								mail($to,$subject,$txt,$headers);
							  
							  ?> 
                        </div>
                        <div class="map col-sm-12 col-md-12 col-lg-12">
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2454.9549237738242!2d4.678633518493167!3d52.02591885740682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d142e219c011%3A0xd4e4eeb9e0b88464!2sHanzeweg+12A%2C+2803+MC+Gouda!5e0!3m2!1snl!2snl!4v1511530911387" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div><!--end contact-->
                </div><!--end row-->
                
            </div><!--end card-->
            <div class="col-sm-0 col-md-2 col-lg-2"></div>
        </div><!--end container fluid-->
		<!--
			* =================================	
			* footer							                                    
			* =================================	
		-->
        <div class="footer">
            <div class="col-sm-0 col-md-2 col-lg-2"></div>

            <ul class="navigation col-sm-10 col-md-8 col-lg-8">
                <li class="noborder">
                    <a href="#home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#binnenunit"> 
                        Inside unit
                    </a>
                </li>
                <li>
                    <a href="#buitenunit">
                        Outside unit
                    </a>
                </li>
                <li>
                    <a href="#demo">
                        Demo
                    </a>
                </li>
                <li>
                    <a href="#behuizing">
                        Housing
                    </a>
                </li>
                <li>
                    <a href="#dealers">
                        Dealers
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>
            </ul>
			<ul class="language col-sm-1 col-md-1 col-lg-1">
            	<li><i class="glyphicon glyphicon-globe"></i></li>
            	<li>
                	<a href="index.php">NL</a>
                </li>
                <li>
                	EN
                </li>
            </ul>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <a href="#section1" class="buttonup" title="click to scroll up">
                    <i class="glyphicon glyphicon-menu-up"></i>
                </a> 
            </div>
        </div><!--end footer-->
        
        <!--script connections-->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/script.js"></script>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                        scrollTop: $(hash).offset().top
                        }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                        });
                    } // End if
                });
            });

            $(document).ready(function () {
                if (!$.browser.webkit) {
                    $('.wrapper').html('');
                }
            });
			
			AOS.init();
        </script>
        
    </body>
</html>