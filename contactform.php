<?php 

include('header.php');
?>

<div id="contact-page">
  <div class="container">
  	<div class="row">
    	  
          
         <br/>
          
		 
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
	echo'<div class="alert alert-success">
             <strong> Thanks for your message, we will reach you shortly</strong>
             </div>';

}
else
{

    echo'<div class="alert alert-success">
             <strong> Oops,Some Technical Issue, Please try Again </strong>
             </div>';
}	    


    }
?>
</div></div></div> 
<?php
include('footer.php')

?>