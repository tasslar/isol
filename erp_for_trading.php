<?php include('header.php');?>
<div class="inner-banner"><img src="images/Client-List.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>ERP for Trading Business</h3>
                        <p>TassTechnologies ERP system is a leading web-based enterprise solution for all your trading business. This ERP package consists of integrated business application with better decision making-tools. TassTechnologies ERP system provides an end-to-end solution that organizes and controls every aspect of business from order management, operations, supply-chain and logistics, to documentation, accounting and business intelligence reporting.</p>

<p>Our system enables your back-office to work more effectively, helps improve customer service, empowers your sales team to monitor trends, and manage true order profitability. All while providing the best financial control that you can expect from a web-based application.</p> 
<h3>ERP for Trading Business Modules</h3>
<ul class="list">
<li>Masters</li>
<li>Accounts</li>
<li>Sales</li>
<li>Purchase</li>
<li>Inventory</li>
<li>Payroll</li>
<li>Reminders</li>
<li>Reports</li>
</ul>
<h3>ERP for Trading Business Demo</h3>
<!--<div class="col-sm-12 no-padding">
						<div class="col-sm-6 portal_demo">
							<a data-fancybox-group="gallery" href="#" class="fancybox"><img alt="" src="images/excelanto-erp-for-traders-1.jpg" kasperskylab_antibanner="on"></a></div>
						<div class="col-sm-6 portal_demo">
							<a data-fancybox-group="gallery" href="#" class="fancybox"><img alt="" src="images/excelanto-erp-for-traders-2.jpg" kasperskylab_antibanner="on"></a>	
						</div>
						</div>
                       
                        <div class="col-sm-12 no-padding">
						<div class="col-sm-6 portal_demo">
							<a data-fancybox-group="gallery" href="#" class="fancybox"><img alt="" src="images/excelanto-erp-for-traders-3.jpg" kasperskylab_antibanner="on"></a>
						</div> 
						<div class="col-sm-6 portal_demo">
							<a data-fancybox-group="gallery" href="#" class="fancybox"><img alt="" src="images/excelanto-erp-for-traders-4.jpg" kasperskylab_antibanner="on"></a>
						</div> 
					</div>-->
                    
                    <p>ERP for Manufacturing Company Chennai - ERP for Manufacturing Company India - <strong>ERP for Manufacturing Company SME's Chennai - ERP for Manufacturing Company SME's India - Web Based ERP for Manufacturing Company Chennai - Web Based ERP for Manufacturing Company India - ERP for Manufacturing Company Demo Online - Web Based ERP for Manufacturing Company Demo Online</strong></p>
                    <div id="thanks"></div>
                    <style>textarea.form-control { height: 150px; }</style>
 <button class="btn-danger button_style" data-toggle="modal" data-target="#myModal" ata-dismiss="modal" style="margin: 0 0 2%;padding: 1%;">REQUEST DEMO</button>
<div class="modal" id="myModal" style="margin-top: 150px;">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header" style="background-color:#0059AB;color:white;">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
&times;</button>
<h3 class="modal-title" style="color:#fff;">REQUEST DEMO</h3>

</div>
<div class="modal-body">
<div id="thanks"></div>
<form name="contactform" id="contactform" class="contactform" method="post">
<div class="form-group">
<label for="contact-name">Name</label>
<input type="text" name="name" placeholder="Enter your name..." class="form-control"  id="contact-name" pattern="[a-zA-Z][a-zA-Z0-9\s]*"  required>
</div>
<div class="form-group">
<label for="contact-email">Email</label>
<input type="email" name="email" placeholder="Enter your email..." class="form-control"  id="contact-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   required>
</div>
<div class="form-group">
<label for="contact-subject">Subject</label>
<input type="text" name="subject" placeholder="Your subject..." class="form-control"  id="contact-subject" pattern="[a-zA-Z][a-zA-Z0-9\s]*" required>
</div>

<div class="form-group">
<label for="contact-message">Message</label>
<div class="col-sm4">
<textarea name="comment" placeholder="Your message..." class="form-control"  id="contact-message" pattern="[a-zA-Z][a-zA-Z0-9\s]*"  required></textarea></div>
</div>

<div class="modal-footer">
<input type="submit"  value="Submit" class="btn btn-info" id="formsubmit" name="submit">
</form>
</div>
</div>

</div>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <!-- Call To Action -->
        
     <script>
 
//twitter bootstrap script
 $("#contactform").submit(function(ev){
    ev.preventDefault();
   
    $.ajax({
 type: "POST",
 url: "process_product.php",
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

</script>                
             </div>
             
              <div class="col-sm-4 sidebar">              
				<h3 title="top erp company in india" class="visible visible-first" style="color:#fff;">Application Development</h3>
				<div id="line"></div>
				<ul>
					<li class="firstItem"><a title="top 10 erp company in india" href="erp_for_trading.php">ERP for Trading</a></li>
					<li><a title="top 10 erp company in india" href="erp_for_manufacturing_company_chennai.php">ERP for Manufacturing</a></li>
					<li><a title="top 10 erp company in india" href="erp_billing_software.php">ERP Billing Software</a></li>
					<li><a title="erp software in india" href="hospital-management-system-erp-chennai.php">Hospital Management System</a></li>
					<li><a title="erp software in india" href="church-management-erp-software-chennai.php">Church Management Software</a></li>
					<li><a title="erp software in india" href="college-management-erp-software-chennai.php">College Management System</a></li>
					<li><a title="erp software in india" href="customer-relationship-management-erp-software-chennai.php">Customer Relationship Management</a></li>
					<li><a title="erp software in india" href="gym-management-system-erp-chennai.php">Gym Management System</a></li>
					<li><a title="erp software in india" href="hostel-management-system-erp-chennai.php">Hostel Management System</a></li>
					<li><a title="erp software in india" href="hotel-management-system-erp-chennai.php">Hotel Management System</a></li>
					<li><a title="erp software in india" href="hr-management-system-erp-chennai.php">HR Management System</a></li>
					<li><a title="erp software in india" href="inventory-management-system-erp-chennai.php">Inventory Management System</a></li>
					<li><a title="erp software in india" href="multi-level-marketing-system-company-chennai.php">Multi-Level-Marketing System</a></li>
					<li><a title="erp software in india" href="super-market-management-system-erp-chennai.php">Super Market Management System</a></li>
					<li><a title="erp software in india" href="school-management-system-company-chennai.php">School Management System</a></li>
					<li><a title="erp software in india" href="construction_management_erp_software_chennai.php">Construction Management System</a></li>
					<li><a title="erp software in india" href="visa-processing-system-company-chennai.php">Visa Processing System</a></li>
					<li><a title="erp software in india" href="machinery-management-system-company-chennai.php">Machinery Management System</a></li>
					<li><a title="erp software in india" href="online-booking-software-development-chennai.php">Online Booking System</a></li>
					<li><a title="erp software in india" href="finance-management-erp-software-chennai.php">Financial Management System</a></li>
					<li class="lastItem"><a title="erp software in india" href="social-networking-software-development-chennai.php">Social Networking</a></li>
				</ul>	
             </div>
             
             </div>
            
	            
	        </div>
            </div>
        
        <!-- b2b-portal-development ends-->
       
      
 

        <!-- Footer -->

<?php include('footer.php');?>