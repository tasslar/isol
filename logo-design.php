<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/logopage.jpg"></div>


        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">Logo Design</h3> 
	                    <p>
 We're an Web Development agency that specializes in logo design, website design, and business branding.  Our entire mission is to make your business look great. That means giving you custom design that's affordable, fast, and hassle-free.A logo is a visual representation of the brand or organization, and designing a logo is primarily a process of working towards communicating the essence of the brand graphically, effectively. The logo is not just a graphic but it is the embodiment of an organization - of its area of work, it's ethos, its core values and so on.
Inysol Innovative Technology solutions can develop your brand in your market by creating the perfect logo design. We assists you in creating your first positive impression. Our logo design team comprises of best logo designers in the industry who help you communicate your image clearly and powerfully to your intended target audience.


	                	</p>
                        
 
                        
	                </div>
	            </div>
	        </div>
        </div>
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">Why Choose</h3>
	                    <p>
						
Inysol Innovative Technology solutions make professional websites for your way and use our website design and development experience to your business and more popularity in your profession. We offer a wide range of website design and development,What we design is a direct reflection of your brand, we aim for each experience to be purposely built and engaging. From logo development, packaging, environmental design, annual reports to national campaigns - our focus is to ensure the audience is listening. By defining a brand's graphic vision, we craft innovative visual stories that attract the target audience and create long term success.

 
	                	</p>
                        
 
                        
	                </div>
	            </div>
                <br>
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


        <!-- Services -->
       
      

        <!-- Call To Action -->
       


<?php include 'footer.php'; ?>