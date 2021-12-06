<?php
/*
* Ajax form submit
*/

# request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
	if (isset($_POST['full_name']) AND isset($_POST['email']) AND isset($_POST['subject']) AND isset($_POST['message'])) {
		$to = 'alfarqi@gmail.com';

		$name = filter_var($_POST['full_name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$sent = email($to, $email, $name, $subject, $message);
		if ($sent) {
			echo 'Message sent!';
		} else {
			echo 'Message couldn\'t sent!';
		}
	}
	else {
		echo 'All Fields are required';
	}
	return;
}

/**
 * email function
 *
 * @return bool | void
 **/
function email($to, $from_mail, $from_name, $subject, $message){
	$header = array();
	$header[] = "MIME-Version: 1.0";
	$header[] = "From: {$from_name}<{$from_mail}>";
	/* Set message content type HTML*/
	$header[] = "Content-type:text/html; charset=iso-8859-1";
	$header[] = "Content-Transfer-Encoding: 7bit";
	if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true; 
}

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>REBUILD | Contact Us</title>
	<meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Vectus HTML5 Template - v1.0">
	<meta name="author" content="janxcode.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	
    <!-- Web Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,500,300' rel='stylesheet' type='text/css'>
    
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/theme.css">   
    <link rel="stylesheet" href="css/theme-animate.css">   
    <link rel="stylesheet" href="css/theme-elements.css">   
    <link rel="stylesheet" href="css/plugins.css">    
    
    <!-- Skin CSS -->
	<link id="skin" rel="stylesheet" href="css/skins/sun.css">

    <!-- Icon Fonts -->
    <link rel='stylesheet' href='fonts/font-awesome.min.css' type='text/css' media='screen' />    
    
    <!-- Library Css -->
    <link rel="stylesheet" href="css/skeleton.css"> 
    <link rel="stylesheet" href="vendor/flexslider/flexslider.css">
    
    <link rel="stylesheet" href="vendor/isotope/isotope.css">
    <link rel="stylesheet" href="vendor/owl/owl.carousel.css">
    <link rel="stylesheet" href="vendor/prettyPhoto/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen" /> 
    
    <!-- Responsive Theme -->
    <link rel="stylesheet" href="css/theme-responsive.css">
    
    <!-- Library Js -->
	<script src="vendor/modernizr.js"></script>
    
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!--[if lte IE 8]>
        <script src="vendor/respond.js"></script>
    <![endif]-->
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>  
<body>
	<!-- BOF Loader -->
     <div class="loader">
         <div class="spinner spinner-double-bounce">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
         </div>
	</div>
    <!-- EOF Loader -->
    
    
    
    <!-- BOF Header -->   

    <header>
        <!-- BOF Top Bar -->
        <div class="jx-header-1">
        
            <!-- BDF TOOLBAR -->
            <div class="jx-topbar">
                <div class="container">
                
                    <div class="eight columns left">
                        <div class="jx-left-topbar">Welcome to REBUILD . Creative HTML Template</div>
                    </div>
                    <!-- Left Items -->
                    
                    <div class="eight columns right">
                    	
                        <div class="jx-right-topbar">
                            <div class="email left"><i class="fa fa-envelope"></i> Info@rebuild.com</div>
                            
                                <ul class="right">
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i><span class="cart">0</span></a></li>
                                    <li><span>$0.00</span></li>
                                    <li><a href="#"><i class="fa fa-user"></i></a></li>
                                    <li><a href="http://www.facebook.com/janxcode"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com/janxcode"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://www.googleplus.com/janxcode"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <!-- Social icons-->
                            </div>
                            
                    </div>
                    <!-- Right Items -->
                </div>
            </div>
            <!-- EDF TOOLBAR --> 

            <div class="jx-header header-line">
                <div class="container">
                
                    <div class="four columns">
                        <div class="jx-header-logo">
                            <a href="index.html"><img src="images/header_logo.png" alt="" /></a>
                         </div>
                        <!-- Logo -->
                    </div>                

                    <div class="twelve columns">
                    
                        <div class="header-info">
                            <div class="toll-free"><i class="fa fa-phone"></i> TOLL FREE</div>
                            <ul>
                                <li class="top-space">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="position">
                                <div class="location">Location</div>
                                <div class="address">SOUTH REVEN, USA</div>
                                </div>
                                </li>
                                
                                <li class="top-space">
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <div class="position">
                                <div class="time">Office Timing</div>
                                <div class="date">SUN - FRI 8:00 - 22:00</div>
                                </div>
                                </li>
                                
                                <li>
                                    <div class="toll-free-number">801 21 7600</div>
                                </li> 
                            </ul>
                        </div>
                        <!-- Header Info -->
                    </div>                
	            </div>
            </div>     
               
        </div>
        <!-- EOF Top Bar -->
        <!-- EDF Header -->
        
        <div class="jx-menu-holder jx-sticky">
        	<div class="container">
                
                    <div class="header-menu-left">
                    
                        <div class="nav_container">
                            <ul id="jx-main-menu" class="menu">
                                <!-- Item 1 -->
                                <li class="with-sub"><a href="index.html">Home</a>
           
                                    <ul class="submenu">                                    	
                                    	<li class="col">
                                            <ul>                                        
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="home-1.html">Home 2</a></li>
                                            </ul>
                                         </li>
                                     </ul>
                               
                                </li>       
                                <!-- Item 2 -->
                                <li class="with-sub"><a href="">Features</a>
                                	
                                    <ul class="submenu">                                    	
                                    	<li class="col">
                                            <ul>                                        
                                                <li class="has-child"><a href="#">Headers</a>
                                                	<ul class="submenu">                                    	
                                                        <li>
                                                            <ul>                                        
                                                                <li><a href="header-default.html">Default Header</a></li>
                                                                <li><a href="header-without-topbar.html">Header Without Topbar</a></li>
                                                                <li><a href="header-center-logo.html">Header Centered Logo</a></li>
                                                            </ul>
                                                         </li>
                                                     </ul>
                                                </li>
                                                <!-- Sub-tem 01 -->
                                                
                                                <li class="has-child"><a href="#">Pages</a>
                                                	<ul class="submenu">                                    	
                                                        <li>
                                                            <ul>                                        
                                                                <li><a href="about-us.html">About Us</a></li>
                                                                <li><a href="our-team.html">Our Team</a></li>
                                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                                <li><a href="404-error.html">404 Page</a></li>
                                                                <li><a href="faqs.html">FAQs</a></li>
                                                                <li><a href="contact.html">Contact Us</a></li>
                                                            </ul>
                                                         </li>
                                                     </ul>
                                                </li>
                                                <!-- Sub-tem 02 -->
                                                
                                                <li class="has-child"><a href="#">Shortcodes</a>
                                                	<ul class="submenu">                                    	
                                                        <li>
                                                            <ul>                                        
                                                                <li><a href="typography.html">Typography</a></li>
                                                                <li><a href="grid-columns.html">Grid Columns</a></li>
                                                                <li><a href="price-table.html">Price Table</a></li>
                                                                <li><a href="service-box.html">Service Box</a></li>
                                                                <li><a href="tag-box.html">Tag Box</a></li>
                                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                                <li><a href="tabs.html">Tabs</a></li>
                                                                <li><a href="counters.html">Counters</a></li>
                                                            </ul>
                                                         </li>
                                                     </ul>
                                                </li>
                                                <!-- Sub-tem 03 -->
                                            </ul>
                                         </li>
                                     </ul>
                                </li> 
                                
                                
                                <li><a href="about-us.html">About Us</a></li>
                                <!-- Item 3 -->
                                <li class="with-sub">
                                    <a href="#">Services</a>
            
                                    <ul class="submenu">                                    	
                                    	<li class="col">
                                            <ul>                                        
                                                <li><a href="construction-managments.html">Construction Managments</a></li>
                                                <li><a href="carpentry.html">Carpentry</a></li>
                                                <li><a href="electrical.html">Electrical</a></li>
                                                <li><a href="plumbing.html">Plumbing</a></li>
                                                <li><a href="tiling-painting.html">Tiling and Painting</a></li>
                                            </ul>
                                         </li>
                                     </ul>
                                </li>   
                                <!-- Item 3 -->
                                
                                <li class="with-sub"><a href="#">Projects</a>
                                	
                                    <ul class="submenu">                                    	
                                    	<li class="col">
                                            <ul>                                        
                                                <li><a href="projects.html">Classic Projects</a></li>
                                                <li><a href="grid-projects.html">Grid Projects</a></li>
                                                <li><a href="project-view.html">Single Project</a></li>
                                            </ul>
                                         </li>
                                     </ul>                                
                                </li>   
                                <!-- Item 6 -->
                                
                                <li class="with-sub"><a href="#">News</a>
                                	
                                    <ul class="submenu">                                    	
                                    	<li class="col">
                                            <ul>                                        
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-single-page.html">News Single Page</a></li>
                                            </ul>
                                         </li>
                                     </ul>  
                                
                                </li>
                                <!-- Item 4 -->
                                <!--li><a href="shop.html">Shop</a></li-->
                                <!-- Item 5 -->
                                
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>                  	                  
                        </div>
                        <!-- EOF Menu -->
                    </div>
                    
                    <!-- MENU -->
                
                
                    <div class="header-search-right">
                    
                        <div class="jx-header-search">
                        
                        <form action="#" id="search" method="post" class="jx-form-wrapper">
                            <div id="search-input" class="search-inline-block">
                            <input id="search_text" name="search_text" placeholder="Search" class="jx-form-name" type="text">
                            </div>
                            <div id="jx-search-submit">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            <!-- Submit Button -->	
                            </div>
                        </form>
                        
                        </div>
          
                    </div>
                    
                    <!-- SEARCH FORM -->
                    
                </div>
    	</div>
        <!-- BOF Main Menu -->
        
        <!-- BOF Titlebar -->
        <div class="jx-titlebar"> 
        	<div class="container">
            	<div class="sixteen columns alpha">
                    <div class="jx-page-title">            
                        <div class="jx-breaducrumb"><a href="#" >Home </a> <span>Contact Us</span></div>
                    </div>
                </div>       
            </div>                 
        </div>    
        <!-- EOF Titlebar -->
        
	</header>     
    
    <!-- EOF Main Menu -->  

    
    <!-- BOF Main Content -->
    <div role="main" class="main no-top-padding">
    

        <!-- BDF MAP -->
                
        <div class="jx-container jx-white-bg">
                <div class="jx-google-map">
                    <div id="map" class="jx-map"></div>
                </div>
        </div>
        
        <!-- EDF MAP -->


		<!-- BDF CONTACT -->
                
        <div class="jx-container jx-white-bg jx-padding">
            <div class="container">
            
               <div class="jx-section-title-1">            
                    <div class="jx-seperator-icon"><i class="fa fa-chevron-down"></i></div>
                    <div class="jx-title-position">
                        <div class="jx-left-border"></div>
                        <div class="jx-title">KEEP IN TOUCH</div>
                        <div class="jx-right-border"></div>
                    </div>
                    <div class="jx-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>  
                </div> 
                <!-- Section Title -->    
            
            <div class="jx-contact-form">
            
            			<div class="jx-contact-message"><?php echo $mailResult; ?></div>
                        
                        <form action="" id="contactForm" method="post">
                            <div class="row-1">
                                <div class="contact-full-name">
                                    <input type="text" id="full-name-contact" name="full_name" placeholder="Full Name" class="jx-form-text" />
                                    <!-- First Name Textbox -->
                                </div>
                                <div class="contact-email">
                                    <input type="text" id="email-contact" name="email" placeholder="Email Address" class="jx-form-text" data-validation="email"/>
                                    <!-- Email Name Textbox -->
                                </div>
                            </div>
                            
                            <div class="row-1">
                                <div class="contact-subject">
                                    <input type="text" id="subject-contact" name="subject" placeholder="Subject" class="jx-form-text" data-validation="required"/>
                                    <!-- Subject Textbox -->
                                </div>
                            </div>
                            
                            <div class="row-1">
                                <div class="contact-message">
                                    <textarea id="message-contact" name="message" class="jx-form-textarea" rows="5" cols="30" placeholder="Enter Your Message Here..."></textarea>
                                    <!-- Message Box -->
                                </div>  
                                <div class="contact-submit">
                                    
                                    <button name="submit" type="submit" id="submit"><i class="fa icon-paper-plane"></i>SEND</button>
                                    <!-- Submit Button -->
                                </div>
                            </div> 
                        </form>
                        
                        </div>

                
            </div>
        </div>
        
		<!-- EDF CONTACT -->

		<!-- BDF CONTACT LINKS -->

       <div class="jx-container jx-grey-bg jx-padding">
            <div class="container">

                <div class="one-third columns">
                    <div class="jx-contact-info">
                    
                        <div class="icon"><i class="line-icon icon-location"></i></div>
                                                    
                            <div class="item-position">
                                <div class="title">PHYSICAL ADDRESS</div>
                                <div class="address">MAKILN ROAD,4352 AVENUE STREET.</div>
                                <div class="address">CALIFORNIA, NY</div>                            
                            </div>
                                        
                    </div>
                </div>
                <!-- Contact -->
                
                <div class="one-third columns">

                    <div class="one-third columns">
                        <div class="jx-contact-info">
                        
                            <div class="icon"><i class="line-icon icon-globe"></i></div>
                                                        
                            <div class="item-position">
                                <div class="title">HOW TO CONTACT</div>
                                <div class="phone">TEL : (997) 54 215412 - (997) 54 132546</div>
                                <div class="fax">FAX : (997) 54 215465 - (997) 54 215412</div>                            
                            </div>
                                            
                        </div>
                    </div>

                </div>
                <!-- Contact -->
                
                <div class="one-third columns">
                
                   <div class="one-third columns">
                        <div class="jx-contact-info">
                        
                            <div class="icon"><i class="line-icon icon-paper-plane"></i></div>
                            
                            <div class="item-position">
                                <div class="title">KEEP IN TUCH</div>
                                <div class="date-time">MONDAY - FRIDAY : 09:00-08:00PM</div>
                                <div class="date-time">SUNDAY - THU : 08:00-10:00PM</div>                            
                            </div>
                                            
                        </div>
                    </div>
               
                </div>
                <!-- Contact -->
                
            </div>
        </div>
        
        <!-- EDF CONTACT LINKS -->
     
        
        
    

    </div>
    <!-- EOF Main Content -->
    
    
    <!-- BOF FOOTER -->
    
    <footer class="jx-footer-section">
		<div class="jx-footer-1">
        
            <!-- BDF widget FOOTER -->        
            <div class="jx-footer jx-container">
                <div class="container">
                
                    <!-- BOF Footer widget #1 -->
                    <div class="four columns">
       
                        <div class="widget">             
                            <div class="jx-footer-logo">
                                <a href="index.html"><img src="images/header_logo.png" alt="" /></a>
                            </div>
                            <!-- footer logo -->
                            <div class="jx-about">
                            <div class="jx-title-border"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
                            <!-- Content -->
                            <div class="jx-btn jx-black"> 
                                <div class="jx-btn jx-black"> 
                                    <a href="about-us.html" class="jx-btn-default">
                                        <span>	
                                            <i class="btn-icon-left fa fa-mail-forward"></i>
                                            <span>Read More</span>
                                            <i class="btn-icon-right fa fa-mail-forward"></i>
                                        </span>
                                    </a>
                            	</div>
                            </div>
                            </div>

                            
                        </div>
                        <!-- About Us -->

                            <div class="jx-border"></div>

                        
                        <div class="widget">
                            <div class="jx-footer-newsletter">
                                <div class="jx-footer-title">Newsletter Subscribe</div>
                                <!-- widget Title -->                         
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>                             
                            
                                <form action="#" id="newsletter" method="post" class="jx-form-wrapper">
                                    <div id="newsletter-email" class="search-inline-block">
                                        <input  id="newsletter-email-1" name="newsletter_email" placeholder="Newsletter Subscribe" class="jx-form-name" type="text">
                                    </div>
                                    <div id="newsletter-submit">
                                        <button type="submit"><i class="fa fa-envelope-o"></i></button>
                                    <!-- Submit Button -->	
                                    </div>
                                </form>
                                
                             </div>
                        </div> 
                        <!-- Newsletter Subscribe -->

                    </div>                
                    <!-- EOF Footer widget #1 -->
                    
                    <!-- BOF Footer widget #2-->
                    <div class="four columns">
                    	<div class="widget">
                            <div class="jx-footer-title">Recent post</div>
                            <!-- widget Title -->

                            <div class="jx-widget-recent-post">
                                <ul>
                                    <li>
                                        <div class="image"><img src="images/blog-s-1.jpg" alt="" /></div>
                                        <div class="post-content">
                                            <div class="title"><a href="news-single-page.html">Responsive HTML Design</a></div>
                                            <div class="date">29 JUN 2015</div>
                                    	</div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="images/blog-s-2.jpg" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="news-single-page.html">Clean and Modern</a></div>
                                            <div class="date">02 AUG 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="images/blog-s-3.jpg" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="news-single-page.html">Unlimited Control Options</a></div>
                                            <div class="date">20 JAN 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="images/blog-s-4.jpg" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="news-single-page.html">Responsive HTML Design</a></div>
                                            <div class="date">20 JAN 2015</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="jx-btn jx-black"> 
                                    <a href="news.html" class="jx-btn-default">
                                        <span>	
                                            <i class="btn-icon-left fa fa-mail-forward"></i>
                                            <span>Read More</span>
                                            <i class="btn-icon-right fa fa-mail-forward"></i>
                                        </span>
                                    </a>
                            	</div>
                            </div>
                            <!-- Recent Post -->
                        </div>
                    </div>                
                    <!-- EOF Footer widget #2-->
                    
                    <!-- BOF Footer widget #3 -->
                    <div class="four columns">
                    
                    	<div class="widget">                
                            <div class="jx-footer-title">Tags</div>
                            <!-- widget Title -->  
                            
                            <div class="jx-tags-footer">
                                <ul>
                                    <li>responsive</li>
                                    <li>jquery</li>
                                    <li>css</li>
                                    <li>design</li>
                                    <li>graphic</li>
                                    <li>php</li>
                                    <li>html5</li>
                                    <li>jquery</li>
                                    <li>Css</li>
                                </ul>
                            </div>
                            
						</div>
                        <!-- Tags Group -->                      

                        <div class="jx-border"></div>

                    	<div class="widget">                
                            <div class="jx-footer-title">Flickr</div>
                            <!-- widget Title -->  
                            
                            <div class="jx-footer-flickr">
                                <ul>
                                    <li><a href="images/portfolio-w-1.jpg" data-rel="prettyPhoto"><img src="images/flick-1.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="images/portfolio-w-2.jpg" data-rel="prettyPhoto"><img src="images/flick-2.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="images/portfolio-w-3.jpg" data-rel="prettyPhoto"><img src="images/flick-3.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="images/portfolio-w-4.jpg" data-rel="prettyPhoto"><img src="images/flick-4.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="images/portfolio-w-5.jpg" data-rel="prettyPhoto"><img src="images/flick-5.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="images/portfolio-w-6.jpg" data-rel="prettyPhoto"><img src="images/flick-6.jpg" alt="" /></a></li>
                                    <!-- item 01 -->
                                </ul>    
                            </div>
                            
						</div>
                        <!-- Flickr -->
                    
                    </div>                
                    <!-- EOF Footer widget #3-->
                    
                    <!-- BOF Footer widget #4 -->
                    <div class="four columns">
                    
                    	<div class="widget">
                            <div class="jx-footer-title">Video</div>
                            <!-- widget Title -->                         
                        	<iframe height="160" src="https://www.youtube.com/embed/hr3QyhiD50k" ></iframe>
                        </div> 
                        
                        <div class="widget">
                            <div class="jx-footer-title">Contacts</div>
                            <!-- widget Title -->                         
                            
                            <div class="jx-footer-address">
                                <ul>
                                    <li>
                                    <i class="line-icon icon-location"></i>
                                    <div>Bolean, 959 Road, Avenue Street, Buston, USA</div>
                                    </li>
                                    <li>
                                    <i class="line-icon icon-mobile"></i>
                                    <div class="tel"><strong>Tel :</strong>  00965 - 3426 - 3211223</div>
                                    <div class="fax"><strong>Fax :</strong> 00965 - 3426 - 3211223</div>
                                    </li>
                                    <li>
                                    <i class="line-icon icon-globe"></i>
                                    <div class="email"><strong>Email :</strong> Name@your-company.com</div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Contact Address -->
                        </div> 
                                         
                    </div>                  
                    <!-- EOF Footer widget #4 -->
                </div>
            </div>
            
            <!-- EDF widget FOOTER -->
    
    
            <!-- BDF SUB FOOTER -->        
            <div class="jx-sub-footer jx-container">
                <div class="container"> 
                
                    <div class="eight columns">
                        <div class="jx-copy-right">Copyright © 2015 Powered By <a href="#">Janxcode -</a> REBUILD Theme - All Rights Reserved</div>
                    </div>                
					<!-- Copyright Text -->
                    
                    <div class="eight columns">
                       
                       <div class="jx-footer-social-icon">
                        <ul>                            
                            <li class="facebook">
                            <a href="http://www.facebook.com/#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                           
                            <li class="twitter">
                            <a href="http://www.twitter.com/#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            
                            <li class="dribbble">
                            <a href="http://www.dribbble.com/#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            </li>
                                                                                   
                            <li class="youtube">
                            <a href="http://www.youtube.com/#" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                            
                            <li class="googleplus">
                            <a href="http://www.googleplus.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                     </div>
                       
                       
                    </div>
                    <!-- Social Icons -->                

                
                </div>
            </div>
            <!-- EDF SUB FOOTER -->        
		
        </div>        
    </footer>
     
    <!-- EOF FOOTER -->

    
        
    <!-- Footer -->
    
	<script type="text/javascript" src="vendor/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="vendor/respond.js"></script>
    <script type="text/javascript" src="vendor/jquery.appear.js"></script>    
    <script type="text/javascript" src="vendor/prettyPhoto/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="vendor/isotope/jquery.isotope.min.js"></script>
    <script type='text/javascript' src='vendor/form-validator/jquery.form-validator.min.js'></script>
    <script type="text/javascript" src="vendor/flexslider/jquery.flexslider.js"></script>	

    
    <script type='text/javascript' src='vendor/form-validator/jquery.form-validator.min.js'></script> 
    
    <!-- Theme Initializer -->
	<script src="js/custom/contact.js"></script>
    
    <!-- Theme Initializer -->
	<script src="js/theme.js"></script>
    
    <!-- Google Map -->
    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    scrollwheel: false,
					// How zoomed in you want the map to start at (always required)
                    zoom: 11,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
                };
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
    
                var mapElement = document.getElementById('map');
                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'BUXCORP'
                });
            }
      </script>
    
</body>
</html>