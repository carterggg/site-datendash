<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','datendashllc@gmail.com');
	define('MESSAGE_SUBJECT','Date N Dash LLC Customer Order');
	define('REPLY_TO', 'datendashllc@gmail.com');
	define('FROM_ADDRESS', 'datendashllc@gmail.com');
	define('REDIRECT_URL', 'register.php');
	
	require_once('validation.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Date N Dash: Atlanta Speeding Dating Privacy Policy</title>

    <!-- B.S. Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    
     <!-- Font CSS -->
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
           
<!-- Main Nav Bar -->
                      
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">Date N Dash</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Owners</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                      <li>
                        <a class="page-scroll" href="#portfolio">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faq">FAQ</a>
                    </li>
                </ul>
            </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container-fluid -->
    </nav>


 <!-- Main Content -->  
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Join Our Fun!</h1>
                <hr>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Click Here!</a>
            </div>
        </div>
    </header>
    
    
<!-- Meet the owners Content -->
    <section class="bg-primary owner-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Register Now!</h2>
                    <hr class="light">                   	
                </div>
            </div>      
        </div>
     </section>
                    
					<div class="container">
            			<div class="row">
							<div class="col-xs-1"></div>
                		       <div class="col-xs-12 col-sm-5">
               		       			<br>
               		       			<h3 class="align-center">Tell Us About You:</h3>
               		       				<br>
                		       			<?php include('inc/form3.php'); ?>
                		       			<br><br>
								</div>
                		       	<div class="col-xs-12 col-sm-5">
                		       		<br>
								   	<h3 class="align-center">Pick Your Event:</h3>
								   	<br>
								   	
								   	
							<span class="form-border-style">
							
							   	
								   	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SK5PG4LPHQFXL">
<table>
<tr><td><input type="hidden" name="on0" value="Events">Events</td></tr><tr><td><select name="os0">
	<option value="September's Event">September's Event $20.00 USD</option>
	<option value="October's Event">October's Event $20.00 USD</option>
	<option value="Decembers's Event">Decembers's Event $20.00 USD</option>
</select><br><br> </td></tr>

<tr><td><input type="hidden" name="on1" value="Are you:">Are you:</td></tr><tr><td><select name="os1">
	<option value="Man Seeking Woman?">Man Seeking Woman? </option>
	<option value="Woman Seeking Man?">Woman Seeking Man? </option>
	<option value="Man Seeking Man?">Man Seeking Man? </option>
	<option value="Woman Seeking Woman?">Woman Seeking Woman? </option>
</select><br><br> </td></tr>
<tr><td><input type="hidden" name="on2" value="Full Name:">Full Name:</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">

	<span class="buynow-style align-center">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</span>
</form>
								
								</span>	

								</div>
              		       						
               		       				
                		       			
                		       			    			
                		       		<br><br>
                		       </div>
                		    <div class="col-xs-1"></div>
            			</div>
        			</div>
                    
     <div class="bg-primary">
     	<br>
     </div>           
   


   

   
     
<!-- Footer -->
                 
  <div class="container">
     
	<div class="row">
		<div class="hidden-xs col-sm-1"></div>
		<div class="col-xs-12 col-sm-10">
			<br>	
<!-- Footer Nav -->				
				
				<div class="row">
					<div class="col-xs-12">
						<h1 class="align-center copyright-style">© Copyright 2015 - Date N Dash LLC</h1>
							<br>
					</div>
				</div>	
				
				
		</div>
	   <div class="hidden-xs col-sm-1"></div>
   		
	   		<div class="row">
					<div class="col-xs-12">
						<h1 class="align-center lowerfooter-style"><a href="privacypolicy.html" title="Privacy Policy - Date N Dash LLC">PRIVACY POLICY</a> / <a href="terms.html" title="Privacy Policy - Date N Dash LLC">TERMS & CONDITIONS</a></h1>
							<br>
					</div>
	   		</div>
	</div>

                 
			
           
	</div>                     
    
<!-- End of Website content -->    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
