<title>Inysol innovative Technology solutions - Business Intelligence</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Infrastructure.jpg" class="img-responsive"></div>    
    
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0px;">
                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
	        <p> Today as the world is moving on from the '24-hour economy' to the 'experience economy', customer experience is taking center-stage and zero tolerance to failure is becoming the new norm. Enterprises need to reinvent their business strategies, embrace new disruptive technologies and solidify the data foundation to succeed in the digital world.</p>
<h4>Our Technology Expertise Umbrella Includes</h4>
<div align="center"><img src="images/business-intelligence-img.png" class="img-responsive"/></div>
<br/>
<p>Inysol's Infrastructure Services is designed to address enterprise server platform needs ranging from operational assistance to design, deployment, optimization and migration.</p> 	                </div>
	            </div>
	        </div>
        </div>



<div id="blue-bg">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">THINGS TO KNOW</h3>
	                        
                        <div class="row">
                            <div class="col-sm-3">
                                 <div class="shape">
                                   <a href="#">Delivering self-service reporting/ analysis</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="shape">
                                   <a href="#">Reporting/ analysing across multiple systems</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                  <div class="shape">
                                   <a href="#">Unlocking data buried in systems</a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                  <div class="shape">
                                   <a href="#">Reducing the cost of producing reports</a>
                                </div>
                            </div>
                              
                    </div>    
                        <Div class="white-bg"><p>With traditional business intelligence projects, costs can easily spiral out of control. Not only do you have to plough large amounts of investment into getting the software up and running, but you also need to work out for all the ongoing maintenance and support costs associated with these tools.</p></Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Our Offerings</h3>
            <h4>Inysol's BI Center of Excellence</h4>
             <p>Inysol offers end-to-end BI and DW services - Reporting and Analytics, Maintenance and Support. Our services cover Business Intelligence road map, data warehousing implementation, analytics, data mining, data quality and master data management. Our business result-oriented approach ensures return on information.</p>
 
</div>
    </div>
    
             <div class="row">
            <div class="col-sm-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Inysol Services include</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                          <li>BI strategy development</li>
                                          <li>BI and DW governance consulting</li>
                                          <li>BI and DW architecture development</li>
                                     </div>
                                    <div class="col-sm-4">
                                         <li>Strategic audit</li>
                                          <li>Taxonomy implementation consulting</li>
                                          <li>Migration strategy and planning, cross-platform migration and version upgrades</li>
                                    </div>
                                    <div class="col-sm-4">
                                         <li>BI services in a SaaS model</li>
                                          <li>SOA-enabled BI framework</li>
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