
<?php

/* These are the variable that tell the subject of the email and where the email will be sent.*/





/* These will gather what the user has typed into the fieled. */

$nameField = $_POST['name'];
$EmailField = $_POST['email'];
$MobileField = $_POST['mobile'];
$queryField = $_POST['message'];
$project = $_POST['project'];
$site= $_SERVER['SERVER_NAME'];

$emailSubject = 'response from '.$project.' : '.$site.'';

$mailto = 'jwalaprasaddubey@gmail.com';






$url=$_POST['current_url'];
$ip = $_SERVER['REMOTE_ADDR']; 

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = <<<EOD
<br><hr><br>
Name: $nameField<br>
Email: $EmailField<br>
Phone: $MobileField<br>
query: $queryField <br>
IP: $ip <br>
EOD;

$headers = "From: Rise Resort Residences\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
header('Location: thankyou.php');
exit;
//header( 'Location: index.html' ) ;
//header('Refresh: 2; URL=index.html');
?>

