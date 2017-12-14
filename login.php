<?php
if(isset($_POST['submit-login'])) {
	$meno = $_POST['name-login'];
	$heslo = $_POST['passwort-login'];
		
	if($meno == "info@cherusgaelti.ch" && $heslo == "4460"){
		require './add_new.php';
	}
	else{
		echo "name und passwort nicht erkannt";
	};
}
?>