
<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','datendashllc@gmail.com');
	define('MESSAGE_SUBJECT','Date N Dash LLC Website Email Host An Event');
	define('REPLY_TO', 'datendashllc@gmail.com');
	define('FROM_ADDRESS', 'datendashllc@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Atlanta Speed Dating, Date N Dash. We are committed to providing world class service to singles through enjoyable dating by engaging them in fast pace and high energy speed dating events and mixers!">
	<meta name="keywords" content="speeddating, speed dating, atlanta speed dating, speed dating atlanta, atlanta dating, dating atlanta, date n dash, date, single, speed dating event, mixers, dating events"/>
	<meta name="author" content="Carter Guthrie carterguthrie.com">

    <title>Date N Dash: Speed Dating: Host Event</title>

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
                        <a class="page-scroll" href="theowners.html">Owners</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Contact Us</a>
                    </li>
                      <li>
                        <a class="page-scroll" href="register.html">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="events.html">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">FAQ</a>
                    </li>
                </ul>
            </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container-fluid -->
    </nav>


 <!-- Main Content -->  
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Love Our Events?</h1>
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
                    <h2 class="section-heading">Host An Event!</h2>
                    <hr class="light">                   	
                </div>
            </div>      
        </div>
     </section>
                    
					<div class="container">
            			<div class="row">
							<div class="col-xs-1"></div>
                		       <div class="col-xs-10">
               		       			<br>
                		       		<?php include('inc/form2.php'); ?>
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
