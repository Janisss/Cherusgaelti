<?php
if(isset($_POST['submit'])) {
	$emailbody =  
	'Name: '.$_POST['meno']."\n"
	.'Firma: '.$_POST['firma']."\n"
	.'Telefon: '.$_POST['tel']."\n"
	.'E-mail: '.$_POST['email']."\n"
	.'Betreff '.$_POST['text']."\n";
	
	mail('182.dude@gmail.com', '-> Cherusgaelti EMAIL - Sponsoren anfrage', $emailbody ,'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n");
	header("Location:./partner.html");
	
}
?>