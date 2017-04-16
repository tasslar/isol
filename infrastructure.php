<title>Inysol Innovative Technology solutions - Infrastructure</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Infrastructure.jpg" class="img-responsive"></div>    
    
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0px;">
                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
	          <p>It used to be that IT systems could be as much a limitation as an advantage. They tied up large amounts of capital. They were costly to maintain. Resistant to change. And slow to evolve.
</p>
<p>Not anymore. Today, you can create a more flexible and cost-effective IT infrastructure that adapts quickly to the changing demands of your business.
</p>
<h4>Our Technology Expertise Umbrella Includes</h4>
<div align="center"><img src="images/Technology-Expertise.png" class="img-responsive"/></div>
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
                            <div class="col-sm-4">
                                
                            </div>
                             <div class="col-sm-4">
                                <div class="shape">
                                   <a href="#">About InfraStructure</a>
                                </div>
                            </div>
                             <div class="col-sm-4">
                                 
                            </div>
                              
                    </div>    
                        <Div class="white-bg"><p>IT infrastructure has, over the years, undergone a massive change. This is based on the fact that technologies are changing very rapidly. New and emerging technologies are posing very serious challenges to companies to upgrade their legacy systems for improved efficiency and better customer service. This is perhaps the single most dominant paradigm shift in the IT infrastructure space.</p></Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Our Offerings</h3>
             <p>We possess deep experience and expertise in building robust IT Infrastructure and the following are some of the areas but not limited to Expertise
</p>    

 
</div>
    </div>
    
             <div class="row">
            <div class="col-sm-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Infrastructure as a Service (IaaS)</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <li>Service Migration</li>
                                        <li>Data Centre Services</li>
                                        <li>Storage Resources Optimization</li>
                                        <li>Remote Infrastructure Management</li>
                                        <li>Infrastructure Transformation Services</li> 
                                        <li>Virtualization</li>
                                    </div>
                                    <div class="col-sm-4">
                                         <li>Cloud Management Services</li>
                                        <li>Network & Security Services</li>
                                        <li>Communication and Connectivity Services</li>
                                        <li>Integrated Operational Management</li>
                                        <li>Database Management Services</li>
                                    </div>
                                    <div class="col-sm-4">
                                         <li>IT Process Automation</li>
                                        <li>Application Product Support</li>
                                        <li>Application Servers & Web Servers Management</li>
                                        <li>Amazon Web Services (AWS) Management</li>
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