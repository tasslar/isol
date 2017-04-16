<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/digital-mark.jpg"></div>

<style>.portal_development h3, h4{ color:#0059ab;font-weight:bold; }.portal_development li{ list-style:disc; }.no-padding{ padding:0 !important; }.portal_demo { padding:15px 15px 15px 0; } 
#line { border-bottom: 1px solid #fff;margin-top: 10px;width: 100%; } .sidebar { background: #0059ab;color:#fff;float: left;padding: 10px;width: 28%; } .sidebar li a{ color:#fff; }
.sidebar li { list-style:none;margin-top: 10px; } .sidebar ul { padding-left:15px; }</style>
<div class="services-full-width-container">
        	<div class="container portal_development">
             <div class="col-sm-12">
             <!--<div class="col-sm-8">-->
              <h3 style="color:#EE2326; text-transform:uppercase;">Digital Marketing Services</h3>
                        <p>We all know that Digital Marketing Agency is the key to engaging visitors, but at Inysol Innovative Technology solutions, we also know that identifying the customer irrespective of the channel is crucial to make the precise decisions on how best to interconnect with clients. Our digital marketing services will help you understand the multichannel journey of the visitor and create digital communication strategy to drive sales.</p><wbr />

<p>We deliver complete digital marketing services built on the objectives that staple to you the most. We take considerable time to analyze your business and build a digital strategy to achieve your moneymaking business goals. Being in partnership we can enhance your online growth and even increase your returns.</p><wbr />

<p>Our digital marketing strategies help our clients get new customers and engage with surviving ones better, in turn, generate higher levels of ROI. We can assist you creating a unique digital marketing plan including PPC, SEO, SMO, SMM and E-Mail marketing to make sure you are getting the maximum return on investment from your advertising budget.</p>
<h3 style="color:#EE2326; text-transform:uppercase;">What make you participate in Digital marketing?</h3>
<p>Advertising or Promoting represents the best way for you to display your business in front of more and more customers, and to be at the pole position of their minds when they are having a buying decision. With the help of competent targeting capabilities, there is a possibility to maximize your business cost efficiently through Digital Marketing Strategies.</p>

<p>Whether you are looking forward to driving your sales, or merely to increase awareness of your business brand within your target viewers, advertising your business through Digital Media is the best ever solution you can make.</p>

<p>Trust us to carry out high-end Digital Marketing Services that can serve your business needs. Before the start, we do complete research to find out each and everything about your customers, products and brand to make assured that we build a complete digital strategy that works for you and your business. Accordingly, we outline a clear, concise plan that will get your business the best online impact and so you always be acquainted with what and how we are working for you.</p>

                    <br /><br />
                    
                    
              
           <!--  </div>-->
             
            <!--  <div class="col-sm-4 sidebar">              
				<h3 title="top erp company in india" class="visible visible-first" style="color:#fff;">Our Services</h3>
				<div id="line"></div>
				<ul>
					<li class="firstItem">Digital Marketting</li>
					<li>SEO(Search Engine Optimization)</li>
					<li>SMM(Social Media Marketting)</li>
					<li>SEM(Search Engine Marketting)</li>
					<li>SMO(Social Media Optimization)</li>
					<li>PPC</li>
					<li>Email Marketting</li>
					<li>Video Marketting</li>
					<li>Content Marketting &amp; Optimization</li>
					<li>Web Analytics</li>
					<li>SMS Marketting</li>
					<li>ORM(Online Reputation Management)</li>
					
				</ul>	
             </div>-->
             
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
        
        <!-- b2b-portal-development ends-->
       
      

        <!-- Call To Action -->
       

<?php include 'footer.php';?>