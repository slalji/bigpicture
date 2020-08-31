<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
require_once 'include.php';
   
	$conn = dbConnect();
?>
<html>
	<head>
		<title>Emphasis</title> <!--Big Picture by HTML5 UP-->
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
	</head>
	<body>

<script>
    $( document ).ready(function() {
        $("#team").hide();
        $("#fund").hide();

        $(window).on("hashchange", function(){
            var hash = window.location.hash.substring(1); // hash part of url withou the first letter (#)
            $("#team").show();
            $("#"+hash).show();
        });
        $(".team_id").click(function(){
            $("#team").show();
             $("#intro").hide();
              $("#fund").hide();
        });
        
        $(".intro_id").click(function(){
            $("#intro").show();
             $("#team").hide();
              $("#fund").hide();
        });
         $(".fund_id").click(function(){
            $("#fund").show();
             $("#intro").hide();
              $("#team").hide();
        });
        $(".hover_effect").click(function(){
            $("#steps").toggle();
             //$("#team").hide();
        });
        
   $("#submit_btn").click(function() { 
       
        var proceed = true;
     //alert(proceed);
       $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red'); //change border color to red   
				proceed = false; //set do not proceed flag				
			}	
		});
                 
                 if(proceed) //everything looks good! proceed...
                {
                    
			//get input field values data to be sent to server
            post_data = {
				'user_name'	: $('input[name=user_name]').val(), 
				'user_email'	: $('input[name=user_email]').val(), 
				'user_msg'	: $('textarea[name=user_msg]').val(),
                                'mysecret'   : $('input[name=mysecret]').val()
			};
            
            //Ajax post data to server
            $.post('send.php', post_data, function(response){  
				if(response.type == 'error'){ //load json data from server and output message     
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
					$("#contact_form #contact_body").slideUp(); //hide form after success
				}
				$("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }

    });
    
// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

// Usage for URL: http://my.site.com/location?locationId=53cc272c0364aefcb78756cd&shared=false
  
    });

</script>
<script type="text/javascript">
    	jQuery(document).ready(function($) {
    		/*$('.btn-phloc').click(function(){
                   makeAjaxRequest();
    		});*/

            $('form').submit(function(e){
                e.preventDefault();
                makeAjaxRequest();
                return false;
            });
          

            function makeAjaxRequest() {
                $.ajax({
                    url: 'pharmNo.php',
                    type: 'post',
                    data: {name: $('input#name').val()},
                    cache: false,
                    success: function(result) {
                       
                       //alert("returned value:"+result);
                        var response = result;
                        if(response != 0){
                           
                            $('input#name').css('border-color', /*'green'*/'#c1dcd0'); //green
                             $('input#name').css('background-color',/*'red'*/'#fff'); //white
                             response = response+"?phar=true";
                            //var url = "http://emphasis.core.ubc.ca/cinfo/"+response;
                            var url = window.location.href+"cinfo/"+response;
                            $(location).attr('href',url);
                            
                        }
                        else{
                            $('input#name').css('border-color',/*'red'*/'red'); //red
                            $('input#name').css('background-color',/*'red'*/'#dcc1c1'); //red
                                                        
                        }
                        
                       
                    }

                });
            }

    	});
    </script>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<a href="/"><h1 id="logo">EmPhAsIS</h1></a>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
                                                        <li><a href="#intro"class="intro_id">Intro</a></li>
							<li><a href="#team" class="team_id">Team</a></li>
							<li><a href="#oneshade">What It Is</a></li>
                                                        <li><a href="#twoshade">Why Important</a></li>							
							<li><a href="#contact">Contact</a></li>
                                                       <li><a href="#work">Info</a></li>
                                                        <!--<li><a href="BootstrapAdmin/pharmacists.html">Sign in</a></li>-->
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
                                    <p>Your Email was successfully sent!     </p>
					<footer>
						<a href="#oneshade" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
               <!-- Team -->
			<section id="team" class="main style3 primary">
				<div class="content container bootstrap_style">
					<!--<header>
						<h2><br>The Team</h2></header>-->                                         
                                    <div class="row">
                                            <h1>Primary Investigator</h1>
                                        </div>
                                    <div class="container">
    
    
</div>
<div class="container">
    
    <div id="about">
            	
                <div class="row">
                    <div class="span12">         
                       
                      
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                                <div class="row">
                	<div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                            	
                                <img src="images/thumbs/T_mary.jpg" alt=""/>                          
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                            	
                               
                                
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->
                    <div class="span8">
                        <span > <h3>Mary De Vera, PhD,</h3>Faculty of Pharmaceutical Sciences, UBC 
                            <!--<br><br>Sed aliquet et augue non scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                        Phasellus in sagittis est, vel condimentum neque. Donec eleifend eros sit amet dignissim accumsan. 
                        Fusce mattis diam sed commodo aliquet. Ut facilisis blandit libero, id tempus justo dapibus ac. 
                        <br><br> -->
                                    </span>
                    </div> 
                
                   

    <!-- end .span3 -->
                </div><!-- end .row -->
                <div class="row">
                    
                </div>

                
                <br>
                
                <div class="row">
                	<div class="span12">
                    	
                                            
                                        
                                    <div class="table-responsive ">
  <table class="bootstrap_style table" >
      <tr><th><h1>Investigators</h1></th></tr>
      <tr>
          <td width="50">Mohsen Sadatsafavi<td>MD, PhD</td><td>UBC Faculty of Medicine</td>
            </td></tr>
      <tr><td>Larry Lynd</td><td>BSP, PhD</td> <td>UBC Faculty of Pharmaceutical Sciences</td></tr>
      <tr><td>Carlo Marra</td><td>PharmD, PhD</td><td>Memorial University of Newfoundland School of Pharmacy</td></tr>
       <tr><td>Mark FitzGerald</td><td>MD, FRCPC</td> <td>UBC Faculty of Medicine</td></tr>
    <tr><td>Richard Lester</td><td>MD, FRCPC</td> <td>UBC Faculty of Medicine</td></tr>
      <tr><td>Penelope Brasher</td><td>PhD</td> <td>Vancouver Coastal Health Research Institute</td></tr>
<tr><td>Parkash Ragsdale</td><td>BSc (Pharm)</td> <td>UBC Faculty of Pharmaceutical Sciences</td></tr>

</table>
                                       
                                            
                                    </div></div><!-- end .span12 -->
                    </div>
                    <div class="span12">  
<table class="bootstrap_style table" >
      <tr><th><h1>Research Team</h1></th></tr>                        
</table>            
                <div class="row">
                	<div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                            	
                                <img src="images/thumbs/T_louise.jpg" alt=""/>                          
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                            	
                                <h3>Louise Gastonguay <br><sub>BSc, MSc, RN</sub></h3>
                                <span class="caption"">
                                        
                                             
                                    </span>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->
                    <div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                            	
                                <img src="images/thumbs/T_jessica.jpg" alt=""/>                          
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">

                                <h3>Jessica Galo <br><sub>BSc, LPN</sub></h3>
                                <span class="caption"">
                                        
                       <!--            
Lecturer and Coordinator, Practice Innovation Primary Care, and will be responsible for leading change and innovation in pharmacy practice within primary care including community pharmacy practice.
-->
                                      
                                    </span>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->
                    <div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                            	
                                <img src="images/thumbs/T_nicole_2.jpg" alt=""/>                          
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                                <div id="nicole"> 
                                  
                                <h3>Nicole Tsao <br><sub>BSc (Pharm), MSc (Pharm), RPh, PhD Student</sub></h3>
                                <span class="caption" >
                                        
                                      <!--      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                      
                                    --></span></div>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->

    <!-- end .span3 -->
                </div><!-- end .row -->
                <!-- next row -->
                                <div class="row">
                	<div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                            	
                                <img src="images/thumbs/T_salma.jpg" alt=""/>                          
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                            	
                                <h3>Salma Lalji <br><sub>BTech</sub></h3>
                                <span class="caption"">
                                       <!-- Web developer. Asthma can kill but the cure is as simple as adherence to medication.
                                        "If our patients do not always take medication as we advise, is that their fault
or our failure to involve them in a process of shared decision making?"  Confidential Enquiry report,  
May 2014 <i>Healthcare Quality Improvement Partnership 2014</i>. <p>
                                      
                                    --></span>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->
                    <div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                                <img src="images/thumbs/T_ylin1127.jpg" alt=""/>
                                                      
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                            	
                                <h3>Yolanda Lin <br><sub>Pharmacy Student</sub></h3>
                                <span class="caption"">
                                        
                                          <!--   Joined Emphasis to ensure adherence to medication is realized as it can make a difference but is often overlooked. Thus, to be a  part of a team that proves that adherence will help a patient. Yolanda will make a difference by conducting informative and interesting patient interviews and ensure they are engaged and complete the study. 
                                      
                                   --> </span>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->
                    <div class="span4">
                    	
                        <div class="team-member">
                        	
                            <div class="team-member-preview">
                                <img src="images/thumbs/T_nehmatB.jpg" alt=""/>
                                                      
                                
                                
                            </div><!-- end .team-member-preview -->
                            
                            <div class="headline">
                            	
                                <h3>Nehmat Pawar <br><sub>Pharmacy Student</sub></h3> 
                                <span class="caption"">
                                        
                                        <!--    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                      
                                   --> </span>
                                
                            </div><!-- end .headline -->
                            
                        </div><!-- end .team-member -->
                        
                    </div><!-- end .span3 -->

<!-- end .span3 -->
                </div><!-- end .row -->
                
            </div><!-- end #team --> 
   
    </div>

			</section>

		
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
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
                 
                 				<!-- Portfolio -->
		<section >
        <!-- work -->
            <section id="work" class="main left fullscreen">
                    <div class="content box style4">
                            <header>
                                    <h2>Information</h2>
                            </header>
                                                                    
    <div class="bootstrap_style">
<div class="content container ">
       <div class="row">
      <div class="col-sm-6 col-md-3">
        <!--<a  class="round-button" data-toggle="modal" data-target="#patientModal"> -->
         <a  class="round-button" href="cinfo/patients"> 
            <div class="well well-lg" >
           <h2 class="">Patients <br><i class="fa fa-male "></i></h2>
            <div class="round-button">
                 <div class="round-button-circle">
                   <i class="fa-2x fa fa-align-center fa-hand-o-up"></i></div>
            
          </div>
           
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
      <div class="col-sm-6 col-md-3"> 
          <a href="#" class="round-button" data-toggle="modal" data-target="#pharmacistsModal">
        <div class="well well-lg">
        <h2 class="">Pharmacists <br><i class="fa fa-plus-square "></i></h2>
            <div class="round-button">
                 <div class="round-button-circle" >
                   <i class="fa-2x fa fa-align-center fa-hand-o-up"></i></div>
            </div>
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
        <label for="name">Enter</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Location Number">
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
      <div class="col-sm-6 col-md-3">
          <a  class="round-button"> 
        <div  class="well well-lg" data-toggle="modal" data-target="#locationModal">
        <h2 class="">Locations <br><i class="fa fa-map-marker "></i></h2>
            <div class="round-button">
                 <div class="round-button-circle" >
                   <i class="fa-2x fa fa-align-center fa-hand-o-up"></i></div>
            </div>
        </div></a>
                      <!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Map of Locations</h4>
      </div>
      <div class="modal-body">
        Map of pharmacies that are participating with our study is coming soon
      </div>
      
    </div>
  </div>
</div>
      </div>
         <div class="col-sm-6 col-md-3">
        <div  class="well well-lg"> 
            <a href="#fund" class="fund_id round-button active">
        <h2 class="">Funders<br><i class="fa fa-dollar "></i></h2>
              
            <div class="round-button">
                 <div class="round-button-circle">
                   <i class="fa-2x fa fa-align-center fa-hand-o-up"></i></div>
            </div></a>
        </div>
      </div>
    </div>
</div><!-- end bootstrap style-->
 <a href="#contact" class="dark button style2 down anchored">Next</a>
</div> <!-- end container-->
            
            </section> 

<!-- Portfolio -->
<!-- Intro -->
			<section id="fund" class="main style1  fullscreen">
				<div class="content container fund">
                                    <div >
                                    <header>
                                        <h2>Our Funders</h2>
                                    </header>
                                        <p><br>
                                    <div class="bs-example">
    <div class="row bootstrap_style">
      <div class="col-sm-8 col-md-4">
        <div class="well well-lg">
           <img  src="images/logo_cihr.png" >
          <div class="caption">
            <h3>Canadian Institutes of Health Research (CIHR)</h3>
            <p><a href="http://www.cihr-irsc.gc.ca/e/193.html">http://www.cihr-irsc.gc.ca/e/193.html</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-8 col-md-4">
        <div class="well well-lg">
          <img  src="images/logo_college.png" >
          <div class="caption">
            <h3>College of Pharmacists of British Columbia</h3>
            <p><a href="http://www.bcpharmacists.org/">http://www.bcpharmacists.org/</a></p>
            <p><br>
          </div>
        </div>
      </div>
      <div class="col-sm-8 col-md-4">
        <div  class="well well-lg">
            <img  src="images/logo_pharm_2.png" width="260">
          <div class="caption">
            <h3>UBC Pharmaceutical Sciences </h3>
            <p><a href="http://www.pharmacy.ubc.ca/">http://www.pharmacy.ubc.ca/</a></p>
            <p><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
                                   
                                     
             
 
                                       
				</div> 
                                </div>
                            <footer>
                                            <a href="#contact" class="button style2 down anchored">Next</a>
                                        </footer>
			</section>

   
	
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
                                                
                                                
                                                <!--<li><a href="http://disqus.com" class="disqus">Blog</a></li>
             
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>-->
					</ul>

				<!-- Menu -->
					<ul class="menu">
                                           
							<li><a href="#team" class="team_id">Team</a></li>
							<li><a href="#work">Info</a></li>
                                                       <!-- <li><a href="BootstrapAdmin/pharmacists.html">Sign in</a></li>-->
                                                                                                               
                                                       
						<li>&copy; Collaborations Outcomes Research and Evaluations</li>
						<li>Design: <xa href="#">Salma Lalji</a></li>
					</ul>
			
			</footer>

	</body>
</html>