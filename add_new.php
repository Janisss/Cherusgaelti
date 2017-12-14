<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ADMIN - CHERUSGAELTI</title>
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<style type="text/css">
	.container{
		max-width: 600px;
		margin-left: auto;
		margin-right: auto;
	}
</style>

<div class="container-fluid">
  <div class="container">
  	<form action="add_new.php" method="post">
  		<h1>Neuer Bühnensponsor</h1>
  		<h4>Name:</h4><input type="text" name="neuname">
  		<h4>Link:</h4><input name="neulink" type="text" placeholder="www.google.ch">
  		<input type="submit" name="submit-buhne">
  	</form>
<?php
	
	require  'medoo.php';
 
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'betreuu1_cherusdatabank',
	'server' => 'betreuu1.mysql.db.hostpoint.ch',
	'username' => 'betreuu1_admin',
	'password' => 'ukNZmRv8',
	'charset' => 'utf8',
 
]);
	
 if(isset($_POST['submit-buhne'])) {
	 $bandname = $_POST['neuname'];
	 $bandlink = $_POST['neulink'];
	 $database->insert("cherus_bühnensponsoren", [
	"bandname" => "$bandname",
	"bandlink" => "$bandlink"
	]);
	 echo "<div class='alert alert-info' role='alert' style='color:#209D4C'>Saved!!!</div>";
};
	
?>
<hr>
  </div></div>


<div class="container-fluid">
  <div class="container">
  	<form action="add_new.php" method="post">
  		<h1>Neuer Gönner oder andere Partner</h1>
  		<h4>Name:</h4><input type="text" name="neunamegonner">
  		<h4>Link:</h4><input name="neulinkgonner" type="text" placeholder="www.google.ch">
  		<input type="submit" name="submit-gonner">
  	</form>


<?php
	if(isset($_POST['submit-gonner'])) {
	 $bandnameg = $_POST['neunamegonner'];
	 $bandlinkg = $_POST['neulinkgonner'];
	 $database->insert("cherus_gonner", [
	"bandname" => "$bandnameg",
	"bandlink" => "$bandlinkg"
	]);
	 echo "<div class='alert alert-info' role='alert' style='color:#209D4C'>Saved!!!</div>";
};
?>

<hr>
  </div>
</div>
<div class="container-fluid">
  <div class="container">
  	<form action="add_new.php" method="post">
  		<h1>Neue Guggenmusik</h1>
  		<h4>Name:</h4><input type="text" name="guggen-name">
  		<h4>Link:</h4><input name="guggen-link" type="text" placeholder="www.google.ch">
  		<input type="submit" name="submit-guggen">
  	</form>
  

<?php
	if(isset($_POST['submit-guggen'])) {
	 $bandnamegu = $_POST['guggen-name'];
	 $bandlinkgu = $_POST['guggen-link'];
	 $database->insert("cherus_guggen", [
	"guggen-name" => "$bandnamegu",
	"guggen-limk" => "$bandlinkgu"
	]);
	 echo "<div class='alert alert-info' role='alert' style='color:#209D4C'>Saved!!!</div>";
};
?>
<hr>
</div>
</div>

<div class="container-fluid">
  <div class="container">
  	<form action="add_new.php" method="post">
  		<h1>Neue Guggensponsoren</h1>
  		<h4>Name:</h4><input type="text" name="neue-name">
  		<h4>Link:</h4><input name="neue-link" type="text" placeholder="www.google.ch">
  		<input type="submit" name="submit-neue">
  	</form>
  

<?php
	if(isset($_POST['submit-neue'])) {
	 $neuenamegu = $_POST['neue-name'];
	 $neuelinkgu = $_POST['neue-link'];
	 $database->insert("cherus_neue", [
	"neue-name" => "$neuenamegu",
	"neue-link" => "$neuelinkgu"
	]);
	 echo "<div class='alert alert-info' role='alert' style='color:#209D4C'>Saved!!!</div>";
};
?>
</div>
</div>
</body>
</html>