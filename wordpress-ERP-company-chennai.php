<?php include('header.php');?>

<div class="inner-banner"><img src="images/Client-List.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>Wordpress Application Development India</h3>
              <p>WordPress is an open source blogging tool and an effective Content Management System, preferred and used on more than 14 million websites. WordPress is based on MySQL and PHP and provides user friendly features, including a plug-in architecture and a template system, making it the most popular CMS on the Internet.</p>   
              <h3>Wordpress Website Development India</h3>  
              <h4>ADVANTAGES OF WORDPRESS FOR YOUR SITE
TOTALLY FREE</h4>
              <p>As an open source tool, WordPress does not incur costs and is completely free to install and use.</p>
              <h4>EASY TO USE</h4>
              <p>The most striking feature of WordPress is that its functions are simple, making any user an expert. The tool includes an inbuilt dashboard, where users can classify links with category, theme, tools and setting.</p>
              
              <h3>Wordpress Blog Development India</h3>
              <h4>SEO FRIENDLY</h4>
              <p>
WordPress sites are search engine friendly. Its structure is embedded with a self-ping feature, whereby every time the user updates the blog or anrticle, it clings to major search engines. Moreover, additional plug-ins can be embedded with the existing WordPress to enhance the reach of your site.</p>
			
              <h4>OWN DOMAIN NAME</h4>
              <p>WordPress is known for its self-hosting blogging platform. This self hosting facility lets users to choose hosting provider and install WordPress on it. It also lets the user create a custom domain with extensions such as www.yourcompany.com, instead of the usual yourcompany.blogspot.com.</p>
              
              <h3>Wordpress Theme Development India</h3>
              <h4>ADDITIONAL PLUG-INS AND THEMES</h4>
             <p>WordPress offers plenty of plug-ins and themes that is important for interface and navigation of your site. They are customizable for user requirements with downloading options.</p>
             <h3>Wordpress Plugin Development India</h3>
             <h4>WORDPRESS SERVICES OFFERED BY Inysol Innovative Technology Solutions </h4>
             <ul>             
			<li>WordPress Implementation & Setup</li>
			<li>WordPress Integration with Existing Website</li>
            <li>Custom WordPress Theme</li>
			<li>Design to Theme conversion</li>
			<li>Maintenance Services</li>
			<li>Plug-in Installation</li>
			<li>WordPress Customization</li>
             </ul>
             
             <p>wordpress software development india - wordpress website development india - <strong>wordpress blog development india - wordpress theme development india - wordpress plugin development india - wordpress ecommerce development india - wordpress shopping cart development india - wordpress shopping development india.</strong></p>
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