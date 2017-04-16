<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/websolu.png"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>Web Design and Development Company</h3>
              <p>Inysoltechnologies offer you with great quality web design services for your website. The designing part on your website plays the pivotal role as it attracts the targeted customers. An attractive design makes your visitors hook to the home page. It can be the key factor of their transition towards purchasing your service and products as well.</p>

<p>It is important to get the best design for the website. You should contact us as for providing the unique and innovative web design that adds a level to the website. Here at Inysoltechnologies we have experienced professional team of designers who are dedicated in providing you with best design for your website.</p>

<p>Here we have great team of web developers who provide you with best website development services. Our customers can easily compare our service charges with other leading web development companies. The experienced and professional development team is dedicated and devoted to deliver the project right on time.</p>

<p>We guarantee that you will never get such great quality services elsewhere. Here at our organization we prefer working with such skilled people who have at least 5 years of industry experience. We aim to deliver the projects right on time and also at one go.</p>

<p>Contact us for best web design services and give your business a kick start.</p>
<br>
<p>Web Design and Development Companies in Chennai - Web Design and Development Companies in India - <strong>Web Design Company in Chennai - Web Design Company in India - Website Designing Company Chennai - Website Designing Company India</strong></p>
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