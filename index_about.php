<!DOCTYPE HTML>

<?php
require_once 'include.php';
   
	$conn = dbConnect();
        session_start();

?>
<html>
	<head>
		<title>Emphasis</title> 
<!-- Hotjar Tracking Code for emphasis.core.ubc.ca -->

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/modernizr-2.6.2.min.js"></script>  
                <script src="js/mootools-core-1.3.2.js"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>               
                <noscript>
                        
                        
                <link rel="stylesheet" href="css/skel.css" />
                <link rel="stylesheet" href="css/style.css" />
                <link rel="stylesheet" href="css/style-wide.css" />
                <link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
                
                <link rel="stylesheet" href="css/bootstrap_style.css" /> 
                <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css"/>
                <link rel="stylesheet" href="css/custom.css" />
                <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
                <link rel="icon" href="images/favicon.ico" type="image/x-icon">
                 
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEAh2dym0RJDX-EMbxiX5CMS2D4s0BDuw&sensor=true">
    </script>
    <script src="js/multiloc.js" type="text/javascript"></script>
        <script src="js/emph.js" type="text/javascript"></script>
	</head>
	<body >


		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<a href="/"><h1 id="logo">EmPhAsIS</h1></a>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>

                                                         <li><a href="#knowledge">Info</a></li>
							<li><a href="#team" class="team_id">Team</a></li>
							<li><a href="#oneshade">What It Is</a></li>
                                                        <li><a href="#twoshade">Why Important</a></li>							
							<li><a href="#contact">Contact</a></li>
                                                      
                                                        <li><a href="https://twitter.com/maryadevera" class="icon fa-twitter"></a></li>
                                                       
						</ul>
					</nav>                           


						
					
                                        </header>
		
		<!-- Intro -->
			<section id="intro" class="main style1  fullscreen">
				<div class="content container small">
					<header>
                                            <div ><a class="ubc"  href="#"><img src="images/logo_ubcBlack.png" > </a></div><h2><u>EmPhAsIS</u></h2>
					</header>
                                    <p><u>E</u>mpowering <u>Ph</u>armacists in <u>A</u>sthma management through <u>I</u>nteractive <u>S</u>MS.
                                            </p>
					<footer>
						<a href="#oneshade" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
               <!-- Team -->
<?php
include_once("about.html");
?>

		
				<!-- One -->
			<section id="oneshade" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What is EmPhAsIS?</h2>
					</header> 
                                    <div id="box">
					
                                            
                                            EmPhAsIS is the abbreviation for Empowering Pharmacists in Asthma management through Interactive SMS.   
    <p>The EmPhAsIS trial focuses on a simple intervention of education and enhanced involvement of community pharmacists in asthma management through centralized short message service (SMS) to asthma patients. Over the 1-year trial, we will study whether this intervention:
      <h4 id="link" class="hover_effect">More Info...

  <div id="steps">          

      <ul class="default">
            <li>Leads to better adherence to asthma inhalers
            <li>Leads to better patient outcomes
            <li>Is cost-effective
      </ul>
     
    </div>
     </h4>
</div>
                                </div>
				<a href="#twoshade" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="twoshade" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Why is it important? </h2>
					</header>
                                    <p>Over 3 million Canadians of all ages suffer from asthma. Symptoms include shortness of breath, tightness of the chest, coughing, and wheezing. When these symptoms are not controlled, they often lead to frequent doctor visits, hospitalizations, absence from school or work, and reduced quality of life.
<p>Currently, there is no cure for asthma. However, there are treatments that can help patients lead symptom free lives. Because following these treatments or being adherent is important, we are conducting research with community pharmacists to help support and educate patients on taking their asthma medications.
</div>
				<a href="#knowledge" class="button style2 down anchored ">Next</a>
			</section>
                 
                 				<!-- Portfolio -->
		 
        <!-- work -->
            <section id="knowledge" class="main style3 primary dark fullscreen">
                    <div class="content box  knowledge">
                            <header>
                                    <h2>Information</h2>
                            </header>
                                                                    
    <div class="bootstrap_style">
<div class="content container ">
       <div class="row">
      <div class="col-sm-4 col-md-4">

         <a  class="round-button" href="cinfo/patients"> 
            <div class="well well-cm" >
           <h2 class="">Patients <br><i class="fa fa-1x fa-male "></i></h2>

           
        </div></a>
            <!-- Modal -->
<div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">For Patients</h4>
      </div>
      <div class="modal-body">
        Information resources for patients coming soon
      </div>
      
    </div>
  </div>
</div>
      </div>
      <div class="col-sm-4 col-md-4">
          <a href="#" class="round-button" data-toggle="modal" data-target="#pharmacistsModal">
        <div class="well well-cm">
        <h2 class="">Pharmacists <br><i class="fa fa-1x fa-plus-square "></i></h2>

        </div></a>
                      <!-- Modal -->
<div class="modal fade" id="pharmacistsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">For Pharmacists</h4>
      </div>
      <div class="modal-body">
          <form class="form-inline" method="post">
          
    <div class="form-group" style="padding:5px;">
        <label for="name">Location Number </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="phar987">
        <input type="hidden" name="phar" value="true">
    </div>

    <button type="submit" class="btn btn-primary btn-phloc">Login</button>
</form>
        <!--Information resources for pharmacists coming soon-->
      </div>
      
    </div>
  </div>
</div>
      </div>
           
      <div class="col-sm-4 col-md-4">
          <a href="#pub" class="pub_id round-button" >
        <div class="well well-cm">
        <h2 class="">Publications<br><i class="fa fa-1x fa-book "></i></h2>

        </div></a>

      </div>

   <div class="col-sm-4 col-md-4">
        <div  class="well well-cm">
            <a href="#locations" class="locations_id round-button active">
        <h2 class="">Locations<br><i class="fa fa-1x fa-map-marker "></i></h2>

        </div></a>
      </div>
       <!--section fund-->
          <div class="col-sm-4 col-md-4">
        <div  class="well well-cm"> 
            <a href="#fund" class="fund_id round-button active">
        <h2 class="">Funders<br><i class="fa fa-1x fa-dollar "></i></h2>

        </div></a>
      </div>
           <!--section fund-->
<div class="col-sm-4 col-md-4">
          <a href="#team" class="team_id round-button" data-toggle="modal" data-target="#">
        <div class="well well-cm">
        <h2 class="">Team<br><i class="fa fa-1x fa-group "></i></h2>

        </div></a>

      </div>

 </div>

</div><!-- end container-->
 <footer>
   <a href="#fund" class="button style2 down  anchored">Next</a>

                                        </footer>
 
</div> <!-- end bootstrap style-->

        
</section>
        <!-- Portfolio -->
<!-- Locations --> 
        <section id="locations" class="main style3 primary">
                            <div class="content container locations">
                                <div >
                                <header>
                                    <h2>Pharmacy Locations</h2> running Emphasis Study
                                    <!-- locations control multiloc.js-->
                                    <div style="font-size:11px">zoom in, click on the map and move it within the window</div>
                                </header>
                                    <div class="map_canvas" id="map_canvas"><img src="/images/ajax-loader.gif" /></div>
                                    <div class="bootstrap_style legend">
                                        <div class="jumbotron">
                                                <p style="text-decoration:underline">Legend</p>
                                        <p>
                                           Enrolled with program <span class="badge" style="background-color:#FE7569">&nbsp;&nbsp;</span>
                                            <br>Actively recruiting <span class="badge" style="background-color:#E7F70E">&nbsp;&nbsp;</span>
                                            <br>Have patients <span class="badge" style="background-color:#0000ff">&nbsp;&nbsp;</span>
                                        <p> - zoom out to see more locations
                                         </div>
                                      
                                    
                                    </div>  
                                         
                                     
                                </div>
                              </div> 
                                
                           <footer>
                                            <a href="#contact" class="button style2 down anchored">Next</a>
                                        </footer>
			</section>
<!-- Fund -->
<section id="fund" class="main style1 fullscreen">
    <div class="content container fund">
            <div >
<header>
    <h2>Our Funders</h2>
</header>
    <p><br></p>
<div class="bs-example">
    <div class="row bootstrap_style">
        <div class="col-sm-12 col-md-12" >
      <div class="col-sm-4 col-md-6">
        <div class="well well-lg">
           <img  src="images/logo_cihr.png" >
          <div class="caption"><a href="http://www.cihr-irsc.gc.ca/e/193.html">
            <h3>Canadian Institutes of Health Research</h3><strong>(CIHR)</strong></a>

          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-6">
        <div class="well well-lg">
          <img  src="images/logo_college.png" >
          <div class="caption">
              <a href="http://www.bcpharmacists.org/"><h3>College of Pharmacists of British Columbia</h3></a></p>

          </div>
        </div>
      </div>
     <!-- <div class="col-sm-4 col-md-4">
        <div  class="well well-lg">
            <img  src="images/logo_pharm_2.png" width="95%">
          <div class="caption">
              <a href="http://www.pharmacy.ubc.ca/"><h3>UBC Pharmaceutical Sciences </h3>
           </a>

          </div>
        </div>
      </div>-->
            </div>
    </div> <!--row-->
  </div><!--bs-example-->
            </div>
    </div><!--container-->
    <footer>
        <a href="#contact" class="button style2 down anchored">Next</a>
    </footer>
</section>
<!-- Fund -->
<!-- Publications -->

<section id="pub" class="main style3 halfscreen" >
    <div class="content container pub" >

        <header>
            <h2>Publications</h2>
        </header>
        <div class="bs-example">
        <div class="bootstrap_style">
            <div class="col-sm-12 col-md-12" style="margin-left: 50px">
                <div class="col-sm-3 col-md-3">
                    <div class="media well radius">
                        <div class="pull-left">
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Did You Know</h4>
                            <div class="small-9">Quick facts and up-to-date information from our research team</div>
                            <br><a href="pdf/DidUKnow.pdf"  style="text-decoration: underline; color:#2a6496 !important;">

                                1st Edition <i class="fa fa-2x fa-arrow-circle-down"></i></a>


                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3">
                    <div class="media well radius">
                        <div class="pull-left">

                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Behind the Scenes</h4>
                            <div class="small-9">Our newsletter, Edition:</div>
                            <table><tr>
                                    <td><button class="btn btn-default" style="border-radius: 10%; padding:5px"><a href="pdf/Behind.pdf"  style="text-decoration: underline; color:#2a6496 !important; " >1st <i class="fa fa-2x fa-arrow-down"></i></a></button></td>
                                    <td><button class="btn btn-default" style="border-radius: 10%; padding:5px"><a href="pdf/Behind_2nd.pdf"  style="text-decoration: underline; color:#2a6496 !important;" >2nd<i class="fa fa-2x fa-arrow-down"></i></a></button></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-default" style="border-radius: 10%; padding:5px"><a href="pdf/Behind_3rd.pdf"  style="text-decoration: underline; color:#2a6496 !important;" >3rd<i class="fa fa-2x fa-arrow-down"></i></a></button></td>
                                    <td></td></tr></table>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="media well radius">
                        <div class="pull-left" href="#">

                            <i class="fa fa-file"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Published Protocol</h4>

                            <br><a style="text-decoration: underline; color:#2a6496 !important;" href="pdf/Trials-2014.pdf">Trials 2014 <i class="fa fa-2x fa-arrow-circle-down"></i></a>

                        </div>
                    </div>
                </div>


            </div>
        </div><!--bootstrap-->
            <div><p><br></p></div>
            <div><p><br></p></div>
            <div><p><br></p></div>
            <div><p><br></p></div>
            <div><p><br></p></div>
        </div>
    </div><!--container-->
    <footer>
        <a href="#contact" class="button style2 down anchored" >Next</a>
    </footer>

</section>
<!-- Publications -->
	
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Email Us</h2>
						<p>Do you suffer from asthma? We are recruiting for a study. Contact us today.</p>
					</header>
					<div class="box container ">
					
					<!-- Contact Form -->
							<form method="post" class="form-style" id="contact_form">
                                                           
								<div class="row half">
                                                                    <div class="6u"><input type="hidden" name="mysecret" value="&#065;&#115;&#116;&#104;&#109;&#097;&#032;&#080;&#114;&#111;&#106;&#101;&#099;&#116;&#032;&#069;&#109;&#112;&#104;&#097;&#115;&#105;&#115;" /></div>
									<div class="6u"><input type="text" name="user_name" placeholder="Name" required="true" /></div>
									<div class="6u"><input type="email" name="user_email" placeholder="Email" required="true" /></div>
								</div>
								<div class="row half">
									<div class="12u"><textarea name="user_msg" placeholder="Message" rows="6" required="true"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" id="submit_btn" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>
			
			
		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://twitter.com/maryadevera" class="icon fa-twitter nobkg"></a></li>
                                                
                                                

					</ul>

				<!-- Menu -->
					<ul class="menu">
                                           
							<li><a href="#team" class="team_id">Team</a></li>
							<li><a href="#knowledge">Info</a></li>
                                                       
						<li>&copy; Collaborations Outcomes Research and Evaluations</li>
						<li>Design: <xa href="#">Salma Lalji</a></li>
					</ul>
			
			</footer>

	</body>
</html>