<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Leitura </title>
</head>
<body>

</body>
</html>
<?php 

$filename = $_GET['id'];
$valorArq = file("Cadastro/$filename");
$title = trim($filename, ".txt");


for ($i=0; $i < count($valorArq); $i++) { 
	 echo $valorArq[$i];
}
 ?>