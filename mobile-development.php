<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/Android-App-Development.jpg" class="img-responsive"></div>

        
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;">Our android apps run glitch free across 80% android devices to maximize revenues</h3>
	                    <p>
	                 At Openxcell, we’re proud to offer a range of native mobile app development services, including Android app development. Our native Android apps are built from the ground up to take advantage of the functionality and characteristics that make this the world’s fastest growing mobile platform, and each app leverages those qualities to the utmost. When it comes to Android app development, we believe that full customization is the key, not the exception. Cookie-cutter solutions result in cookie-cutter apps – the sameness that drives consumers away from your app. Our groundbreaking, forward-thinking stance ensures that your uniqueness shines through.
	                	</p>
                        
   <h3 style="color:#EE2326; text-transform:uppercase;" >Our Android App Development Team</h3>
	                    <p>
	               One of the many characteristics that set Openxcell apart from the crowd of other Android app designers out there is our team. Our large team is comprised of Android app developers with the skills, creativity, initiative and expertise necessary to not only build a great app, but to build one that’s reliable, fully functional, and is customized to your business brand and your target audience.

Our Android app designers are tech-obsessed. They love what they do, and you’ll love what they do, too. The results speak for themselves – if you want a polished, flawless, native Android app, then we invite you to contact our Android app development company today.
	                	</p>
                          <h3 style="color:#EE2326; text-transform:uppercase;">Why consider a native Android app?</h3>
	                    <p>
	         We’re an app development company that believes in leveraging each app store to the fullest, but also making the most of the various operating systems out there. Android is very different from iOS, and our android app designers have the skills and experience necessary to capitalize on that difference. Our native Android app development services ensure that your app is optimized for speed, performance, look and feel on devices running different flavors of Android, from Ice Cream Sandwich to KitKat.

We infuse the platform’s DNA into your app. It’s more than building off the Android skeleton – our Android app developers design your app with the core qualities and capabilities of Android in mind. The result is an app that’s seamless, streamlined and designed to provide performance, power and offer a high quality user experience.
	                	</p>
                          <h3 style="color:#EE2326; text-transform:uppercase;">What Makes Openxcell Different for Android App Development?</h3>
	                    <p>
	            At Openxcell, we’re pretty proud of the differences between us and our competitors. Our industry-best pricing is certainly one major advantage, ensuring that even small and midsized companies can take advantage of Android app development solutions without breaking the bank. However, our robust team is another advantage, ensuring that we can provide in-house solutions throughout every step of the app development process, from concept to design to bug testing to final polishing. Openxcell is different, and we invite you to come experience that difference.

Another thing that sets Openxcell apart from other Android app development companies out there is our experience. We’ve been there before. With over 250 apps developed to date on both Android and iOS, our experience and expertise ensure that you have the smoothest process possible, and that your project isn’t derailed by hurdles and complications that can affect new a new Android app development company. Our apps have seen immense success, and we’re proud to extend that to you.
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



<?php include 'footer.php'; ?>