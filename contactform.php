<title>Inysol Innovative Technology solutions - Contact</title>
<?php include 'header.php'; ?>
<div class="inner-banner"><img src="images/contact-banner.jpg" alt="contact us" class="img-responsive"></div>
 
 <?php
if($_POST['name']){



    $name=$_POST['name'];
    $subject=" ContactPage : ".$_POST['subject'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

//to mail

$to = "info@inysol.com";

$message = '<html><body>';

$message .= '<h2>Contact Form</h2>';

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$message .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['comment']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= $_POST['email']. "\r\n";
//cc

//contactus mail
$retval = mail($to,$subject,$message,$headers);
 
//Replay Mail

/*$r_subject="Confirmation mail";
$r_message="Thanks For Pinging Us";
$replay = mail($email,$r_subject,$r_message,$headers);*/

if($retval ==1)

{
	$Message = '<div class="alert alert-success">
             <strong> Thanks for your message, we will reach you shortly</strong>
             </div>';

}
else
{

    $Message = '<div class="alert alert-success">
             <strong> Oops,Some Technical Issue, Please try Again </strong>
             </div>';
}	    


    }
?>
<div id="contact-page">
  <div class="container">
  	<div class="row">
	<?php print $Message;?>
    	 <div class="col-sm-9 col-xs-12">
          <img src="images/contact-phone.jpg" class="img-responsive"/>
         <br/>
         <h2>Send your Message</h2>
          <div class="contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <p id="mail_message"></p>
                 <div id="thanks"></div>
                <form name="contactform" id="contactform" class="contactform" method="post" action="contactform.php">
                    <div class="form-group col-sm-4">
                        <input type="text" name="name" placeholder="Enter your name..." class="form-control"  id="contact-name" pattern="[a-zA-Z][a-zA-Z0-9\s]*"  required>
                    </div>
                    
                    
                    <div class="form-group col-sm-4">
                        <input type="email" name="email" placeholder="Enter your email..." class="form-control"  id="contact-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   required>
                    </div>
                    
                    <div class="form-group col-sm-4">
                        <input type="text" name="subject" placeholder="Your subject..." class="form-control"  id="contact-subject" pattern="[a-zA-Z][a-zA-Z0-9\s]*" required>
                    </div>
                    
                    <div class="form-group col-sm-12">
                         <textarea name="comment" placeholder="Your message..." class="form-control"  id="contact-message" pattern="[a-zA-Z][a-zA-Z0-9\s]*"  required></textarea>
                    </div>
                     
                    <div class="modal-footer" style="    border-top: none !important;">
                    <input type="submit"  value="Submit" class="submit" id="formsubmit" name="submit">
                    </div>
                </form>
             </div><!--contact-wrap -->

         </div><!--form -->
         <div class="col-sm-3 col-xs-12">
              <div class="contact-address">
                     <h3>Head Office &nbsp;<img src="images/usa-flag.jpg" /></h3> 
                         <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"> <p>#43,South Links Blvd Suite,<br/>
                                    121, California, CA 95100, USA.</p>
                                </div>
                                </div>
                       
                            <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"><p>+1 (858) 224 5534</p> </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10"><a href="mailto:sales@inysol.com" target="_blank">sales@inysol.com</a></div>
                            </div>
                            <div class="row">
							
							<div class="col-xs-1 col-sm-1"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
							
							
                                <div class="col-xs-1 col-sm-1"></div>
								
                                <div class="col-xs-10 col-sm-10"><a href="mailto:info@inysol.com" target="_blank">info@inysol.com</a></div>
                            </div>
                     </div>
                            <!-- -->
                         <div class="contact-address">       
                            <h3 style="margin-top:10px;">Zone#1 Office &nbsp;<img src="images/india-flag.jpg" /></h3> 
                           <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"> <p>101, Silver Heights<br/>
                            Sundar Nagar, Kalina, <br/>
                            Mumbai 400029, India</p>
                                </div>
                                </div>
                         
                            <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"><p>+91-99630 58571</p></div>
                            </div>
                          </div>   
                             <!-- -->
                             <div class="contact-address">  
                             <h3 style="margin-top:10px;">Zone#2 Office &nbsp;<img src="images/india-flag.jpg" /></h3> 
                         <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif">  <p>Sipcot IT Park, 
                            Siruseri,<br/>
                            Chennai 603103, India</p>
                                </div>
                                </div>
                        
                            <div class="row">
                                <div class="col-xs-1 col-sm-1"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                <div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"><p>044 - 433 284 99</p></div>
								
								<div class="col-xs-1 col-sm-1"><i class="fa fa-mobile" aria-hidden="true"></i></div>
								<div class="col-xs-10 col-sm-10" style="font-family:Arial, Helvetica, sans-serif"><p>+91-73583 03167</p></div>
								
								
<!--<div class="col-xs-1 col-sm-1"><i class="fa fa-mobile" aria-hidden="true"></i> 
<div class="col-xs-11 col-sm-11" style="font-family:Arial, Helvetica, sans-serif"><p>+91-73583 03167</p></div>
 
                     		 </div> -->
                              
                              </div>
                     </div>
         
         </div><!--address -->
    </div>
  </div>

</div>

 
<?php include 'footer1.php'; ?>