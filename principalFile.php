<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastro </title>
</head>
<style type="text/css">
	body{
		background-image: url(https://scproduction.s3.sa-east-1.amazonaws.com/wysiwyg_uploads/cms/images/2019/02/25/16/e9853e_5bbb453dba95488fbd0fd96dc833bc18_mv2-kzed5pum.jpg);
		background-size: 100% 400%;
		background-repeat: no-repeat;
	}
</style>
<body>
<form method="post" action="cad.php">
	
	<p> Qual o seu ID? <input type="number" name="id"></p>
	<p> Qual o seu nome? <input type="text" name="nome"></p>
	<p> Qual o seu cargo? <input type="text" name="cargo"></p>
	<p> Qual o seu salário? <input type="number" name="sala"></p>
	<p> Quantos dependentes você tem? <input type="number" name="depe"></p>

	<p> <button type="submit"> 	Cadastrar </button></p>
</form>
</body>
</html>
<?php 
 ?>