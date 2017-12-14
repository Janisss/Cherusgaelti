<?php

 if(isset($_POST['submit'])) {
	 $varmeno = $_POST['name'];
	 $varnumber = $_POST['number'];
	 
	header("Location:http://brickstone.design/php/");	
};

require  'medoo.php';
 
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'betreuu1_janis',
	'server' => 'betreuu1.mysql.db.hostpoint.ch',
	'username' => 'betreuu1_admin',
	'password' => 'ukNZmRv8',
	'charset' => 'utf8',
 
]);
 
$database->insert("my_test", [
	"nmbr" => "$varnumber",
	"Meno" => "$varmeno"
]);

?>