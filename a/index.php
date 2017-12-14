<style type="text/css">
	.bal{
		font-family: Gotham, Helvetica Neue, Helvetica, Arial," sans-serif";
		font-size: .8em;
		background-color: #277CC0;
		text-transform: uppercase;
		padding: 5px;
		color: white;
		border-bottom: 1px dashed white;
	}
	span{
		color: #dadada;
	}
	a.butt{
		color: white;
		background-color: #222222;
		padding: 5px;
		margin-top: 15px;
		text-decoration: none;
		text-transform: uppercase;
		font-size: .8em;
	}
</style>

<?php
 
require  'medoo.php';
 
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'betreuu1_janis',
	'server' => 'betreuu1.mysql.db.hostpoint.ch',
	'username' => 'betreuu1_admin',
	'password' => 'ukNZmRv8',
	'charset' => 'utf8',
 
]); 

$cislo = $database->select("my_test", ["nmbr","Meno"]);

foreach($cislo as $data)
{
	echo "<div class='bal'>"."<span>NUMBER: </span>".$data["nmbr"]." || "."<span>NAME: </span>".$data["Meno"]."</div>";
}

?>
<br>
<a href="http://brickstone.design/php/new.html" class="butt">add</a>