<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$connection = mysqli_connect("mysql57.websupport.sk", "tqzp6rak", "Dolna_4b", "tqzp6rak", 3311);
	if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
	}
	
$sql = mysql_query($dbc,"SELECT * FROM list") or die('Chyba:'. mysql_error());

	
while ($data = mysql_fetch_array($sql)){
$year = $data["a"];
echo $year;
}

?>

</body>
</html>