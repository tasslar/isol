<title>Inysol Innovative Technology solutions - Careers</title>
<?php include 'header.php'; 

if($_POST['name']){



    $name=$_POST['name'];
    $subject=" Reuest Demo - Enquiry: ".$_POST['subject'];
    $email=$_POST['email'];
  
    $comment=$_POST['comment'];

//to mail

$to = "hr@inysol.com";


$message = '<html><body>';

$message .= '<h2>Career Page</h2>';

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

if($retval)

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
<div class="inner-banner"><img src="images/Career-Opportunity.jpg" class="img-responsive" alt="HTML5 Application Developments"></div>


        
        
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3 style="color:#EE2326; text-transform:uppercase;"> Career Opportunity</h3>
	                    <p>
	                    We Inysol Innovative Technology solutions focus on providing best possible service to every single client. Our greatest assets are our employees and we invite like-minded people to join us and help us grow. We appreciate creativity, brilliance and hard work. Innovative ideas are always welcomed in our company.

We believe in encouraging our employees so that they can work at their best and give us the finest performance. We even reward our employees according to their performance. If you are looking for a satisfying job in a fast-growing web development company that offers good medium of exchange and amazing insentives along with excellent technical satisfaction

If you are enthusiastic, ambitious and want a responsible position in a global, growing company,
	                	</p>
 
 <div id="thanks"><?php print $Message;?></div>

<form name="contactform" id="contactform" class="contactform"  method="post" action="form1.php"> 
                    <div class="form-group col-sm-4">
                       <input type="text" name="name" placeholder="Enter your name..." class="form-control"  id="contact-name" pattern="[a-zA-Z][a-zA-Z0-9\s]*" value="<?php echo htmlspecialchars($_POST['name']); ?>" >
                    </div>
                    
                    
                    <div class="form-group col-sm-4">
                        <input type="email" name="email" placeholder="Enter your email..." class="form-control"  id="contact-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required >
                    </div>
                    
                    <div class="form-group col-sm-4">
                       <input type="text" name="subject" placeholder="Your subject..." class="form-control"  id="contact-subject" pattern="[a-zA-Z][a-zA-Z0-9\s]*" required>
                    </div>
                    
                    <div class="form-group col-sm-12">
                        <textarea name="comment" placeholder="Your message..." class="form-control"  id="contact-message" pattern="[a-zA-Z][a-zA-Z0-9\s]*"></textarea>
                    </div>
                     
                    <div class="modal-footer" style="    border-top: none !important;">
                    <input type="submit"  value="Submit" class="submit" id="formsubmit" name="submit">
                    </div>
                </form>
 
 
 
 
 
<!--   <div class="modal-body">
<div id="thanks"></div>
<form name="contactform" id="contactform" class="contactform"  method="post" action="form1.php"> 
<div class="form-group">
<label for="contact-name" class="col-sm-2 control-label" >Name</label>
<input type="text" name="name" placeholder="Enter your name..." class="form-control"  id="contact-name" pattern="[a-zA-Z][a-zA-Z0-9\s]*" value="<?php echo htmlspecialchars($_POST['name']); ?>" >
<?php ///echo "<p class='text-danger'>$errName</p>";?>
</div>
<div class="form-group">
<label for="contact-email" class="col-sm-2 control-label">Email</label>
<input type="email" name="email" placeholder="Enter your email..." class="form-control"  id="contact-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required >
</div>
<div class="form-group">
<label for="contact-subject" class="col-sm-2 control-label">Subject</label>
<input type="text" name="subject" placeholder="Your subject..." class="form-control"  id="contact-subject" pattern="[a-zA-Z][a-zA-Z0-9\s]*" required>
</div>

<div class="form-group">
<label for="contact-message">Message</label>
<div class="col-sm4">
<textarea name="comment" placeholder="Your message..." class="form-control"  id="contact-message" pattern="[a-zA-Z][a-zA-Z0-9\s]*"></textarea></div>
</div>

<div class="modal-footer" style="    border-top: none !important;">
<input type="submit"  value="Submit" class="btn btn-info" id="formsubmit" name="submit">
</form>
</div> -->
</div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	                </div>
	            </div>
	        </div>
        </div>

<?php include 'footer.php'; ?>