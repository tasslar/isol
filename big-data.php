<title>Inysol innovative Technology solutions - Big Data</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Big-Data.jpg" class="img-responsive"></div>
    
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
                  <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0px;">
                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
	      <p> Data streaming in from billions of sources can provide predictive insights into customers, business risks and operational efficiencies. But how can you cost-effectively analyze data from information silos and securely share analytics across your enterprise?</p>

<p>Inysols Big Data as a Service is helping businesses store, analyze, and protect their data; transforming their opportunity to understand customer behavior, optimize operations, manage risk, and enable innovation
</p> <h4>Our Technology Expertise Umbrella Includes</h4>
                 </div>
	            </div>
	        </div>
        </div>



<div id="blue-bg">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">THINGS TO KNOW</h3>
	                       <p>It is estimated that every day from all around the world including environment, banks, social media websites, images and videos over 2.5 quintillion bytes of data is created. And 90% of this data is created in the last 2 years alone.</p>
                           <h4>Definitely give rise to the Challenge</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                 <div class="shape">
                                   <a href="#">Uncertainty of the Data Management Landscape</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="shape">
                                   <a href="#">The Big Data Talent Gap</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                  <div class="shape">
                                   <a href="#">Getting Data into the Big Data Platform</a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                  <div class="shape">
                                   <a href="#">Synchronization Across the Data Sources</a>
                                </div>
                            </div>
                              
                    </div>    
                        <Div class="white-bg"><p>As more data sets, diverse sources are incorporated into an analytical platform the potential for time lags to impact data currency and consistency becomes our challenge.</p></Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Our Offerings</h3>
            <h4>Inysol's Big data Platform as a Service</h4>
             <p>Inysol provides advanced Big Data and Analytics solutions, to rapidly provide insights on operations, customers and products. We support predictive analytics, real-time dashboards, master data management and more.</p>
 
</div>
    </div>
    
             <div class="row">
            <div class="col-sm-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Our Services includes</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <li>Big Data Management</li>
                                        <li>Big Data Technology Strategy Definition</li>
                                        <li>Big Data Technology Use case Identification</li>
                                      </div>
                                    <div class="col-sm-4">
                                        <li>Big Data Infrastructure Set-up and Management</li>
                                        <li>Application Development and Maintenance</li>
                                        <li>Big Data Analytics</li>
                                    </div>
                                    <div class="col-sm-4">
                                         <li>Big Data Analytics Strategy Definition</li>
                                        <li>Big Data Business Use-case Identification</li>
                                        <li>Big Data Analytics Models / Framework- Development and Enhancement</li>
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