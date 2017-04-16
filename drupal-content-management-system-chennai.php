<?php include('header.php');?>
<div class="inner-banner"><img src="images/Client-List.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>Drupal CMS Development India</h3>
              <p>Drupal is a free software package that allows you to easily organize, manage and publish your content, with an endless variety of customization.</p>     
              <p>Drupal is open source software maintained and developed by a community of 630,000+ users and developers. It's distributed under the terms of the GNU General Public License (or "GPL"), which means anyone is free to download it and share it with others. This open development model means that people are constantly working to make sure Drupal is a cutting-edge platform that supports the latest technologies that the Web has to offer.</p>
              
              <h3>Drupal CMS Development Benefits</h3>
              <p>Drupal is a publishing platform created by our vibrant community and bursting with potential. Use as-is or snap in any of thousands of free designs and plug-ins for rapid site assembly. Developers love our well-documented APIs. Designers love our flexibility. Site administrators love our limitless scalability.</p>
              <p>Drupal's content management features make it easy to create and manage your site.</p>
             <p>drupal cms development chennai - drupal cms development india -<strong> drupal cms development chennai - drupal cms development india - drupal cms web design chennai - drupal cms web design india - drupal cms software company chennai - drupal cms software company india</strong></p>
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
				<h2 style="color:#fff;" title="top erp company in india" class="visible visible-first">Services</h2>
				<div id="line"></div>
				<ul>
					<li class="firstItem"><a title="seo-company-chennai.php" href="seo-services.php">SEO Services</a></li>
                    <li><a title="CMS Web Design Services company in chennai" href="web-design-services-company-chennai.php">Web Design Services</a></li>
                    <li><a title="Drupal CMS company in chennai" href="drupal-content-management-system-chennai.php">Drupal CMS</a></li>
					<li class="lastItem"><a title="Wordpress CMS company in chennai" href="wordpress-ERP-company-chennai.php">Wordpress CMS</a></li>
				</ul>			
             </div>
             
             </div>
            
	            
	        </div>
            </div>
        
        <!-- b2b-portal-development ends-->
       
      

        <!-- Call To Action -->
       

<?php include('footer.php');?>