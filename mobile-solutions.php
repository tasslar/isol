<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Planning.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              
              <h3>Mobile Application Development India</h3>
<h3>iPhone Application Development India</h3>

<p>We have an in-depth knowledge and expertise in iPhone Application Development. In the current scenario, more and more businesses are trying to explore newer areas by reaching out to the iPhone users. If you are looking for the right partner to develop iPhone Apps, we can help you with our affordable and hi-tech services.</p>

<h3>Android Application Development India</h3>

<p>It has been very obvious that Googles Android OS is the major competitor in the mobile device arena. At Inysoltechnologies, we are passionate about developing Androiod Apps. With the help of our quality Andriod Apps comprehensive of various functionalities, you can enhance your business prospects stunningly.</p>

<p>Inysoltechnologies offer Mobile development Services for Android and IOS phones. We have an excellent team for mobile software applications developments. Mobile software applications are then organized on devices such as mobile phones, tablets, PDAs etc. If you are thinking of upgrading your Mobile phone, you can contact us. We offer best customized Mobile Development Solutions.</p>

<h4>WHAT WE OFFER</h4>

<p>Cross Platform Mobile Development Cross Platform Mobile Development Service refers to developing software for running on more than one type of hardware platforms. It considered being the most universal cross platform application. It has been written for every desktop computer and mobile platform. Avail with Cross Platform Mobile Development from us and run your Mobile on multiple types of hardware platforms.</p>

<h4>M-COMMERCE SERVICES</h4>

<p>M-Commerce service refers to wireless electronic commerce. It is been used for conducting commerce or business through a handy devices. Devices can be cellular phones or Personal Digital Assistant. Mobile commerce is usually called as 'm-Commerce' in which user can do any sort of transaction including buying and selling of the goods, asking any services, transferring the ownership or rights, transacting and transferring the money by accessing wireless internet service on the mobile handset itself. If you are thinking to have such kind of up gradation for your mobile, contact us.</p>

<h4>MAINTENANCES SERVICES</h4>

<p>Mobile phones have become an integral part in every body's life and it also helps in making your business successful. Like a website maintenance service, one also requires Mobile Maintenance services to up-grade ones mobile.</p>

<p>Inysoltechnologies is popularly known for Complete Technical Solution Provider. If you require the best services for your Mobile Phones, contact us you will definitely meet your requirements.</p>

<p>Mobile Application Development Chennai - Mobile Application Development India - <strong>Android Mobile Application Development Chennai - iPhone Mobile Application Development Chennai - Blackberry Mobile Application Development Chennai - Mobile Software Development Company Chennai - Mobile Software Development Company India</strong></p>
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
<form name="contactform" id="contactform" class="contactform" method="post" action="form.php">
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
				<h2 style="color:#fff;" title="top erp company in india" class="visible visible-first">Solutions</h2>
				<div id="line"></div>
				<ul>
					<li class="firstItem"><a title="erp in india" href="web-solutions.php">Web Solutions</a></li>
                    <li><a title="erp in india" href="mobile-solutions.php">Mobile Solutions</a></li>
					<li class="lastItem"><a title="erp in india" href="enterprise-application-development.php">Enterprise Application Development</a></li>
				</ul>			
             </div>
             
             </div>
            
	            
	        </div>
            </div>
        
        <!-- b2b-portal-development ends-->
       
      

        <!-- Call To Action -->



<?php include 'footer.php'; ?>