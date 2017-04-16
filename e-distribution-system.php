<title>Inysol Innovative Technology solutions - E Distribution System</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/E-Distribution-System.jpg" alt="Content Management Systems"  class="img-responsive"></div>


<div class="services-full-width-container">
<div class="container">
<div class="row">
<div class="col-sm-12 services-full-width-text wow fadeInRight" style="margin-bottom:0">
<h3>E-Distribution System</h3>
</div></div>
 
<div class="row">
    <div class="col-sm-6 services-full-width-text wow fadeInRight" style="margin-bottom:0">
        <h4>BookorRent adaptability to the business verticals</h4>
        <p>Lists and sells the entire inventory virtually through all types of marketplaces across the world.	</p>

            <li>Expand Into New Markets</li>
            <li>Earn Higher Margins</li>
            <li>List And Sell All SKUs</li>
            <li>Control Sales Centrally</li>
    </div>
    
    
    <div class="col-sm-6 services-full-width-text wow fadeInRight" style="margin-bottom:0">
    <h4>E- SUPPLY CHAIN DIGITIZATION</h4>
    <p>Improves efficiency & provides real-time visibility, traceability and control of the supply chain.</p>
        <ul>
            <li>Gain Real-Time Visibility</li>
            <li>Improve Supply Chain Efficiency</li>
            <li>Avoid False Returns & Claims</li>
            <li>Establish Two-Way Traceability</li>
            <li>Touch-Free ERP Updates</li>
         </ul>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 services-full-width-text wow fadeInRight">
    <h4>E-SMART LOGISTICS</h4>
    <p>Automates supply chain & provides warehouses, packing services, shipping and reverse logistics.</p>
    
    <h4>E-DIGITAL MARKETING</h4>
    <p>Promotes brand & increases sale through targeted and measurable digital marketing services.</p>
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
<?php include 'footer.php'; ?>