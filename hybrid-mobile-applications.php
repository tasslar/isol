<title>Inysol Innovative Technology solutions - Hybrid Mobile Applications</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Hybrid-Mobile-Application.jpg" class="img-responsive"></div>
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0px;">
                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
 <p>Hybrid Mobile Application development is basically done using web technologies such as HTML5, CSS and JavaScript. The distinguishing feature is that the hybrid apps are hosted on a native application that uses a mobile platform web view and is accessible across all native mobile phones. Phone Gap is considered one of the popular containers for creating hybrid mobile apps.</p>
<div align="center"><img src="images/Hybrid.png" class="img-responsive"/></div>
<br/>
<p>Inysol's Hybrid Mobile Application Development solutions are high performing, robust,secure and scalable with a rich user interface to meet the ever growing demands of the consumers.We have the ability and wherewithal to design and build hybrid apps such as
</p>
 <li>Titanium App Development</li>
<li>PhoneGap App Development</li>
<li>Sencha Touch Development</li>
<li>Hybrid Application Design</li>
<li>Hybrid Application Development</li>
 
</div>
	            </div>
	        </div>
        </div>

<br/>

<div id="blue-bg">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">THINGS TO KNOW</h3>
	                    <h4>Hybrid Mobile Apps</h4>
<p>The best possible option for companies across the world desirous of reaching out to large number of users, customers using different handsets with different operating systems such as Android, iOS, Windows, Black Berry OS is the Hybrid Mobile Application. The Hybrid Mobile apps are a boon to such companies who can easily reach out to wider audience. This is a major paradigm shift as organizations can easily benefit from Hybrid Apps.</p>                         <div class="row">
                            
                             <div class="col-sm-4">
                                <div class="shape">
                                   <a href="#">Hybrid App Experience</a>
                                </div>
                            </div>
                             <div class="col-sm-4">
                                   <div class="shape">
                                   <a href="#">Why Hybrid App</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                   <div class="shape">
                                   <a href="#">Hybrid Value</a>
                                </div>
                            </div>
                             
                    </div>    
                        <Div class="white-bg"><p>Hybrid apps offer high value in terms of faster performance, excellent features, data optimization access, integration with the device. Also, animation is optimized with native view.</p>
                        </Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Our Offerings</h3>
           <p>We offer robust, scalable Hybrid Apps to our customers using the following tools and technologies-</p>
</div>
    </div>
    
             <div class="row">
            <div class="col-sm-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tools & Technologies</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <li>HTML5, CSS, Javascript</li>
                                        <li>PhoneGap</li>
                                        <li>IONIC</li>
                                        
                                       
                                            </div>
                                    <div class="col-sm-4">
                                      <li>Mobile Angular AI</li>
                                        <li>Intel XDK</li>
                                        <li>Appcelerator Titanium</li>
                                     </div>
                                    <div class="col-sm-4">
                                      <li>Sencha Touch</li>
                                        <li>Kendo UI</li>
                                    </div>
                                </div>
 
                             </div>
                        </div>
                    </div>
                        
                 
                     
             </div>
    </div><!--col-sm-6 -->
            
 
                 
      </div>    
</div>
 <br/>

      
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <!-- Call To Action -->
        
     <script>
 
//twitter bootstrap script
 $("#contactform").submit(function(ev){
    ev.preventDefault();
   
    $.ajax({
 type: "POST",
 url: "process_services.php",
 data: $('#contactform').serialize(),
 cache: false,
         success: function(msg){
             $('#thanks').html(msg);
         	 
         $("#myModal").fadeOut( "slow" );
         setTimeout('$("#myModal").hide()',1500);
         setTimeout('$(".modal-backdrop").hide()',1500);
        
         },
 error: function(){
 alert("failure");
 }
       });
 });

</script>  	        </div>
        </div>

        <!-- Call To Action -->
       <!-- <div class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig">
	                    <p>
	                    	Lorem ipsum <span class="violet">dolor sit amet</span>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et ut wisi.
	                    </p>
	                    <div class="call-to-action-button">
	                        <a class="big-link-3" href="#">Try It Now!</a>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>-->



<?php include 'footer.php'; ?>