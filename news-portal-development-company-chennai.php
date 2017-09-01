<?php include('header.php');?>
<div class="inner-banner"><img src="images/Client-List.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>News Portal Development India</h3>
              <p>News Portal is an online communication medium for internet users which are read all over the world. Inysol Innovative Technology Solutions  a leading Web Development company, provide an appealing and efficient news portal development services.

The news portal development allows to publish publications, press releases, columns, articles, blogs and other news related content. We create and develop innovative website, bespoke and modern style portals with content management system (CMS). We provide user-friendly website designs in order to navigate easily for potential readers along with SEO concepts for higher visibility in page rankings.</p>
              
              <h3>News Website Development India</h3>
              <p>We provide sections of local and international news, lifestyle, entertainments, jobs, educations, business, science & technology, and other features exclusively for the news portal development.</p>
              <h4>OUR FEATURES INCLUDE:</h4>              
              <ul>
              <li>News Website and Web Portal Development</li>
              <li>Customize news portal development</li>
              <li>Customize News Portal design</li>
              <li>Integrating Content Management System (CMS)</li>
              <li>Very good interface</li>
              <li>Maintenance and Support</li>
              <li>images and and Video posts</li>
              <li>Add/delete/edit features</li>
              <li>Multilevel features (Admin, Author, Users and more)</li>
              <li>Add/edit/delete advertisement or banner</li>
              <li>News highlight</li>
              <li>Easy managing administration panel</li>
              <li>Latest news update</li>
              <li>Polls</li>
              <li>SEO features and many more!</li>
              </ul>
              
              <h3>Online News Website India</h3>
              <p>Inysol Innovative Technology Solutions  is a professional web development company and provides excellent news portal development services, implementing new and advanced features. Our professional team of web developers is enthusiastic and energetic in creating variant website components.</p>              
             <p>News Portal Development Chennai - News Portal Development India - <strong>News Website Development Chennai - News Website Development India - Online News Portal Development Chennai - Online News Portal Development India - Tamil News Portal Development Chennai - Telgu News Portal Development India - Hindi News Portal Development India - Kannada News Portal Development India - Malayalam News Portal Development India</strong></p>
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

</script>               </div>
             
              <div class="col-sm-4 sidebar">              
				<h2 style="color:#fff;" title="top erp company in india" class="visible visible-first">Portal Development</h2>
				<div id="line"></div>
				<ul>
					<li class="firstItem"><a title="CMS B2B Directory Portal Development" href="portal-development.php">B2B Directory Portal Development</a></li>
                    <li><a title="best erp solution software company in india" href="trading-portal-development-chennai.php">Trading Portal Development</a></li>
					<li class="lastItem"><a title="top erp company in india" href="news-portal-development-company-chennai.php">News Portal Development</a></li>
				</ul>			
             </div>
             
             </div>
            
	            
	        </div>
            </div>
        
        <!-- b2b-portal-development ends-->
       
      



<?php include('footer.php');?>