<?php

//variable for database connection
require "connections.php";
$week = 5;
//variable for database connection

require_once('../PHPMailer/class.phpmailer.php');
$mail = new PHPMailer();

$mail = new PHPMailer();

// Email Variables
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the server
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "reminder@mcph.ee";    // GMAIL username
$mail->Password   = "$emailpassword";         // GMAIL password

$mail->SetFrom('reminder@mcph.ee', 'Steve McPhee');
//$mail->AddReplyTo('reminder@mcph.ee', 'Steve McPhee');


// Email Subject & Body Content
$mail->Subject    = "You haven't submitted your picks for HSC yet.";
//$body             = file_get_contents('contents.html');
$body = "Yo. This is a reminder that you haven't submitted your picks for this week. They are due at 1pm EST on Saturdays. Get'er done!  http://skyhook59.dyndns-server.com/HSC2013  or http://http://69.157.5.154/HSC2013";
$body             = eregi_replace("[\]",'',$body);

$mail->MsgHTML($body);


//open DB connection
$con = mysql_connect($host,$dbusername,$password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("$database", $con);

$query = "SELECT email, name FROM users  WHERE  username NOT IN(SELECT DISTINCT username FROM Picks  WHERE week = $week)";
$results = mysql_query($query);




//Loop through the email addresses and send out emails to each
//TODO the loop is sending to 1, then 1,2 then 1,2,3, then 1,2,3,4 
// no loop needed? 
while( ($result = mysql_fetch_array($results)))
{
	$emailaddress = $result['email'];
	$name = $result['name'];

$address = "$emailaddress";
$mail->ClearAllRecipients( );
$mail->AddAddress($address, "$name");


//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
/*
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
*/
echo '<pre>';
var_dump ($mail);
echo '</pre>';

}   

// close DB connection
mysql_close($con);

?>
