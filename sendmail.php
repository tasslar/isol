<?php 



if($_POST['name']){

    $name=$_POST['name'];

    $subject=" Contact Us - Enquiry: ".$_POST['subject'];

    $email=$_POST['email'];

    $comment=$_POST['message'];

//to mail

$to = "sales@inysol.com";


$message = '<html><body>';
$message .= '<h2>Contact Mail</h2>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$message .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:contact@Inysol Innovative Technology Solutions .com'. "\r\n";

//cc
//$headers .= 'Cc: Inysol Innovative Technology Solutions @gmail.com' . "\r\n";

//contactus mail

$retval = mail($to,$subject,$message,$headers);

if($retval)
{
	echo'           <div class="alert alert-success">
			<strong> Thanks for your message, we will reach you shortly</strong>
			</div>';
}
else
{
 echo '  ';
}	    

    }

?>





















