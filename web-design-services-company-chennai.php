<?php include('header.php');?>

<div class="inner-banner"><img src="images/Client-List.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
              <div class="col-sm-8">
              <h3>Web Design Company India</h3>
              <p>It always feels wonderful when we have things as we want them to be. With an exclusive business goal you often need some vibrant invention for attracting consumers towards your business. Having a new custom designed website helps to enhance your sales and expose you to thousands of new clients, because nothing is worthier than satisfying the consumer with exactly what he needs.</p>                  
             
              
              <h3>Web Development Company India</h3>
              <p>Web Design is something beyond technique. A website is often the first impression of a company for any customer, hence you need to consider many aspects in order to develop a professional, imposing and instinctive site. The custom website we design will convey the strongest image to your client's desire.</p>
              
              <h3>Website Development Company India</h3>
              <p>The professional & creative designing team at Tasstechnologies aims at providing you the edge you need to put yourself strongly in the competition. Our custom website design service would give you an opportunity to help you & your business become a major Internet success. And your success will make us proud.</p>
             <p>web design company chennai - web design company india - <strong>web development company chennai - web development company india - website development company india - website development company chennai - joomla web development company chennai - joomla web development company india</strong></p>
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