<?php
if(isset($_POST['submit'])) {
	$prijemca = $_POST['prijemca'];
	$emailbody =  
	'Name: '.$_POST['meno']."\n"
	.'Firma: '.$_POST['firma']."\n"
	.'Telefon: '.$_POST['tel']."\n"
	.'E-mail: '.$_POST['email']."\n"
	.'Nachricht '.$_POST['text']."\n";
	
	mail($prijemca, '-> Cherusgaelti EMAIL', $emailbody ,'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n");
	header("Location:./kontakt.php");
	
}
?>