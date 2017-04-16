<title>Inysol Innovative Technology solutions - Business Transformation</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Business-Transformation.jpg" class="img-responsive"></div>
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0px;">
                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
	      <p>Business Transformation could be a generic term, but here, we are talking about Business Transformation from Information Technology and Software point of view.</p>

<h4>Business Transformation can easily be categorized in two ways.</h4>

<li>Transforming existing legacy systems of a company</li>

<li>Creating and building completely a new infrastructure, applications and systems to transform the business of an organization, in other words, business transformation is also referred to as change management initiate that involves people, processes and technology aligned with the goals and objectives of an organization.
</li>           
          <br/>
                 </div>
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
                                  
                            </div>
                             <div class="col-sm-3">
                                <div class="shape">
                                   <a href="#">About Business Transformations</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                  
                            </div>
                            <div class="col-sm-3">
                                  
                            </div>
                              
                    </div>    
                        <Div class="white-bg"><p>The world is moving and changing very rapidly, organizations all over the world are worried about their business being stagnated. In order to keep pace with the changing times and with new technologies emerging across all frontiers, it has become imperative for organization to keep tab on emerging technologies and continue to upgrade their systems and keep transforming their businesses to withstand competition and scale operations. This is perhaps the biggest paradigm shift that is taking place as far as business transformation of organizations is concerned.</p></Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Our Offerings</h3>
           <p>Our business transformation services include, but are not limited to the following</p>
</div>
    </div>
    
             <div class="row">
            <div class="col-sm-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Business Transformation Activities</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <li>Simply business processes</li>
                                        <li>Align your IT requirements with organizational goals</li>
                                        <li>Build and deploy efficient CRM</li>
                                        
                                       </div>
                                    <div class="col-sm-4">
                                        <li>Configure and implement robust IT Infrastructure</li>
                                        <li>Implement Change Management</li>
                                       
                                    </div>
                                    <div class="col-sm-4">
                                          <li>Reduce time to market with optimized solutions</li>
                                        <li>Reduce overheads costs and offer integrated solutions</li>
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