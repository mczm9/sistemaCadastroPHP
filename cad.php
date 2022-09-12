<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastros Feitos </title>
</head>
<style type="text/css">
	body{
		background-image: url(https://scproduction.s3.sa-east-1.amazonaws.com/wysiwyg_uploads/cms/images/2019/02/25/16/e9853e_5bbb453dba95488fbd0fd96dc833bc18_mv2-kzed5pum.jpg);
		background-size: 100% 9000%;
		background-repeat: no-repeat;
	}
</style>
<body>

</body>
</html>

<?php 

extract($_POST);
$arq = "$id.txt";
$refFile = fopen("Cadastro/$arq",'w+');

$dado = "ID: $id <br> Nome do Funcionário: $nome <br> Cargo: $cargo <br> Salário: $sala <br> Quantos Dependentes: $depe";


fwrite($refFile,$dado);
fclose($refFile);

$dir = scandir('Cadastro');


for ($i=0; $i < count($dir); $i++) { 
	if ($dir[$i] == "." || $dir[$i] == "..") {
		echo "";
	}else{
		$di = trim($dir[$i]);
	    echo "<li> <a href='readInfo.php?id=$di'> $dir[$i] </a> </li>";

	}
}
 ?>