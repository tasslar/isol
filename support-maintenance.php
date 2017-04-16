<title>Inysol innovative Technology solutions - Support Maintenance</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Support-Maintenance.jpg" class="img-responsive"></div>

    
    
    
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">Overview</h3>
	                   
                        
                        <p>
	                   Legacy applications often are complex, resist change/integration and are costly to maintain. However, they contain the time tested business knowledge, distilled over a long period time. How best to evolve or reuse the time tested legacy IT Assets, under changing business, economic and IT environments, is a dilemma every organization has to address. Many have tried solving the aging legacy paradox by rewriting it in new technology or replacing with COTS. But, most have failed to eliminate the legacy. Not because of the technical feasibility of such rewrite, but due to the time, effort and risk associated with these approaches.</p>
 <h4>Our Technology Expertise Umbrella Includes</h4>
 <div align="center"><img src="images/support-maintenance.png" class="img-responsive" /></div>
 
<p> The Inysol's APSM Services provides full support and essential maintenance to ensure issues are identified early, risks mitigated, and emergency engineering is on standby should your application need more help.</p>

<p>We have years of experience in executing maintenance projects. Our team of experienced consultants has been successfully managing maintenance projects of local clients as well as offshore ones.
</p>
<p>The quality of product deployment, training and support has everything to do with customer success and satisfaction. We offer annual maintenance plans which are tailor-made as per the client's requirement. If required we depute technical team which works at the client site for the system execution or support as per requirement.  </p>	                
</div>
	            </div>
	        </div>
        </div>



<div id="blue-bg">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">THINGS TO KNOW</h3>
	                    <p>Most organizations have implemented their IT systems-either ERPs or custom applications-to streamline and automate their business processes. The level of from-the-ground-up insights available to the team performing day-to-day application support and maintenance goes untapped in many organizations. ERPs, or any form of IT systems, were implemented to gain operational efficiencies. Often, after the system's implementation, most IT organizations look for enhancements or new projects, but the focus also has to be around the adoption of the implemented processes and system.</p>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                 
                            </div>
                             <div class="col-sm-3">
                                <div class="shape">
                                   <a href="#">Issues and Challenges</a>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                
                            </div>
                             <div class="col-sm-3">
                              
                            </div>
                    </div>    
                        <Div class="white-bg"><p>One of the survey's most troubling findings is that ASM consumes four of every 10 dollars in the IT budgets of large organizations and also, many organizations expect these application-related costs to continue to increase</p>

<p>HCL survey makes a connection between how the reactive use of ASM is hindering IT organizations' ability to undertake business transformation projects, IT organizations were more proactive with ASM instead of being reactive, using which they could have saved easily free up to 30 percent of money and time from their existing ASM organization, both insourced or outsourced, to focus on transformational activities</p>
<p>One of the top ASM problems confronting IT departments is prioritizing application problems and service requests</p>
</Div>
  	                </div>
	            </div>
	        </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 services-full-width-text wow fadeInLeft" style="margin-bottom:0">
            <h3 style="color:#EE2326; text-transform:uppercase;">Offerings</h3>
            <h4>Inysol's APSM Services</h4>
           <p> Inysol's APSM Services provides cost-effective and dependable application maintenance and support services to customers. Its expertise spans Microsoft Technologies, J2EE, Java, Oracle, SAP, as well as other platforms, databases, languages, software, and enterprise applications.</p>

<p>Inysol's in-depth understanding of how technology can be used to facilitate your company's business processes, and its extensive industry/domain expertise, allow you to get the most out of your IT investments by reducing your cost of maintenance and support for your application portfolio.
</p>        </div>
    </div>
    
        <div class="row">
            <div class="col-sm-6">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default offer-default">
                            <div class="panel-heading offering-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Benefits</a>
                                </h4>
                            </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                <li>Lower recurring cost of maintaining existing applications</li>
                                <li>Improved quality and consistent services levels</li>
                                <li>Lower risk of downtime</li>
                                <li>Greater end-user satisfaction</li>
                            </div>
                        </div>
                    </div>
                    
                 
                    <!-- -->
             </div>
    </div><!--col-sm-6 -->
            
           <div class="col-sm-6">
                    <div class="panel-group" id="accordion">
                       <div class="panel panel-default offer-default">
                        <div class="panel-heading offering-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Service offered</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body offer-body">
                                <li>Legacy application maintenance</li>
                                <li>Network operations center services</li>
                                <li>Customer care services</li>
                                <li>Help-desk services</li>
                                <li>Tech-support services</li>
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