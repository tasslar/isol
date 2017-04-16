<title>Inysol Innovative Technology solutions - Who</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/inner-banner-1.jpg" alt="Content Management Systems"  class="img-responsive"></div>

        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                <div class="col-sm-3 sidebar-phone">
                   <img src="images/sidebar.jpg"  class="img-responsive" />
                </div>
	                <div class="col-sm-9 services-full-width-text wow fadeInRight">
                    <div class="left-mg">
	                    <h3>Who we are?</h3>
	                   	<p>Inysol Innovative Technology solutions a professional web design and development company in India providing a range of affordable custom website design,development services to clients across the world.

Inysol Innovative Technology solutions is a recognized online promotion company delivering web development services of any complexity level to their clients worldwide. Inysol Innovative Technology solutions is a dynamically well established web Designing and Development company with strong and talented team of experienced IT experts with excellent domain knowledge across various development platforms, our global clientele base range from start-ups to large organizations. India which brings together a classic blend of creativity, revolutionary ideas coupled with cutting edge technology.</p>

<p>Our web design and web development services range from simple static web site design to dynamic web application solutions. As a leading web design and web development company in India, Inysol Innovative Technology solutions has the best and most professional web design and web development team providing affordable Web Site Design Solutions, Web Site Development and Web application development. Despite of being a company serving clients globally we have a special focus on India, United Kingdom (UK), Canada and United States of America (US).

We provide full featured web services including Online Marketing, Website Promotion, Website Hosting, Web Designing, Web Development, Search Engine Optimization, ECommerce Solution, Web Applications Development. .We have handled web design work for small, medium and large companies. You will be able to find more about our expertise in web design from our portfolio.</p>

<p>We blend creativity and technical skillfulness with sound business strategy in order to deliver a full spectrum of turnkey solutions to meet your requirements. Our goal is the success of our client's online and offline branding, communications and marketing strategy.

Our core work is web design, e-commerce and web application development, but over the years we have built on our skills and now offer a wide range of related services including internet marketing, and Website Promotions.

We have successfully completed many web projects and it's a delight to say that all our clients stay as ongoing satisfied customers.</p>
                        
 </div>
                        
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Services -->
       
      

        <!-- Call To Action -->
       

        <!-- Footer -->
   	
	<link href="css/example-page.css" rel="stylesheet" type="text/css" media="all" />
	
    <style type="text/css" media="screen">
    
    .slide-out-div {
        padding: 20px;
        width: 280px;
        background: #f2f2f2;
        border: #29216d 2px solid;
		height: 400px;
  		line-height: 1;
  		position: fixed;
 		right: -280px;
   		top: 35%;
		
    
    }
     .slide-out-div a{  text-decoration: none;
	 }


	</style>

    <script src="assets/js/jquery.js"></script>
    <script src="js/jquery.tabSlideOut.v1.3.js"></script>
         
         <script>
         $(function(){
             $('.slide-out-div').tabSlideOut({
                 tabHandle: '.handle',                              //class of the element that will be your tab
                 pathToTabImage: 'images/contact_tab.gif',          //path to the image for the tab (optionaly can be set using css)
                 imageHeight: '122px',                               //height of tab image
                 imageWidth: '40px',                               //width of tab image    
                 tabLocation: 'right',                               //side of screen where tab lives, top, right, bottom, or left
                 speed: 300,                                        //speed of animation
                 action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
                 topPos: '35%',                                   //position from the top
                 fixedPosition: false                               //options: true makes it stick(fixed position) on scroll
             });
         });

         </script>    


    <div class="slide-out-div" style="z-index:9999;">
        <a class="handle" href="http://link-for-non-js-users">Content</a>
         <strong><a href="#">QUICK CONTACT</a></strong> 
    
	                        <p><br><i class="fa fa-map-marker" style="padding-right:2%;"></i> #43,South Links Blvd Suite, <br /> 121, California,
<br>CA 95100,USA.</p>
	                        <p><br><i class="fa fa-phone" style="padding-right:2%;"></i> TASS- +1 858 224 5534 </p>
	                        
	                         <p><br><i class="fa fa-user"></i><a href="skype:inysoltechnologies?add" target="_blank" style="color:#444;padding-left: 2%;"> inysoltechnologies</a></p>
<p><i class="fa fa-inbox"></i><a href="mailto:info@inysoltechnologies.com" style="color:#444;padding-left: 2%;"> info@inysoltechnologies.com</a></p>	                         
<p><i class="fa fa-inbox"></i><a href="mailto:inysol@inysoltechnologies.com" style="color:#444;padding-left: 2%;"> inysol@inysoltechnologies.com</a></p>
<p><i class="fa fa-inbox"></i><a href="mailto:ceo@inysoltechnologies.com" style="color:#444;padding-left: 2%;"> ceo@inysoltechnologies.com</a></p><br>
       <div class="form">
	<strong><a href="#">Enter your email and you'll be one of the first to get new updates:</a></strong>
    <br><br>
    <div id="thank"></div>
                        	<form role="form" method="post" id="reg-form" class="form-inline">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="subscribe-email">Email address</label>
		                        	<input type="email" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email" required style="border:1px solid #444;">
		                        </div>
		                        <button type="submit" class="sub"><img type="submit" src="images/subscribe.png"></button>
		                    </form>
	</div>
    </div>

<script type="text/javascript">
$(document).ready(function()
{
 $(document).on('submit', '#reg-form', function()
 {
  
  

  var data = $(this).serialize();
  
  
  $.ajax({
  
  type : 'POST',
  url  : 'subscribe.php',
  data : data,
  success :  function(data)
       {
      $("#thank").html(data);
      
       }
  });
  return false;
 });
 
});
</script>
<?php include 'footer-inner.php'; ?>